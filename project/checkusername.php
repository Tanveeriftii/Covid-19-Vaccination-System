<?php
   include 'controllers/doctorController.php';
   $username = $_GET["username"];
   $doctor = checkUsername($username);
   if($doctor)
   {
     echo "invalid";
   }
   else {
     echo "valid";
   }
 ?>
