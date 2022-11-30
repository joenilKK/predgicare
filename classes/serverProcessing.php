<?php
    function DataTableSSR($args,$key,$tb,$combined){
        $connect = new PDO('mysql:host=127.0.0.1;dbname=db_predgicare;charset=utf8', 'root', '');
        $column = $args;
        $query = "SELECT * FROM $tb ";
        if(isset($_POST["search"]["value"])){
            $q = '';
            for($i = 1;$i< count($args); $i++){
                $q .= 'OR '.$args[$i].' LIKE "%'.$_POST["search"]["value"].'%"';
            }
            $query .= '
                WHERE '.$args[1].' LIKE "%'.$_POST["search"]["value"].'%" 
                '.$q.'
            ';
        }
    
        if(isset($_POST["order"])){
            $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
        }else{
            $query .= 'ORDER BY '.$key.' DESC ';
        }
        $query1 = '';
    
        if($_POST["length"] != -1){
            $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
        }
    
        $statement = $connect->prepare($query);
    
        $statement->execute();
    
        $number_filter_row = $statement->rowCount();
    
        $statement = $connect->prepare($query . $query1);
    
        $statement->execute();
    
        $result = $statement->fetchAll();
    
        $data = array();
    
        foreach($result as $row){
            $sub_array = array();
            for($i=0;$i < count($args);$i++){
                if($combined[0] == $args[$i]){
                    $row_name = $args[$i];
                    $sub_array[] = ucwords($row[$row_name].' '.$row[$combined[1]]);
                }else{
                    $row_name = $args[$i];
                    $sub_array[] = ucwords($row[$row_name]);
                }
            }
            $data[] = $sub_array;
        }
    
        function count_all_data($connect){
            $query = "SELECT * FROM tb";
            $statement = $connect->prepare($query);
            $statement->execute();
            return $statement->rowCount();
        }
    
        $output = array(
            'draw'   => intval($_POST['draw']),
            'recordsTotal' => count_all_data($connect),
            'recordsFiltered' => $number_filter_row,
            'data'   => $data
        );
    
        echo json_encode($output);
    }


    //DataTableSSR();