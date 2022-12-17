<?php
    session_start();
		if(!isset($_SESSION["loggedGov"])){
            header("Location: login.php");
        }
    require_once 'controllers/Govcontroller.php';


?>

<html>
    <head>
    <link rel="stylesheet" href="style/govdetailsstyle.css">
    </head>


    <body>
        
        <h1 align="center">Welcome <?php echo $_SESSION["loggedGov"];?></h1><br><br>

     
 
       <p> <a href="latestnews.php" class ="btn-link" >Click Here for Latest News on Covid-19</a></p><br>

   

    
    <p><a href="vaccineavailibility.php" class ="btn-link">Click Here If Vaccine is Available or Not </a></p><br>
   

    
    <p><a href="assignDoc.php" class ="btn-link">Assign Doctor for Vaccination</a></p><br>
   

    
    <p><a href="createdoc.php" class ="btn-link">CRUD Doctor</a></p><br>
    

   
    <p><a href="verifycertificate.php" class ="btn-link">Verify Vaccination Certificate</a></p><br>
    
  
    <p><a href="feedback.php" class ="btn-link">Give Feedback</a></p><br>
    

    
    <p><a href="generatereport.php" class ="btn-link">Generate Report</a></p><br>
    

    
    <p><a href="govworkerinfo.php" class ="btn-link">Update Govt. Workers Information</a></p><br><br><br><br><br><br><br><br><br><br><br>
    
    

   
        <p><a href="logout.php" class ="btn-link1">Logout</a></p>

   









    </body>
</html>   