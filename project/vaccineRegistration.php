<?php 

 	$firstname="";
 	$err_firstname="";
	$lastname="";
	$err_lastname="";
	$age="";
	$err_age="";
	$occupation="";
	$err_occupation="";
	$occupation1="";
	$err_occupation1="";
	$address="";
	$err_address="";
	$postal="";
	$err_postal="";
	$marital="";
	$err_marital="";
	$center="";
	$err_center="";

	


	$arrCenter= array("Dhaka Community Medical College and Hospital","Kurmitola Hopital","Mugda General Hospital","Al Helal Specialized Hospital Dhaka","Metropolitan Medical Centre Ltd");

 


 	$hasError =false;







	if(isset($_POST["submit"])){


		if(empty($_POST["firstname"])){
			$hasError = true;
			$err_firstname ="First Name  Required";
		}

		else{
			$firstname = htmlspecialchars($_POST["firstname"]);
		}


		if(empty($_POST["lastname"])){
			$hasError = true;
			$err_lastname ="Last Name Required";
		}

		else{
			$lastname = htmlspecialchars($_POST["lastname"]);
		}

		if(empty($_POST["age"])){
			$hasError = true;
			$err_age ="Age Required";
		}

		else{
			$age = htmlspecialchars($_POST["age"]);
		}

		if(empty($_POST["occupation"])){
			$hasError = true;
			$err_occupation ="Occupation Required";
		}

		else{
			$occupation = htmlspecialchars($_POST["occupation"]);
		}


		if(empty($_POST["occupation1"])){
			$hasError = true;
			$err_occupation1 ="Occupation 1 other Required";
		}

		else{
			$occupation1 = htmlspecialchars($_POST["occupation1"]);
		}

		
		if(empty($_POST["address"])){
			$hasError = true;
			$err_address ="Address Required";
		}

		else{
			$address = htmlspecialchars($_POST["address"]);
		}

		if(empty($_POST["postal"])){
			$hasError = true;
			$err_postal ="Postal Code Required";
		}

		else{
			$postal = htmlspecialchars($_POST["postal"]);
		}

		if(empty($_POST["marital"])){
			$hasError = true;
			$err_marital ="Please fill you are married or not!";
		}

		else{
			$marital= htmlspecialchars($_POST["marital"]);
		}


		if(empty($_POST["center"])){
			$hasError = true;
			$err_center ="Fill the Center you want to give vaccine!";
		}

		else{
			$center= htmlspecialchars($_POST["center"]);
		}

		





		

		if(!$hasError){
		echo "<h1>Form details</h1>";
		echo $_POST["firstname"]."<br>";
    	echo $_POST["lastname"]."<br>";
		echo $_POST["age"]."<br>";
    	echo $_POST["occupation"]."<br>";
		echo $_POST["occupation1"]."<br>";
		echo $_POST["address"]."<br>";
    	echo $_POST["postal"]."<br>";
		echo $_POST["marital"]."<br>";
    	echo $_POST["center"]."<br>";

		

		}




	}


	?>

	
	









<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
            <h1 align="center">Vaccine Registration</h1>
			<table>

			<span align="center"><img  height="200px" width="200px" src="2.png" alt=""></span>

				<tr>
					<td>First Name</td>
					<td>: <input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder=""> </td>
					<td><span> <?php echo $err_firstname;?> </span></td>
					
				</tr>
			
				<tr>
					<td>Last Name </td>
					<td>: <input type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder=""> </td>
					<td><span> <?php echo $err_lastname;?> </span></td>
					
				</tr>

			<tr>
                <td>Age</td>
                <td><input type="radio" value="older than 50 " <?php if($age=="older than 50") echo "checked"; ?> name="age"> older than 50</td>
				<td><input name="age" value="31-50" <?php if($age=="31-50") echo "checked"; ?> type="radio">31-50 </td>
				<td><input name="age" value="18-30" <?php if($age=="18-30 ") echo "checked"; ?> type="radio">18-30 </td>
				<td><input name="age" value="less than 18" <?php if($age=="less than 18") echo "checked"; ?> type="radio">less than 18 </td>
				<td><span> <?php echo $err_age;?> </span></td>

            </tr>

                <tr>
					<td>What's your Occupation?</td>
				<td> <input type="radio" value="Businessman" <?php if($occupation=="Male") echo "checked"; ?> name="occupation" >Businessman</td>
				<td> <input name="occupation" value="Goverment Worker" <?php if($occupation=="Goverment Worker") echo "checked"; ?> type="radio">Goverment Worker</td>
				<td> <input name="occupation" value="Banker" <?php if($occupation=="Banker") echo "checked"; ?> type="radio">Banker</td>
				<td> <input name="occupation" value="Student" <?php if($occupation=="Student") echo "checked"; ?> type="radio"> Student </td>
				<td> <input name="occupation" value="Teacher" <?php if($occupation=="Teacher") echo "checked"; ?> type="radio"> Teacher</td>
				<td> <input name="occupation" value="Others" <?php if($occupation=="Others") echo "checked"; ?> type="radio"> Others </td>
				<td><span> <?php echo $err_occupation;?> </span></td>

				

            </tr>

			<tr>
			<td><p>If Others than write it down here:</p> </td>
			<td> <br><input name="occupation1" type="text" placeholder=""> <br><br> </td>
			<td><span> <?php echo $err_occupation1;?> </span></td>
			
			
			</tr>


			<tr>
				<td><br> What's your Address?</td>
				<td> <input type="text" value="<?php echo $address; ?>" name="address"></td>
				<td><span> <?php echo $err_address;?> </span></td>

            </tr>


			<tr>
				<td><br> What's your Postal Code?</td>
				<td> <input type="text" name="postal" value="<?php echo $postal; ?>"></td>
				<td><span> <?php echo $err_postal;?> </span></td>

            </tr>
			


			<tr>
					<td>What is your marital status?</td>
				<td> <input type="radio" value="Single " <?php if($occupation=="Single") echo "checked"; ?> name="marital"> Single </td>
				<td> <input type="radio" value="Married " <?php if($occupation=="Married") echo "checked"; ?> name="marital"> Married </td>
				<td><span> <?php echo $err_marital;?> </span></td>

            </tr>


			<tr>
			<td>Which center do you want to give Vaccine? </td>
			 <td><select name="center">
						
						<option disabled selected>Hospital Center</option>
						<?php
							foreach($arrCenter as $a){
								if($a == $arrCenter) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
						?>
					</select>

					</td>
					<td><span> <?php echo $err_center; ?></span></td>
			
					</tr>


					

                <tr>
                    <td align="left"><input type="submit" name="submit" value="Submit"></td>

                </tr>

				<tr>
				<td>
					<p><br> If you are a Foreigners click here:<a href="foreignVaccineRegistration.php">Vaccine for Foreigners</a> </p>
				</td></tr>

               

		</table>
			
			
		</fieldset>
		</form>
	</body>
</html>