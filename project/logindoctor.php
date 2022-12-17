<?php
  session_start();
  require_once 'controllers/doctorController.php';
  include 'mainheader.php';
?>

		<form action="" method="post">
		<fieldset class="log1">
      <p align="center">
			<table>
        <tr>
    		<td colspan="2" align="center" class="login"><h1><u>Login</u></h1></td>
      </tr>
      <tr>
        <td colspan="2" align="center" style="color:red"><?php echo$err_db; ?></td>
      </tr>
      <td></td>
       <tr>
					<td align="right">Username:</td>
					<td><input type="text" name="username" placeholder="Username">  </td>
					<td><span class="log2"> <?php echo $err_username;?> </span></td>
				</tr>
				<tr>
					<td align="right">Password:</td>
					<td><input type="password" name="password" placeholder="Password">  </td>
					<td><span class="log2"> <?php echo $err_password;?> </span></td>
				</tr>
        <td></td><td></td><td></td>
				<tr>
                <td colspan="2" align="center"><input type="submit" class="logsub1" name="login" value="Login"></td>
				</tr>
        <tr colspan="2" align="center">
          <td>forgot password?</td>
          <td onclick="submit()"><a href="resetpass.php">forgot password</a></td>
        </tr>
          <td></td><td></td>
          <tr colspan="2" align="center">
            <td>Not registered yet? </td>
            <td><a href="registrationdoctor.php">Register</a></td>
          </tr>

			</table>
      </p>
		</fieldset>
		</form>
    <script>
        function submit() {
        alert("Please Enter your valid username than you can change your password. Thank you;)");
        }
    </script>
	<?php include 'mainfooter.php'; ?>
