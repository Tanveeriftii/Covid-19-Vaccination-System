<?php
  require_once 'controllers/createdoccontroller.php';
 $username = $_GET["username"];
 $user = checkUsername($username);
 if($user){
     echo "invalid";
 }
else echo "valid";
?>