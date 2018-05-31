<?php
$category = " MBA Feedback FORMS";
$sub_category= "";
$sub_sub_category = "";

$pagename = "Feedback Forms";

//include('active-class-adder-v2.php');


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
				<b><div class="text-center">Feedbacks</div></b>
			</div>
			<div class="panel-body">
				<div class="list-group list-fix">
		    <a href="cseFeedback.php" class="list-group-item active-custom">CSE Feedback Forms</a>
		    <a href="eeeFeedback.php" class="list-group-item">EEE Feedback Forms</a>
		    <a href="eceFeedback.php" class="list-group-item">ECE Feedback Forms</a>
		    <a href="eceFeedback.php" class="list-group-item">MBA Feedback Forms</a>
                    <a href="eceFeedback.php" class="list-group-item">H&S Feedback Forms</a>
		    
		    
		    
		  </div>
			<?php //listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
                      
             
		</div>
			
		</div>

		<div class="col-md-8">

		
		<h3><b>Master of Business Administration Feedback forms</b></h3>

                 
		
		<table class="table table-striped table-hover"><tbody>
                  

<tr><td><h4 class="panel-title"><b>Consolidated Alumni Feedback Form</b></h4></td><td> <a class="accordion-toggle" data-toggle="modal" href="assets/images/ConsolidatedAlumniFeedbackForm.pdf">Click to View Doccument</a></td></tr>

<tr><td><h4 class="panel-title"><b>Consolidated Employer Feedback Form</b></h4></td><td> <a class="accordion-toggle" data-toggle="modal" href="assets/images/ConsolidatedEmployerFeedbackForm.pdf">Click to View Doccument</a></td></tr>

<tr><td><h4 class="panel-title"><b>Consolidated Faculty Feedback Forms</b></h4></td><td> <a class="accordion-toggle" data-toggle="modal" href="assets/images/ConsolidatedFacultyFeedbackForm.pdf">Click to View Doccument</a></td></tr>

<tr><td><h4 class="panel-title"><b>Consolidated Student Exit Feedback Form</b></h4></td><td> <a class="accordion-toggle" data-toggle="modal" href="assets/images/ConsolidatedStudentExitFeedbackForm.pdf">Click to View Doccument</a></td></tr>



<tr><td><h4 class="panel-title"><b>ConsolidatedHostellerFeedbackForm</b></h4></td><td> <a href="assets/images/ConsolidatedHostellerFeedbackForm.pdf">Click to View Doccument</a></td></tr>
<tr><td><h4 class="panel-title"><b>Consolidated Parents Feedback Form</b></h4></td><td> <a href="assets/images/ConsolidatedParentsFeedbackForm.pdf">Click to View Doccument</a></td></tr>
</tbody></table>
	
		</div></div>




<?php include('footer.php'); ?>