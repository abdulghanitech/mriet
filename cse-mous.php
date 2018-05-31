<?php
$category = "Departments";
$sub_category= "Computer Science & Engineering";
$sub_sub_category = "MOU's";

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
				<b><div class="text-center">CSE Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
				<div class="row">
				<center><h3><b>Memorandum of Understanding</b></h3></center>
					<div class="col-md-6">
						<h3>TASK</h3><img src="img/taskapproval.jpg" width="300" height="250">
					</div>
					<div class="col-md-6">
						<h3>CSI</h3><img src="img/csi.jpg" width="300" height="250">
					</div>

					<div class="col-md-6">

						<h3>IBM</h3><img src="img/IBM.jpg" width="300" height="250">
					</div>

					<div class="col-md-6">

						<h3>ORACLE</h3><img src="img/oracle.jpg" width="300" height="250">
					</div>

					<div class="col-md-6">

						<h3>COIGN</h3><img src="img/coign.jpg" width="300" height="250">
					</div>

					<div class="col-md-6">
					<h3>VISUAL IT</h3><img src="img/visualIt.jpg" width="300" height="250">

					</div>

					<div class="col-md-6">
						<h3>Win Vinaya</h3><img src="img/winvinaya.jpg" width="300" height="250">

					</div>

					<div class="col-md-6">
						<h3>360digrii</h3><img src="img/360digrii.jpg" width="300" height="250">

					</div>







				</div>
			
				

				<br><br>
			
		</div></div>




<?php include('footer.php'); ?>