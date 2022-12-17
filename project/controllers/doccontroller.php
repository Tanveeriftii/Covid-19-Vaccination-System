<?php 

    require_once 'models/db_config.php';

 	$docname="";
 	$err_docname="";
    $dutyday="";
	$err_dutyday="";
    $dutydate="";
	$err_dutydate="";
    $dutymonth="";
	$err_dutymonth="";
    $dutytime="";
	$err_dutytime="";
    $dutycentre="";
    $err_dutycentre="";
	$img="";
	$err_img="";
	
    
    $err_db="";


 	$hasError =false;
     $array= array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
     $array2= array("January","February","March","April","May","June","July","August","September","October","November","December");
     $array3= array("10:00am-12:00pm","12:00pm-2:00pm","2:00pm-4:00pm","4:00pm-6:00pm");
     $array4= array("Dhaka Medical College Hospital","Kurmitola General Hospital","Mugda General Hospital","Shahid Suhrawardy Medical College","Salimullah Medical College Hospital");


	if(isset($_POST["submit"])){

		
		
		if(empty($_POST["docname"])){
			$hasError = true;
			$err_docname ="Doctor's Name Required";
		}
		else{
			$docname = htmlspecialchars($_POST["docname"]);
		}
        if (!isset($_POST["dutyday"])){   //duty day
			$hasError = true;
			$err_dutyday="Please Select One!";
		}
		else{
			$dutyday =htmlspecialchars($_POST["dutyday"]);
		}
        if (!isset($_POST["dutydate"])){   //duty date
			$hasError = true;
			$err_dutydate="Please Select One!";
		}
		else{
			$dutydate =htmlspecialchars($_POST["dutydate"]);
		}
        if (!isset($_POST["dutymonth"])){   //duty month
			$hasError = true;
			$err_dutymonth="Please Select One!";
		}
		else{
			$dutymonth =htmlspecialchars($_POST["dutymonth"]);
		}
        if (!isset($_POST["dutytime"])){   //dutytime
			$hasError = true;
			$err_dutytime="Please Select One!";
		}
		else{
			$dutytime =htmlspecialchars($_POST["dutytime"]);
		}
        
    
    if (!isset($_POST["dutycentre"])){   //dutycentre
        $hasError = true;
        $err_dutycentre="Please Select One!";
    }
    else{
        $dutycentre =htmlspecialchars($_POST["dutycentre"]);
    }

	
	
	

		if(!$hasError){

			$fileType = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
		$target = "storage/doc_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);
			
            $rs = insertdoc($docname,$dutyday,$dutydate, $dutymonth, $dutytime,$dutycentre,$target);
			if ($rs === true){
				header("Location: allinformation.php");
			}
			$err_db = $rs;


		}
		
	}

	
	
	

    function insertdoc($docname,$dutyday,$dutydate, $dutymonth, $dutytime,$dutycentre,$img){

        $query = "insert into assigndoc values(NULL,'$docname','$dutyday','$dutydate', '$dutymonth', '$dutytime','$dutycentre','$img')";
        return execute($query);
    
    }

	function getAllDoc(){ 

        $query = "select * from assigndoc";
        $rs = get($query);
        return $rs;
    
    }


	
?>