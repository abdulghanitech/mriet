<?php
$pagename= "Vision and Mission";

include('active-class-adder.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $pagename; ?> - MRIET</title>
<?php include('header.php'); ?>

<div class="container-fluid">
<div class="row custom-row-grey-color">
	<div class="col-md-4">
	<h2><?php echo $pagename; ?></h2>
	</div>
	<div class="col-md-8 breadcrumb-fix">
		<ul class="breadcrumb" style="margin-bottom: 5px;">
			You are here:
		  <li><a href="javascript:void(0)">Home</a></li>
		  <li><a href="javascript:void(0)">About Us</a></li>
		  <li class="active"><?php echo $pagename; ?></li>
		</ul>
	</div>
</div>
	<div class="row">
		<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				<b><div class="text-center">About Us</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdder($pagename); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">

		

		<p class="para-fix" align="justify">
			<center><h3>INSTITUTE VISION & MISSION</h3></center>
		 	<h4><b>Vision of the Institute:</b></h4>
           <p style="font-size: 16px;">To emerge as a Centre for Excellence offering Technical Education and Research opportunities to develop total Personality of the Students, instill high level of Confidence and making them technically superior and ethically strong, who in turn shall contribute to the Advancement of the Society. .</p><br>

     		<h4><b>Mission of the Institute:</b></h4>
     		<p style="font-size: 16px;">
     		1.	Malla Reddy Institute of Engineering & Technology (MRIET) dedicates to achieve and cultivate Academic Excellence in Technical Education.<br><br>
			2.	MRIET pursues continuous Development of Infrastructure and enhances state of the art equipment to provide students intellectually inspiring environment of learning, Research and inculcating Ethical and Moral values. <br><br>
			3.	MRIET constantly strives to impart world class education by anticipating and exceeding the expectations of all its Stakeholders.<br>
			</p>
		</p>
			
		</div>

	</div>
		</div>




<?php include('footer.php'); ?>