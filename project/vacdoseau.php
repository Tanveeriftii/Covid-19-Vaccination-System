<?php
  session_start();
  require_once 'controllers/vacRController.php';
  include 'mainheader.php';
?>

		<form action="" method="post">
      <p align="center">
			<table>
        <tr>
    		<td colspan="2" align="center"><h1><u>Claim Certificate</u></h1></td>
      </tr>
      <tr>
        <td colspan="2" align="center" style="color:red"><?php echo$err_db; ?></td>
      </tr>
      <td></td>
       <tr>
					<td align="right">Username:</td>
					<td><input type="text" name="docuname" placeholder="Enter Username">  </td>
					<td><span> <?php echo $err_docuname;?> </span></td>
				</tr>
        <tr>
 					<td align="right">Vaccine Dose:</td>
 					<td><input type="text" name="vaccinedose">  </td>
 					<td><span> <?php echo $err_vaccinedose;?> </span></td>
 				</tr>
                <td colspan="2" align="center"><input type="submit" name="claim" value="Claim"></td>
				</tr>
      </table>
<?php include'mainfooter.php'; ?>
