<?php
$category = "Admissions";
$sub_category= "Download Application Form";
$sub_sub_category = "";

$pagename = $sub_category." - ".$category;

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
	<h3><?php echo $category; ?></h3>
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
				<b><div class="text-center">Admissions</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">

		
		<h3><b>Download Application Forms</b></h3>
	
		<p class="para-fix" align="justify">

		<a href="http://mriet.ac.in/images/pdf/BTech-MTech-MBA_applicationform_new.pdf">B. Tech/M.Tech/MBA Courses Admission Application Form</a><br><br>

		<a href="http://mriet.ac.in/images/pdf/Undertaking_form.pdf">Undertaking To Be Filled Students Form</a><br><br>

		<a href="http://mriet.ac.in/images/pdf/Aplicationn_for_SPOT_ADMISSION_form.PDF">Aplicationn for SPOT ADMISSION</a><br><br>
     	</p>
			
		</div></div>




<?php include('footer.php'); ?>