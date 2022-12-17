<?php
session_start();
if(!isset($_SESSION["loggedGov"])){
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style/feedbackansstyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
<tr>
        <td><a href="govdetails.php">Back to Home</a></td><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <h1>Thanks For Your Feedback!</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <p><a href="logout.php" class ="btn-link1">Logout</a></p>

</body>
</html>