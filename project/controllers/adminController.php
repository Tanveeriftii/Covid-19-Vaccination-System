<?php 

    require_once 'models/db_config.php';


 	$adminname="";
 	$err_adminname="";
 	$password="";
 	$err_password="";




    
    $err_db="";


 	$hasError =false;

 



 if (isset($_POST["btn_login"])){
		if(empty($_POST["adminname"])){
			$hasError = true;
			$err_adminname = "adminname Required";
		}
		else{
			$adminname = $_POST["adminname"];
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password = "Password Required";
		}
		else{
			$password = $_POST["password"];
		}

		

		if(!$hasError){

		
			if(authenticateAdmin($adminname,$password)){



				header("Location: adminDetails.php");
			}
			$err_db = "Adminuser or password is invalid.";
		}
		
	}
	


	function authenticateAdmin($adminname,$password){
		$query = "select * from adminlog where adminname='$adminname' and password='$password'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}



	function getnid($nid){
		$query = "select * from publicreg where nid=$nid";
		$rs = get($query);
		if(count($rs)>0){
		return $rs[0];
		}
		else{
			return false;
		}
	}

	function checknid($nid){
		$query = "select nid from publicreg where nid='$nid'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}


	function insertfeedback($feedback){

        $query = "insert into publicfeedback values(NULL,'$feedback')";
        return execute($query);
    
    }





	
    

	
	
?>