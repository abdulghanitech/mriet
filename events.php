<?php
$category = "Campus Life";
$sub_category= "Events";
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
				<b><div class="text-center"><?php echo $category; ?></div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
		<h3><b>News and Events</b></h3>
		
		<div class="table-responsive">
												  
				<table class="table">
					
					<tr>
                      <td><span class="label label-danger">SEPT 29-30</span></td>
                      <td><h4>MRIET Presents TECHNOTSAV-2K16</h4><a href="#">Click Here</a></td>
				    </tr>
				    <tr>
                      <td><span class="label label-danger">SEPT 14</span></td>
                      <td><h4>I-B.Tech, II-B.Tech IIsem, III-B.Tech IIsem, Supp.Fee Payment</h4><a href="#">Last Date For Fee Payment Of I-B.Tech, II-B.Tech IIsem, III-B.Tech IIsem, Supp. Exams Is 14-09-2016.</a></td>
				    </tr>
				    <tr>
                      <td><span class="label label-danger">AUG 31</span></td>
                      <td><h4>Technical Seminar On C Language</h4> <a href="#">Seminar On C Language In CSE Seminar Hall, MRIET By Sahil Sharma</a></td>
				    </tr>
				    <tr>
                      <td><span class="label label-danger">AUG 10</span></td>
                      <td><h4>All India Essay Writting Event</h4><a href="http://mriet.ac.in/images/pdf/POSTER%20-%20English%20-%20Essay%20Event%202016.pdf">THE ALL INDIA ESSAY WRITING EVENT 2016</a></td>
				    </tr>
				     <tr>
                      <td><span class="label label-danger">JUL 15</span></td>
                      <td><h4>GRADUATION DAY 2016</h4> <a href="images/Graduation Day 2016.jpg">MRIET CELEBRATES GRADUATION DAY 2016</a></td>
				    </tr>
				     <tr>
                      <td><span class="label label-danger">JUL 15</span></td>
                      <td><h4>C & DS Workshop</h4> <a href="images/C &amp; DS WORKSHOP.jpg">3 DAY WORKSHOP ON C&amp; DS</a></td>
				    </tr>
				     <tr>
                      <td><span class="label label-danger">JUL 11</span></td>
                      <td><h4>Haritha Haram</h4> <a href="https://www.facebook.com/mrietspeaks">MRIET CELEBRATING HARITHA HARAM 2K16/a></td>
				    </tr>
				     <tr>
                      <td><span class="label label-danger">JUL 01</span></td>
                      <td><h4>Mobile App</h4> <a href="downloads/application-forms/Mriet1.apk">Mobile App Developed by IV IT Student</a></td>
				    </tr>
				     <tr>
                      <td><span class="label label-danger">JUN 18</span></td>
                      <td><h4>IV-B.Tech IIsem Advance Supp.Fee Payment</h4> <a href="#">IV-B.Tech IIsem Advance Supp.Fee Payment last date is 08/07/2016 </a></td>
				    </tr>
				     <tr>
                      <td><span class="label label-danger">JUN 18</span></td>
                      <td><h4>IV-B.Tech IIsem results</h4> <a href="downloads/exambranch/IV-II-RESULTS-MAY-2016.xlsx">IV-B.Tech IIsem results are declared on 18/06/2016 To View</a></td>
				    </tr>
				     <tr>
                      <td><span class="label label-danger">JUN 18</span></td>
                      <td><h4>Fee payment of IV B.Tech II Semester Recounting/Revaluation</h4> <a href="#">Last Date for Fee payment of IV B.Tech II Semester Recounting/Revaluation is 27-06-2016, Fee will be collected at Exam branch Counter. ..</a></td>
				    </tr>
				     <tr>
                      <td><span class="label label-danger">JUN 10</span></td>
                      <td><h4>The class work for II,III,IV Year B.Tech</h4> <a href="#">The class work for II,III,IV Year B.Tech will be commenced from  13-06-2016</a></td>
				    </tr>
				     <tr>
                      <td><span class="label label-danger">JUN 08</span></td>
                      <td><h4>Campus recruitment for B.Tech IV year students</h4> <a href="#">Campus recruitment for B.Tech IV year students will be commencing from  13-06-2016</a></td>
				    </tr>
				     <tr>
                      <td><span class="label label-danger">MAY 30</span></td>
                      <td><h4>Fee payment of II B.Tech I Semester Recounting/Revaluation</h4> <a href="#">Last Date for Fee payment of II B.Tech I Semester Recounting/Revaluation is 04-06-2016, Fee will be collected at Exam branch Counter. ..</a></td>
				    </tr>
				      <tr>
                      <td><span class="label label-danger">DEC 27</span></td>
                      <td><h4>MRIET is looking for Professors, Associate Professors,Assistant Professors</h4> <a href="#">MRIET is looking for Professors, Associate Professors,Assistant Professors in all branches and Lab programmers. Forward resumes to careers@mriet.ac.in</a></td>
				    </tr>

				    
				</table>              
			
			</div>

		


			
		</div></div>




<?php include('footer.php'); ?>