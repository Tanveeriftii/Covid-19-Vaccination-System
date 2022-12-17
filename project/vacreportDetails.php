<?php
//session_start();
require_once 'controllers/vacRController.php';
$vaccineReport = getAllvacReport();
include 'mainheader.php';
 ?>
     <table border="3" align="center" class="vrd1">
       <h1 align="center">All <?php echo $_COOKIE["vacrepo"]; ?>'s Vaccine Report</h1>
       <th>
         <td>Name</td>
         <td>Username</td>
         <td>Age</td>
         <td>Gender</td>
         <td>Vaccine Dose</td>
         <td>Vaccine Day</td>
         <td>Vaccine Month</td>
         <td>Vaccine Year</td>
         <td>Vaccine Hours</td>
         <td>Vaccine Min</td>
         <td>AM/PM</td>
         <td>Update</td>

       </th>
       <tbody>
         <?php
  				$i = 1;
  				foreach($vaccineReport as $v){
  					echo "<tr>";
  						echo "<td>$i</td>";
              echo "<td>".$v["docname"]."</td>";
              echo "<td>".$v["docuname"]."</td>";
              echo "<td>".$v["age"]."</td>";
              echo "<td>".$v["gender"]."</td>";
              echo "<td>".$v["vaccinedose"]."</td>";
              echo "<td>".$v["vaccinedate"]."</td>";
              echo "<td>".$v["vaccinemonth"]."</td>";
              echo "<td>".$v["vaccineyear"]."</td>";
              echo "<td>".$v["vaccinehour"]."</td>";
              echo "<td>".$v["vaccinemin"]."</td>";
              echo "<td>".$v["ampm"]."</td>";
              echo '<td><a href="updatevacdose.php" style="background-color: lightgreen;
              border: none;
              color: black;
              padding: 5px 5px;
              text-align: right;
              text-decoration: none;
              display: inline-block;">Update</a></td>';
  					echo "</tr>";
  					$i++;
  				}
			?>
    </tbody>
     </table>
     <div align="center">
       <p style="padding:10px">Those who have completed 2 doses can claim certificate</p>
      <a style="background-color: lightgreen;
      border: none;
      border-radius: 30px;
      color: black;
      padding: 15px 32px;
      text-align: right;
      text-decoration: none;
      display: inline-block;" href="vacdoseau.php">Claim Certificate</a>
     </div>
     <?php include'mainfooter.php'; ?>
