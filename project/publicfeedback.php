<?php 
	require_once 'controllers/feedbackcontroller.php';
	include "publicheader.php";
		 session_start();
			if(!isset($_SESSION["loggedpublic"])){
				header("Location: loginpublic.php");
			}
        
?>

<html>
	<head>
	<link rel="stylesheet" href="CSS/feedback.css">
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


			return !hasError;
			
		}

		function refresh(){
			hasError=false;
			get("err_feedback").innerHTML ="";
		}

	</script>
	</head>
	<body>
	<a href="publicDetails.php"> Public Dashboard</a>

	<h1><u>Give Feedback as People:</u></h1>


    <h5 class="text-danger"><?php echo $err_db;?></h5>

	<form action="" onsubmit="return validate()" method="post">
		<fieldset>

		<table align="center">
				<tr>
					<td>Feedback</td>
					<td>: <input id="feedback" type="text" name="feedback" value="<?php echo $feedback; ?>"  placeholder=""> </td>
					<td><span id="err_feedback" > <?php echo $err_feedback;?> </span></td>
					
                </tr>
				<tr>
                    <td colspan="2" align="center"><input type="submit" name="btn_feedback" value="Submit"></td>

                </tr>


               
        </table>
		<tr>
        <td><a class="atag" href="logoutpublic.php">Logout</a></td>

    </tr>
			
			
			
		</fieldset>
		</form>
	</body>
</html>