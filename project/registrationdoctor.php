<?php
 require_once 'controllers/doctorController.php';
?>
		<?php  include 'mainheader.php';?>
    <h5 class="db"><?php echo $err_db; ?> </h5>
		<form action="" onsubmit="return validate()" method="post">
		<fieldset class="r1">
      <p align="center">
			<table>
				<tr>
					<td colspan="4" align="center"><img src="download.jpg" alt=""> </td>
				</tr>
        <tr>
          <td colspan="2" align="center" class="r2"><h2><u>Doctor Registration</u></h2></td>
        </tr>
				<tr>
					<td>Name</td>
					<td>: <input id="name" type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Your name"> </td>
					<td><span id="err_name"><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>: <input id="username" type="text" onfocusout="checkUsername(this)" name="username" value="<?php echo $username; ?>" placeholder="Username">  </td>
					<td><span id="err_username"> <?php echo $err_username;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input id="password" type="password" name="password" placeholder="Password">  </td>
					<td><span id="err_password"> <?php echo $err_password;?> </span></td>
				</tr>
        <tr>
					<td>Confirm Password</td>
					<td>: <input id="confirmpassword" type="password" name="confirmpassword" placeholder="">  </td>
					<td><span id="err_confirmpassword"> <?php if ($password==$confirmpassword) {
						echo $err_confirmpassword;
					}
					else {
						echo "Wrong Password";
					}?> </span></td>
				</tr>


          <tr><td>Birth Date
					</td>
					<td>
					:<select id="birthdate" name="birthdate">
					 <option selected disabled >--Day--</option>
					<?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
					</select>
					<span id="err_birthdate"><?php echo $err_birthdate;?></span>

					<select id="birthmonth" name="birthmonth">
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
					<span id="err_birthmonth"><?php echo $err_birthmonth;?></span>


					<select id="birthyear" name="birthyear">
					 <option selected disabled >--Year--</option>
					<?php for($i=1990;$i<=2021;$i++) echo "<option>$i</option>"; ?>
					</select>
					<span id="err_birthyear"><?php echo $err_birthyear;?></span>
					</td> </tr>


          <tr>
					<td>Gender</td>
					<td>: <input type="radio" id="male" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" id="female" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
					<td><span id="err_gender"> <?php echo $err_gender;?> </span></td>
				</tr>
        <tr>
	<td>Email</td>
	<td>: <input id="email" name="email" value="<?php echo $email; ?>" type="text" placeholder="Enter email">
	<span id="err_email"><?php echo $err_email; ?></span></td>
	</tr>
	<tr>
	<td>Phone</td>
	<td>: <input id="phone" name="phone" value="<?php echo $phone; ?>" type="text" placeholder="Enter phone number">
	<span id="err_phone"><?php echo $err_phone; ?></span></td>
	</tr>
	<tr>
	<td>Address</td>
	<td>: <input id="address" name="address" value="<?php echo $address; ?>" type="text" placeholder="Street Address">
	<span id="err_address"><?php echo $err_address; ?></span></td>
	</tr>
  <tr>
    <td>Degree</td>
    <td>:<input id="degree" type="text" name="degree" value="<?php echo $degree; ?>" placeholder="Enter Degree"> </td>
    <td><span id="err_degree"><?php echo $err_degree; ?></span> </td>
  </tr>
  <br>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>

				</tr>
			</table>
      </p>

	  <h5><a href="login.php"> Do you want to login? </a></h5>
		</fieldset>
		</form>
    <script src="js/docregistration.js">    
    </script>
		<?php include 'mainfooter.php'; ?>
