<?php
$category = "Departments";
$sub_category= "Masters of Business Administration";
$sub_sub_category = "MBA Home";

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
				<b><div class="text-center">MBA Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">

		<img src="img/mba.png" class="img-responsive center-block" style="width: 70%;">

		<p class="para-fix" align="justify">&nbsp; &nbsp;&nbsp;&nbsp; Warm greetings from the Department of MBA. Management students need to possess certain traits and motives and become more innovative to aim high. Students need to understand that success in life comes through hard-work and having specific goals. They should develop the right attitude by applying theory into practice and we as a faculty group will have to orient our teaching and training accordingly.

<br><br>
<h3>Vision:</h3>
      To become recognized as a robust, high quality selective programme providing student centered learning experience that produces successful business leaders and managers.

<h3>Mission:</h3>
      We strive to provide high quality education and student services through traditional and digital learning environments.

      Our focus is on creating business knowledge through innovative and intellectual environment and developing leadership and management skills in a technology oriented global market place.

     	</p>
			
		</div></div>




<?php include('footer.php'); ?>