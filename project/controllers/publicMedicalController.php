<?php 

require_once 'models/db_config.php';
	

 	$symptoms="";
 	$err_symptoms="";
	$effected="";
	$err_effected="";
	$bloodpressure="";
	$err_bloodpressure="";
	$cancer="";
	$err_cancer="";
	$stroke="";
	$err_stroke="";
	$problem="";
	$err_problem="";
	$medicines="";
	$err_medicines="";
    $medinfo="";
	$err_medinfo="";
    $m_id="";
    $err_m_id="";


	$err_db="";
 


 	$hasError =false;







	if(isset($_POST["medicalinfo"])){


		if(empty($_POST["symptoms"])){
			$hasError = true;
			$err_symptoms ="Please fill the Symptoms  Field";
		}

		else{
			$symptoms = htmlspecialchars($_POST["symptoms"]);
		}



		if(empty($_POST["effected"])){
			$hasError = true;
			$err_effected ="Effected or not Required";
		}

		else{
			$effected = htmlspecialchars($_POST["effected"]);
		}



		if(empty($_POST["bloodpressure"])){

			$hasError = true;
			$err_bloodpressure ="bloodpressure Required";
			
		}

		else{
			$bloodpressure = htmlspecialchars($_POST["bloodpressure"]);
		}

		
		if(empty($_POST["cancer"])){
			$hasError = true;
			$err_cancer ="cancer Required";
		}

		else{
			$cancer = htmlspecialchars($_POST["cancer"]);
		}


		if(empty($_POST["stroke"])){
			$hasError = true;
			$err_stroke ="stroke Required";
		}

		else{
			$stroke= htmlspecialchars($_POST["stroke"]);
		}




		if(empty($_POST["problem"])){
			$hasError = true;
			$err_problem ="problem Required";
		}

		else{
			$problem = htmlspecialchars($_POST["problem"]);
		}


		if(empty($_POST["medicines"])){
			$hasError = true;
			$err_medicines ="medicines Required";
		}

		else{
			$medicines = htmlspecialchars($_POST["medicines"]);
		}

		if(empty($_POST["medinfo"])){
			
			$hasError = true;
			$err_medinfo ="Please describe the medicines you clicked Yes";
			
		}

		else{
			$medinfo = htmlspecialchars($_POST["medinfo"]);
		}
		if(empty($_POST["m_id"])){
			
			$hasError = true;
			$err_m_id ="m_id you clicked Yes";
			
		}

		else{
			$m_id = htmlspecialchars($_POST["m_id"]);
		}











		

		if(!$hasError){
            


            $rs = insertMedinfo($m_id,$symptoms,$effected,$bloodpressure,$cancer,$stroke,$problem,$medicines,$medinfo);
			if ($rs === true){
				header("Location: publicDetails.php");
			}
			else{
				header("Location: updatepublicMedical.php");
			}
			
			$err_db = $rs;
			
			

		}


	}




    function insertMedinfo($m_id,$symptoms,$effected,$bloodpressure,$cancer,$stroke,$problem,$medicines,$medinfo){

        $query = "insert into publicmedical values(NULL,'$m_id','$symptoms','$effected','$bloodpressure','$cancer','$stroke','$problem','$medicines','$medinfo')";
        return execute($query);
    
    }


	?>















