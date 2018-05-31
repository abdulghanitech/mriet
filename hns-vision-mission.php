<?php
$category = "Departments";
$sub_category= "Humanity & Sciences";
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
				<b><div class="text-center">H&S Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
		
			
				<img src="img/h&s.jpg" class="img-responsive center-block" style="width: 70%;">
						
		
		<h3 class="page-header">Vision and Mission</h3>                   
                            <p><strong>Vision of the Department:</strong></p>
    <p>To be a promising school of scientific temper; to shape engineers adaptable to challenging workspace and potential to meet social requirements

</p><br />
    <p><strong>Mission of the Department:</strong></p>
    <p>1. To shape next generation engineers capable of addressing the emerging technological advancement; competent in communication and committed to the welfare of human beings.</p>
	<p>2. To create a research atmosphere by expanding the accessibility of resources beyond national standards.</p>
	<p>3. To contribute a human resource that is deep and diverse in knowledge.</p>
			
		</div></div>




<?php include('footer.php'); ?>