<?php
$category = "Departments";
$sub_category= "Computer Science & Engineering";
$sub_sub_category = "Laboratories";

$pagename = $sub_sub_category." - ".$sub_category;

include('active-class-adder-v2.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $pagename; ?> - MRIET</title>
<?php include('header.php'); ?>

<div class="container-fluid">
<div class="row custom-row-grey-color">
	<div class="col-md-4">
	<h3><?php echo $sub_category; ?></h3>
	</div>
	<div class="col-md-8 breadcrumb-fix">
		<ul class="breadcrumb" style="margin-bottom: 5px;">
			You are here:
		  <li><a href="index.php">Home</a></li>
		  <li><a href="javascript:void(0)"><?php echo $category; ?></a></li>
		  <li class="active"><?php echo $sub_category; ?></li>
		</ul>
	</div>
</div>
	<div class="row">
		<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				<b><div class="text-center">CSE Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
		
			
				<img src="img/lab.jpg" class="img-responsive center-block">
			
			
				<br><br><div style="text-align: center;"><h3>Laboratories</h3><br>

								C Programming and Data Structures Lab<br><br>

								Java Programming Lab<br><br>

								Electrical and Electronics Lab<br><br>

								Database Management Systems Lab<br><br>

								Operating Systems Lab<br><br>

								Compiler Design Lab<br><br>

								Case Tools and Web Technologies Lab<br><br>

								Advanced Communication Skills Lab<br><br>

								Linux Programming Lab<br><br>

								Data Warehousing and Mining Lab<br><br>
					</div>
			
		
		

	
			
		</div></div>




<?php include('footer.php'); ?>