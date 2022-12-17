<?php

$vaccinenum=50;
   
if(isset($_POST["check"])){

    
    verifyAvailability(); 

}

function verifyAvailability(){
	
    global $vaccinenum;

    if($vaccinenum > 0 ){

        
      echo"<p id='sp2' class='w3-display-middle ' align=center> Vaccine is available </p>";
        
    }
    else{

        
        echo"<p id='sp2' class='w3-display-middle ' align=center> Vaccine is not avaiable </p>";
        
       
    }
    
}

?>