<?php
    require_once 'controllers/StudentController.php';
	require_once 'controllers/DepartmentController.php';
	$departments = getAlldepartment()
	$id=$_GET["id"];
	$s=getStudent($id);
    
?>
<html>
	<head></head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			<td>  <b>Edit Student </b></td>
				<tr>
					<td>Name</td>
					<td><input type="hidden" name="id" value="<?php echo $s["id"]; ?>" > </td>
					<td>: <input type="text" name="name" value="<?php echo $s["name"]; ?>" > </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>

				<tr>
				    <td>DOB</td>
					<td>: <input type="text" name="dob" value="<?php echo $dob; ?>" > </td>
					<td><span> <?php echo $err_dob;?> </span></td>
				</tr>

				<tr>
					<td>Credit</td>
					<td>: <input type="text" name="credit"  value="<?php echo $credit; ?>"> </td>
					<td><span> <?php echo $err_credit;?> </span></td>
				</tr>

				<tr>
					<td>CGPA</td>
					<td>: <input type="text" name="cgpa" value="<?php echo $cgpa; ?>" > </td>
					<td><span> <?php echo $err_cgpa;?> </span></td>
				</tr>
				
				<tr>
				    <td>Deparment</td>
					<td><select name="dept_id" value="<?php echo $dept_id; ?>">
					<option selected disabled>Choose Deparment</option>
					<?php
					  foreach($departments as $d){
						echo "<option value='".$d["id"]."'>".$d["name"]."</option>";
					}
					?>
					</select>
					</td>
					<td><span> <?php echo $err_dptid;?> </span></td>
				</tr>
			
				<tr>
					<td align="center"> <input type="submit" name="editstudent" value="Edit Student"> </td>
				</tr>

				</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>