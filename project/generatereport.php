<?php 

if(!isset($_COOKIE["genereport"])){
	header("Location: login.php");
}
		
        require_once 'controllers/reportcontroller.php';
?>

<html>
	<head>
	<link rel="stylesheet" href="style/generaterepostyle.css">
	<script>
			var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validate(){
				refresh();
				if(get("date").value == ""){
					hasError = true;
					get("err_date").innerHTML = "*Date Req";
				}
				if(get("totdoc").value == ""){
					hasError = true;
					get("err_totdoc").innerHTML = "*Total Doctor Req";
				}
				if(get("totnur").value == ""){
					hasError = true;
					get("err_totnur").innerHTML = "*Total Nurse Req";
				}
				if(get("totvac").value == ""){
					hasError = true;
					get("err_totvac").innerHTML = "*Total Vaccine Req";
				}
				return !hasError;
			}
			function refresh(){
				hasError=false;
				get("err_date").innerHTML ="";
				get("err_totdoc").innerHTML ="";
				get("err_totnur").innerHTML ="";
				get("err_totvac").innerHTML ="";
			}
			function get(id){
	return document.getElementById(id);
}
			
		</script>
    </head>
	<body>
	<tr>
        <td><a href="govdetails.php">Back to Home</a></td>

    </tr><br><br><br><br><br><br><br><br><br><br>

	<h1>Generate Report</h1>


    <h5 class="text-danger"><?php echo $err_db;?></h5>

	<form action="" onsubmit="return validate()" method="post">
		


			
					<p>Date:
					 <input id="date" type="text" name="date" value="<?php echo $date; ?>" placeholder="Date"> 
				<span id="err_date"> <?php echo $err_date;?> </span></p>
					
			


               
					<p>Total Doctors in Duty:
					 <input id="totdoc"  type="text" name="totdoc" value="<?php echo $totdoc; ?>"  placeholder="Total Doctor's in Duty">  
					<span id="err_totdoc"> <?php echo $err_totdoc;?> </span></p>
                   
					
              
               
					<p>Total Nurses in Duty: 
					<input id="totnur" type="text" name="totnur" value="<?php echo $totnur; ?>" placeholder="Total Nurses in Duty">  
					<span id="err_totnur"> <?php echo $err_totnur;?> </span></p>
               

                
					<p>Total Vaccination Done:
					<input id="totvac" type="text" name="totvac" value="<?php echo $totvac; ?>"  placeholder="Total Vaccination Done">  
					<span id="err_totvac"> <?php echo $err_totvac;?> </span></p>
                   
					
				

                
                    <p ><input type="submit" class="btn-link" name="submit" value="Submit"></p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                

				
        <p><a href="logout.php"  class ="btn-link1">Logout</a></p>

    
               
        
			
			
			
		
		</form>
					
	</body>
</html>