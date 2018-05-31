<?php
$category = "Departments";
$sub_category= "Electronics & Communication Engineering";
$sub_sub_category = "HOD's Message";

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
		
			
				<img src="img/ece-hod1.jpg" class="img-responsive center-block" style="width: 70%;">
			
			
				<br><br><p style="text-align: center;"><b>NAME:</b>  Dr. M.Narsing Yadav<br><br>

					Professor & HOD, ECE
					</p>
			
		
		<h3><b>Message from HOD‘s Desk</b></h3>

		<p class="para-fix" align="justify">&nbsp; &nbsp;&nbsp;&nbsp;	"The department faculty work with excellent team spirit in different technical team like RF Electronics, Communication, Signal processing, VLSI, Embedded System, Wireless Sensor Network which leads to key research publications and consultancy in these areas. The department strives to provide a conductive environment for the students to develop analytical and practical skills and apply them to real world problems. To motivate the students the department organizes regular training in state of art software & hardware, arranges workshop, National & International Conferences periodically. 
We welcome you to the Electronics and Communication Engineering Department as undergraduate or post graduate student and we hope to be part of your success."
<br><br>
HAVE A NICE STAY HERE & ACHIEVE THE BEST<br><br>

     	</p>
			
		</div></div>




<?php include('footer.php'); ?>