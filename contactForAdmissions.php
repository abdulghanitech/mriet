<?php
$category = "Admissions";
$sub_category= "Contact for Admissions";
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
				<b><div class="text-center">Admissions</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">

		
		<h3><b>Contact for Admissions:</b></h3>
		<h4><b>MALLA REDDY INSTITUTE OF ENGINEERING AND TECHNOLOGY</b></h4>
		<p class="para-fix" align="justify">

		Campus III, Maisammaguda, Dhullapally, (post via. Kompally)<br><br>

		Ranga Reddy District,<br><br>

		Secunderabad,<br><br>

		Telangana. 500 100<br><br>

		Contact details:<br><br>

		9346162628 <br>
		9676402671 <br>
		9348161205<br>

		<b>Email us:</b> admin@mriet.ac.in

     	</p>
			
		</div></div>




<?php include('footer.php'); ?>