<?php
$category = "Departments";
$sub_category= "Electronics & Communication Engineering";
$sub_sub_category = "ECE Home";

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
				<b><div class="text-center">ECE Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">

		<img src="img/ece logo.jpg" class="img-responsive center-block" style="width: 70%;">

		<p class="para-fix" align="justify">&nbsp; &nbsp;&nbsp;&nbsp;The ECE department of MRIET aims for a platform to bring out the technical and cultural talents of the students of the department. The department has an electronics Association namely <b>Electro-Trendz</b> which conducts a number of seminars about the recent trends in electronics and communication like embedded systems etc, by eminent personalities from the industry. In addition to the normal syllabus and regular experiments our department inspires and gives proper guidance for developing technical skills like mini projects, seminars covering latest developments and trends in these domain of specialization..<br><br>

     

     	</p>
			
		</div></div>




<?php include('footer.php'); ?>