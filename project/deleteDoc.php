<?php 
session_start();
if(!isset($_SESSION["loggedGov"])){
	header("Location: login.php");
}
	include 'controllers/createdoccontroller.php';
	$id = $_GET["id"];
	$I = getDoc($id);
    $I["id"]=deletedoc($id);
	header("Location: createdocinfo.php");
?>