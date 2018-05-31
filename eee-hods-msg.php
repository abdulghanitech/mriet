<?php
$category = "Departments";
$sub_category= "Electrical & Electronics Engineering";
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
				<b><div class="text-center">EEE Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
		
			
				<img src="img/eeehod.jpg" class="img-responsive center-block" style="width: 70%;">
			
			
				<br><br><p style="text-align: center;"><b>NAME:</b>  Dr. K.HANUMAJI<br><br>

					<b>QUALIFICATION:</b> Ph.D
					</p>
			
		
		
					<h3><b>Message from HOD‘s Desk</b></h3>
		<p class="para-fix" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;Greetings from the EEE department, MRIET. It gives me immense pride and pleasure to lead the Electrical and Electronics Engineering Department of this esteemed & prestigious institution. The field of Electrical and Electronic Engineering encompasses many technologies such as power systems, electrical machines, control systems, electromagnetic theory, and computer methods employed in all these areas, which have been among the fastest growing and most challenging technologies that enable the development of the modern society. 
<br><br>

     	&nbsp; &nbsp;&nbsp;&nbsp;The students get opportunities to excel in their academic achievements. The future holds many challenges. Apart from the regular curriculum the department strives to develop the students into intellectual prodigy.<br><br>

     	&nbsp; &nbsp;&nbsp;&nbsp;The state of art laboratories facilitate the students to undergo C lab, Data Structures Lab, Graphics Lab, Microprocessor Lab, Networks Lab, Operating System Lab., etc with zeal and charm. With these preface I am sure and confident that the students of the department will imbibe these and work hard to excel.<br><br>

     	&nbsp; &nbsp;&nbsp;&nbsp;We welcome you to browse the department website, whether you are a student, parent, alum, a corporate partner, or a colleague, we want to hear from you. Your comments and suggestions will help us to move next level and provide us with encouragement and excellence."<br><br>

     	</p>
			
		</div></div>




<?php include('footer.php'); ?>