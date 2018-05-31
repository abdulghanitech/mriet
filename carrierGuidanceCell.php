<?php
$category = "Campus Life";
$sub_category= "Carrier Guidance Cell";
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
		<h3><b>Carrier Guidance Cell</b></h3><br>
		<b>The Career Guidance Cell has been catering to the needs of students with the following objectives:</b>
		<p>
		1. To conduct a survey among students on their career options.<br>
		2. To organize programmes to create awareness about the importance of higher studies in India and Abroad.<br>
		3. To organize training classes for the competitive exams such as GPAT, CAT, GRE, GMAT and to counsel them for higher studies.<br>
		4. To conduct Orientation Programmes for fresher students.<br>
		5. To organize and offer various programmes on Personality Development, Soft Skills and Communication Skills.<br>
		6. To organize Pre Placement Training Programmes to enable students to showcase their skills during the Interview.<br>
		</p>

		<br><br>

		<p><b>Guidance is universal and the basic principles of the philosophy of guidance are common to all countries with a slight modification to suit the locally accepted beliefs and the specific guidance services offered. The eight principles of the philosophy of guidance are:</b></p>

		<br>

		<p>
			1. The dignity of the individual is supreme.<br>
			2. Each individual is unique. He or she is different from every other individual.<br>
			3. The primary concern of guidance is the individual in his own social setting. The main aim being to help him to become a wholesome person and to gain fullest satisfaction in his life.<br>
			4. The attitudes and personal perceptions of the individual are the bases on which he acts.<br>
			5. The individual generally acts to enhance his perceived self.<br>
			6. The individual has the innate ability to learn and can be helped to make choices that will lead to self-direction, and make him consistent with the social environment.<br>
			7. The individual needs a continuous guidance process from early childhood through adulthood.<br>
			8. Each individual may, at times, need the information and personalized assistance best given by competent professional personnel.<br>
		</p>


		


			
		</div></div>




<?php include('footer.php'); ?>