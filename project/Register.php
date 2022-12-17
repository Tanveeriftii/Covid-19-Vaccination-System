<?php 
		
        require_once 'controllers/Govcontroller.php';
?>

<html>
	<head>
	<link rel="stylesheet" href="style/registerstyle.css">
	<script>
	var hasError=false;
			function get(id){
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
			function validate(){
				refresh();
				if(get("fname").value == ""){
					hasError = true;
					get("err_fname").innerHTML = "*First Name Req";
				}
				else if(get("fname").value.length <=4){
					hasError = true;
					get("err_fname").innerHTML = "*First Name must be > 4 char";
				}
				if(get("lname").value == ""){
					hasError = true;
					get("err_lname").innerHTML = "*Last Name Req";
				}
				if(get("uname").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "*Username Req";
				}
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML = "*Email Req";
				}
				/*else if(strpos(get("email").value,"@".value)){
					hasError = true;
					get("err_email").innerHTML = "*Email Must Contain @";
				}*/
				if(get("pass").value == ""){
					hasError = true;
					get("err_pass").innerHTML = "*Password Req";
				}
				else if(get("pass").value.length <3){
					hasError = true;
					get("err_pass").innerHTML = "*Pass must contain atleast 3 char";
				}
				if(get("conpass").value == ""){
					hasError = true;
					get("err_conpass").innerHTML = "*Confirm Password Req";
				}
				else if(get("conpass").value != get("pass").value ){
					hasError = true;
					get("err_conpass").innerHTML = "*Incorrect Pass";
				}
				if(get("phone").value == ""){
					hasError = true;
					get("err_phone").innerHTML = "*Phone Number Req";
				}
			/*else if(get("phone").value.!is_numeric)){
					hasError = true;
					get("err_phone").innerHTML = "*Phone Number must be Numeric";
				}*/
				if(get("birthday").selectedIndex == 0){
					hasError=true;
					get("err_birthday").innerHTML = "*Birthday Req";
				}
				if(get("bmonth").selectedIndex == 0){
					hasError=true;
					get("err_bmonth").innerHTML = "*Birth Month Req";
				}
				if(get("byear").selectedIndex == 0){
					hasError=true;
					get("err_byear").innerHTML = "*Birth Year Req";
				}
				if(get("address").value == ""){
					hasError = true;
					get("err_address").innerHTML = "*Address Req";
				}
				if(!get("male").checked && !get("female").checked){
					hasError=true;
					get("err_gen").innerHTML = "*Gender Req";
					
				}
				if(!validateGen()){
					hasError=true;
					get("err_gen").innerHTML = "*Gender Req";
				}
			return !hasError;
			}
			function refresh(){
				hasError=false;
				get("err_fname").innerHTML ="";
				get("err_lname").innerHTML ="";
				get("err_uname").innerHTML ="";
				get("err_email").innerHTML ="";
				get("err_pass").innerHTML ="";
				get("err_conpass").innerHTML ="";
				get("err_phone").innerHTML ="";
				get("err_address").innerHTML ="";
				get("err_birthday").innerHTML ="";
				get("err_bmonth").innerHTML ="";
				get("err_byear").innerHTML ="";
				get("err_gen").innerHTML ="";
			}
			function get(id){
	return document.getElementById(id);
}
function checkUsername(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","checkusernameGov.php?uname="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			if(this.responseText.trim() == "invalid"){
				get("err_uname").innerHTML = "*Username exists";
			}
			else{
				get("err_uname").innerHTML ="";
			}
		}
	};
	xhr.send();
}



		</script>

	</head>
	
	<body><br><br><br><br><br><br><br><br><br><br>

	<h1>Registration for Govt. Worker</h1>


    <h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" onsubmit="return validate()" method="post">
		

		


				
					<p>First Name:
					<input id="fname" type="text" name="fname" value="<?php echo $fname; ?>" placeholder="First Name"> 
					<span id= "err_fname">  <?php echo $err_fname;?> </span></p>
					
				
					<p>Last Name:
					 <input id="lname" type="text" name="lname" value="<?php echo $lname; ?>" placeholder="Last Name"> 
					<span id="err_lname"> <?php echo $err_lname;?> </span></p>
					
				
					<p>Username:
					<input id="uname" type="text" onfocusout="checkUsername(this)" name="uname" value="<?php echo $uname; ?>" placeholder="Username"> 
					<span  id="err_uname"> <?php echo $err_uname;?> </span></p>
					
				
					<p>Email:
					 <input id="email" type="text" name="email" value="<?php echo $email; ?>"  placeholder="Enter Your Email">  
					<span id="err_email"> <?php echo $err_email;?> </span></p>
                   
					
				
					<p>Password:
					 <input id="pass" type="password" name="password" value="<?php echo $password; ?>" placeholder="Password">  
					<span id="err_pass"> <?php echo $err_password;?> </span></p>
					
				
					<p>Confirm Password:
					 <input id="conpass" type="password" name="conpassword" value="<?php echo $conpassword; ?>" placeholder="Confirm Password">  
					<span id="err_conpass"> <?php echo $err_conpassword;?> </span></p>
                    
					
				
					<p>Phone:
					<input id="phone" type="text" name="phonenumber" value="<?php echo $phonenumber; ?>" placeholder="Phone Number">  
					<span id="err_phone"> <?php echo $err_phonenumber;?> </span></p>
                   
					
				
				<p>Birth Date:
               
                    <select id ="birthday" name="birthday">
						
						<option disabled selected>Day</option>
						<?php
							foreach($arrDay as $a){
								if($a == $birthday) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
						?>
					</select>
					<span id="err_birthday"> <?php echo $err_birthday; ?> </span>

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
						
                        <option disabled selected>Year</option>
                        <?php
						
						for($i=1945;$i<=2021;$i++){
							

							if($i == $birthyear){
							echo "<option selected>$i</option>";}
							else
								{	echo "<option>$i</option>";}
							
						}
                        ?>
                        </select>
                    
                

					
                    <span id="err_byear"> <?php  echo $err_birthyear; ?> </span></p>

              

                    <p>Gender:
					 <input type="radio" id="male" value="Male"  <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male 
					<input id="female" name="gender" type="radio" value="Female" <?php if($gender=="Female") echo "checked"; ?> > Female 
					 
					<td><span id="err_gen"> <?php echo $err_gender;?> </span></p>
			

            
			
				<p>Address:
				<input id="address" type="text" value="<?php echo $address; ?>" placeholder="Address"name="address">
				<span id="err_address"> <?php echo $err_address;?> </span></p>

            


				
                    <p colspan="2" align="center"><input type="submit" class="btn-link" name="submit" value="Submit"></p>

                


               
       
			
		</form>
					
	</body>
</html>