<?php
  require_once 'controllers/vaccinecertificatecontroller.php';
 $c_id = $_GET["c_id"];
 $user = checkNID($c_id);
 if($user){
     echo "invalid";
 }
else echo "valid";
?>