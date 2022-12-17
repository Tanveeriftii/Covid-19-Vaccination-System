<?php

	session_start();
	if(!isset($_SESSION["loggedpublic"])){
		header("Location: loginpublic.php");
	}

require_once 'controllers/publicController.php';
require_once 'controllers/vaccineController.php';
include 'publicheader.php';



?>

<html>
    <head></head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <body>
    
    <a href="publicDetails.php"> Public Dashboard</a>
    <a class="main-btn" href="logoutpublic.php">Logout</a></h3>
    <h1 align="center">Welcome <?php echo $_SESSION["loggedpublic"];?></h1>
    
<form  method='post'>


<h2>Check Vaccine is availble or not: <input type="submit" id='sp1' name="check" value="Check"></h2>


</form>

    




    </body>
</html>