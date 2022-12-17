<?php 
session_start();
if(!isset($_SESSION["loggedGov"])){
	header("Location: login.php");
}
	include 'controllers/doccontroller.php';
	$Information = getAllDoc();
	
?>

<link rel="stylesheet" href="style/allinformationstyle.css">
<div class="center">
<tr>
        <td><a href="govdetails.php">Back to Home</a></td>

    </tr>

	<h3 >All Doctor's Information</h3>

	<table class="table table-striped">
		<thead>
	
			<th>Sl#</th>
			<th> Image</th>
			<th> Doctor's Name</th>
			<th>Duty Day </th>
			<th>Duty Date </th>
			<th>Duty Month </th>
			<th>Duty Time </th>
			<th>Duty Centre </th>
			<th></th>
			<th></th>
			
		</thead>
		<?php
			$i = 1;
			foreach($Information as $I)
			{
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td><img width='80px' height='100px' src='".$I["img"]."'></td>";
				echo "<td>".$I["docname"]."</td>";
				echo "<td>".$I["dutyday"]."</td>";
				echo "<td>".$I["dutydate"]."</td>";
				echo "<td>".$I["dutymonth"]."</td>";
				echo "<td>".$I["dutytime"]."</td>";
				echo "<td>".$I["dutycentre"]."</td>";
				echo "</tr>";
				$i++;
			}
			?>
		</tbody>
	</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	
       <p> <a href="logout.php" class ="btn-link1">Logout</a></p>

    
</div>
