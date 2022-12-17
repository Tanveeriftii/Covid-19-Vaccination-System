<?php
$first_name="";
$err_first_name="";
$mid_name="";
$err_mid_name="";
$last_name="";
$err_last_name="";
$birthdate = "";
$err_birthdate = "";
$birthmonth = "";
$err_birthmonth = "";
$birthyear = "";
$err_birthyear = "";
$gender="";
$err_gender="";
$appointment_time="";
$err_appointment_time="";
$inst_name1="";
$err_inst_name1="";
$year1="";
$err_year1="";
$div1="";
$err_div1="";
$position1="";
$err_position1="";
$inst_name2="";
$err_inst_name2="";
$year2="";
$err_year2="";
$div2="";
$err_div2="";
$position2="";
$err_position2="";
$inst_name3="";
$err_inst_name3="";
$year3="";
$err_year3="";
$div3="";
$err_div3="";
$position3="";
$err_position3="";
$job_desg1="";
$err_job_desg1="";
$from1="";
$err_from1="";
$to1="";
$err_to1="";
$org_name1="";
$err_org_name1="";
$job_desg2="";
$err_job_desg2="";
$from2="";
$err_from2="";
$to2="";
$err_to2="";
$org_name2="";
$err_org_name2="";
$job_desg3="";
$err_job_desg3="";
$from3="";
$err_from3="";
$to3="";
$err_to3="";
$org_name3="";
$err_org_name3="";
$job_desg4="";
$err_job_desg4="";
$from4="";
$err_from4="";
$to4="";
$err_to4="";
$org_name4="";
$err_org_name4="";
$membership="";
$err_membership="";

$hasError =false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  if(empty($_POST["first_name"]))
  {
    $hasError=true;
    $err_first_name="First Name Required";
  }
  else if(strlen($_POST["first_name"])<= 4)
{
  $hasError = true;
  $err_first_name = "Name must be greater than 4 characters";
}
  else {
    $first_name=$_POST["first_name"];
  }
  if(empty($_POST["middle_name"]))
  {
    $hasError=true;
    $err_mid_name="Middle Name Required";
  }
  else if(strlen($_POST["middle_name"])<= 4)
{
  $hasError = true;
  $err_mid_name = "Name must be greater than 4 characters";
}
  else {
    $mid_name=$_POST["middle_name"];
  }
  if(empty($_POST["last_name"]))
  {
    $hasError=true;
    $err_last_name="Last Name Required";
  }
  else if(strlen($_POST["last_name"])<= 4)
{
  $hasError = true;
  $err_last_name = "Name must be greater than 4 characters";
}
  else {
    $last_name=$_POST["last_name"];
  }
  if (!isset($_POST["birthdate"])){
    $hasError = true;
    $err_birthdate="Date Required";
  }
  else{
    $birthdate = $_POST["birthdate"];
  }
  if (!isset($_POST["birthmonth"])){
    $hasError = true;
    $err_birthmonth="Month Required";
  }
  else{
    $birthmonth = $_POST["birthmonth"];
  }
  if (!isset($_POST["birthyear"])){
    $hasError = true;
    $err_birthyear="Year Required";
  }
  else{
    $birthyear = $_POST["birthyear"];
  }
  if(!isset($_POST["gender"])){
    $hasError = true;
    $err_gender="Gender Required";
  }
  else{
    $gender = $_POST["gender"];
  }
  if (empty($_POST["appointment_time"])){
    $hasError = true;
    $err_appointment_time="Appoinment Required";
  }
  else{
    $appointment_time = $_POST["appointment_time"];
  }
  if (empty($_POST["inst_name1"])){
    $hasError = true;
    $err_inst_name1="Institution Name Required";
  }
  else{
    $inst_name1 = $_POST["inst_name1"];
  }
  if (empty($_POST["year1"])){
    $hasError = true;
    $err_year1="Year1 Required";
  }
  else{
    $year1 = $_POST["year1"];
  }
  if (empty($_POST["div1"])){
    $hasError = true;
    $err_div1="Division1 Required";
  }
  else{
    $div1 = $_POST["div1"];
  }
  if (empty($_POST["position1"])){
    $hasError = true;
    $err_position1="Position1 Required";
  }
  else{
    $position1 = $_POST["position1"];
  }
  if (empty($_POST["inst_name2"])){
    $hasError = true;
    $err_inst_name2="Institution Name Required";
  }
  else{
    $inst_name2 = $_POST["inst_name2"];
  }
  if (empty($_POST["year2"])){
    $hasError = true;
    $err_year2="Year2 Required";
  }
  else{
    $year2 = $_POST["year2"];
  }
  if (empty($_POST["div2"])){
    $hasError = true;
    $err_div2="Division2 Required";
  }
  else{
    $div2 = $_POST["div2"];
  }
  if (empty($_POST["position2"])){
    $hasError = true;
    $err_position2="Position2 Required";
  }
  else{
    $position2 = $_POST["position2"];
  }
  if (empty($_POST["inst_name3"])){
    $hasError = true;
    $err_inst_name3="Institution Name Required";
  }
  else{
    $inst_name3 = $_POST["inst_name3"];
  }
  if (empty($_POST["year3"])){
    $hasError = true;
    $err_year3="Year3 Required";
  }
  else{
    $year3 = $_POST["year3"];
  }
  if (empty($_POST["div3"])){
    $hasError = true;
    $err_div3="Division3 Required";
  }
  else{
    $div3 = $_POST["div3"];
  }
  if (empty($_POST["position3"])){
    $hasError = true;
    $err_position3="Position3 Required";
  }
  else{
    $position3 = $_POST["position3"];
  }
  if (empty($_POST["job_desg1"])){
    $hasError = true;
    $err_job_desg1="Job1 Required";
  }
  else{
    $job_desg1 = $_POST["job_desg1"];
  }
  if (empty($_POST["from1"])){
    $hasError = true;
    $err_from1="Form1 Required";
  }
  else{
    $from1 = $_POST["from1"];
  }
  if (empty($_POST["to1"])){
    $hasError = true;
    $err_to1="To1 Required";
  }
  else{
    $to1 = $_POST["to1"];
  }
  if (empty($_POST["org_name1"])){
    $hasError = true;
    $err_org_name1="Organization1 Required";
  }
  else{
    $org_name1 = $_POST["org_name1"];
  }
  if (empty($_POST["job_desg2"])){
    $hasError = true;
    $err_job_desg2="Job2 Required";
  }
  else{
    $job_desg2 = $_POST["job_desg2"];
  }
  if (empty($_POST["from2"])){
    $hasError = true;
    $err_from2="Form2 Required";
  }
  else{
    $from2 = $_POST["from2"];
  }
  if (empty($_POST["to2"])){
    $hasError = true;
    $err_to2="To2 Required";
  }
  else{
    $to2 = $_POST["to2"];
  }
  if (empty($_POST["org_name2"])){
    $hasError = true;
    $err_org_name2="Organization2 Required";
  }
  else{
    $org_name2 = $_POST["org_name2"];
  }
  if (empty($_POST["job_desg3"])){
    $hasError = true;
    $err_job_desg3="Job3 Required";
  }
  else{
    $job_desg3 = $_POST["job_desg3"];
  }
  if (empty($_POST["from3"])){
    $hasError = true;
    $err_from3="Form3 Required";
  }
  else{
    $from3 = $_POST["from3"];
  }
  if (empty($_POST["to3"])){
    $hasError = true;
    $err_to3="To3 Required";
  }
  else{
    $to3 = $_POST["to3"];
  }
  if (empty($_POST["org_name3"])){
    $hasError = true;
    $err_org_name3="Organization3 Required";
  }
  else{
    $org_name3 = $_POST["org_name3"];
  }
  if (empty($_POST["job_desg4"])){
    $hasError = true;
    $err_job_desg4="Job4 Required";
  }
  else{
    $job_desg4 = $_POST["job_desg4"];
  }
  if (empty($_POST["from4"])){
    $hasError = true;
    $err_from4="Form4 Required";
  }
  else{
    $from4 = $_POST["from4"];
  }
  if (empty($_POST["to4"])){
    $hasError = true;
    $err_to4="To4 Required";
  }
  else{
    $to4 = $_POST["to4"];
  }
  if (empty($_POST["org_name4"])){
    $hasError = true;
    $err_org_name4="Organization4 Required";
  }
  else{
    $org_name4 = $_POST["org_name4"];
  }
  if(!isset($_POST["membership"])){
    $hasError = true;
    $err_membership="Membership Required";
  }
  else{
    $membership = $_POST["membership"];
  }



  if(!$hasError) {
    echo $_POST["first_name"]."<br>";
    echo $_POST["middle_name"]."<br>";
    echo $_POST["last_name"]."<br>";
    echo $_POST["birthdate"]."<br>";
    echo $_POST["birthmonth"]."<br>";
    echo $_POST["birthyear"]."<br>";
    echo $_POST["gender"]."<br>";
    echo $_POST["appointment_time"]."<br>";
    echo $_POST["inst_name1"]."<br>";
    echo $_POST["year1"]."<br>";
    echo $_POST["div1"]."<br>";
    echo $_POST["position1"]."<br>";
    echo $_POST["inst_name1"]."<br>";
    echo $_POST["year1"]."<br>";
    echo $_POST["div1"]."<br>";
    echo $_POST["position1"]."<br>";
    echo $_POST["inst_name2"]."<br>";
    echo $_POST["year2"]."<br>";
    echo $_POST["div2"]."<br>";
    echo $_POST["position2"]."<br>";
    echo $_POST["inst_name3"]."<br>";
    echo $_POST["year3"]."<br>";
    echo $_POST["div3"]."<br>";
    echo $_POST["position3"]."<br>";
    echo $_POST["job_desg1"]."<br>";
    echo $_POST["from1"]."<br>";
    echo $_POST["to1"]."<br>";
    echo $_POST["org_name1"]."<br>";
    echo $_POST["job_desg2"]."<br>";
    echo $_POST["from2"]."<br>";
    echo $_POST["to2"]."<br>";
    echo $_POST["org_name2"]."<br>";
    echo $_POST["job_desg3"]."<br>";
    echo $_POST["from3"]."<br>";
    echo $_POST["to3"]."<br>";
    echo $_POST["org_name3"]."<br>";
    echo $_POST["job_desg4"]."<br>";
    echo $_POST["from4"]."<br>";
    echo $_POST["to4"]."<br>";
    echo $_POST["org_name4"]."<br>";
    echo $_POST["membership"]."<br>";
  }

}

 ?>

<html>
<head>
    <title>Doctor Information Form</title>
</head>
<body>
			<div>
				<ul>
					<li ><a href="Homepage.php">Home</a></li>
				</ul>
			</div>
      <img height="300px" width="1366px" src="banner-img-doctor.jpg">

        <form action="" method="post">
            <table>
              <h3><u>Doctor Information:</u></h3>
              <tr>
                <td align="right">First Name:</td>
                <td>
                  <input type="text" name="first_name" value="<?php echo $first_name; ?>" placeholder="Enter first name">
                  <br>
                </td>
                <td><span><?php echo $err_first_name; ?> </span> </td>
              </tr>
              <tr>
                <td align="right">Middle Name:</td>
                <td>
                  <input type="text" name="middle_name" value="<?php echo $mid_name; ?>" placeholder="Enter middle name">
                  <br>
                </td>
                <td><span><?php echo $err_mid_name; ?> </span> </td>
              </tr>
              <tr>
                <td align="right">Last Name:</td>
                <td>
                  <input type="text" name="last_name" value="<?php echo $last_name; ?>" placeholder="Enter last name">
                  <br>
                </td>
                <td><span><?php echo $err_last_name; ?> </span> </td>
              </tr>
              <tr>
                <td align="right">Date of Birth
    	        </td>
              <td>
            	:<select name="birthdate">
            	 <option selected disabled >--Day--</option>
            	<?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
            	</select>
              <span><?php echo $err_birthdate;?></span>


            	<select name="birthmonth">
            	 <option selected disabled >--Month--</option>
            	<option>January</option>
            	<option>February</option>
            	<option>March</option>
            	<option>April</option>
            	<option>May</option>
            	<option>June</option>
            	<option>July</option>
            	<option>August</option>
            	<option>September</option>
            	<option>October</option>
            	<option>November</option>
            	<option>December</option>
            	</select>
              <span><?php echo $err_birthmonth;?></span>



            	<select name="birthyear">
            	 <option selected disabled >--Year--</option>
            	<?php for($i=1990;$i<=2021;$i++) echo "<option>$i</option>"; ?>
            	</select>
              <span><?php echo $err_birthyear;?></span>
            	</td>
            </tr>

                <br>
              </tr>
              <tr>
                <td align="right">Gender:</td>
                <td> <input type="radio" name="gender" value="Male">Male
                  <input type="radio" name="gender" value="Female">Female</td>
                  <td><span><?php echo $err_gender; ?> </span> </td>
              </tr>
              <tr>
                <td align="right">Date of appointment:</td>
                <td>
                  <input type="datetime-local" name="appointment_time" value="<?php echo $appointment_time; ?>">
                </td>
                <td><span><?php echo $err_appointment_time;?></span></td>
              </tr>
            </table>
        <h3><u>Educational Qualifications:</u></h3>
        <table>
                <tr>
                    <th>Serial</th>
                    <th>Degree</th>
                    <th>Board/Institute</th>
                    <th>Year</th>
                    <th>Division/CGPA</th>
                    <th>Position</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>SSC</td>
                  <td><input type="test" name="inst_name1" value="<?php echo $inst_name1; ?>" placeholder="insert institute name"><span><?php echo $err_inst_name1; ?> </span></td>
                  <td><input type="test" name="year1" value="<?php echo $year1; ?>" placeholder="insert year of graduation"><span><?php echo $err_year1; ?> </span></td>
                  <td><input type="test" name="div1" value="<?php echo $div1; ?>" placeholder="insert division/cgpa"><span><?php echo $err_div1; ?> </span></td>
                  <td><input type="test" name="position1" value="<?php echo $position1; ?>" placeholder="insert position"><span><?php echo $err_position1; ?> </span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>HSC/A'Levels</td>
                  <td><input type="test" name="inst_name2" value="<?php echo $inst_name2; ?>"><span><?php echo $err_inst_name2; ?></span></td>
                  <td><input type="test" name="year2" value="<?php echo $year2; ?>"><span><?php echo $err_year2; ?> </span></td>
                  <td><input type="test" name="div2" value="<?php echo $div2; ?>"><span><?php echo $err_div2; ?> </span></td>
                  <td><input type="test" name="position2" value="<?php echo $position2; ?>"><span><?php echo $err_position2; ?> </span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>MBBS</td>
                  <td><input type="test" name="inst_name3" value="<?php echo $inst_name3; ?>"><span><?php echo $err_inst_name3; ?></span></td>
                  <td><input type="test" name="year3" value="<?php echo $year3; ?>"><span><?php echo $err_year3; ?> </span></td>
                  <td><input type="test" name="div3" value="<?php echo $div3; ?>"><span><?php echo $err_div3; ?> </span></td>
                  <td><input type="test" name="position3" value="<?php echo $position3; ?>"><span><?php echo $err_position3; ?> </span></td>
                </tr>
        </table>

        <h3><u>Experience:</u></h3>
        <table>
          <tr>
              <th>Serial</th>
              <th>Job Designation</th>
              <th>From</th>
              <th>To</th>
              <th>Organization</th>
          </tr>
          <tr>
            <td>1.</td>
            <td><input type="test" name="job_desg1" value="<?php echo $job_desg1; ?>" placeholder="insert job designation"><span><?php echo $err_job_desg1; ?></span></td>
            <td><input type="date" name="from1" value="<?php echo $from1; ?>" placeholder="insert starting date"><span><?php echo $err_from1; ?></span></td>
            <td><input type="date" name="to1" value="<?php echo $to1; ?>" placeholder="insert regination date"><span><?php echo $err_to1; ?></span></td>
            <td><input type="test" name="org_name1" value="<?php echo $org_name1; ?>" placeholder="insert name of organization"><span><?php echo $err_org_name1; ?></span></td>
          </tr>
          <tr>
            <td>2.</td>
            <td><input type="test" name="job_desg2" value="<?php echo $job_desg2; ?>"><span><?php echo $err_job_desg2; ?></span></td>
            <td><input type="date" name="from2" value="<?php echo $from2; ?>"><span><?php echo $err_from2; ?></span></td>
            <td><input type="date" name="to2" value="<?php echo $to2; ?>"><span><?php echo $err_to2; ?></span></td>
            <td><input type="test" name="org_name2" value="<?php echo $org_name2; ?>"><span><?php echo $err_org_name2; ?></span></td>
          </tr>
          <tr>
            <td>3.</td>
            <td><input type="test" name="job_desg3" value="<?php echo $job_desg3; ?>"><span><?php echo $err_job_desg3; ?></span></td>
            <td><input type="date" name="from3" value="<?php echo $from3; ?>"><span><?php echo $err_from3; ?></span></td>
            <td><input type="date" name="to3" value="<?php echo $to3; ?>"><span><?php echo $err_to3; ?></span></td>
            <td><input type="test" name="org_name3" value="<?php echo $org_name3; ?>"><span><?php echo $err_org_name3; ?></span></td>
          </tr>
          <tr>
            <td>4.</td>
            <td><input type="test" name="job_desg4" value="<?php echo $job_desg4; ?>"><span><?php echo $err_job_desg4; ?></span></td>
            <td><input type="date" name="from4" value="<?php echo $from4; ?>"><span><?php echo $err_from4; ?></span></td>
            <td><input type="date" name="to4" value="<?php echo $to4; ?>"><span><?php echo $err_to4; ?></span></td>
            <td><input type="test" name="org_name4" value="<?php echo $org_name4; ?>"><span><?php echo $err_org_name4; ?></span></td>
          </tr>
        </table>
        <h3><u>Membership:</u></h3>
        <fieldset>
          <table>
            <tr>
              <td><input type="radio" name="membership" value="Bangladesh Medical Association">Bangladesh Medical Association</td>
              <td><input type="radio" name="membership" value="American Medical Accosiation">American Medical Accosiation</td>
              <td><input type="radio" name="membership" value="Canada Medical Society">Canada Medical Society</td>
              <td><input type="radio" name="membership" value="others">Others</td>
              <td></td><td></td><td></td><td></td><td></td>
              <td><span><?php echo $err_membership; ?> </span> </td>
            </tr>
          </table>
        </fieldset>
        <table align="center">
          <tr>
            <td ><input type="submit" name="submit" value="Submit"></td>
          </tr>
        </table>

  </form>
</body>
