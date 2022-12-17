<?php
	require_once 'models/db_config.php';
    
    $name="";
    $err_name="";
    $id ="";
    $err_id="";
	$err_db="";
	function getalldepartment(){
		$query = "select * from department";
		$rs = get($query);
		return $rs;
	}

	function getdepartment($id){
		$query = "select * from department where id=$id";
		$rs = get($query);
		return $rs[0];
	}


?>