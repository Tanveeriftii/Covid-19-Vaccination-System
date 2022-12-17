<?php
session_start();
require_once 'controllers/downloadController.php';

if(!isset($_SESSION["loggedpublic"])){
  header("Location: loginpublic.php");
}

if(isset($_SESSION["nid"])){
$p=getPublicCertificate($_SESSION["nid"]);

}





?>

<html>
  <head><link rel="stylesheet" href="CSS/download.css"></head>
  <body>


       <?php
       if($p) {
        echo  "<p>NID:" .$p['c_id']. "</p><br>";
        echo "<p>Name:" .$p['p_name']. "</p><br>";
        echo "<p>Vaccination Information:" .$p['vaccineInfo']. "</p><br>";
        echo "<p>Gender:" .$p['p_gender']. "</p> <br>";
        echo "<p>Occupation:" .$p['p_occupation']. "</p><br>";
        echo "<p>address:" .$p['p_address']. "</p><br>";
        echo "<p>Center:" .$p['p_center']. "</p><br>";



        echo"<p> <br> Verified </p>";
       }
       else{
        
        echo "<p>We can't varify your account. </p> <br>";
        echo"<p>". $_SESSION["nid"]. " Nid is not verified yet.</p>";
       
       }
      ?>   
