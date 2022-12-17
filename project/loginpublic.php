<?php 

session_start();
require_once 'controllers/publicController.php';
include "publicheader.php";



?>
<html>
	<head>
	<script>
		
		var hasError=false;
		function get(id){
			return document.getElementById(id);
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
			else if(get("name").value.length < 4){
				hasError = true;
				get("err_name").innerHTML = "*Name must be > 4 char";
			}
			if(get("password").value == ""){
				hasError = true;
				get("err_password").innerHTML = "*Password Req";
			}


			return !hasError;
			
		}

		function refresh(){
			hasError=false;
			get("err_nid").innerHTML ="";
			get("err_name").innerHTML ="";
			get("err_password").innerHTML ="";
		}

	</script>
	<link rel="stylesheet" href="CSS/login.css">
	</head>
	<title>Login</title>
	<body>
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action="" class="box" onsubmit="return validate()"  method="post">
		<fieldset>
			<table>
        <tr align="center">
    		<td><h1>Login</h1></td>
      </tr>

      <tr>
	  	<td>NID:</td>
		<td> <div class="textbox"> <input  id="nid" type="text" name="nid" placeholder="nid">  </div> </td>
		<td><span id="err_nid"> <?php echo $err_nid;?> </span></td> 
	 </tr>

       <tr>
	   
					<td>NAME:</td>
					<td><div class="textbox">  <input id="name" type="text" name="name" placeholder="name"> </div> </td>
					<td><span id="err_name"> <?php echo $err_name;?> </span></td> 
				</tr>
				<tr>
				
					<td>Password:</td>
					<td> <div class="textbox">   <input id="password" type="password" name="password" placeholder="Password"> </div>  </td>
					<td><span id="err_password"> <?php echo $err_password;?> </span></td>
					</div>
				</tr>
				<tr>
                <td colspan="2" align="right"><div class="btn-go"><input type="submit" name="btn_login" value="Login"></div></td>
				<tr>

			</table>


		<h5><a href="registrationpublic.php"> Are you not registered yet? </a></h5>
		<h5><a href="resetPublicpage1.php">Reset Password</a></h5>
		<tr>
		  <td><h5><a href="publicDetails.php"> If you are already logged in Click Here! </a></h5></td>
	  </tr>

		</fieldset>
		</form>


	</body>
</html>