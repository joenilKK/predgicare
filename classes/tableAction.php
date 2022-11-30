<?php
function DataTableAction(){
    $connect = new PDO('mysql:host=127.0.0.1;dbname=db_predgicare;charset=utf8', 'root', '');
    if($_POST['action'] == 'edit'){
        $data = array(
            ':uFirstName'  => $_POST['uFirstName'],
            ':uContact'  => $_POST['uContact'],
            ':uStatus'   => $_POST['uStatus'],
            ':uid'    => $_POST['uid']
        );

        $query = "
            UPDATE user 
            SET uFirstName = :uFirstName, 
            uContact = :uContact, 
            uStatus = :uStatus 
            WHERE uid = :uid
        ";
        $statement = $connect->prepare($query);
        $statement->execute($data);

        echo json_encode($_POST);
    }

    if($_POST['action'] == 'delete'){
        $query = "
            DELETE FROM tbl_sample 
            WHERE id = '".$_POST["id"]."'
        ";
        $statement = $connect->prepare($query);
        $statement->execute();

        echo json_encode($_POST);
    }
}