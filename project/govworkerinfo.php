<?php 
	include 'controllers/Govcontroller.php';
	$Information = getAllGovt();
	
?>


<html>
	<head>
	<link rel="stylesheet" href="style/govworinfostyle.css">
	<script>
				function get(id){
	return document.getElementById(id);
}
function searchGov(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","searchgovworker.php?key="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			get("suggesstion").innerHTML = this.responseText;
		}
	};
	xhr.send();
}
	</script>

	</head>
	<body>
<div class="center">
<tr>
        <td><a href="govdetails.php">Back to Home</a></td>

    </tr>
	<h3 class="text">Update Govt. Workers info</h3>
	<input type="text" class="form-control" placeholder="Search..." onkeyup="searchGov(this)">
	<div id="suggesstion"></div>
	<table class="table table-striped">
		<thead>
        <th>Sl#</th>
			<th>First Name</th>
			<th> Last Name</th>
			<th>Email </th>
			<th>Phone Number </th>
            <th>Birthday </th>
			<th>Birth Month </th>
			<th>Birth Year</th>
			<th>Gender </th>
			<th>Address </th>
			
		
			<th></th>
			<th></th>
			
		</thead>
		<?php
			$i = 1;
			foreach($Information as $I)
			{
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>".$I["fname"]."</td>";
				echo "<td>".$I["lname"]."</td>";
				echo "<td>".$I["email"]."</td>";
                echo "<td>".$I["phonenumber"]."</td>";
				echo "<td>".$I["birthday"]."</td>";
				echo "<td>".$I["birthmonth"]."</td>";
				echo "<td>".$I["birthyear"]."</td>";
				echo "<td>".$I["gender"]."</td>";
                echo "<td>".$I["address"]."</td>";
				echo '<td><a href="editgovworinfo.php?id='.$I["id"].'" class="btn btn-success">Update</a></td>';
				echo "</tr>";
				$i++;
			}
			?>
		</tbody>
	</table>
	
	<div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   
		

	
        <p><a href="logout.php" class="btn-link1">Logout</a></p>

    

		</body>
</html>