<?php
require_once 'models/db_config.php';
$docname="";
$err_docname="";
$docuname="";
$err_docuname="";
$age="";
$err_age="";
$gender="";
$err_gender="";
$vaccinedose="";
$err_vaccinedose="";
$vaccinedate="";
$err_vaccinedate="";
$vaccinemonth="";
$err_vaccinemonth="";
$vaccineyear="";
$err_vaccineyear="";
$vaccinehour="";
$err_vaccinehour="";
$vaccinemin="";
$err_vaccinemin="";
$ampm="";
$err_ampm="";
$err_db = "";
$hasError = false;
$cookie_name ="vacrepo";
$cookie_value = "Doctor";

setcookie($cookie_name,$cookie_value,time()+300);
if(isset($_POST["submit"]))
{
  if(empty($_POST["docname"])){
    $hasError = true;
    $err_docname="Doctor Name Required";
  }
  else if(strlen($_POST["docname"])<= 4)
{
  $hasError = true;
  $err_docname = "Name must be greater than 4 characters";
}
  else{
    $docname = $_POST["docname"];
  }
  if(empty($_POST["docuname"])){
    $hasError = true;
    $err_docuname="Doctor Username Required";
  }

  else{
    $docuname = $_POST["docuname"];
  }
  if(empty($_POST["age"])){
    $hasError = true;
    $err_age="Age Required";
  }

  else{
    $age = $_POST["age"];
  }
  if(!isset($_POST["gender"])){
    $hasError = true;
    $err_gender="Gender Required";
  }
  else{
    $gender = $_POST["gender"];
  }
  if(empty($_POST["vaccinedose"])){
    $hasError = true;
    $err_vaccinedose="Vaccine Dose Number Required";
  }
  else if($_POST["vaccinedose"]>= 2)
    {
      $hasError = true;
      $err_vaccinedose = "Vaccine dose must be 2 or 1";
    }
  else{
    $vaccinedose = $_POST["vaccinedose"];
  }
  if (!isset($_POST["vaccinedate"])){
    $hasError = true;
    $err_vaccinedate="Date Required";
  }
  else{
    $vaccinedate = $_POST["vaccinedate"];
  }
  if (!isset($_POST["vaccinemonth"])){
    $hasError = true;
    $err_vaccinemonth="Month Required";
  }
  else{
    $vaccinemonth = $_POST["vaccinemonth"];
  }
  if (!isset($_POST["vaccineyear"])){
    $hasError = true;
    $err_vaccineyear="Year Required";
  }
  else{
    $vaccineyear = $_POST["vaccineyear"];
  }
  if (!isset($_POST["vaccinehour"])){
    $hasError = true;
    $err_vaccinehour="Hours Required";
  }
  else{
    $vaccinehour = $_POST["vaccinehour"];
  }
  if (!isset($_POST["vaccinemin"])){
    $hasError = true;
    $err_vaccinemin="Minute Required";
  }
  else{
    $vaccinemin = $_POST["vaccinemin"];
  }
  if (!isset($_POST["ampm"])){
    $hasError = true;
    $err_ampm="AM/PM Required";
  }
  else{
    $ampm = $_POST["ampm"];
  }
  if(!$hasError)
  {
    $vs = insertVacreport($docname,$docuname,$age,$gender,$vaccinedose,$vaccinedate,$vaccinemonth,$vaccineyear,$vaccinehour,$vaccinemin,$ampm);
    if($vs === true)
    {
      header("Location: Finalvacreport.php ");
    }
    $err_db = $vs;
  }
}
elseif (isset($_POST["claim"])) {
  if(empty($_POST["docuname"])){
    $hasError = true;
    $err_docuname="Username Required";
  }
  else if(strlen($_POST["docuname"])<= 4)
{
  $hasError = true;
  $err_docuname = "User Name must be greater than 4 characters";
}
  else{
    $docuname = $_POST["docuname"];
  }
  if(empty($_POST["vaccinedose"])){
    $hasError = true;
    $err_vaccinedose="Vaccine Dose Number Required";
  }else if($_POST["vaccinedose"]=== 2)
    {
      $hasError = true;
      $err_vaccinedose = "Vaccine dose must be 2";
    }
  else{
    $vaccinedose = $_POST["vaccinedose"];
  }
  if(!$hasError){
    if(authenticateVacDose($docuname,$vaccinedose)){
      header("Location: vaccinecertificate.php");
    }
    $err_db = "Wrong username or vaccine dose";
  }

}
elseif (isset($_POST["update"])) {
  $rs = updatevacD($_POST["vaccinedose"], $_POST["docuname"]);
  if($rs === true){
    header("Location: vacreportDetails.php");
  }
  $err_db = $rs;

}


function insertVacreport($docname,$docuname,$age,$gender,$vaccinedose,$vaccinedate,$vaccinemonth,$vaccineyear,$vaccinehour,$vaccinemin,$ampm){
  $query = "insert into dvacreport values (NULL,'$docname','$docuname','$age','$gender','$vaccinedose','$vaccinedate','$vaccinemonth','$vaccineyear','$vaccinehour','$vaccinemin','$ampm')";
  return execute($query);

}
function getAllvacReport(){
$query = "select * from dvacreport";
$rs = get($query);
return $rs;
}
function authenticateVacDose($docuname,$vaccinedose){
  $query = "select * from dvacreport where docuname='$docuname' and vaccinedose='$vaccinedose'";
  $rs = get($query);
  if(count($rs)>0){
    return true;
  }
  return false;

}
function updatevacD($vaccinedose, $docuname)
{
  $query="update dvacreport set vaccinedose='$vaccinedose' where docuname='$docuname'";
  return execute($query);
}

 ?>
