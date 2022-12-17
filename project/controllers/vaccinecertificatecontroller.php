<?php 

    require_once 'models/db_config.php';

 	$c_id="";
 	$err_c_id="";
	$vaccineinfo="";
 	$err_vaccineinfo="";
	
    $err_db="";
	$arr1 =array("Vaccinated","Not Vaccinated");

 	$hasError =false;



	if(isset($_POST["submit"])){

		if(empty($_POST["c_id"])){
			$hasError = true;
			$err_c_id ="NID Required";
		}
		else if(!is_numeric($_POST["c_id"])){
			$hasError = true;
			$err_c_id ="NID Must be Numeric ";

		}
		
		else{
			$c_id = htmlspecialchars($_POST["c_id"]);
		}
		
		if(empty($_POST["vaccineinfo"])){
			$hasError = true;
			$err_vaccineinfo ="Vaccine Info Required";
		}
		else{
			$vaccineinfo = htmlspecialchars($_POST["vaccineinfo"]);
		}

		if(!$hasError){

            $rs = insertinfo($c_id,$vaccineinfo);
			if ($rs === true){
				header("Location: vaccinecertificateinfo.php");
			}
			$err_db = $rs;

		
		}
	
	}
    function insertinfo($c_id,$vaccineinfo){

        $query = "insert into vaccinationinfo  values(NULL,'$c_id','$vaccineinfo')";
        return execute($query);
    
    }
    function getAllinfo(){

        $query = "select * from vaccinationinfo";
        $rs = get($query);
        return $rs;
    
    }
	function checkNID($c_id){ //NIDunique
		$query = "select c_id from vaccinationinfo where c_id='$c_id'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}
?>