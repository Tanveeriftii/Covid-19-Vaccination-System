<?php 
	require_once 'controllers/feedbackGovcontroller.php';
		 session_start();
			if(!isset($_SESSION["loggedpublic"])){
				header("Location: loginpublic.php");
			}
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Confirmation</title>
</head>
<body>
<a class="home" href="publicDetails.php"> Public Dashboard</a>

    <h1>Feedback Confirmed!!</h1>

</body>

</html>
