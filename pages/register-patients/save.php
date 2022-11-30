<?php 
require('../../classes/DB.php');
if($_POST['type']=='register'){
   
    $data = $_POST['data'];
    $response = [];
    //$user_info = DB::query('SELECT * FROM tbl_users WHERE user_email=:user_email', array(':user_email'=>$data[4])); 

    try{
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
    
        for ($i = 0; $i < 6; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        DB::query("INSERT INTO user
        VALUES('/',:uFirstName,:uMname,:uLstName,:uDOB,
                :uAge,:uFSN,:uHusband,:uContact,
                :uPassword,:uArea,:uRole,:uStatus,:uAdded)", 
       array(
           ':uFirstName'=>$data[0],':uMname'=>$data[1],':uLstName'=>$data[2],':uDOB'=>$data[3],
           ':uAge'=>$data[4],':uFSN'=>$data[5],':uHusband'=>$data[6],':uContact'=>$data[7],
           ':uPassword'=>$randomString,':uArea'=>$data[8],':uRole'=>'User',
           ':uStatus'=>'active',':uAdded'=>date('Y-m-d')
           ));
        $response['success'] = 'User '.$data[0].' '.$data[2].' has been added.';
    }catch (Exception $e){
        $response['error'] = 'Execution fail due to: '.$e;
    }
       
    //    DB::query('INSERT INTO tbl_logs VALUES(\'\',:log_action,:log_user,:log_date)',
    //    array(':log_action'=>'A new user <strong>'.$data[0].'</strong> registered.',':log_user'=>'User',':log_date'=>date("F j, Y, g:i a")));
       
   //password_hash($data[5], PASSWORD_BCRYPT)
   echo json_encode($response);
   die();
}