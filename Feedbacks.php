<?php
$category = "Feedback";
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
		    <a href="eeeFeedback.php" class="list-group-item">IT Feedback Forms</a>
		    <a href="eceFeedback.php" class="list-group-item">ECE Feedback Forms</a>
		    <a href="eeeFeedback.php" class="list-group-item">EEE Feedback Forms</a>
		    <a href="mbaFeedbackforms.php" class="list-group-item">MBA Feedback Forms</a>
		    
		    
		    
		  </div>
			<?php //listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">

		
		<h2><b>FeedBack Forms</b></h3>
		
		<a href="cseFeedback.php" class="list-group-item active-custom"><h5>CSE Feedback Forms</h5></a>
	        <a href="eeeFeedback.php" class="list-group-item"><h5>EEE Feedback Forms</h5></a>
		<a href="eceFeedback.php" class="list-group-item"><h5>ECE Feedback Forms</h5></a>
		<a href="mbaFeedbackforms.php" class="list-group-item"><h5>MBA Feedback Forms</h5></a>
                </div></div>




<?php include('footer.php'); ?>