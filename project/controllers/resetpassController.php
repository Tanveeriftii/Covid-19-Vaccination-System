<?php


require_once 'models/db_config.php';



if (isset($_POST["btn_reset"])){
    if(empty($_POST["uname"])){
        $hasError = true;
        $err_uname = "Uname Required";
    }
    else{
        $uname = $_POST["uname"];
    }
    if(empty($_POST["email"])){
        $hasError = true;
        $err_email = "Email Required";
    }
    else{
        $email = $_POST["email"];
    }
    

    if(!$hasError){
        if(checkUnameMail($uname,$email)){



            
            $_SESSION["uname"] = $uname;


            header("Location: resetpass2.php");
        }
        $err_db = "Invalid User";
    }
    
}
else if (isset($_POST["btn_reset2"])){

    if(empty($_POST["uname"])){
        $hasError = true;
        $err_uname = "Uname Required";
    }
    else{
        $uname = $_POST["uname"];
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
	else if($_POST["password"] != $_POST["conpassword"]){
		$hasError = true;
		$err_conpassword ="Incorrect password.";

	}
    else{
        $conpassword = $_POST["conpassword"];
    }
    

    if(!$hasError){
        if(updatePass($uname,$password,$conpassword)){


            header("Location: login.php");
        }
        $err_db = "Invalid User";
    }
    
}







function checkUnameMail($uname,$email){
		$query = "select * from govreg where uname='$uname' and email='$email'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}

function updatePass($uname,$password,$conpassword){

    $query = "update govreg set password='$password',conpassword='$conpassword' where uname='$uname'";
    return execute($query);
    
    }


?>