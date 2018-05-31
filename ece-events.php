<?php
$category = "Departments";
$sub_category= "Electronics & Communication Engineering";
$sub_sub_category = "Events";

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
				<b>ECE Events</b>
			</div>
			<div class="panel-body">
				<ul class="list-group">
				<center>
                   <li class="list-group-item"><a href="http://mriet.ac.in/FDPReport.docx">1.	FACULTY DEVELOPMENT PROGRAM -2016 ON “PROTOCOLS AND ARCHITECTURES FOR WIRELESS SENSOR NETWORKS”</a></li><br>
	<li class="list-group-item">2.	BRIDGE COURSE ON “APPLIED MATHEMATICS FOR SIGNALS AND SYSTEMS” ON 29TH AND 30TH JUNE 2016.</li><br>


<li class="list-group-item">3.	“MATLAB AND ITS APLLICATIONS IN SIGNAL ANALYSIS BY Dr. M.N. YADAV ,ECE HOD ON 20/07/2016”</li><br>


<li class="list-group-item">4.	GUEST LECTURE ON “AWR AND ITS APPLICATIONS IN RF CIRCUIT DESIGN” BY Mr. G. DHARMENDRA NAYAK, APPLICATION ENGINEER, MMRFIC PVT. Ltd. ON 23RD JULY 2016.</li><br>


<li class="list-group-item">5.	“ROBO-FIESTA” A 5-DAY HANDS ON WORKSHOP ON ROBOTICS AND ITS APPLICATIONS IN ASSOCIATION WITH CEFR(CENTER OF EXCELLENCE FOR ROBOTICS) ECE, MRIET AND EPR LABS CHENNAI, FROM 27/07/2016 TO 31/07/2016.</li><br>


<li class="list-group-item">6.	NATIONAL LEVEL SEMINAR ON “DESIGN OF NANO SATELLITES” ON 19TH AUGUST 2016 BY Dr. S.M. AHMED, PRINCIPAL SCIENTIFIC OFFICER</li><br>


<li class="list-group-item">7.	INDUSTRIAL TOUR TO HINDUSTAN BATTERIES LIMITED (HBL) FOR III YEAR ECE STUDENTS ON 22/08/2016.</li><br>
				   </center>
                </ul>
			</div>
		</div>
			
				
			
		</div></div>




<?php include('footer.php'); ?>