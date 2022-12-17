<?php 
	require_once 'controllers/Govcontroller.php';
	
	$id = $_GET["id"];
	$I = getGov($id);
	
?>
<link rel="stylesheet" href="style/editgovworkinfostyle.css">

<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
	<tr>
        <td><a href="govdetails.php">Back to Home</a></td>

    </tr><br><br><br><br><br><br><br><br><br>
	<h1>Edit Govt. Worker Info</h1>
		
             
			
			 <p>First Name:
			 <input type="hidden" name="id" value="<?php echo $I["id"];?>">
			 <input type="text" name="fname" value="<?php echo $I["fname"];?>"></p>
 
             
			 
			 <p>Last Name:
			 <input type="text" name="lname" value="<?php echo $I["lname"];?>"></p>
 
             
			 
			 <p>Email:
			 <input type="text" name="email" value="<?php echo $I["email"];?>"></p>

           
			 <p>Phone Number:
			 <input type="text" name="phonenumber" value="<?php echo $I["phonenumber"];?>"></p>

            
			 <p>Birth Day:
			 <input type="text" name="birthday" value="<?php echo $I["birthday"];?>"></p>
        
			 
			 <p>Birth Month:
			 <input type="text" name="birthmonth" value="<?php echo $I["birthmonth"];?>"></p>
       
			 <p>Birth Year:
			 <input type="text" name="birthyear" value="<?php echo $I["birthyear"];?>"></p>

					<p>Gender:
			 <input type="text" name="gender" value="<?php echo $I["gender"];?>"></p>

             
			
			 <p>Address:
			 <input type="text" name="address" value="<?php echo $I["address"];?>"></p>
 

 
	
			
		<p>	<input type="submit" name="edit_govworinfo" class=" btn-success" value="Update" class="form-control"></p><br><br><br><br><br><br><br><br><br>
		
		
        <p><a href="logout.php" class="btn-link1">Logout</a></p>

	</form>
</div>


