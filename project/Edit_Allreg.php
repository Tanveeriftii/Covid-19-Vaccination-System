<?php
require_once 'controllers/regController.php';

$id = $_GET["id"];
$r = getReg($id);



?>

<html>
  <body>
  <h4 class="text-danger"><?php echo $err_db;  ?></h4>
    <form action="" method="post">
      <p>Public ID: <?php echo $r["p_id"];?>   </p> <br>
      <p>Vaccine Date: <?php echo $r["vaccine_date"];?> </p> <br>
      <p>Dose_Number: <?php echo $r["Dose_number"];?>  </p> <br>

    

    
    </form>
  </body>
</html>