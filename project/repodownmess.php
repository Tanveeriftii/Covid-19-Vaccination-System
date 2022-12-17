<?php
session_start();
if(!isset($_SESSION["loggedGov"])){
	header("Location: login.php");
}
?>
<link rel="stylesheet" href="style/repomessstyle.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Report</title>
</head>
<body>
<tr>
        <td><a href="govdetails.php">Back to Home</a></td>

    </tr><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <h1>Report has been Downloaded!</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <p><td><a href="logout.php" class="btn-link1">Logout</a></p>
</body>
</html>