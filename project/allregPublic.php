<?php 
	require_once 'controllers/regController.php';
	$regs = getRegs();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Products</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Public ID: </th>
			<th>Public Name: </th>
			<th>Date of Vaccination: </th>
			<th>Dose Number:</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$i = 1;
				foreach($regs as $r){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>" .$r["p_id"]. "</p>";
						echo "<td>" .$r["p_name"]. "</p>";
						echo "<td>".$r["vaccine_date"]."</p>";
						echo "<td>".$r["Dose_number"]."</p>";
						echo '<td><a href="Edit_Allreg.php?id='.$r["id"].'" class="btn btn-success"> Edit </a></td>';
						echo '<td><a class="btn btn-danger"> Delete </td>';
					echo "</tr>";
					$i++;
						
				}
			?>
			
		</tbody>
	</table>
</div>
