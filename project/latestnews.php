<?php
session_start();
if(!isset($_SESSION["loggedGov"])){
	header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style/latestnews.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News</title>
</head>
<tr>
        <td><a href="govdetails.php">Back to Home</a></td>

    </tr>
<h2>International</h2>
<body>
    <table border="2" align="center">
        <tr>
         
            <td align="center">First Detection of Covid-19 </td>
            <td>Place</td>
            <td>Total Vaccination Done Across the World </td>
            
</tr>
<tr>
           
            <td  align="center">31st December, 2019</td>
            <td>China</td>
            <td align="center">4.66 billion </td>
            
</tr>
</table><br><br><br>
<h2>National</h2>
<body>
    <table border="2" align="center">
        <tr>
         
            <td align="center">First Detection of Covid-19 </td>
            <td align="center">Place</td>
            <td>Total Vaccination Done in Bangladesh </td>
            
</tr>
<tr>
           
            <td  align="center">8th March, 2020</td>
            <td>Dhaka</td>
            <td align="center">Over 10 million </td>
</tr>

</table><br><br><br><br>

<p><a  href="sym.php"  >Click Here to See the Post Covid-19 Symptoms</a></p>
<p><a href="hos.php" >Click Here to See Latest Hospitals Updates</a></p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <p><a href="logout.php" class="btn-link1" >Logout</a></p>

    
</body>
</html>