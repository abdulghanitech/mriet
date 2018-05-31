<?php
$pagename= "Director's Message";

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

		<img src="img/director-pic-hd.jpg" class="img-responsive center-block" style="width: 70%;">

		<p class="para-fix" align="justify">&nbsp; &nbsp;&nbsp;&nbsp;Technical education in the country has made phenomenal growth during the last two decades. The need for high quality managers and technical experts still continue and the future belongs to those who will have the vision to boldly look for opportunities to capitalize with a passion for change and strive for excellence in their work. The mushrooming of technical institutions offering Engineering courses are the result of the huge demand-supply gap because the need for high quality professionals still continues.<br><br>

     	&nbsp; &nbsp;&nbsp;&nbsp;We are striving hard at our end to prepare and develop high quality professionals to overcome the challenges faced by the enterprises due to globalization and liberalization process. To achieve this, and based on very encouraging feedback from various stakeholders, the college has reasonably equipped necessary facilities to empower the students with a touch of industrial applications. This has generated sufficient enthusiasm amongst them. As the Director of this esteemed organization I extend my support to the students and the faculty to bring up future leaders.</p>
			
		</div></div>




<?php include('footer.php'); ?>