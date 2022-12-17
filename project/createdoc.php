<?php 
		session_start();
		if(!isset($_SESSION["loggedGov"])){
			header("Location: login.php");
		}
        require_once 'controllers/createdoccontroller.php';
?>

<html>
	<head>
	<link rel="stylesheet" href="style/createdocstyle.css">
	<script>
			var hasError=false;
			function get(id)
			{
				return document.getElementById(id);
			}
			function validateGen(){
				var gn = document.getElementsByName("gender");
				var checked = false;
				for(var i=0;i<gn.length;i++){
					if(gn[i].checked){
						checked = true;
						break;
					}
				}
				return checked;
			}
			function validateGender(){
				var gn = document.querySelector('input[name="gender"]:checked');
				if(gn ==null){
					return false;
				}
				return true;
			}
			function validate()
			{
				refresh();
			
				if(get("name").value == "")
				{
					hasError = true;
					get("err_name").innerHTML = "<p>*Doctor's Name Req</p>";
				}
				if(get("username").value == ""){
					hasError = true;
					get("err_username").innerHTML = "<p>*Username Req</p>";
				}
				if(get("pass").value == ""){
					hasError = true;
					get("err_pass").innerHTML = "<p>*Password Req</p>";
				}
				else if(get("pass").value.length <3){
					hasError = true;
					get("err_pass").innerHTML = "*Pass must contain atleast 3 char";
				}
				if(get("conpass").value == ""){
					hasError = true;
					get("err_conpass").innerHTML = "<p>*Confirm Password Req</p>";
				}
				else if(get("conpass").value != get("pass").value ){
					hasError = true;
					get("err_conpass").innerHTML = "*Incorrect Pass";
				}
				if(get("birthdate").selectedIndex == 0){
					hasError=true;
					get("err_birthdate").innerHTML = "*Birthdate Req";
				}
				if(get("bmonth").selectedIndex == 0){
					hasError=true;
					get("err_bmonth").innerHTML = "*Birth Month Req";
				}
				if(get("byear").selectedIndex == 0){
					hasError=true;
					get("err_byear").innerHTML = "*Birth Year Req";
				}
				if(get("email").value == "")
				{
					hasError = true;
					get("err_email").innerHTML = "<p>*Email Req</p>";
				}
				if(get("phone").value == "")
				{
					hasError = true;
					get("err_phone").innerHTML = "<p>*Phone Req</p>";
				}
				if(get("degree").value == "")
				{
					hasError = true;
					get("err_degree").innerHTML = "<p>*Degree Req</p>";
				}
				if(get("address").value == ""){
					hasError = true;
					get("err_address").innerHTML = "<p>*Address Req</p>";
				}
				if(!get("male").checked && !get("female").checked){
					hasError=true;
					get("err_gen").innerHTML = "*Gender Req";
					
				}
				if(!validateGen()){
					hasError=true;
					get("err_gen").innerHTML = "<p>*Gender Req</p>";
				}
				return !hasError;
			}
			function refresh()
			{
				hasError=false;
				get("err_name").innerHTML = "";
				get("err_username").innerHTML ="";
				get("err_pass").innerHTML ="";
				get("err_conpass").innerHTML ="";
				get("err_email").innerHTML = "";
				get("err_phone").innerHTML = "";
				get("err_address").innerHTML ="";
				get("err_degree").innerHTML = "";
				get("err_gen").innerHTML ="";
				get("err_birthdate").innerHTML ="";
				get("err_bmonth").innerHTML ="";
				get("err_byear").innerHTML ="";
			}
			
			function checkUsername(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","checkusernameDoc.php?username="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			if(this.responseText.trim() == "invalid"){
				get("err_username").innerHTML = "*Username exists";
			}
			else{
				get("err_username").innerHTML ="";
			}
		}
	};
	xhr.send();
}

			</script>
			
	</head>
	<tr>
        <td><a href="govdetails.php">Back to Home</a></td>

    </tr>
	<body>

	<h1>Create Doctor</h1>


    <h5 class="text-danger"><?php echo $err_db;?></h5>

	<form action="" onsubmit="return validate()" method="post">
		

		
	

					<p>Doctor's Name:
					<input id="name" type="text" name="name" value="<?php echo $name; ?>" placeholder="Doctor's Name"> </p>
					<td><span id="err_name"> <?php echo $err_name;?> </span></td>
	
					

				
					<p>Username:
					 <input id="username" type="text" onfocusout="checkUsername(this)" name="username" value="<?php echo $username; ?>" placeholder="Username"> </p>
					<td><span  id="err_username"> <?php echo $err_username;?> </span></td>
		
				
					<p>Password:
				<input id="pass" type="password" name="password" value="<?php echo $password; ?>" placeholder="Password">  </p>
					<td><span id="err_pass"> <?php echo $err_password;?> </span></td>
					
			

				
					<p>Confirm Password:
					<input id="conpass" type="password" name="confirmpassword" value="<?php echo $confirmpassword; ?>" placeholder="Confirm Password">  </p>
					<td><span id="err_conpass"> <?php echo $err_confirmpassword;?> </span></td>
                    
					
				

				
				<p>Birth Date:
                <td> 
                    <select id ="birthdate" name="birthdate">
						
						<option disabled selected>Date</option>
						<?php
							foreach($arrDate as $a){
								if($a == $birthdate) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
						?>
					</select>
					<span id="err_birthdate"> <?php echo $err_birthdate; ?> </span>

					<select id="bmonth" name="birthmonth">
						
						<option disabled selected>Month</option>
						<?php
								foreach($arrMonth as $a){
									if($a == $birthmonth) 
										echo "<option selected>$a</option>";
									else
										echo "<option>$a</option>";
								}
						?>
						</select>
						<span id="err_bmonth"> <?php echo $err_birthmonth; ?> </span>

						<select id="byear" name="birthyear" value="<?php echo $birthyear; ?>">
						
                        <option disabled selected>Year</option></p>
                        <?php
						
						for($i=1945;$i<=2021;$i++){
							

							if($i == $birthyear){
							echo "<option selected>$i</option>";}
							else
								{	echo "<option>$i</option>";}
							
						}
                        ?>
                        </select>
                    
              

					
                    <td><span id="err_byear"> <?php  echo $err_birthyear; ?> </span></td>

               

				
				<p>Gender:
					<input type="radio" id="male" value="Male"  <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male 
					<input id="female" name="gender" type="radio" value="Female" <?php if($gender=="Female") echo "checked"; ?> > Female 
					</p>
					<td><span id="err_gen"> <?php echo $err_gender;?> </span></td>
				</tr>


                
					<p>Email:
					 <input id="email" type="text" name="email" value="<?php echo $email; ?>"  placeholder="Enter Your Email">  </p>
					<td><span id="err_email"> <?php echo $err_email;?> </span></td>
                   
					
				
              
                
					<p>Phone: 
					<input id="phone" type="text" name="phone" value="<?php echo $phone; ?>" placeholder="Phone Number">  </p>
					<td><span id="err_phone"> <?php echo $err_phone;?> </span></td>
                

				
				<p>Address:
				<input id="address" type="text" value="<?php echo $address; ?>" placeholder="Address"name="address"></p>
				<span id="err_address"> <?php echo $err_address;?> </span></td>

            

                
					<p>Degree:
					 <input id="degree" type="text" name="degree" value="<?php echo $degree; ?>"  placeholder="Degree">  </p>
					<td><span id="err_degree"> <?php echo $err_degree;?> </span></td>
                   
					
			
                   


		


				
                    <p><input type="submit" class ="btn-link"  name="submit" value="Submit"></p><br><br><br><br><br><br><br><br>

                


               
      
		
        <p><a href="logout.php" class ="btn-link1">Logout</a></p>

   
			
			
		</fieldset>
		</form>
	</body>
</html>