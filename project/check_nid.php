<?php
	include 'controllers/publicController.php';
	$nid = $_GET["nid"];
	$user = checknid($nid);
	if($user){
		echo "invalid";
	}
	else echo "valid";

?>