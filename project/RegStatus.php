<?php
session_start();
require_once 'controllers/doctorController.php';
$doctordetails = getAllDoctor();
if (!isset($_SESSION["loggeddoc"])) {
  header("Location:login.php");
}
include 'mainheader.php';
 ?>
     <table border="3" align="center">
       <h1 align="center">Welcome <?php echo $_SESSION["loggeddoc"]; ?></h1>
       <th>
         <td>Name</td>
         <td>Username</td>
         <td>Gender</td>
         <td>Email</td>
         <td>Phone</td>
         <td>Address</td>
         <td>Degree</td>
         <td>Update</td>
         <td>Download vaccine registration card</td>

       </th>
       <tbody>
         <?php
  				$i = 1;
  				foreach($doctordetails as $d){
  					echo "<tr>";
  						echo "<td>$i</td>";
              echo "<td>".$d["name"]."</td>";
              echo "<td>".$d["username"]."</td>";
              echo "<td>".$d["gender"]."</td>";
              echo "<td>".$d["email"]."</td>";
              echo "<td>".$d["phone"]."</td>";
              echo "<td>".$d["address"]."</td>";
  						echo "<td>".$d["degree"]."</td>";
              echo '<td><a href="docupdateprofile.php?id='.$d["id"].'" style="background-color: lightgreen;
              border: none;
              color: black;
              padding: 5px 5px;
              text-align: right;
              text-decoration: none;
              display: inline-block;">Update</a></td>';
              echo '<td><a href="downloadvacregcard.php" style="background-color: lightgreen;
              border: none;
              color: black;
              padding: 5px 5px;
              text-align: center;
              text-decoration: none;
              display: inline-block;">Download</a></td>';
  					echo "</tr>";
  					$i++;
  				}
			?>
    </tbody>
     </table>
     <?php include'mainfooter.php'; ?>
