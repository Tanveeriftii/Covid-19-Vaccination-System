<?php 
		session_start();
        require_once 'controllers/publicController.php';
		include 'publicheader.php';
        
        $id = $_SESSION['nid'];
		if(!isset($_SESSION["nid"])){
			header("Location: loginpublic.php");
		}
        $n = getnid($id);
?>






<html>
	<head>
	<script>
		
			var hasError=false;
			function get(id){
				return document.getElementById(id);
			}


			function validateGender(){
				var gn = document.querySelector('input[name="gender"]:checked');
				if(gn ==null){
					return false;
				}
				return true;
			}

			function validateOccupation(){
				var gn = document.querySelector('input[name="occupation"]:checked');
				if(gn ==null){
					return false;
				}
				return true;
			}


			function validate(){
				refresh();
				
				if(get("nid").value == ""){
					hasError = true;
					get("err_nid").innerHTML = "*NID Req";
				}
				else if(get("nid").value.length <=4){
					hasError = true;
					get("err_nid").innerHTML = "*Nid must be > 4 char";
				}
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Name Req";
				}
				else if(get("name").value.length <=4){
					hasError = true;
					get("err_name").innerHTML = "*Name must be > 4 char";
				}
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML = "*Email Req";
				}
				if(get("password").value == ""){
					hasError = true;
					get("err_password").innerHTML = "*Password Req";
				}
				if(get("conpassword").value == ""){
					hasError = true;
					get("err_conpassword").innerHTML = "*Confirm Password Req";
				}
				if(get("phonenumber").value == ""){
					hasError = true;
					get("err_phonenumber").innerHTML = "*Phonenumber Req";
				}
				if(get("address").value == ""){
					hasError = true;
					get("err_address").innerHTML = "*Address Req";
				}
				if(get("birthday").selectedIndex == 0){
					hasError=true;
					get("err_birthday").innerHTML = "*Birthday Req";
				}
				if(get("birthmonth").selectedIndex == 0){
					hasError=true;
					get("err_birthmonth").innerHTML = "*Birthmonth Req";
				}
				if(get("birthyear").selectedIndex == 0){
					hasError=true;
					get("err_birthyear").innerHTML = "*Birthyear Req";
				}
				if(get("center").selectedIndex == 0){
					hasError=true;
					get("err_center").innerHTML = "*Center Req";
				}
				if(!validateGender()){
					hasError=true;
					get("err_gender").innerHTML = "*Gender Req";
				}
				if(!validateOccupation()){
					hasError=true;
					get("err_occupation").innerHTML = "*Occupation Req";
				}


				return !hasError;
				
			}

			function refresh(){
				hasError=false;
				get("err_nid").innerHTML ="";
				get("err_name").innerHTML ="";
				get("err_email").innerHTML ="";
				get("err_password").innerHTML ="";
				get("err_conpassword").innerHTML ="";
				get("err_phonenumber").innerHTML ="";
				get("err_birthday").innerHTML = "";
				get("err_birthmonth").innerHTML ="";
				get("err_birthyear").innerHTML ="";
				get("err_gender").innerHTML ="";
				get("err_occupation").innerHTML = "";
				get("err_address").innerHTML = "";
				get("err_center").innerHTML = "";
			}

		</script>
	</head>
	<body>
	
	<a href="publicDetails.php"> Public Dashboard</a>
	<a class="main-btn" href="logoutpublic.php">Logout</a></h3>

	

    <h5 class="text-danger"><?php echo $err_db;?></h5>

		<form action="" onsubmit="return validate()" method="post">
		<fieldset>




            <h1 align="center"><u>Update Your Account</u></h1>
		<table align="center">



		
            <tr>
					<td>Nid</td>
					<td>: <input id="nid" type="text" name="nid" value="<?php echo $n["nid"]; ?>"  placeholder=""> </td>
					<td><span id="err_nid"> <?php echo $err_nid;?> </span></td>
					
				</tr>
				<tr>
					<td>Name</td>
					<td>: <input id="name" type="text" name="name" value="<?php echo $n["name"]; ?>" placeholder=""> </td>
					<td><span id="err_name"> <?php echo $err_name;?> </span></td>
					
				</tr>


                <tr>
					<td>Email</td>
					<td>: <input id="email" type="text" name="email" value="<?php echo $n["email"]; ?>"  placeholder="">  </td>
					<td><span id="err_email"> <?php echo $err_email;?> </span></td>
                   
					
				</tr>
                <tr>
					<td>Password</td>
					<td>: <input id="password" type="password" name="password" value="<?php echo $n["password"]; ?>" placeholder="Password">  </td>
					<td><span id="err_password"> <?php echo $err_password;?> </span></td>
					
				</tr>
                <tr>
					<td>Confirm Password</td>
					<td> <input id="conpassword" type="password" name="conpassword" value="<?php echo $n["conpassword"]; ?>" placeholder="Confirm Password">  </td>
					<td><span id="err_conpassword"> <?php echo $err_conpassword;?> </span></td>
                    
					
				</tr>
                <tr>
					<td>Phone: </td>
					<td> <input id="phonenumber" type="text" name="phonenumber" value="<?php echo $n["phonenumber"]; ?>" placeholder="Number">  </td>
					<td><span id="err_phonenumber"> <?php echo $err_phonenumber;?> </span></td>
                   
					
				</tr>
				<tr>
				<td>Birth Date:</td>
                <td> 
                    <select  id="birthday" name="birthday">
						
						<option disabled selected>Day</option>
						<?php
							foreach($arrDay as $a){
								if($a == $n["birthday"]) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
						?>
					</select>
					<span id="err_birthday"> <?php echo $err_birthday; ?> </span>

                    <select id="birthmonth" name="birthmonth">
						
					<option disabled selected>Month</option>
					<?php
							foreach($arrMonth as $a){
								if($a == $n["birthmonth"]) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
					?>
					</select>
					<span id="err_birthmonth"> <?php echo $err_birthmonth; ?> </span>
                    <select id="birthyear" name="birthyear" value="<?php echo $n["birthmonth"]; ?>">
						
                        <option disabled selected>Year</option>
                        <?php
						
						for($i=1945;$i<=2021;$i++){
							

							if($i == $n["birthyear"]){
							echo "<option selected>$i</option>";}
							else
								{	echo "<option>$i</option>";}
							
						}
                        ?>
                        </select>
                    
                </td>

					
                    <td><span id="err_birthyear"> <?php  echo $err_birthyear; ?> </span></td>

                </tr>


				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($n["gender"]=="Male") echo "checked"; ?> name="gender"> Male 
					<input name="gender" type="radio" value="Female" <?php if($n["gender"]=="Female") echo "checked"; ?> > Female 
					<input type="radio" value="Other" <?php if($n["gender"]=="Other") echo "checked"; ?> name="gender"> Other </td>
					<td><span id="err_gender"> <?php echo $err_gender;?> </span></td>
				</tr>
				<tr>
					<td>What's your Occupation?</td>
				<td><input type="radio" value="Businessman" <?php if($n["occupation"]=="Businessman") echo "checked"; ?> name="occupation" >Businessman</td>
				<td><input name="occupation" value="Goverment Worker" <?php if($n["occupation"]=="Goverment Worker") echo "checked"; ?> type="radio">Goverment Worker</td>
				<td><input name="occupation" value="Banker" <?php if($n["occupation"]=="Banker") echo "checked"; ?> type="radio">Banker</td>
				<td><input name="occupation" value="Student" <?php if($n["occupation"]=="Student") echo "checked"; ?> type="radio"> Student </td>
				<td><input name="occupation" value="Teacher" <?php if($n["occupation"]=="Teacher") echo "checked"; ?> type="radio"> Teacher</td>
				<td><input name="occupation" value="Others" <?php if($n["occupation"]=="Others") echo "checked"; ?> type="radio"> Others </td>
				<td><span id="err_occupation">  <?php echo $err_occupation;?> </span></td>

				

            </tr>



            
			<tr>
				<td><br> What's your Address?</td>
				<td> <input id="address" type="text" value="<?php echo $n["address"]; ?>" name="address"></td>
				<td><span id="err_address"> <?php echo $err_address;?> </span></td>

            </tr>
			
			<tr>
			<td>Which center do you want to give Vaccine? </td>
			 <td><select id="center" name="center" value="<?php echo $n["center"]; ?>">
						
						<option disabled selected>Hospital Center</option>
						<?php
							foreach($arrCenter as $a){
								if($a == $n["center"]) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
						?>
					</select>

					</td>
					<td><span id="err_center"> <?php echo $err_center; ?></span></td>
			
					</tr>

				
				


				<tr>
                    <td align="left"><input type="submit" name="update" value="Update"></td>

                </tr>


               
        </table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>