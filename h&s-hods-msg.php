<?php
$category = "Departments";
$sub_category= "Humanity & Sciences";
$sub_sub_category = "Department Vision and Mission";

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
				<b><div class="text-center">H&S Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
		
			
				<img src="img/h&s-hodpic.jpg" class="img-responsive center-block" style="width: 70%;">
						
		
		<br><br><p style="text-align: center;"><b>NAME:</b>  Dr. PRABHA SELVARAJ<br><br>

					<b>QUALIFICATION:</b> Ph.D
					</p>
			
		
		
					<h3><b>Message from HOD‘s Desk</b></h3>
		<p class="para-fix" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;Profile: . She completed her B.E CSE in Kongu Engineering College, Bharathiyar University in 1998, M.E CSE in College of Engineering, Guindy, Anna University in 2005. She has obtained Ph.D in Computer Science and Engineering from Anna University, Chennai in the year 2016. Her area of interest is Data Mining, Recommendation System, Search Optimization and Query processing.  
<br><br>

     	&nbsp; &nbsp;&nbsp;&nbsp;She has 20 years of Teaching Experience in Engineering Colleges and 2 Years of industrial experience. She has published 25+ research papers in National and International journals and conferences. She has participated as well as conducted a number of workshops, Seminars and conferences. She has been invited to various colleges to deliver guest lectures. She is a life member of ISTE,  member of CSI and IAENG.<br><br>

     	&nbsp; &nbsp;&nbsp;&nbsp;Message: Department of Humanities and Sciences attempts at a holistic development of the First Year Engineering students. Our vision is to ignite the inherent application skills of theoretical knowledge. In view of this, the Department is devoted to the dissemination of knowledge from and interdisciplinary perceptive and to empower the students. Our department has got well qualified, talented and dedicated faculties..<br><br>

     	&nbsp; &nbsp;&nbsp;&nbsp;The faculties of this department have always endeavored to provide the best in terms of knowledge and skill. The subjects taught are of prime importance of all round growth and development of students. It remains a privilege to be Head of the department with highly motivated and dedicated personnel, who are all prepared to go the extra mile."<br><br>

     	</p>
			
		</div></div>




<?php include('footer.php'); ?>