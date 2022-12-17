<?php 
session_start();
if(!isset($_SESSION["loggedGov"])){
	header("Location: login.php");
}
	include 'controllers/createdoccontroller.php';
	$id = $_GET["id"];
	$I = getDoc($id);
	
?>
<html>
	<head>
	<link rel="stylesheet" href="style/editcreatedocinfostyle.css">
	</head>
	<body>
<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
        <table>
        <tr>
        <a href="govdetails.php">Back to Home</a><br><br><br><br><br><br><br><br>

   
          
             
          
			<p>Doctor's Name:
            <input type="hidden" name="id" value="<?php echo $I["id"];?>">
			<input type="text" name="name" value="<?php echo $I["name"];?>"></p>




        
             
			
			 <p>Birth Date:
			<input type="text" name="birthdate" value="<?php echo $I["birthdate"];?>"></p>

             
			
			 <p>Birth Month:
			 <input type="text" name="birthmonth" value="<?php echo $I["birthmonth"];?>"></p>
 
             
			 
			 <p>Birth Year:
			<input type="text" name="birthyear" value="<?php echo $I["birthyear"];?>"></p>



					<p>Gender:
			 <input type="text" name="gender" value="<?php echo $I["gender"];?>"></p>



                <p>Email:
          <input type="text" name="email" value="<?php echo $I["email"];?>"></p>

            
                <p>Phone Number:
            <input type="text" name="phone" value="<?php echo $I["phone"];?>"></p>

    
			 <p>Address:
			 <input type="text" name="address" value="<?php echo $I["address"];?>"></p>
 

        
                <p>Degree:
          <input type="text" name="degree" value="<?php echo $I["degree"];?>"></p>


		
		
			
			<p><input type="submit" name="edit_createdocinfo" class="btn btn-success" value="Update" class="form-control"></p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		

       
        <p><a href="logout.php"  class ="btn-link1">Logout</a></p>

	</form>
</body>
	</html>