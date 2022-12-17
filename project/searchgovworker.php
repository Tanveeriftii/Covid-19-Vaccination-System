<?php
	require_once 'controllers/Govcontroller.php';
	$key = $_GET["key"];
	$Information = searchGov($key);
	
	if(count($Information)> 0){
		foreach($Information as $I){
			echo "<a href='govworkerinfo.php?id=".$I["id"]."'>".$I["fname"]."</a><br>";
		}
	}
?>