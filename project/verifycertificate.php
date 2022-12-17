<?php 
session_start();
if(!isset($_SESSION["loggedGov"])){
	header("Location: login.php");
}
		
        require_once 'controllers/vaccinecertificatecontroller.php';
?>

<html>
	<head>
	<link rel="stylesheet" href="style/verifycer.css">
	<script>
	var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validate(){
				refresh();
				if(get("c_id").value == ""){
					hasError = true;
					get("err_c_id").innerHTML = "*NID Req";
				}
				if(get("info").selectedIndex == 0){
					hasError=true;
					get("err_info").innerHTML = "*Vaccine Info Req";
				}
				return !hasError;
			}
			function refresh(){
				hasError=false;
				get("err_c_id").innerHTML ="";
				get("err_info").innerHTML ="";
			}
			function checkNID(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","checkNid.php?c_id="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			if(this.responseText.trim() == "invalid"){
				get("err_c_id").innerHTML = "*NID exists";
			}
			else{
				get("err_c_id").innerHTML ="";
			}
		}
	};
	xhr.send();
}

			</script>
</head>
	<body>
    <tr>
        <td><a href="govdetails.php">Back to Home</a></td>

    </tr></p><br><br><br><br><br><br><br><br><br><br><br>
<h1>Verify Vaccination Certificate</h1>


    <h5 class="text-danger"><?php echo $err_db;?></h5>

	<form action="" onsubmit="return validate()" method="post">
	
       


			
					<p>NID No.
					 <input id="c_id" type="text" onfocusout="checkNID(this)"  name="c_id" value="<?php echo $c_id; ?>" placeholder=""> 
					<span id="err_c_id"> <?php echo $err_c_id;?> </span></p>
					
				
				<p>Vaccination Status
                 
                    <select id ="info" name="vaccineinfo">
						
						<option disabled selected>Select</option>
						<?php
							foreach($arr1 as $a){
								if($a == $vaccineinfo) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
						?>
					</select>
					<span id="err_info"> <?php echo $err_vaccineinfo; ?> </span></p>
				
                    <p><input type="submit" name="submit" class ="btn-link" value="Submit"></tp></p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                


               
       
        <p><a href="logout.php" class ="btn-link1">Logout</a></p>

    
			
			
		
		</form>
	</body>
</html>