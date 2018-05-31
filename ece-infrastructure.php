<?php
$category = "Departments";
$sub_category= "Electronics & Communication Engineering";
$sub_sub_category = "Infrastructure";

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
			<div class="row">
			<div class="col-md-6">
				<img src="img/class.png" class="img-responsive" >

				</div>
				<div class="col-md-6">
				<p style="font-size: 18px;" align="justify" class="para-margin-fix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	The Department of ECE has spacious class rooms and state of art laboratories for carrying out academic activities. All laboratories are well equipped and well maintained to conducte not only the curriculum-oriented experiments but also to carry out project and research oriented works.
										</p>
										
						</div>
				
			</div>

			<div class="row">
				<div class="col-md-6">
				<p style="font-size: 18px;" align="justify" class="para-margin-fix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	Department of ECE has a total of 8 well established Laboratories. The labs are equipped with all the advanced softwares and latest computer systems. Student-to-computer ratio of 1:1 is maintained to faclitate easy access and availability of more time to students to practise in the labaratories. All the labs are connected with internet.
										</p>
										
						</div>

			<div class="col-md-6">
				<img src="img/lab.jpg" class="img-responsive" >

				</div>
			
				
			</div>


			<div class="row">
			<div class="col-md-6">
				<img src="img/soft.jpg" class="img-responsive" >

				</div>
				<div class="col-md-6">
				<p style="font-size: 18px;" align="justify" class="para-margin-fix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	The Department of ECE has software to cater all needs of students. The software present are Windows 8, MS Office, Oracle 11g, Borland Turbo C++, SCO Unix 5.0.6 Enterprise, Rational Rose Enterprise Edition, Data Warehousing & Mining tools.
										</p>
										
						</div>
				
			</div>


			<div class="row">
				<div class="col-md-6">
				<p style="font-size: 18px;" align="justify" class="para-margin-fix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	A dedicated 100 MBPS Internet connection is installed to meet the growing needs of staff and students to pursue their research. All the systems on the campus are wired to file servers. All the 600+ systems are connected to the internet.
										</p>
										
						</div>

			<div class="col-md-6">
				<img src="img/internet.jpg" class="img-responsive" >

				</div>
			
				
			</div>

			<br><br>



		</div>
		</div>




<?php include('footer.php'); ?>