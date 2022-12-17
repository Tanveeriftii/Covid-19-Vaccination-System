<?php
session_start();
if(!isset($_SESSION["loggedGov"])){
	header("Location: login.php");
}
	include 'controllers/doccontroller.php';
?>
<html>
	<head>
	<link rel="stylesheet" href="style/assignDocstyle.css">
	<script>
	var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validate()
			{
				refresh();
			
				if(get("docname").value == "")
				{
					hasError = true;
					get("err_docname").innerHTML = "*Doctor's Name Req";
				}
				if(get("day").selectedIndex == 0){
					hasError=true;
					get("err_day").innerHTML = "*Duty Day Req";
				}
				if(get("date").selectedIndex == 0){
					hasError=true;
					get("err_date").innerHTML = "*Duty Date Req";
				}
				if(get("month").selectedIndex == 0){
					hasError=true;
					get("err_month").innerHTML = "*Duty Month Req";
				}
				if(get("time").selectedIndex == 0){
					hasError=true;
					get("err_time").innerHTML = "*Duty Time Req";
				}
				if(get("centre").selectedIndex == 0){
					hasError=true;
					get("err_centre").innerHTML = "*Duty Centre Req";
				}
				if(get("img").value == "")
				{
					hasError = true;
					get("err_img").innerHTML = "*Image Req";
				}
				return !hasError;
			}
			function refresh()
			{
				hasError=false;
				get("err_docname").innerHTML = "";
				get("err_day").innerHTML = "";
				get("err_date").innerHTML = "";
				get("err_month").innerHTML = "";
				get("err_time").innerHTML = "";
				get("err_centre").innerHTML = "";
				get("err_img").innerHTML = "";
				
			}
			</script>
	</head>
	<body>
	<tr>
        <td><a href="govdetails.php">Back to Home</a></td><br><br><br><br><br><br><br><br><br>

    </tr>

	<h1>Assign Doctor for Vaccination</h1>


    <h5 class="text-danger"><?php echo $err_db;?></h5>

		<form action=""method="post" enctype="multipart/form-data" onsubmit="return validate()" method="post">
		

		


				
					<p>Doctor's Name:
					<input id="docname" type="text" name="docname" value="<?php echo $docname; ?>" placeholder="Enter Doctor's Name"> <p>
					<td><span id="err_docname"> <?php echo $err_docname;?> </span></td>
					
				
					<p>Select Duty Day:
					 <select id="day" name="dutyday">
						<option disabled selected>Day</option></p>
						<?php
							foreach($array as $p){
								if($p == $dutyday) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            ?>
						</select>
                        <td><span id="err_day"> <?php echo $err_dutyday;?> </span></td>
                        
					<p>Select Duty Date:
					 <select id="date" name="dutydate">
						<option disabled selected>Date</option>
						<?php
						for($i=1;$i<=31;$i++)
						{
							if($i ==$dutydate){
								echo "<option selected>$i</option>";
							}
							else{
								echo "<option>$i</option>";
							}
						}
						?>
						</select>
						<span id="err_date"> <?php echo $err_dutydate;?> </span>
                        </select>

						<select id="month" name="dutymonth">
						<option disabled selected>Month</option></p>
						<?php
							foreach($array2 as $p){
								if($p == $dutymonth) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            

						?>
						</select>
                        <td><span id="err_month"> <?php echo $err_dutymonth;?> </span></td>
                        
					<p>Select Duty Time:</td>
					 <select id="time" name="dutytime">
						<option disabled selected>Time</option></p>
						<?php
							foreach($array3 as $p){
								if($p == $dutytime) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            ?>
						</select>
                        <td><span id="err_time"> <?php echo $err_dutytime;?> </span></td>
                        
					<p>Select Duty Centre:
					<select id="centre" name="dutycentre">
						<option disabled selected>Centre</option></p>
						<?php
							foreach($array4 as $p){
								if($p == $dutycentre) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            ?>
						</select>
                        <td><span id="err_centre"> <?php echo $err_dutycentre;?> </span></td>

						<p class="text">Image
							<input id="img" type= "file" name="p_image" class="form-control">
							<span id="err_img"> <?php echo $err_img;?> </span></p>
                    
                
                    <p ><input type="submit"  class ="btn-link" name="submit" value="Submit"></p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                




        <p ><a href="logout.php" class ="btn-link1">Logout</a></p>

   
			
			
		
		</form>
	</body>
</html>


