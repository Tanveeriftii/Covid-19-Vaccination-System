<?php 

    require_once 'models/db_config.php';

 	 $feedback="";
     $err_feedback="";
     $err_db="";
     $hasError =false;

     if(isset($_POST["btn_feedback"])){

        if(empty($_POST["feedback"])){
			$hasError = true;
			$err_feedback ="Feedback Required";
		}
		else{
			$feedback = htmlspecialchars($_POST["feedback"]);
		}
        
        if(!$hasError){

            $rs = insertfeedback($feedback);
			if ($rs === true){
				header("Location: feedbackConfirmed.php");
			}
			$err_db = $rs;


		}
      
	}
	
    function insertfeedback($feedback){

        $query = "insert into publicfeedback values(NULL,'$feedback')";
        return execute($query);
    
    }