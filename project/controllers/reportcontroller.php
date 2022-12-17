<?php 

    require_once 'models/db_config.php';

 	$date="";
 	$err_date="";
	$totdoc="";
 	$err_totdoc="";
	$totnur="";
 	$err_totnur="";
	$totvac="";
	$err_totvac="";
 	
    
    $err_db="";


 	$hasError =false;


	 $cookie_name = "genereport";
	 $cookie_value = "GOVT";
	 
	 setcookie($cookie_name,$cookie_value,time()+600);

	if(isset($_POST["submit"])){

		if(empty($_POST["date"])){
			$hasError = true;
			$err_date ="Date Required";
		}
		
		else{
			$date = htmlspecialchars($_POST["date"]);
		}
		
		if(empty($_POST["totdoc"])){
			$hasError = true;
			$err_totdoc ="This Feild is Required";
		}
		else if(!is_numeric($_POST["totdoc"])){
			$hasError = true;
			$err_totdoc ="This Feild Must be Numeric ";

		}
		else{
			$totdoc = htmlspecialchars($_POST["totdoc"]);
		}

		if(empty($_POST["totnur"])){
			$hasError = true;
			$err_totnur ="This Feild is Required";
		}
		else if(!is_numeric($_POST["totnur"])){
			$hasError = true;
			$err_totnur ="This Feild Must be Numeric ";

		}
		else{
			$totnur = htmlspecialchars($_POST["totnur"]);
		}

        if(empty($_POST["totvac"])){
			$hasError = true;
			$err_totvac ="This Feild is  Required";
		
		} 
		else if(!is_numeric($_POST["totvac"])){
			$hasError = true;
			$err_totvac ="This Feild Must be Numeric ";

		}

        else{
			$totvac = htmlspecialchars($_POST["totvac"]);
		}

       

        if(!$hasError){

            $rs = insertrepo($date,$totdoc,$totnur, $totvac);
			if ($rs === true){
				header("Location: repoinfo.php");
			}
			$err_db = $rs;


		}


	}
	
	

    function insertrepo($date,$totdoc,$totnur, $totvac){

        $query = "insert into generepo values(NULL,'$date','$totdoc','$totnur', '$totvac')";
        return execute($query);
    
    }


    function getAllRepo(){

        $query = "select * from generepo";
        $rs = get($query);
        return $rs;
    
    }

	
	
?>