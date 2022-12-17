<?php

require_once 'models/db_config.php';

$p_id="";
$err_p_id="";
$vaccine_date="";
$err_vaccine_date="";
$Dose_number="";
$err_Dose_number="";

$err_db="";


if(isset($_POST["add_regpublic"])){

    if(empty($_POST["p_id"])){
        $hasError = true;
        $err_p_id ="p_id  Required";
    }
    else{
        $p_id = htmlspecialchars($_POST["p_id"]);
    }

    if(empty($_POST["vaccine_date"])){
        $hasError = true;
        $err_vaccine_date ="vaccine_date  Required";
    }
    else{
        $vaccine_date = htmlspecialchars($_POST["vaccine_date"]);
    }
    if(empty($_POST["Dose_number"])){
        $hasError = true;
        $err_Dose_number ="Dose_number  Required";
    }
    else{
        $Dose_number = htmlspecialchars($_POST["Dose_number"]);
    }


    if(!$hasError){
		$rs = insertRegPublic($p_id,$vaccine_date,$Dose_number);
		if ($rs === true){
			header("Location: allregPublic.php");
		}
		$err_db = $rs;

        }






}



function insertRegPublic($p_id,$vaccine_date,$Dose_number){

    $query = "insert into reg_status values (NULL,'$p_id','$vaccine_date','$Dose_number')";
    return execute($query);
}




function getRegs(){
    $query ="select r.*,p.name as 'p_name',p.nid as 'p_nid' from reg_status r left join publicreg p on r.p_id = p.nid";
    $rs = get($query);
    return $rs;
}


function getReg($id){
    $query = "select * from reg_status  where id = '$id' ";
    $rs = get($query);
    return $rs[0];
    
}


function editProduct($p_id,$vaccine_date,$Dose_number){
    $query ="update reg_status set p_id='$p_id',vaccine_date='$vaccine_date',Dose_number = '$Dose_number' where id = $id";
    return execute($query);
}




?>