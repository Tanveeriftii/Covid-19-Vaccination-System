<?php

    
    $db_server="localhost";
    $db_uname="root";
    $db_pass="";
    $db_name="webproject";



    function execute($query){ // for running insert, update and delete
        global $db_server,$db_uname,$db_pass,$db_name;
        $conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
        if($conn){
            if(mysqli_query($conn,$query)){
                return true;
            }
            else{
                return mysqli_error($conn);
            }
        }
    }


    function get($query) { // for running select queries
        global $db_server,$db_uname,$db_pass,$db_name;
        $conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
        $data = array();
        if($conn){
            $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
        }
        return $data;

    }


?>