<?php
$category = "Departments";
$sub_category= "Electronics & Communication Engineering";
$sub_sub_category = "Time Tables";

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
		<div class="panel panel-info">
			<div class="panel-heading">
				<b><div class="text-center">ECE Time Tables</div></b>
			</div>
			<div class="panel-body">
				<ul class="list-group"><center>
	           <li class="list-group-item"><a href="images/pdf/csett2k16.pdf"><b>Time Tables CTT 2016-17 SEM 2</b></a></li>
	           <li class="list-group-item"><a href="images/pdf/csett2k17.pdf"><b>ece CTT 2015-16 SEM 1</b></a></li> 
	            <li class="list-group-item"><a href="images/pdf/csett2k17.pdf"><b>ece time tables CTT 15-16 SEM 2</b></a></li> 
			</center>
	        </ul>

			</div>
		</div>

		
			
<br><br>                                        																		
		
				
		</div>
		</div>




<?php include('footer.php'); ?>