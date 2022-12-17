<?php 

	require_once 'controllers/publicController.php';
	require_once 'controllers/regController.php';
	$public = getAllPublic();
?>
<!--addproduct starts -->
<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">

		<div class="form-group">
			<h4 class="text">Public ID:</h4> 
			<select name="p_id" class="form-control">
				<option selected disabled>Choose</option>
				<?php
					foreach($public as $p){
						echo "<option value='".$p["id"]."'>".$p["id"]."</option>";
					}
				?>
			</select>
		</div>

		<div class="form-group">
			<h4 class="text">Vaccine Date:</h4> 
			<input type="text" name="vaccine_date" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Dose Number:</h4> 
			<textarea type="text" name="Dose_number" class="form-control"></textarea>
		</div>

		<div class="form-group text-center">
			
			<input type="submit" name="add_regpublic" class="btn btn-success" value="Add Registation Public" class="form-control">
		</div>
	</form>
</div>
