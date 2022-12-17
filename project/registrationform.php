<?php
include 'mainheader.php';
if(isset($_POST['submit']))
{
  $font = realpath('arial.ttf');
  $image = imagecreatefromjpeg("registrationf.JPG");
  $color = imagecolorallocate($image,19,21,22);
  $name = $_POST['uname'];
  $date = date('d F,Y');
  imagettftext($image,10,0,600,600,$color,$font,$name);
  imagettftext($image,20,0,450,595,$color,$font,$date);
  imagejpeg($image,"registrationform/regform.jpg");
  imagedestroy($image);
  echo "Certificate created";
}
 ?>
 <p align="center">
   <form method="post">
      <input type="text" name="uname" value="" placeholder="Enter Your Name">
      <input type="submit" name="submit" value="Genarate">
    </form>
 </p>
  <?php include 'mainfooter.php'; ?>
