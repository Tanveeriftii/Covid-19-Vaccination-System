<?php 
	include 'controllers/doccontroller.php';
    $id = $_GET["id"];
	$I = getDoc($id);
?>

	<div class="center">
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action="" method="post" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
                <input type="hidden" name="id" value="<?php echo $I["id"];?>" class="form-control">
				<input type="text" name="docname" value="<?php echo $I["docname"];?>" class="form-control">
			</div>
			
			<div class="form-group text-center">
				
				<input type="submit" name="edit_createdocinfo" class="btn btn-success" value="Edit " class="form-control">
			</div>

		
		</form>
	</div>

