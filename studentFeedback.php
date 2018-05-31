<?php
$category = "Admissions";
$sub_category= "Contact for Admissions";
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
				<b><div class="text-center">Feedbacks</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">

		
		<h3><b>Computer Science & Engineering Feed back forms</b></h3>
		
		<table class="table table-striped table-hover"><tbody><tr><td>


<h4 class="panel-title"><b>2016-17 EMPLOYER FEEDBACK FORMS</b></h4></td><td> <a class="accordion-toggle" data-toggle="modal" href="assets/images/CSE-EMPLOYER FEEDBACK FORMS.pdf">Click to View Doccument</a></td></tr><tr><td>
	
<h4 class="panel-title"><b>2016-17 STUDENT EXIT FEEDBACK FORMS</b></h4></td><td> <a href="assets/images/CSE-STUDENT EXIT FEEDBACK FORMS.pdf">Click to View Doccument</a></td></tr><tr><td>

<h4 class="panel-title"><b>2016-17 PARENT FEEDBACK FORMS </b></h4></td><td><a class="accordion-toggle" data-toggle="modal" href="assets/images/CSE-PARENT FEEDBACK FORMS.pdf">Click to View Doccument</a></td></tr><tr><td>

<h4 class="panel-title"><b>2016-17 ALUMNI FEEDBACK FORMS</b></h4></td><td> <a class="accordion-toggle" data-toggle="modal" href="assets/images/CSE-ALUMNI FEEDBACK FORMS.pdf">Click to View Doccument</a></td></tr><tr><td>
	
<h4 class="panel-title"><b>2016-17 FEEDBACK FORM HOSTLERS</b></h4></td><td> <a href="assets/images/CSE-FEEDBACK FORM HOSTLERS.pdf">Click to View Doccument</a></td></tr></tbody></table>
	
		</div></div>




<?php include('footer.php'); ?>