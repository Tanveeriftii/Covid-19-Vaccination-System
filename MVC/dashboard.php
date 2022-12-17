<?php 
	require_once 'controllers/StudentController.php';
	$students = getallstudent();
?>
<div>
	<h3 class="text">Dashboard</h3>
	<table class="table table-striped">
		<thead>
		
			<td> <a href="allstudent.php"> All Studnts</td>
			<td> <a href="addstudent.php"> Add Studnts</td>
			<td> <a href="editstudent.php">Edit Students </td>
            <td> <a href="addstudent.php">Add Department</td>
			<td> <a href="">Add Department</td>
            
			<th></th>
			<th></th>
			
		</thead>
			
		</tbody>
	</table>
</div>
