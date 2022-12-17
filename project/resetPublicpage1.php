<?php
session_start();

require_once 'controllers/publicController.php';
require_once 'controllers/resetPublicController.php';
if(!isset($_COOKIE["nid"]) ){

	$_COOKIE["nid"] = "";
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
    		<td><h1>Reset:</h1></td>
      </tr>
      <tr>
					<td>NID</td>
					<td>: <input id="nid" type="text" name="nid" value="<?php echo $_COOKIE["nid"] ?>">  </td>
					<td><span id="err_nid"> <?php echo $err_nid;?> </span></td>
				</tr>

       <tr>
					<td>Email</td>
					<td>: <input id="email" type="text" name="email" placeholder="name">  </td>
					<td><span id="err_email"> <?php echo $err_email;?> </span></td>
				</tr>

				<tr>
                <td colspan="2" align="right"><div class="btn-go"></div><input type="submit" name="btn_resetp1" value="Go Forward"></div></td>
				<tr>

			</table>
        </fieldset>

    </form>

    </body>
</html>