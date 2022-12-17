<?php
    session_start();

    require_once 'controllers/publicController.php';
    require_once 'controllers/resetPublicController.php';



	if(!isset($_SESSION["nid"])){
		header("Location: loginpublic.php");
	}



?>

<html>
    <head>

    </head>


    <body>
        
    <h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action=""  method="post">
		<fieldset>
			<table>
        <tr align="center">
    		<td><h1>Change Password:</h1></td>
      </tr>
               <tr>
					<td></td>
					<td> <input id="nid" type="hidden" name="nid" value="<?php echo $_SESSION["nid"]; ?>">  </td>
					<td><span id="err_nid"> <?php echo $err_nid;?> </span></td>
				</tr>

                <tr>
					<td>Changed Password</td>
					<td>: <input id="password" type="password" name="password" placeholder="name">  </td>
					<td><span id="err_password"> <?php echo $err_password;?> </span></td>
				</tr>

                <tr>
					<td>Changed Confirm Password</td>
					<td>: <input id="conpassword" type="password" name="conpassword" placeholder="name">  </td>
					<td><span id="err_conpassword"> <?php echo $err_conpassword;?> </span></td>
				</tr>

				<tr>
                <td colspan="2" align="right"><input type="submit" name="btn_resetp2" value="Reset"></td>
				<tr>

			</table>
        </fieldset>

    </form>
    </body>
</html>


<?php
    session_destroy();

?>