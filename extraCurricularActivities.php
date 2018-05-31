<?php
$category = "Campus Life";
$sub_category= "Extra Curricular Activities";
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
		<h3><b>Extra Curricular Activities</b></h3>
		
		<b>Technical Events:</b><br><br>
		Memorandum of understanding with Visual IT Sol Pvt. Ltd.<br>
		Memorandum of understanding with Winvinaya Infosystems Pvt. Ltd.<br>
		Technotsav 2K14<br>
		Faculty Development Programmes in Emerging Trends in research methodology<br>
		Workshop on how to create professional website<br>
		Conferences<br>
		International conference<br>
		Paper Presentations<br>
		Technical Quiz<br>
		Coders Quiz<br>
		Project Expo<br>
		Hard Ware Design Contest<br>
		Software Design Contest<br>
		WEB Designing Contest<br>
		Debate Competition<br>
		Elocution<br>
		Poster Presentation<br>
		General Quiz<br>
		Fun with MATLAB<br>
		Logic Mantra and High Quest<br>
		Product Launch<br>
		Picture Interpretation<br>
		Product Launch<br>
		Business Plan<br>
		Young Manager Award<br>
		Ad – Making<br>
		Business Quiz<br>
		Seminars<br>
		Idea presentation contest<br>
		Business model presentation contest<br><br>


		<b>Cultural Events:</b><br><br>

		Cultural event by Radio mirchi<br>
		Annual day event<br>
		Traditional day<br>
			
		</div></div>




<?php include('footer.php'); ?>