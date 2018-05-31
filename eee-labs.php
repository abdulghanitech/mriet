<?php
$category = "Departments";
$sub_category= "Electrical & Electronics Engineering";
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
				<b><div class="text-center">EEE Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
		
			
			
			
			
				<br><br><div style="text-align: center;"><h3>Laboratories</h3><br>

1.	Fluid Machines and Hydraulic Machinery <br><br>

2.	Electronic Devices and Circuits<br><br>

3.	Electrical Machines-I<br><br>

4.	Electrical Circuits and Simulation<br><br>

5.	Advanced Communication Skills Lab<br><br>

6.	Electrical Machines-II<br><br>

7.	Control Systems and Simulation<br><br>

8.	Power Electronics and Simulation<br><br>

9.	Electrical Measurements<br><br>

10.	Microprocessor and Interfacing<br><br>


					</div>
			
		
		

	
			
		</div></div>




<?php include('footer.php'); ?>