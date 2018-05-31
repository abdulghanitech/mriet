<?php
$category = "Departments";
$sub_category= "Electronics & Communication Engineering";
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
				<b><div class="text-center">ECE Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
		
			
			
			
			
				<br><br><div style="text-align: center;"><h3>Laboratories</h3><br>

1.	Electronic Devices and Circuits Lab-1 <br><br>

2.	Electronic Devices and Circuits Lab-2<br><br>

3.	Basic simulation Lab.<br><br>

4.	Electronic Circuits and Pulse Circuits hardware Lab.<br><br>

5.	Electronic Circuits and Pulse Circuits simulation Lab.<br><br>

6.	Analog Communications Lab.<br><br>

7.	IC Applications and HDL hardware Lab.<br><br>

8.	IC Applications and HDL Simulation Lab.<br><br>

9.	Microprocessors and Microcontrollers Lab.<br><br>

10.	Digital Signal Processing Lab.<br><br>

11.	Microwave Engineering and Digital Communications Lab.<br><br>

12.	Communication systems Lab<br><br>

13.	Advanced Communication systems Lab<br><br>

14.	Embedded c Lab<br><br>

15.	Advanced embedded systems Lab<br><br>

16.	Projects Lab<br><br>

17.	Research and development (R&D))Lab




					</div>
			
		
		

	
			
		</div></div>




<?php include('footer.php'); ?>