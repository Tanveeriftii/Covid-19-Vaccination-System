<?php 

    require_once 'models/db_config.php';

 	$fname="";
 	$err_fname="";
	$lname="";
 	$err_lname="";
	$uname="";
 	$err_uname="";
	$email="";
	$err_email="";
 	$password="";
 	$err_password="";
    $conpassword="";
 	$err_conpassword="";
    $phonenumber="";
    $err_phonenumber="";
    $address="";
    $err_address="";
	$gender="";
	$err_gender="";
	$birthday="";
    $err_birthday="";
    $birthmonth="";
    $err_birthmonth="";
    $birthyear="";
    $err_birthyear="";
    
    $err_db="";


	$arrDay =array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
    $arrMonth=array("January","February","March","April","May","June","July","August","September","October","November","December");
	

 	$hasError =false;



	if(isset($_POST["submit"])){

		if(empty($_POST["fname"])){
			$hasError = true;
			$err_fname ="First Name Required";
		}
		else if(strlen($_POST["fname"]) <= 4){
			$hasError = true;
			$err_fname ="First Name must contain >4 characters";

		}
		else{
			$fname = htmlspecialchars($_POST["fname"]);
		}
		
		if(empty($_POST["lname"])){
			$hasError = true;
			$err_lname ="Last Name Required";
		}
		else{
			$lname = htmlspecialchars($_POST["lname"]);
		}

		if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname ="Username Required";
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}

        if(empty($_POST["password"])){
			$hasError = true;
			$err_password ="Password Required";
		
		} 
		

		/* else if(strlen($_POST["password"]) < 3){
			$hasError = true;
			$err_username ="Password must contain atleast 3 characters";
		}
		else if(!strpos($_POST["password"],"#") and !strpos($_POST["password"],"?") ){
			
			$hasError = true;
			$err_password ="password must have a # or ?";
		}
		else if(!strpos($_POST["password"],"0") and !strpos($_POST["password"],"1") and !strpos($_POST["password"],"2") and !strpos($_POST["password"],"3")
		and !strpos($_POST["password"],"4") and !strpos($_POST["password"],"5") and !strpos($_POST["password"],"6") and !strpos($_POST["password"],"7") 
		and !strpos($_POST["password"],"8") and !strpos($_POST["password"],"9"))
		{
			$hasError = true;
			$err_password ="Password must contain  atleast one numeric value. ";
		} */


        else{
			$password = htmlspecialchars($_POST["password"]);
		}

        if(empty($_POST["conpassword"])){
			$hasError = true;
			$err_conpassword ="Confirm password Required";
		} 
        else if($_POST["password"] != $_POST["conpassword"]){
            $hasError = true;
			$err_conpassword ="Incorrect password.";

        }
        else{
			$conpassword = htmlspecialchars($_POST["conpassword"]);
		}


        if(empty($_POST["email"])){
			$hasError = true;
			$err_email ="Email Required";
		}
        else if( strpos($_POST["email"],"@") ){

            if(strpos($_POST["email"],".")){
            $email = htmlspecialchars($_POST["email"]);
            }
            else{
                $hasError = true;
                $err_email ="Email should have at least one .(dot) after @";
            }
		}
        else{
			
            $hasError = true;
			$err_email ="Email should have @ and at least one .(dot) after @";
		}


        if(empty($_POST["phonenumber"])){
			$hasError = true;
			$err_phonenumber ="Phone Number Required";
		}
		else if(!is_numeric($_POST["phonenumber"])){
			$hasError = true;
			$err_phonenumber ="Number must be numeric characters ";

		}
		else{
			$phonenumber = htmlspecialchars($_POST["phonenumber"]);
		}
		

        if(empty($_POST["address"])){
			$hasError = true;
			$err_address ="Address Required";
		}

		else{
			$address = htmlspecialchars($_POST["address"]);
		}
		if (!isset($_POST["birthday"])){
			$hasError = true;
			$err_birthday="Birth Day Required!";
		}
		else{
			$birthday =htmlspecialchars($_POST["birthday"]);
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
			$err_gender= "Gender Required!";
		}else{
			$gender = htmlspecialchars($_POST["gender"]);
		}
		

		if(!$hasError){

            $rs = insertGovt($fname,$lname,$uname,$email,$password,$conpassword,$phonenumber,$birthday,$birthmonth,$birthyear,$gender,$address);
			if ($rs === true){
				header("Location: login.php");
			}
			$err_db = $rs;


		}


	}
	else if (isset($_POST["btn_login"])){
		if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname = "<p>Username Required</p>";
		}
		else{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password = "<p>Password Required</p>";
		}
		else{
			$password = $_POST["password"];
		}

		

		if(!$hasError){
			
			if(authenticateGovt($uname,$password)){

				

				$_SESSION["loggedGov"] = $uname;
				header("Location: govdetails.php");
			}
			$err_db = "Username or password is invalid.";
		
		
	}

	}
	elseif(isset($_POST["edit_govworinfo"])){ //editgovworinfo
		
		if(empty($_POST["fname"])){
			$hasError = true;
			$err_fname ="First Name  Required";
		}
		else{
			$fname = htmlspecialchars($_POST["fname"]);
		}
		if(empty($_POST["lname"])){
			$hasError = true;
			$err_lname ="Last Name  Required";
		}
		else{
			$lname = htmlspecialchars($_POST["lname"]);
		}
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email ="Email  Required";
		}
		else{
			$email = htmlspecialchars($_POST["email"]);
		}
		if(empty($_POST["phonenumber"])){
			$hasError = true;
			$err_phonenumber ="Phone Number  Required";
		}
		else{
			$phonenumber = htmlspecialchars($_POST["phonenumber"]);
		}
		if(empty($_POST["birthday"])){
			$hasError = true;
			$err_birthday ="Birthday  Required";
		}
		else{
			$birthday= htmlspecialchars($_POST["birthday"]);
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
		if(empty($_POST["address"])){
			$hasError = true;
			$err_address ="Address  Required";
		}
		else{
			$address = htmlspecialchars($_POST["address"]);
		}
		if(!$hasError){
			$rs= editGov($fname,$lname,$email,$phonenumber,$birthday,$birthmonth,$birthyear,$gender,$address, $_POST["id"]);
			if($rs === true){
		
				header("Location:govworkerinfo.php");
			}
			$err_db = $rs;
			}
		
		}
	
	
	
	
	
	

    function insertGovt($fname,$lname,$uname,$email,$password,$conpassword,$phonenumber,$birthday,$birthmonth,$birthyear,$gender,$address){

        $query = "insert into govreg values(NULL,'$fname','$lname','$uname','$email','$password','$conpassword','$phonenumber','$birthday','$birthmonth','$birthyear','$gender','$address')";
        return execute($query);
    
    }


    function getAllGovt(){

        $query = "select * from govreg";
        $rs = get($query);
        return $rs;
    
    }
    function authenticateGovt($uname,$password){
		$query = "select * from govreg where uname='$uname' and password='$password'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}
	function getGov($id){ //updateGovinfo
		$query = "select * from govreg where id= $id";
		$rs = get($query);
        return $rs[0];
	}

	function editGov($fname,$lname,$email,$phonenumber,$birthday,$birthmonth,$birthyear,$gender,$address,$id){ //updateGovinfo
		$query = "update govreg set fname='$fname',lname='$lname',email='$email',phonenumber='$phonenumber',birthday='$birthday',birthmonth='$birthmonth',birthyear='$birthyear',gender='$gender',address='$address' where id= $id";
		return execute ($query);
       
	}
	function checkUsername($uname){ //usernameunique
		$query = "select uname from govreg where uname='$uname'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}
	function searchgov($key){ //searchname
		$query = "select id, fname from govreg where fname like '%$key%'";
		$rs = get($query);
        return $rs;
	}
	
	
?>