  
<?php
		$nameTFerr="";
		$nameTF="";
		
		$usernameTFerr="";
		$usernameTF="";

		$passwordTFerr="";
		$passwordTF="";

		$conpasswordTFerr="";
		$conpasswordTF="";
		
		$emailTFerr="";
		$emailTF="";
		
		$err_num1="";
		$num1="";
		
		$err_num2="";
		$num2="";
		
		$err_date="";
		
		$err_ad="";
		$sa1="";
		$city="";
		$state="";
		$pc="";
		
		$err_hr="";

		$bio="";
		$bio_err="";
		
		if(isset($_POST['submit']))
		{
			
			if(empty($_POST['nameTF']) || strlen(trim($_POST['nameTF']))<1)
			{
				$nameTFerr="*";
			}
			else
			{			
				$nameTF=htmlspecialchars($_POST['nameTF']);
				$nameTFerr="";
			}
			
			if(empty($_POST['usernameTF']) || strlen(trim($_POST['usernameTF']))<6)
			{
				$usernameTFerr="*";
			}
			else
			{			
				$usernameTF=htmlspecialchars($_POST['usernameTF']);
				$usernameTFerr="";
			}

			if(empty($_POST['passwordTF']) || strlen(trim($_POST['passwordTF']))<8 || (strpos($_POST['passwordTF'],'#') == false || strpos($_POST['passwordTF'],'?') == false))
			{
				$passwordTFerr="*";
			}
			else
			{			
				$passwordTF=htmlspecialchars($_POST['passwordTF']);
				$passwordTFerr="";
			}

			if(empty($_POST['conpasswordTF']) || $_POST['conpasswordTF'] !== $_POST['passwordTF'])
			{
				$conpasswordTFerr="*";
			}
			else
			{			
				$conpasswordTF=htmlspecialchars($_POST['conpasswordTF']);
				$conpasswordTFerr="";
			}
			
			if(empty($_POST['emailTF']))
			{
				$emailTFerr="*";
			}
			else
			{
				if(strpos($_POST['emailTF'],'@') !== false && strpos($_POST['emailTF'],'.') !== false)
				{
					$mail=htmlspecialchars($_POST['emailTF']);
				}
				else
				{
					$emailTFerr="*";
				}
			}
			
			if(empty($_POST['num1']))
			{
				$err_num1="*";
			}
			else
			{
				$num1=htmlspecialchars($_POST['num1']);
			}
			
			if(empty($_POST['num2']))
			{
				$err_num2="*";
			}
			else
			{
				if(is_numeric($_POST['num2']) && strpos($_POST['num2'],'.') == false)
				{
					$num2=htmlspecialchars($_POST['num2']);
				}
				else
				{
					$err_num2="*";
				}
			}
			
			if($_POST['Month'] == "" || $_POST['Day'] == "" || $_POST['year'] == "")
			{
				$err_date="*";
			}
			else{}
			
			if(($_POST['month'] == "February" && (int)$_POST['year']%4 == 0 && (int)$_POST['day'] > 29) || ($_POST['month'] == "February" && (int)$_POST['year']%4 != 0 && (int)$_POST['day'] > 28))
			{
				$err_date="*";
			}
			else{}
			
			if(($_POST['month'] == "April" && (int)$_POST['day'] > 30) || ($_POST['month'] == "June" && (int)$_POST['day']  > 30) || ($_POST['month'] == "September" && (int)$_POST['day'] > 30) || ($_POST['month'] == "November" && (int)$_POST['day']  > 30))
			{
				$err_date="*";
			}
			else{}
			
			if((empty($_POST['sa1'])) || (empty($_POST['city'])) || (empty($_POST['state'])) || (empty($_POST['pc'])) || (is_numeric($_POST['pc'])==false))
			{
				$err_ad="*";
			}
			else
			{			
				$sa1=htmlspecialchars($_POST['sa1']);
				$city=htmlspecialchars($_POST['city']);
				$state=htmlspecialchars($_POST['state']);
				$pc=htmlspecialchars($_POST['pc']);		
			}
			
			if(isset($_POST['hr']) == false)
			{
				$err_hr="*";
			}

			if(empty($_POST['bio']) || strlen(trim($_POST['bio']))<1)
			{
				$bio_err="*";
			}
			else
			{			
				$bio=htmlspecialchars($_POST['bio']);
				$bio_err="";
			}
		}
	?>

<html>
	<head>
	
	</head>
	
	<body>
		<form method="post" action="">
		
			<Fieldset>
				<legend>
					<h1>Admin Account</h1>
				</legend>
				<table align="center">
					<tr>
						<td>Name</td>
						<td><input type="text" id="nameTF" name="nameTF" value="<?php echo $nameTF; ?>"></td>
						<td> <font color="red">  <?php echo $nameTFerr; ?> </font> </td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" id="usernameTF" name="usernameTF" value="<?php echo $usernameTF; ?>"></td>
						<td> <font color="red">  <?php echo $usernameTFerr; ?> </font> </td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" id="passwordTF" name="passwordTF" value="<?php echo $passwordTF; ?>"></td>
						<td> <font color="red">  <?php echo $passwordTFerr; ?> </font> </td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" id="conpasswordTF" name="conpasswordTF" value="<?php echo $conpasswordTF; ?>"></td>
						<td> <font color="red">  <?php echo $conpasswordTFerr; ?> </font> </td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" id="emailTF" name="emailTF" value="<?php echo $emailTF; ?>"></td>
						<td> <font color="red">  <?php echo $emailTFerr; ?> </font> </td>
					</tr>
					<tr>
						<td>Phone</td>
						<td><input placeholder="code" type="text" id="num1" name="num1" value="<?php echo $num1; ?>"> <font color="red">  <?php echo $err_num1; ?> </font>  - <input placeholder="Number" type="text" id="num2" name="num2" value="<?php echo $num2; ?>"></td>
						<td> <font color="red">  <?php echo $err_num2; ?> </font> </td>
					</tr>
					<tr valign="top">
						<td>Address</td>
						<td>
							<input placeholder="Street Address" type="text" name="sa1" value="<?php echo $sa1;?>">
							<br>
							<input placeholder="City" type="text" name="city" value="<?php echo $city;?>">-
							<input placeholder="State" type="text" name="state" value="<?php echo $state;?>">
							<br>
							<input placeholder="Postal/Zip Code" type="text" name="pc" value="<?php echo $pc;?>">
							<br>
						</td>
						<td><font color="red"><?php echo $err_ad;?></font></td>
					</tr>
					<tr valign="top">
						<td>Birth Date</td>
						<td>
							<select name="month">
								<option  value= "" selected="selected"> Month </option>
								<option  value= "January"> January </option>
								<option  value= "February"> February </option>
								<option  value= "March"> March </option>
								<option  value= "April"> April </option>
								<option  value= "May"> May </option>
								<option  value= "June"> June </option>
								<option  value= "July"> July </option>
								<option  value= "August"> August </option>
								<option  value= "September"> September </option>
								<option  value= "October"> October </option>
								<option  value= "November"> November </option>
								<option  value= "December"> December </option>
							</select>
							&nbsp
							<select name="day">
								<option value= "" selected="selected"> Day </option>
								<?php
									for($i=1;$i<=31;$i++)
									{
										echo "<option  value= '$i'> $i </option>";
									}
								?>
							</select>
							&nbsp
							<select name="year">
								<option value= "" selected="selected"> Year </option>
								<option value= "1997"> 1997 </option>
								<option value= "1998"> 1998 </option>
								<option value= "1999"> 1999 </option> 
                                <option value= "2000"> 2000 </option>
                                <option value= "2001"> 2001 </option>
                                <option value= "2002"> 2002 </option>
                                <option value= "2003"> 2003 </option>
                                <option value= "2004"> 2004 </option>
                                <option value= "2005"> 2005 </option>
                                <option value= "2006"> 2006 </option>
                                <option value= "2007"> 2007 </option>
                                <option value= "2008"> 2008 </option>
                                <option value= "2009"> 2009 </option>
                                <option value= "2010"> 2010 </option>
                                <option value= "2011"> 2011 </option>
                                <option value= "2012"> 2012 </option>
                                <option value= "2013"> 2013 </option>
                                <option value= "2014"> 2014 </option>
                                <option value= "2015"> 2015 </option>
                                <option value= "2016"> 2016 </option>
                                <option value= "2017"> 2017 </option>
                                <option value= "2018"> 2018 </option>
                                <option value= "2019"> 2019 </option>
                                <option value= "2020"> 2020 </option>
                                <option value= "2021"> 2021 </option>
                                

							</select>
							<br>
						</td>
						<td><font color="red"><?php echo $err_date;?></font></td>	
					</tr>
					
					<tr>
						<td colspan="3" align="center"><button type="submit" name="submit" id="submit">submit</button></td>
					</tr>

				</table>
			</Fieldset>

		</form>
	</body>
</html>