<?php 
		session_start();
        require_once 'controllers/publicMedicalController.php';
		
		if(!isset($_SESSION["nid"])){
			header("Location: loginpublic.php");
		}

		
?>



<html>
<head>
<script>
		
		var hasError=false;
		function get(id){
			return document.getElementById(id);
		}

		function validateSymptoms(){
			var gn = document.querySelector('input[name="symptoms"]:checked');
				if(gn ==null){
					return false;
				}
				return true;
		}

		function validateEffected(){
			var gn = document.getElementsByName("effected");
			var checked = false;
			for(var i=0;i<gn.length;i++){
				if(gn[i].checked){
					checked = true;
					break;
				}
			}
			return checked;
		}

		function validateBloodpressure(){
			var gn = document.getElementsByName("bloodpressure");
			var checked = false;
			for(var i=0;i<gn.length;i++){
				if(gn[i].checked){
					checked = true;
					break;
				}
			}
			return checked;
		}
		function validateCancer(){
			var gn = document.getElementsByName("cancer");
			var checked = false;
			for(var i=0;i<gn.length;i++){
				if(gn[i].checked){
					checked = true;
					break;
				}
			}
			return checked;
		}
		function validateStroke(){
			var gn = document.getElementsByName("stroke");
			var checked = false;
			for(var i=0;i<gn.length;i++){
				if(gn[i].checked){
					checked = true;
					break;
				}
			}
			return checked;
		}
		function validateProblem(){
			var gn = document.getElementsByName("problem");
			var checked = false;
			for(var i=0;i<gn.length;i++){
				if(gn[i].checked){
					checked = true;
					break;
				}
			}
			return checked;
		}
		function validateMedicines(){
			var gn = document.getElementsByName("medicines");
			var checked = false;
			for(var i=0;i<gn.length;i++){
				if(gn[i].checked){
					checked = true;
					break;
				}
			}
			return checked;
		}



		function validate(){
			refresh();
			if(get("medinfo").value == ""){
				hasError = true;
				get("err_medinfo").innerHTML = "*Medical information Req";
			}
			if(!validateSymptoms()){
				hasError=true;
				get("err_symptoms").innerHTML = "*Symptoms Req";
			}
			if(!validateEffected()){
				hasError=true;
				get("err_effected").innerHTML = "*Effected Req";
			}
			if(!validateBloodpressure()){
				hasError=true;
				get("err_bloodpressure").innerHTML = "*Bloodpressure Req";
			}
			if(!validateCancer()){
				hasError=true;
				get("err_cancer").innerHTML = "*Cancer info Req";
			}
			if(!validateStroke()){
				hasError=true;
				get("err_stroke").innerHTML = "*Stroke Req";
			}
			if(!validateProblem()){
				hasError=true;
				get("err_problem").innerHTML = "*Problem Req";
			}
			if(!validateMedicines()){
				hasError=true;
				get("err_medicines").innerHTML = "*Medicines Req";
			}


			return !hasError;
			
		}

		function refresh(){
			hasError=false;
			get("err_symptoms").innerHTML ="";
			get("err_effected").innerHTML ="";
			get("err_bloodpressure").innerHTML ="";
			get("err_cancer").innerHTML ="";
			get("err_stroke").innerHTML ="";
			get("err_problem").innerHTML = "";
			get("err_medicines").innerHTML ="";
			get("err_medinfo").innerHTML ="";
		}

	</script>

</head>
<body>

<a class="main-btn" href="logoutpublic.php">Logout</a></h3>

 <h3><a href="publicDetails.php">Public Dashboard</a></h3>
	
<form action="" onsubmit="return validate()" method="post">
		<fieldset>
            <h1 align="center">Medical History of patient</h1>
			<table>
			<tr>
                <td> <input id="m_id" type="hidden" name="m_id" value="<?php echo $_SESSION['nid']; ?>" >   </td>
			</tr>
			<tr>
		    	<td><br> Do you have any fever or other symptoms that could be due to COVID-19? <br> 
				<input name="symptoms" value="Yes" <?php if($symptoms=="Yes") echo "checked"; ?> type="radio"> Yes 
				<input name="symptoms" value="No" <?php if($symptoms=="No") echo "checked"; ?> type="radio"> No </td>
				<td><span id="err_symptoms"> <?php echo $err_symptoms;?> </span></td>
			</tr>

			
			<tr>
			 <td><br> Are You Covid Effected Previously? <br> <input name="effected" value="Yes" <?php if($effected=="Yes") echo "checked"; ?> type="radio">   Yes   <input name="effected" value="No" <?php if($effected=="No") echo "checked"; ?> type="radio">   No   </td>
			 <td><span id="err_effected"> <?php  echo $err_effected;?> </span></td>
			 </tr>



			<tr>
			<td><br> Do you have any High blood pressure? <br><input name="bloodpressure" value="Yes" <?php if($bloodpressure=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="bloodpressure" value="No" <?php if($bloodpressure=="No") echo "checked"; ?> type="radio"> No </td>
			<td><span id="err_bloodpressure"> <?php echo $err_bloodpressure;?> </span></td>
			</tr>






			<tr>
				<td><br> Do you have any cancer? <br><input name="cancer" value="Yes" <?php if($cancer=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="cancer" value="No" <?php if($cancer=="No") echo "checked"; ?> type="radio"> No </td>
				<td><span id="err_cancer"> <?php echo $err_cancer;?> </span></td>
			</tr>

			




			
			<tr> 
				<td><br> Did you have have any Stroke? <br><input name="stroke" value="Yes" <?php if($stroke=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="stroke" value="No" <?php if($stroke=="No") echo "checked"; ?> type="radio"> No </td>
				<td><span id="err_stroke"> <?php echo $err_stroke;?> </span></td>
			 </tr>

			


			<tr>
			 <td><br> Do you have any other health problem? <br><input name="problem" value="Yes" <?php if($problem=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="problem" value="No" <?php if($problem=="No") echo "checked"; ?> type="radio"> No </td> 
			 <td><span id="err_problem" > <?php echo $err_problem;?> </span></td>
			 </tr>



			<tr>
			 <td><br> Do you take any medicines regularly? <br><input name="medicines" value="Yes" <?php if($medicines=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="medicines" value="No" <?php if($medicines=="No") echo "checked"; ?> type="radio"> No </td>
			 <td><span id="err_medicines"> <?php echo $err_medicines;?> </span></td>
			  </tr>

			

			<tr> 
				<td>If You have anymore information to add please Describe <input id="medinfo" name="medinfo" type="text"></td>
				<td><span id="err_medinfo"> <?php echo $err_medinfo;?> </span></td>
			
			   </tr>




			<tr>
                    <td align="left"><input type="submit" name="medicalinfo" value="Submit"></td>

                </tr>


				<h4 class="text-danger"><?php echo $err_db;  ?></h4>


			

			








			</table>
			
			
			</fieldset>
			</form>

</body>

</html>