<?php

    require_once 'controllers/publicController.php';
    require_once 'controllers/downloadController.php';
	include "publicheader.php";

    session_start();
	if(!isset($_SESSION["loggedpublic"])){
		header("Location: loginpublic.php");
	}




   
		
    $public = getAllPublic();

    



?>

<html>
    <head>
    <script>
	function get(id){
		return document.getElementById(id);
	}

	function loadRegStatus(){
		//get("demo").innerHTML = "Hello";
		var xhr = new XMLHttpRequest();
		xhr.open("GET","registrationStatus.php",true);
		xhr.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
	}




    function loadVerifyVaccine(){
		//get("demo").innerHTML = "Hello";
		var xhr = new XMLHttpRequest();
		xhr.open("GET","verifyVaccineCertificate.php?id=<?php echo $_SESSION["nid"];?>",true);
		xhr.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
	}


    function loadUpdateProfile(){
		//get("demo").innerHTML = "Hello";
		var xhr = new XMLHttpRequest();
		xhr.open("GET","updateprofile.php",true);
		xhr.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
	}


    function loadDownloadVaccinInfo(){
		//get("demo").innerHTML = "Hello";
		var xhr = new XMLHttpRequest();
		xhr.open("GET","downloadVaccineInformation.php",true);
		xhr.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
	}

    function loadDownloadVaccinCertificate(){
		//get("demo").innerHTML = "Hello";
		var xhr = new XMLHttpRequest();
		xhr.open("GET","downloadVaccineCertificate.php",true);
		xhr.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
	}


    

</script>

<link rel="stylesheet" href="CSS/publicdetails.css">
    </head>



    <body>
     <a class="main-btn" href="logoutpublic.php">Logout</a></h3>
        

        <h1 class="head1" align="center">Welcome <?php echo $_SESSION["loggedpublic"];?></h1>

        <h1 class="head1" align="center">NID: <?php echo $_SESSION["nid"];?></h1>



        <button class="btn-link" onclick="loadRegStatus()">=>Check Registration Status </button>


        <button class="btn-link" onclick="loadVerifyVaccine()">=> Verify Your Vaccination Certificate </button>

        <button class="btn-link" onclick="loadDownloadVaccinInfo()">=> Download Your Vaccination Information </button>

        <button class="btn-link" onclick="loadDownloadVaccinCertificate()">=> Download Your Vaccination Certificate </button>


        <div id="demo"></div> 



    <ul>

     <li><a class="btn-link" href="lastestCovidNews.php">=>Click Here for Latest News on Covid-19</a> <br> <br></li>
     <li><a  class="btn-link"href="vaccineAvailability.php">=>Click Here If Vaccine is Available or Not</a><br> <br></li>
     <li><a class="btn-link"href="updateprofile.php">=>Update Your Profile Information</a> <br> <br></li>
     <li> <a class="btn-link"  href="medicalInfoAdd.php">=>Add Medical Information</a> <br> <br></li>
     <li><a class="btn-link" href="publicfeedback.php">=>Can give feedback</a> <br> <br></li>

    </ul>


 





     



        





    </body>
</html>   
    
    
