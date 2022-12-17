<?php
session_start();
include 'mainheader.php';
?>
    <p align="center">Thank you <?php echo $_SESSION["loggeddoc"]; ?> for submitting your vaccine Information</p>
    <p align="center"><a href="vacreportDetails.php">You can show all doctor's vaccine report</a></p>
<?php include'mainfooter.php'; ?>
