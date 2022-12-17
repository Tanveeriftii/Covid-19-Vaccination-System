<?php 

    require_once 'models/db_config.php';

	$nid="";
	$err_nid="";
 	$name="";
 	$err_name="";
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
	$occupation="";
    $err_occupation="";
	$center="";
    $err_center="";




    
    $err_db="";


	$arrDay =array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
    $arrMonth=array("January","February","March","April","May","June","July","August","September","October","November","December");
	$arrCenter= array("Dhaka Community Medical College and Hospital","Kurmitola Hopital","Mugda General Hospital","Al Helal Specialized Hospital Dhaka","Metropolitan Medical Centre Ltd");

 	$hasError =false;

 




	




	if(isset($_POST["submit"])){


		if(empty($_POST["nid"])){
			$hasError = true;
			$err_nid ="Nid  Required";
		}
		else if(!is_numeric($_POST["nid"])){
			$hasError = true;
			$err_nid ="Nid must contain  numeric value. ";

		}
		else if(strlen($_POST["nid"]) < 6){
			$hasError = true;
			$err_nid ="Nid must contain atleast 6 numeric value. ";

		}
		else{
			$nid = htmlspecialchars($_POST["nid"]);
		}


		if(empty($_POST["name"])){
			$hasError = true;
			$err_name ="Name Required";
		}
		else if(strlen($_POST["name"]) <= 4){
			$hasError = true;
			$err_name ="Name must contain >4 characters";

		}
		else{
			$name = htmlspecialchars($_POST["name"]);
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
			$err_conpassword ="incorrect password.";

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
		if(empty($_POST["occupation"])){
			$hasError = true;
			$err_occupation ="Occupation Required";
		}

		else{
			$occupation = htmlspecialchars($_POST["occupation"]);
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
		if(empty($_POST["center"])){
			$hasError = true;
			$err_center ="Fill the Center you want to give vaccine!";
		}

		else{
			$center= htmlspecialchars($_POST["center"]);
		}





		

		if(!$hasError){

            $rs = insertPublic($nid,$name,$email,$password,$conpassword,$phonenumber,$birthday,$birthmonth,$birthyear,$gender,$occupation,$address,$center);
			if ($rs === true){
				header("Location: loginpublic.php");
			}
			$err_db = $rs;


		}


	}
	else if (isset($_POST["btn_login"])){
		if(empty($_POST["nid"])){
			$hasError = true;
			$err_nid = "nid Required";
		}
		else{
			$nid = $_POST["nid"];
		}
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name = "name Required";
		}
		else{
			$name = $_POST["name"];
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password = "Password Required";
		}
		else{
			$password = $_POST["password"];
		}

		

		if(!$hasError){

			setcookie("nid",$nid,time()+3600);
			if(authenticateUser($nid,$name,$password)){



				$_SESSION["loggedpublic"] = $name;
				$_SESSION["nid"] = $nid;


				header("Location: publicDetails.php");
			}
			$err_db = "Nid or Name or password is invalid.";
		}
		
	}

	else if (isset($_POST["btn_about"])){

	
					$_SESSION["loggedpublic"] = $name;
					$_SESSION["nid"] = $nid;

	
					header("Location:registrationStatus.php");
	

		
	}

	else if (isset($_POST["btn_feedback"])){



		if(empty($_POST["feedback"])){
			$hasError = true;
			$err_feedback ="feedback Required";

		}

		else{
			$feedback = htmlspecialchars($_POST["feedback"]);
		}

		if(!$hasError){

				$_SESSION["loggedpublic"] = $name;
				

				$rs = insertfeedback($_POST["p_id"],$feedback);
				if ($rs === true){

					header("Location: feedbackConfirmed.php");
				}
				

			
		}

	}
	else if(isset($_POST["update"])){


		if(empty($_POST["nid"])){
			$hasError = true;
			$err_nid ="Nid  Required";
		}
		else{
			$nid = htmlspecialchars($_POST["nid"]);
		}


		if(empty($_POST["name"])){
			$hasError = true;
			$err_name ="Name Required";
		}
		else if(strlen($_POST["name"]) <= 4){
			$hasError = true;
			$err_name ="Name must contain >4 characters";

		}
		else{
			$name = htmlspecialchars($_POST["name"]);
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
			$err_conpassword ="incorrect password.";

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
		if(empty($_POST["occupation"])){
			$hasError = true;
			$err_occupation ="Occupation Required";
		}

		else{
			$occupation = htmlspecialchars($_POST["occupation"]);
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
		if(empty($_POST["center"])){
			$hasError = true;
			$err_center ="Fill the Center you want to give vaccine!";
		}

		else{
			$center= htmlspecialchars($_POST["center"]);
		}





		

		if(!$hasError){

            $rs = updatePublic($nid,$name,$email,$password,$conpassword,$phonenumber,$birthday,$birthmonth,$birthyear,$gender,$occupation,$address,$center);
			if ($rs === true){
				header("Location: loginpublic.php");
			}
			$err_db = $rs;


		}


	}



    function insertPublic($nid,$name,$email,$password,$conpassword,$phonenumber,$birthday,$birthmonth,$birthyear,$gender,$occupation,$address,$center){

        $query = "insert into publicreg values(NULL,'$nid','$name','$email','$password','$conpassword','$phonenumber','$birthday','$birthmonth','$birthyear','$gender','$occupation','$address','$center')";
        return execute($query);
    
    }


    function getAllPublic(){

        $query = "select * from publicreg";
        $rs = get($query);
        return $rs;
    
    }

	function authenticateUser($nid,$name,$password){
		$query = "select * from publicreg where nid='$nid' and name='$name' and password='$password'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}



	function getPublicnid($nid){
		$query ="select r.*,p.name as 'p_name',p.nid as 'p_nid',p.gender as 'p_gender',p.address as 'p_address',p.occupation as 'p_occupation',
		p.center as 'p_center' from reg_status r left join publicreg p on r.p_id = p.nid WHERE p_id =$nid";
		

		$rs = get($query);
		if(count($rs)>0){
		return $rs[0];
		}
		else{
			return false;
		}
		
	}



	function updatePublic($nid,$name,$email,$password,$conpassword,$phonenumber,$birthday,$birthmonth,$birthyear,$gender,$occupation,$address,$center){

        $query = "update publicreg set name='$name',email='$email',password='$password',conpassword='$conpassword',phonenumber='$phonenumber',birthday='$birthday',birthmonth='$birthmonth',birthyear='$birthyear',gender='$gender',occupation='$occupation',
		address='$address',center='$center' where nid='$nid'";
        return execute($query);
    
    }

	function getnid($nid){
		$query = "select * from publicreg where nid=$nid";
		$rs = get($query);
		if(count($rs)>0){
		return $rs[0];
		}
		else{
			return false;
		}
	}

	function checknid($nid){
		$query = "select nid from publicreg where nid='$nid'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}


	function insertfeedback($feedback){

        $query = "insert into publicfeedback values(NULL,'$feedback')";
        return execute($query);
    
    }





	
    

	
	
?>