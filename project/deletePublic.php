<?php 

require_once 'controllers/crudPubController.php';
	$id = $_GET["id"];
	$P = getpublicid($id);
    $P ["id"]=deletePublic($id);
	header("Location: AllPublicDetails.php");
?>