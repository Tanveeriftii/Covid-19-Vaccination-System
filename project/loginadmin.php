<?php 

session_start();
require_once 'controllers/adminController.php';



?>
<html>
	<head>
	
	</head>
	<title>Login</title>
	<body>
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action="" class="box"   method="post">
		<fieldset>
			<table>
        <tr align="center">
    		<td><h1>Login</h1></td>
      </tr>

      <tr>
	  	<td>Admin User:</td>
		<td> <div class="textbox"> <input  id="adminname" type="text" name="adminname" placeholder="adminname">  </div> </td>
		<td><span id="err_adminname"> <?php echo $err_adminname;?> </span></td> 
	 </tr>			
					<td>Password:</td>
					<td> <div class="textbox">   <input id="password" type="password" name="password" placeholder="Password"> </div>  </td>
					<td><span id="err_password"> <?php echo $err_password;?> </span></td>
					</div>
				</tr>
				<tr>
                <td colspan="2" align="right"><div class="btn-go"><input type="submit" name="btn_login" value="Login"></div></td>
				<tr>

			</table>

	  </tr>

		</fieldset>
		</form>


	</body>
</html>