<?php 
session_start();
if(!isset($_SESSION["loggedGov"])){
	header("Location: login.php");
}
		
        require_once 'controllers/feedbackGovcontroller.php';
?>

<html>
	<head>
	<link rel="stylesheet" href="style/feedbackstyle.css">
	<script>
			var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validate(){
				refresh();
				if(get("feedback").value == ""){
					hasError = true;
					get("err_feedback").innerHTML = "*Feedback Req";
				}
				else if(get("feedback").value.length <=2){
					hasError = true;
					get("err_feedback").innerHTML = "*Feedback must be > 2 char";
				}
				return !hasError;
			}
			function refresh(){
				hasError=false;
				get("err_feedback").innerHTML ="";
			}
		</script>
	</head>
	<body>
	<tr>
        <td><a href="govdetails.php">Back to Home</a></td>

    </tr><br><br><br><br><br><br><br><br><br><br><br><br>

	<h1>Give Feedback</h1>


    <h5 class="text-danger"><?php echo $err_db;?></h5>

	<form action="" onsubmit="return validate()" method="post">
		

	
       


				
					<p>Feedback:
					<textarea  name="feedback" id="feedback"  value=" <?php echo $feedback; ?>" placeholder="Comment here....."></textarea>
					<span id= "err_feedback"> <?php echo $err_feedback;?> </span></p>
					
			

				
				

				
                    <p><input type="submit"  class="btn btn-link" name="submit" value="Comment"></p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



               
        
		
        <p><a href="logout.php" class ="btn-link1">Logout</a></p>

    
			
			
		
		</form>
	</body>
</html>