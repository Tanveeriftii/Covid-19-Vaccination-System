<?php 
session_start();
if(!isset($_SESSION["loggedGov"])){
	header("Location: login.php");
}
	require_once 'controllers/vaccinecertificatecontroller.php';
	$Information = getAllinfo();
	
?>
<link rel="stylesheet" href="style/verifyvaccer.css">

<tr>
        <td><a href="govdetails.php">Back to Home</a></td>

    </tr>
<div class="center">
	<h3 class="text">Verify Vaccination Certificate</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> NID</th>
			<th>Vaccination Status </th>
		
			
			<th></th>
			<th></th>
			
		</thead>
		<?php
			$i = 1;
			foreach($Information as $I)
			{
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>".$I["c_id"]."</td>";
				echo "<td>".$I["vaccineinfo"]."</td>";
				
				echo "</tr>";
				$i++;
			}
			?>
		</tbody>
	</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	
        <p><a href="logout.php" class ="btn-link1">Logout</a></p>

    
</div>