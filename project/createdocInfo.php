<?php 
session_start();
if(!isset($_SESSION["loggedGov"])){
	header("Location: login.php");
}
	include 'controllers/createdoccontroller.php';
	$Information = getAllDoc();
	
?>
<link rel="stylesheet" href="style/createdocinfostyle.css">
<html>
<head>
	<script>
function get(id){
	return document.getElementById(id);
}
function searchDoc(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","searchDoc.php?key="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			get("suggesstion").innerHTML = this.responseText;
		}
	};
	xhr.send();
}
</script>
</head>
<tr>
        <td><a href="govdetails.php">Back to Home</a></td>

    </tr>
	
<body>
<div class="center">
	<h3 class="text">CRUD Doctor</h3>
	<input type="text" class="form-control" placeholder="Search..." onkeyup="searchDoc(this)">
	<div id="suggesstion"></div>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Doctor's Name</th>
			<th> Birthdate</th>
			<th>Birthmonth</th>
			<th>Birthyear</th>
			<th>Gender</th>
			<th>Email </th>
			<th>Phone Number </th>
			<th>Address</th>
			<th>Degree </th>
			
			<th></th>
			<th></th>
			
		</thead>
		<?php
			$i = 1;
			foreach($Information as $I)
			{
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>".$I["name"]."</td>";
				echo "<td>".$I["birthdate"]."</td>";
				echo "<td>".$I["birthmonth"]."</td>";
				echo "<td>".$I["birthyear"]."</td>";
				echo "<td>".$I["gender"]."</td>";
				echo "<td>".$I["email"]."</td>";
				echo "<td>".$I["phone"]."</td>";
				echo "<td>".$I["address"]."</td>";
				echo "<td>".$I["degree"]."</td>";
				echo '<td><a href="editcreatedocinfo.php?id='.$I["id"].'" class="btn btn-success" >Update</a></td>';
				echo '<td><a href="deleteDoc.php?id='.$I["id"].'" class="btn btn-success1">Delete</a></td>';
				echo "</tr>";
				$i++;
			}
			?>
		</tbody>
	</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<tr>
        <p><a href="logout.php" class ="btn-link1">Logout</a></p>

    </tr>
</div>
		</body>
</html>