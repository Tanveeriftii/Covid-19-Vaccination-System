<?php 

    require_once 'models/db_config.php';

 	$name="";
 	$err_name="";
	$username="";
 	$err_username="";
	 $password="";
 	$err_password="";
	 $confirmpassword="";
 	$err_confirmpassword="";
	 $birthdate="";
    $err_birthdate="";
	$birthmonth="";
    $err_birthmonth="";
	$birthyear="";
    $err_birthyear="";
	$gender="";
	$err_gender="";
	$email="";
 	$err_email="";
	$phone="";
 	$err_phone="";
	 $address="";
    $err_address="";
	$degree="";
	$err_degree="";
 	
    
    $err_db="";

	
	$arrDate =array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
    $arrMonth=array("January","February","March","April","May","June","July","August","September","October","November","December");
	

 	$hasError =false;



	if(isset($_POST["submit"])){

		if(empty($_POST["name"])){
			$hasError = true;
			$err_name ="<p>Name Required</p>";
		}
		
		else{
			$name = htmlspecialchars($_POST["name"]);
		}

		if(empty($_POST["username"])){
			$hasError = true;
			$err_username ="<p>Username Required</p>";
		}
		else{
			$username = htmlspecialchars($_POST["username"]);
		}

		if(empty($_POST["password"])){
			$hasError = true;
			$err_password ="<p>Password Required</p>";
		
		} 
		

		/* else if(strlen($_POST["password"]) < 3){
			$hasError = true;
			$err_username ="<p>Password must contain atleast 3 characters</p>";
		}
		else if(!strpos($_POST["password"],"#") and !strpos($_POST["password"],"?") ){
			
			$hasError = true;
			$err_password ="<p>password must have a # or ?</p>";
		}
		else if(!strpos($_POST["password"],"0") and !strpos($_POST["password"],"1") and !strpos($_POST["password"],"2") and !strpos($_POST["password"],"3")
		and !strpos($_POST["password"],"4") and !strpos($_POST["password"],"5") and !strpos($_POST["password"],"6") and !strpos($_POST["password"],"7") 
		and !strpos($_POST["password"],"8") and !strpos($_POST["password"],"9"))
		{
			$hasError = true;
			$err_password =<p>"Password must contain  atleast one numeric value.</p> ";
		} */


        else{
			$password = htmlspecialchars($_POST["password"]);
		}

		if(empty($_POST["confirmpassword"])){
			$hasError = true;
			$err_confirmpassword ="<p>Confirm password Required</p>";
		} 
        else if($_POST["password"] != $_POST["confirmpassword"]){
            $hasError = true;
			$err_confirmpassword ="<p>incorrect password.</p>";

        }
        else{
			$confirmpassword = htmlspecialchars($_POST["confirmpassword"]);
		}

		if (!isset($_POST["birthdate"])){
			$hasError = true;
			$err_birthdate="Birth Date Required!";
		}
		else{
			$birthdate =htmlspecialchars($_POST["birthdate"]);
		}

		if (!isset($_POST["birthmonth"])){
			$hasError = true;
			$err_birthmonth="Birth Month Required!";
		}
		else{
			$birthmonth =htmlspecialchars($_POST["birthmonth"]);
		}

		if (!isset($_POST["birthyear"])){
			$hasError = true;
			$err_birthyear="Birth Year Required!";
		}
		else{
			$birthyear =htmlspecialchars($_POST["birthyear"]);
		}

		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender= "<p>Gender Required!</p>";
		}else{
			$gender = htmlspecialchars($_POST["gender"]);
		}
		
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email ="<p>Email Required</p>";
		}
		else{
			$email = htmlspecialchars($_POST["email"]);
		}

		if(empty($_POST["phone"])){
			$hasError = true;
			$err_phone ="<p>Phone Number Required</p>";
		}
		else{
			$phone = htmlspecialchars($_POST["phone"]);
		}

		if(empty($_POST["address"])){
			$hasError = true;
			$err_address ="<p>Address Required</p>";
		}

		else{
			$address = htmlspecialchars($_POST["address"]);
		}


        if(empty($_POST["degree"])){
			$hasError = true;
			$err_degree ="<p>This Feild is Empty</p>";
		
		} 

        else{
			$degree = htmlspecialchars($_POST["degree"]);
		}

		if(!$hasError){

            $rs = insertdoc($name,$username,$password,$confirmpassword,$birthdate,$birthmonth,$birthyear,$gender,$email,$phone,$address,$degree);
			if ($rs === true){
				header("Location: createdocinfo.php");
			}
			$err_db = $rs;

		
		}
	
	}
	
	elseif(isset($_POST["edit_createdocinfo"])){ //editdoc
		
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name ="Doctor's Name  Required";
		}
		else{
			$name = htmlspecialchars($_POST["name"]);
		}

		if(empty($_POST["birthdate"])){
			$hasError = true;
			$err_birthdate ="Birthdate  Required";
		}
		else{
			$birthdate= htmlspecialchars($_POST["birthdate"]);
		}
		if(empty($_POST["birthmonth"])){
			$hasError = true;
			$err_birthmonth ="Birthmonth  Required";
		}
		else{
			$birthmonth= htmlspecialchars($_POST["birthmonth"]);
		}
		if(empty($_POST["birthyear"])){
			$hasError = true;
			$err_birthyear="Birthyear  Required";
		}
		else{
			$birthyear = htmlspecialchars($_POST["birthyear"]);
		}
		if(empty($_POST["gender"])){
			$hasError = true;
			$err_gender ="Gender  Required";
		}
		else{
			$gender = htmlspecialchars($_POST["gender"]);
		}
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email ="Email  Required";
		}
	
		else{
			$email = htmlspecialchars($_POST["email"]);
		}
		if(empty($_POST["phone"])){
			$hasError = true;
			$err_phone ="Phone Number  Required";
		}
		else{
			$phone = htmlspecialchars($_POST["phone"]);
		}
		if(empty($_POST["address"])){
			$hasError = true;
			$err_address ="Address  Required";
		}
		else{
			$address = htmlspecialchars($_POST["address"]);
		}
		if(empty($_POST["degree"])){
			$hasError = true;
			$err_degree ="Degree  Required";
		}
		else{
			$degree = htmlspecialchars($_POST["degree"]);
		}
	
	
		if(!$hasError){
		$rs= editcreatedocinfo($name,$birthdate,$birthmonth,$birthyear,$gender,$email,$phone,$address,$degree,$_POST["id"]);
		if($rs === true){
	
			header("Location:createdocinfo.php");
		}
		$err_db = $rs;
		}
	
	
	
	}

	
	elseif(isset($_POST["delete_createdocinfo"])){ //deletedoc
		
		
	
	
		
		$rs= deletedoc($_POST["id"]);
		if($rs === true){
	
			header("Location:createdocinfo.php");
		}
		$err_db = $rs;

		
		}
	
	
	
	

	
		


    function insertdoc($name,$username,$password,$confirmpassword,$birthdate,$birthmonth,$birthyear,$gender,$email,$phone,$address,$degree){

        $query = "insert into createdoc values(NULL,'$name','$username','$password','$confirmpassword','$birthdate','$birthmonth','$birthyear','$gender','$email','$phone','$address','$degree')";
        return execute($query);
    
    }
    function getAllDoc(){

        $query = "select * from createdoc";
        $rs = get($query);
        return $rs;
    
    }


    function getDoc($id){ //editdoc

        $query = "select * from createdoc where id=$id";
        $rs = get($query);
        if(count($rs)>0){
			return $rs[0];
		}
		else{
			return false;
		}
    
    }
   
	function editcreatedocinfo($name,$birthdate,$birthmonth,$birthyear,$gender,$email,$phone,$address,$degree,$id){ //editdoc
		$query = "update createdoc set name='$name',birthdate='$birthdate',birthmonth='$birthmonth',birthyear='$birthyear',gender='$gender', email='$email' , phone='$phone' ,address='$address', degree='$degree' where id=$id  ";
		return execute($query);
	}
	function checkUsername($username){ //usernameunique
		$query = "select username from createdoc where username='$username'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}

function deletedoc($id){ 
	$query=("Delete from createdoc where id=$id");
	return execute($query);
}

function searchDoc($key){ //searchname
	$query = "select id, name from createdoc where name like '%$key%'";
	$rs = get($query);
	return $rs;
}
	
	
?>