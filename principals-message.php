<?php
$pagename= "Principal's Message";

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

		<img src="img/cse-hod1.jpg" class="img-responsive center-block" style="width: 70%;">

		<p class="para-fix" align="justify">&nbsp; &nbsp;&nbsp;&nbsp;Today, there are large numbers of corporate organizations who are looking for smart, creative and dynamic people who should be capable of managing their resources. In view of these we facilitate our students to understand their strengths, weaknesses and goals so as to convert their dreams to reality. We also give a lot of importance to personality development and building social conscience. It is on account of this that our Technical education has gained importance and the demand is on the rise.<br><br>

     	&nbsp; &nbsp;&nbsp;&nbsp;For all these, I have been receiving excellent support and cooperation from all my faculty and staff. In several instances they have also enhanced me to overcome crisis situations and in solving tricky problems. I take up the responsibility to stand as a supporting pillar to the students of MRIET.</p>
			
		</div></div>




<?php include('footer.php'); ?>