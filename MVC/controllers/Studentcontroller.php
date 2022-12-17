<?php
    require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$id="";
    $err_id="";
	$dob="";
	$err_dob="";
	$credit="";
	$err_credit="";
	$cgpa="";
	$err_cgpa="";
	$dept_id="";
	$err_dptid="";
	
	$hasError=false;
	$err_db="";
	if(isset($_POST["add_student"])){
	
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		
		else{
			$name =$_POST["name"];
	
		}
		if(empty($_POST["id"])){
			$hasError = true;
			$err_id="ID Required";
		}
		
		else{
			$id =$_POST["id"];
	
		}
		if(empty($_POST["dob"])){
			$hasError = true;
			$err_dob="Date of birth Required";
		}
		
		else{
			$dob =$_POST["dob"];
	
		}
		if(empty($_POST["credit"])){
			$hasError = true;
			$err_credit="Credit Required";
		}
		
		else{
			$credit =$_POST["credit"];
	
		}
		if(empty($_POST["cgpa"])){
			$hasError = true;
			$err_cgpa="CGPA Required";
		}
		
		else{
			$cgpa =$_POST["cgpa"];
	
		}
		if(empty($_POST["dptid"])){
			$hasError = true;
			$err_dptid="Department Required";
		}
		
		else{
			$dept_id =$_POST["dptid"];
	
		}
		
	
		if(!$hasError){
		
		$rs = insertStudent($name,$dob,$credit,$cgpa,$dept_id);
		if ($rs === true){
			header("Location: allstudents.php");
		}
		$err_db = $rs;
	}
		}
		elseif(isset($_POST["edit_student"])){
	    
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		
		else{
			$name =$_POST["name"];
	
		}
		if(empty($_POST["id"])){
			$hasError = true;
			$err_id="ID Required";
		}
		
		else{
			$id =$_POST["id"];
	
		}
		if(empty($_POST["dob"])){
			$hasError = true;
			$err_dob="Date of birth Required";
		}
		
		else{
			$dob =$_POST["dob"];
	
		}
		if(empty($_POST["credit"])){
			$hasError = true;
			$err_credit="Credit Required";
		}
		
		else{
			$credit =$_POST["credit"];
	
		}
		if(empty($_POST["cgpa"])){
			$hasError = true;
			$err_cgpa="CGPA Required";
		}
		
		else{
			$cgpa =$_POST["cgpa"];
	
		}
		if(empty($_POST["dptid"])){
			$hasError = true;
			$err_dptid="Department Required";
		}
		
		else{
			$dptid =$_POST["dptid"];
	
		}
		if(!$hasError){
			
		$rs = editStudent($name,$id,$dob,$credit,$cgpa,$dptid,$_POST["id"]);
		if($rs === true){
			header("Location: allstudent.php");
		}
		$err_db = $rs;
		}
		
	}
	
	function insertStudent($name,$id,$dob,$credit,$cgpa,$dptid){
		$query = "insert into students values (NULL,'$name','$id','$dob',$credit,'$cgpa',$dptid)";
		return execute($query);
	}
	function getStudent(){
		$query ="select s.*,d.name as 'd_name' from students s left join departments d on s.dept_id = d.id";
		$rs = get($query);
		return $rs;
	}
	function getStudent($id){
		$query = "select * from students where id = $id";
		$rs = get($query);
		return $rs[0];
		
	}
	function editStudent($name,$id,$dob,$credit,$cgpa,$dptid,$id){
		$query ="update students set name='$name',id='$id',dob='$dob',credit=$credit,cgpa=$cgpa,dept_id=$dptid where id = $id";
		return execute($query);
	}
		
	
?>