<?php
$category = "Admissions";
$sub_category= "Admission Process";
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
				<b><div class="text-center">Admissions</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">

		
		<h3><b>Admission Process</b></h3>
		<p class="para-fix" align="justify">Admissions to MRIET are made along with the other engineering colleges in the state through a common entrance test conducted by the Govt. of Telangana and Andhra Pradesh.<br><br>

<a href="http://mriet.ac.in/images/pdf/Admission_to_the_First_year_Course_of_studies_in_B.PDF">Admission Process For The First Year Course</a><br><br>

<a href="http://mriet.ac.in/images/pdf/admissions.PDF">Required Documents For Admission</a><br><br>

<a href="http://mriet.ac.in/images/pdf/Telangana_STATE_BOARD_OF_INTERMEDIATE_EDUCATION.PDF">List Member Boards Of CDBSE Recognized By TSBIE</a><br><br>

<a href="http://mriet.ac.in/images/pdf/undertakingformforthestudent.PDF">Undertaking Form For New Joining Student</a><br><br>

<h3><b>The Eligibility Criteria for Admission to B.Tech Courses are:</b></h3>
<h3><b>EAMCET CODE: MRET</b></h3>

<p>The minimum qualification for admission to first year of the B.Tech course is a pass in the Intermediate (10 + 2) conducted by the board of Intermediate education, Govt. of Telangana and Andhra Pradesh or any other examination recognized as equivalent thereto with Mathematics, Physics and Chemistry as optional subjects.

</p><br>

1. 70 % of the seats are allotted based on the merit in the Engineering and Medical Common Entrance Test (EAMCET) conducted by Govt. of Telangana and Andhra Pradesh.<br><br>

2. 30 % of the seats are earmarked for Management / NRI candidates.<br><br>

3. In addition to the above, Diploma holders are admitted in second year of B.Tech to the extent of 20% of intake based on the merit in the Engineering Common Entrance Test (ECET), under lateral entry scheme conducted by Govt. of Telangana and Andhra Pradesh.<br><br>

<h3><b>The Eligibility Criteria for Admission to M.Tech Courses are:</b></h3>
<h3><b>PGCET CODE: MRET1</b></h3>

<b>M.Tech – Computer Science & Engineering:</b> B.E / B.Tech in Computer Science and Engineering with valid GATE score / based on the rank obtained in the test conducted by JNTU.<br><br>

<b>M.Tech – Wireless and Mobile Communication:</b> B.E / B.Tech in Electronics and Communications Engineering / Computer Science and Engineering / Information Technology / Electronics and Instrumentation Engineering with valid GATE score / based on the rank obtained in the test conducted by JNTU.<br><br>

<b>M.Tech – Embedded Systems:</b> B.E / B.Tech in Electronics and Communications Engineering / Electrical and Electronics Engineering / Computer Science and Engineering / Information Technology / Electronics and Instrumentation Engineering with valid GATE score / based on the rank obtained in the Test conducted by JNTU.<br><br>

<b>M.Tech – Power Electronics and Electric Drives:</b> B.E / B.Tech in Electrical and Electronics Engineering with valid GATE score / based on the rank obtained in the test conducted by JNTU.<br><br>

<h3><b>The Admission Pattern to MBA Course is as Follows:</b></h3>
<h3><b>ICET CODE: MRET1</b></h3>

The minimum qualification for admission to first year of the MBA is a pass in undergraduate course (10 + 2 + 3).<br><br>


1. 70% of the seats are allotted based on the merit in the Integrated Common Entrance Test (ICET) conducted by Governments of Telangana and Andhra Pradesh.<br><br>

2. 30% of the seats are earmarked for Management / NRI candidates.<br><br>

     	</p>
			
		</div></div>




<?php include('footer.php'); ?>