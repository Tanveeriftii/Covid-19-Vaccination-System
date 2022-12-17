<?php


require_once 'models/db_config.php';



if (isset($_POST["btn_resetp1"])){
    if(empty($_POST["nid"])){
        $hasError = true;
        $err_nid = "nid Required";
    }
    else{
        $nid = $_POST["nid"];
    }
    if(empty($_POST["email"])){
        $hasError = true;
        $err_email = "email Required";
    }
    else{
        $email = $_POST["email"];
    }
    

    if(!$hasError){
        if(checkIdMail($nid,$email)){



            
            $_SESSION["nid"] = $nid;


            header("Location: resetPublicpage2.php");
        }
        $err_db = "Nid or Email is invalid.";
    }
    
}
else if (isset($_POST["btn_resetp2"])){

    if(empty($_POST["nid"])){
        $hasError = true;
        $err_nid = "nid Required";
    }
    else{
        $nid = $_POST["nid"];
    }
    if(empty($_POST["password"])){
        $hasError = true;
        $err_password = "password Required";
    }
    else{
        $password = $_POST["password"];
    }
    if(empty($_POST["conpassword"])){
        $hasError = true;
        $err_conpassword = "conpassword Required";
    }
    else{
        $conpassword = $_POST["conpassword"];
    }
    

    if(!$hasError){
        if(updatePass($nid,$password,$conpassword)){


            header("Location: loginpublic.php");
        }
        $err_db = "Nid or password is invalid.";
    }
    
}







function checkIdMail($nid,$email){
		$query = "select * from publicreg where nid='$nid' and email='$email'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}

function updatePass($nid,$password,$conpassword){

    $query = "update publicreg set password='$password',conpassword='$conpassword' where nid='$nid'";
    return execute($query);
    
    }


?>