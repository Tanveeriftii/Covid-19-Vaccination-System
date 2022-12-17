<?php 
	  require_once 'controllers/usercontroller.php';
?>


<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">

		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="uname" value="<?php echo $uname;?>" class="form-control">
			<span class="text-danger"><?php echo $err_uname;?></span>
		</div>

		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="pass"  class="form-control">
			<span class="text-danger"><?php echo $err_pass;?></span>
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="btn_login" class="btn btn-danger" value="Login" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<a href="signup.php" >Not registered yet? Sign Up</a>
		</div>
	</form>
</div>

