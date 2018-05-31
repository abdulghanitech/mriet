<?php
$category = "Departments";
$sub_category= "Computer Science & Engineering";
$sub_sub_category = "Time Tables";

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
		<div class="panel panel-info">
			<div class="panel-heading">
				<b><div class="text-center">CSE Time Tables</div></b>
			</div>
			<div class="panel-body">
				<ul class="list-group"><center>
	           <li class="list-group-item"><a href="images/pdf/csett2k16.pdf"><b>2015-16 Cse Time Tables</b></a></li>
	           <li class="list-group-item"><a href="images/pdf/csett2k17.pdf"><b>2016-17 I-SEMISTER Cse Time Tables</b></a></li> 
			</center>
	        </ul>

			</div>
		</div>

		
			
<br><br>                      <div class="panel panel-info">
			<div class="panel-heading">
				<b><div class="text-center">2016-17 II-SEMISTER CSE Time Tables</div></b>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover table-responsive"><tr class="info"><th><a href="images/pdf/II-II CSE_A.pdf">II-II CSE-A</a></th><th><a href="images/pdf/II-II CSE-B.pdf">II-II CSE-B</a></th><th><a href="images/pdf/II-II CSE-C.pdf">II-II CSE-C</a></th><th><a href="images/pdf/II-II CSE-D.pdf">II-II CSE-D</a></th></tr>
	        <tr><th><a href="images/pdf/III-II CSE-A.pdf">III-II CSE-A</a></th><th><a href="images/pdf/III-II CSE-B.pdf">III-II CSE-B</a></th><th><a href="images/pdf/III-II CSE-C.pdf">III-II CSE-C</a></th><th><a href="images/pdf/III-II CSE-D.pdf">III-II CSE-D</a></th></tr>
			<tr class="info"><th><a href="images/pdf/IV-II CSE-A.pdf">IV-II CSE-A</a></th><th><a href="images/pdf/IV-II CSE-B.pdf">IV-II CSE-B</a></th><th><a href="images/pdf/IV-II CSE-C.pdf">IV-II CSE-C</a></th><th><a href="images/pdf/IV-II CSE-D.pdf">IV-II CSE-D</a></th></tr>
	</table>

			</div>
		</div>                                         																		
		
				
		</div>
		</div>




<?php include('footer.php'); ?>