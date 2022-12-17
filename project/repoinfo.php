<?php 
if(!isset($_COOKIE["genereport"])){
	header("Location: login.php");
	require_once 'controllers/reportcontroller.php';
	$Information = getAllRepo();
	
?>

<link rel="stylesheet" href="style/repoinfostyle.css">
<div class="center">
<tr>
        <td><a href="govdetails.php">Back to Home</a></td>

    </tr>
	<h3 class="text"> <?php echo $_COOKIE["genereport"];?> Generate Report</h3>
	<table class="table table-striped">
		<thead>
	
			<th>Sl#</th>
			<th> Date</th>
			<th>Total Doctors in Duty </th>
			<th>Total Nurses in Duty</th>
			<th>Total Vaccination Done </th>
		
			<th></th>
			<th></th>
			
		</thead>
		<?php
			$i = 1;
			foreach($Information as $I)
			{
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>".$I["date"]."</td>";
				echo "<td>".$I["totdoc"]."</td>";
				echo "<td>".$I["totnur"]."</td>";
				echo "<td>".$I["totvac"]."</td>";
			
				echo "</tr>";
				$i++;
			}
			?>
		</tbody>
	</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

   
        <p><a href="repodownmess.php"  class="btn-link">Dwonload Report</a></p><br><br><br><br><br><br>

   

	
        <p><td><a href="logout.php" class="btn-link1">Logout</a></p>


