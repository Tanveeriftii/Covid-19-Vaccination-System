<?php 

session_start();

require_once 'controllers/Govcontroller.php';
?>
<html>
	<head>
	<link rel="stylesheet" href="style/loginstyle.css">

		<script>
			var hasError=false;
			function get(id)
			{
				return document.getElementById(id);
			}
			function validate()
			{
				refresh();
			
				if(get("uname").value == "")
				{
					hasError = true;
					get("err_uname").innerHTML = "<p>*User Name Req</p>";
				}
				if(get("pass").value == "")
				{
					hasError = true;
					get("err_pass").innerHTML = "<p>*Password Req</p>";
				}
				return !hasError;
			}
			function refresh()
			{
				hasError=false;
				get("err_uname").innerHTML = "";
				get("err_pass").innerHTML = "";
			}
			</script>
				
	</head>
	<a href="Homepage.php">Home</a>
	<title>Login</title><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<body>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action="" onsubmit="return validate()" method="post">
	
		
		
    	<h1>Login</h1>
      
      
	  <p>Username:			
	  <input id="uname" type="text" name="uname" value="<?php echo $uname;?>" placeholder="User Name">  </p>
					<td><span id="err_uname"> <?php echo $err_uname;?> </span></td>
				
				<p>Password:
					 <input id="pass" type="password" name="password" value="<?php echo $password;?>" placeholder="Password">  </p>
					<td><span id="err_pass"> <?php echo $err_password;?> </span></td>
			
				<p><input type="submit" class ="btn-link" name="btn_login" value="Login"></p>	
				
				
    <p><a  href="Register.php" >Not yet registered?Regiter now</a></p>

	<p><a  href="resetpass1.php" >Forgot password? Rsest now</a></p>

	
		
		</form>
	</body>
</html>