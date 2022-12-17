<?php

require_once 'publicController.php';

require_once 'models/db_config.php';
$vaccinenum=50;


$err_db="";

$hasError = false;


if(isset($_POST["check"])){

    
    verifyAvailability();
    

}else if(isset($_POST["status"])){


    if(!$hasError){

            header("Location: Showstatus.php");

    }






}



function verifyAvailability(){
	
    global $vaccinenum;

    if($vaccinenum > 0 ){

        
        echo"<p id='sp2' class='w3-display-middle ' align=center> Vaccine is available </p>";
        
    }
    else{

        
        echo"<p id='sp2' class='w3-display-middle ' align=center> Vaccine is not avaiable </p>";
        
       
    }
    
}


function VaccineDate($id){
    $query = "select * from reg_status where id='$id'";
    $rs = get($query);
    if(count($rs) > 0){
        return true;
    }
    return false;



}





?>