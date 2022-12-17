<?php
    session_start();

    require_once 'controllers/Govcontroller.php';
    require_once 'controllers/resetpassController.php';



	if(!isset($_SESSION["uname"])){
		header("Location: login.php");
	}



?>

<html>
    <head>
	<link rel="stylesheet" href="style/resetpass2.css">
    </head>


    <body>
        
    <h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action=""  method="post"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
    		<h1>Confrim Reset Password</h1>
      
					
					<p><input id="uname" type="hidden" name="uname" value="<?php echo $_SESSION["uname"]; ?>">  
					<span id="err_uname"> <?php echo $err_uname;?> </span></p>
				

            
				<p>	Change Password:
					 <input id="password" type="password" name="password" placeholder="Password"> 
					<span id="err_password"> <?php echo $err_password;?> </span></p>
			

					<p>Confirm Password:
					 <input id="conpassword" type="password" name="conpassword" placeholder="Conpass">  
					<span id="err_conpassword"> <?php echo $err_conpassword;?> </span></p>
				

				
                <p colspan="2" align="right"><input type="submit" name="btn_reset2"  class="btn-link" value="Reset"></p>
				

	

    </form>
    </body>
</html>


<?php
    session_destroy();

?>