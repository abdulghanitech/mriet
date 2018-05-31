<?php
$category = "Departments";
$sub_category= "Electrical & Electronics Engineering";
$sub_sub_category = "Department Vision and Mission";

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
				<b><div class="text-center">EEE Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
		
			
				<img src="img/eee.jpg" class="img-responsive center-block" style="width: 70%;">
						
		
		<h3 class="page-header">Vision and Mission</h3>                   
                            <p><strong>Vision of the Department:</strong></p>
    <p>1. To produce globally competitive and socially sensitized Engineering graduates and to establish the dept as a center of excellence by bringing out the professional competence in the core areas of Electrical & Electronics Engineering.

</p><br />
    <p><strong>Mission of the Department:</strong></p>
    <p>1. To Provide Quality Education in the domain of Electrical & Electronics Engineering</p>
	<p>2. To Achieve Excellence in Technical Education through effective teaching-learning process and best infrastructure</p>
	<p>3. To assimilate the students with research and innovation to be an Effective Engineer.</p>
			
		</div></div>




<?php include('footer.php'); ?>