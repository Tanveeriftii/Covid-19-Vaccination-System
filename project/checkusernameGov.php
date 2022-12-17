<?php
  require_once 'controllers/Govcontroller.php';
 $uname = $_GET["uname"];
 $user = checkUsername($uname);
 if($user){
     echo "invalid";
 }
else echo "valid";
?>