<?php
$category = "Departments";
$sub_category= "Electrical & Electronics Engineering";
$sub_sub_category = "EEE Home";

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

		<p class="para-fix" align="justify">&nbsp; &nbsp;&nbsp;&nbsp;Department of Electrical & Electronics Engineering commits to work towards developing Power Engineers with a rich blend of competent, technical, managerial and social skills and contribute to nation building.
		<br><br>
      IBM's DB2 is made a part of DBMS practicals course in II B.Tech's II Semester for both eee & IT branches..<br><br>

     	</p>
			
		</div></div>




<?php include('footer.php'); ?>