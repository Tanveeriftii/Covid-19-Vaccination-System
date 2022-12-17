<?php
	require_once 'models/db_config.php';
	$uname="";
	$err_uname="";
	$err_db="";
	$password="";
	$err_password="";
	$hasError=false;
	
	
	 if (isset($_POST["btn_login"])){
		if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname = "Username Required";
		}
		else{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_pass = "Password Required";
		}
		else{
			$pass = $_POST["password"];
		}

		if(!$hasError){
			if(authenticateUser($uname,$password)){
				header("Location: dashboard.php");
			}
			$err_db = "Username password invalid";
		}
		
	}
	
	
	function authenticateUser($uname,$password){
		$query = "select * from admin where name= username='$uname' and password='$password'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}
	
	
	
?>