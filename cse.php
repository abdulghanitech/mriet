<?php
$category = "Departments";
$sub_category= "Computer Science & Engineering";
$sub_sub_category = "CSE Home";

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

		<img src="img/cse-staff-pic.jpg" class="img-responsive center-block" style="width: 70%;">

		<p class="para-fix" align="justify">&nbsp; &nbsp;&nbsp;&nbsp;Greetings from the House of Malla Reddy institute of Engineering&Technology(MRIET), Department of Computer Science & Engineering. It gives me immense pleasure to lead the department of CSE.<br><br>

     	&nbsp; &nbsp;&nbsp;&nbsp;Our college is one of the premier institutions, unique like a prism reflecting the manifold shades of learning and co-curricular activities. MRIET is striving hard towards the goal of providing innovative and quality education with high standard to achieve academic excellence. The very motto of our department is to provide quality education. The process of learning is extremely important in life. What you learn, how you learn and where you learn play a crucial role in developing ones intellectual capability, besides career.<br><br>

     	&nbsp; &nbsp;&nbsp;&nbsp;Hence on behalf of our Computer Science and Engineering Department, I welcome all you to MRIET . Along with academic knowledge MRIET also trains its Engineers to face the challenges in life by providing many value added courses to enhance their career prospects. The excellent infrastructure, teaching faculty of the best kind ensuring quality education such as interaction among students, parents and staff, along with a Training and Placement Cell ensures a bright future to its students. Thus we are confident that our Engineers will emerge as assets not only to this institution and to the organization they belong, but also to the country at large. The Department continuously upgrades all laboratories with the state-of-art equipment & Software. Lesson plans are made available in the College Web before the beginning of each semester for all courses. Course files and lab handouts are given to the students to get the overall idea about the course they are going to study. Electronic teaching facility such as power point presentation is being extensively used in addition to Lecture method. An exclusive counseling class is included in the Time-table in which each faculty is allotted with 20 students. Students are counseled in these classes and problems pertaining to their academic/personal and solutions are provided. Developmental Plans are set to accomplish defined long range and short range goals of the department, to develop the laboratories by adding latest equipment on servers side and client side and further to develop centres of Excellency in the focus areas. Students actively participate in the Co and extra-curricular activities organized on a regular basis by the departmental students association. They are encouraged to deliver seminars in regular classes and also to present papers. They are involved in the National level student’s paper presentation contest being conducted by the department every year. Students are trained by conducting extra classes to refresh their knowledge on the required computer software as per the requirements of the companies visiting the campus for selections.<br><br>

     	</p>
			
		</div></div>




<?php include('footer.php'); ?>