<?php

    require_once 'controllers/adminController.php';
    require_once 'controllers/crudPubController.php';




   
		
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
    

</script>

    </head>



    <body>
        



        <div id="demo"></div> 



    <ul>

     <li><a class="btn-link" href="#">=>Latest Covid News</a> <br> <br></li>
     <li><a class="btn-link" href="AllPublicDetails.php">=>All Public Details </a> <br> <br></li>
     <li><a class="btn-link" href="createPublicinfo.php">=>Create Public</a> <br> <br></li>

     <li><a class="btn-link" href="allregPublic.php">=>All Registered Public</a> <br> <br></li>


    </ul>


 





     



        





    </body>
</html>   
    
    
