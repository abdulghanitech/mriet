<?php
$category = "Departments";
$sub_category= "Humanity & Sciences";
$sub_sub_category = "H&S Home";

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
				<b><div class="text-center">H&S Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">

		<img src="img/h&s.JPG" class="img-responsive center-block" style="width: 70%;">

		<p class="para-fix" align="justify">&nbsp; &nbsp;&nbsp;&nbsp;Welcome to the Humanities and Science Department of Malla Reddy Institute of Engineering and Technology. It is an honor to address you on behalf of the department and convey this message on behalf of the department. As a part of one of the most reputed educational institutions, we are responsible for providing the best educational space that promises uncompromising infrastructure and challenging research atmosphere. The department has been committed to devise innovative programs that assure the overall development of the student community, equipping them with the advancements in the field of science. Our duty is extended to preparing them for the upcoming challenges, diverse workspace, and social responsibility. We have been formulating and improvising strategies that ensure the quality of education which in turn produces the best generation engineers who are ethically strong and morally responsible. The department along with our academic and teaching staffs promises not to spare any chance of improvisation. It’s a privilege to contribute my best to the institution from the chair of HOD with the cooperation of my colleagues.<br><br>

     	</p>
			
		</div></div>




<?php include('footer.php'); ?>