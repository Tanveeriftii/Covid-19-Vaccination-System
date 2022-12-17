<?php
session_start();
if(!isset($_SESSION["loggedGov"])){
	header("Location: login.php");
}
require_once 'controllers/Govcontroller.php';
require_once 'controllers/vaccineGovcontroller.php';

?>

<html>
    <head>
    <link rel="stylesheet" href="style/vacavail.css">
    </head>
    <tr>
        <td><a href="govdetails.php">Back to Home</a></td>

    </tr>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <body>
        
   
    
<form  method='post'>


<h2>Click Here to See Vaccine is Availble or Not: <input type="submit" id='sp1' name="check" class=" btn-success"  value="Click"></h2><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<p><a href="logout.php" class="btn-link1">Logout</a></p>


</form>

    




    </body>
</html>