<?php
$category = "Campus Life";
$sub_category= "Transport";
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
				<b><div class="text-center"><?php echo $category; ?></div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
		<h3><center><b>Professional Code of Conduct</b></center></h3>
		 <table class="table table-striped table-hover"><tbody>
<tr><td><h4 class="panel-title"><b>Code of Conduct for Governing Body</b></h4></td><td><a class="accordion-toggle" data-toggle="modal" href="assets/images/GoverningBodycc.PDF">Click to View Doccument</a></td></tr>

<tr><td><h4 class="panel-title"><b>Code of conduct of Principal </b></h4></td><td> <a class="accordion-toggle" data-toggle="modal" href="assets/images/principalcc.PDF">Click to View Doccument</a></td></tr>

<tr><td><h4 class="panel-title"><b>Code Of Conduct for Teaching Staff:</b></h4></td><td> <a href="assets/images/teacherscc.PDF">Click to View Doccument</a></td></tr>


<tr><td><h4 class="panel-title"><b>Code Of Conduct For Students</b></h4></td><td> <a class="accordion-toggle" data-toggle="modal" href="assets/images/studentcc.PDF">Click to View Doccument</a></td></tr>

<tr><td>
<h4 class="panel-title"><b>Code of Conduct For Administrative Staff</b></h4></td><td> <a href="assets/images/admincc.PDF">Click to View Doccument</a></td></tr></tbody></table>

		


			
		</div></div>




<?php include('footer.php'); ?>