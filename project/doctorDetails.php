<?php
session_start();
require_once 'controllers/doctorController.php';
$doctordetails = getAllDoctor();
if (!isset($_SESSION["loggeddoc"])) {
  header("Location:logindoctor.php");
}
include 'mainheader.php';
 ?>
        <table align="center">
          <h1 align="center" ><u>Welcome <?php echo $_SESSION["loggeddoc"]; ?></u></h1>
          <tr>
            <td>
            <button style="background-color: lightgreen;
            border: 5px;
            border-radius: 30px;
            color: black;
            padding: 15px 32px;
            text-align: right;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;"><span onmouseover="showlnoc()" onmouseout="hidelnoc()">Latest news on Covid 19</span></button>
              <table id="lnoc" border="1" align="center" style="display:none" class="lnoc">
                <tr>

                    <th>New Infected</th>
                    <th>Death</th>
                    <th>Cure</th>


                </tr>
                <tr>
                  <td><ul>
                    <li>24 hours :  5268 </li>
                    <li>Total : 888406</li>
                  </ul> </td>
                  <td>
                    <ul>
                      <li>24 hours: 104</li>
                      <li>Total: 14276</li>
                    </ul>
                  </td>
                  <td>
                    <ul>
                      <li>24 hours: 3570</li>
                      <li>Total: 807673</li>
                    </ul>
                  </td>

                </tr>
              </table>
            </td>
            <td>
              <script>
              	function get(id){
              		return document.getElementById(id);
              	}
              	function loadDoc(){
              		var xhr = new XMLHttpRequest();
              		xhr.open("GET","vacAvailability.php",true);
              		xhr.onreadystatechange=function(){
              			if(this.readyState == 4 && this.status == 200){
              				get("demo").innerHTML = this.responseText;
              			}
              		};
              		xhr.send();
              	}
              </script>
              <button style="background-color: skyblue;
              border: 5px;
              border-radius: 30px;
              color: black;
              padding: 15px 32px;
              text-align: right;
              text-decoration: none;
              display: inline-block;
              margin: 4px 2px;" onclick="loadDoc()">Vaccine Available or not</button>
              <div id="demo"></div>

            </td>
            <td><button style="background-color: lightblue;
            border: 5px;
            border-radius: 30px;
            color: black;
            padding: 15px 32px;
            text-align: right;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;"><a href="RegStatus.php">Registration Status</a> </button> </td>
            <td></td>
            <td><button style="background-color: pink;
            border: 5px;
            border-radius: 30px;
            color: black;
            padding: 15px 32px;
            text-align: right;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;"><a href="vacReport.php">Vaccine Report</a> </button> </td>
            
          </tr>
        </table>

     <?php include'mainfooter.php'; ?>
