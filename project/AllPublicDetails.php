<?php 


	require_once 'controllers/crudPubController.php';
	$public = getAllPublic();
	
?>

<html>

<head>
<script>
function get(id){
	return document.getElementById(id);
}
function searchPublic(e){
	if(e.value == ""){
		get("suggesstion").innerHTML = "";
		return;
	}
	var xhr = new XMLHttpRequest();
	xhr.open("GET","searchPublic.php?key="+e.value,true);
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
<link rel="stylesheet" href="style/createdocinfostyle.css">

<tr>
        <td><a href="#">Back to Home</a></td>

    </tr>

    <input type="text" class="form-control" placeholder="Search..." onkeyup="searchPublic(this)">
	<div id="suggesstion"></div>
	

<div class="center">
	<h3 class="text">CRUD Public</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
            <th>NID</th>
			<th> Public's Name <br></th>
			<th> Email</th>
            <th>Birthday</th>
			<th>Birthmonth</th>
			<th>Birthyear</th>
			<th>Gender</th>
			<th>Phone Number </th>
            <th>Occupation </th>
			<th>Address </th>
			<th>Center  </th>
			
			<th></th>
			<th></th>
			
		</thead>
		<?php
			$i = 1;
			foreach($public as $p)
			{
				echo "<tr>";
				echo "<td>$i</td>";
                echo "<td>".$p["nid"]."<br></td>";
				echo "<td>".$p["name"]."</td>";
                echo "<td>".$p["email"]."</td>";
				echo "<td>".$p["birthday"]."</td>";
				echo "<td>".$p["birthmonth"]."</td>";
				echo "<td>".$p["birthyear"]."</td>";
				echo "<td>".$p["gender"]."</td>";
				echo "<td>".$p["phonenumber"]."</td>";
                echo "<td>".$p["occupation"]."</td>";
                echo "<td>".$p["address"]."</td>";
                echo "<td>".$p["center"]."</td>";
                echo '<td><a href="editcreatePublicinfo.php?id='.$p["id"].'" class="btn btn-success" >Update</a></td>';
				echo '<td><a href="deletePublic.php?id='.$p["id"].'" class="btn btn-success1">Delete</a></td>';
				echo "</tr>";
				$i++;
			}
			?>
		</tbody>
	</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</div>


</body>



</html>