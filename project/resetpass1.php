<?php
session_start();

require_once 'controllers/Govcontroller.php';
require_once 'controllers/resetpassController.php';

?>

<html>
    <head>
	<link rel="stylesheet" href="style/resetpass1.css">
    </head>
    <body>
        

    <h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action=""  method="post"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
    		<h1>Reset Password</h1>
      
					<p>Username:
					 <input id="uname" type="text" name="uname"  placeholder="User Name">  
					<span id="err_uname"> <?php echo $err_uname;?> </span></p>
				

     
					<p>Email:
					 <input id="email" type="text" name="email" placeholder="Email">  
					<span id="err_email"> <?php echo $err_email;?> </span></p>
				

				
                <p colspan="2" align="right"><input type="submit" name="btn_reset" class="btn-link" value="Reset"></p>
				

	

    </form>

    </body>
</html>