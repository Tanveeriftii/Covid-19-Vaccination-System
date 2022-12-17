<?php
	require_once 'controllers/createdoccontroller.php';
	$key = $_GET["key"];
	$Information = searchDoc($key);
	
	if(count($Information)> 0){
		foreach($Information as $I){
			echo "<a href='editcreatedocinfo.php?id=".$I["id"]."'>".$I["name"]."</a><br>";
		}
	}
?>