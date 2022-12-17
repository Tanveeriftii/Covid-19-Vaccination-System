<?php
  session_start();
  require_once 'controllers/doctorController.php';
  include 'mainheader.php';
?>

		<form action="" method="post">
		<fieldset>
      <p align="center">
			<table>
        <tr>
    		<td colspan="2" align="center"><h1><u>Reset Password</u></h1></td>
      </tr>
      <tr>
        <td colspan="2" align="center" style="color:red"><?php echo$err_db; ?></td>
      </tr>
      <td></td>
       <tr>
					<td align="right">Username:</td>
					<td><input type="text" name="username" placeholder="Username">  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				</tr>
        <tr>
          <td align="right">Password:</td>
					<td><input type="text" name="password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
        </tr>
        <tr>
          <td align="right">Confirm Password:</td>
					<td><input type="text" name="confirmpassword">  </td>
					<td><span> <?php echo $err_confirmpassword;?> </span></td>
        </tr>
			  <tr>
                <td colspan="2" align="center"><input type="submit" name="reset" value="Reset"></td>
				</tr>
      </table>
    </fieldset>
<?php include'mainfooter.php'; ?>
