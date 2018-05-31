<?php
$pagename= "Management";

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

		<div class="row">
		<div class="col-md-3" style="margin-top: 30px;">
		<center><img src="img/mahi.jpg" class="img-responsive img-circle" style="margin-top: 50px;"></center>
		</div>
		<div class="col-md-9">
		<h2><b>Shri CH. MAHENDER REDDY, Secretary, MRGI</b></h2>
		<h3>Secretary, MRGI</h3>
		<p align="justify" style="padding-right: 10px">We are living in an era where technology is advancing faster than we could have imagined. Inorder to keep pace with the changing scenario, we need to acquire professional education, which will help us in developing our resources catering to the global needs. The choice of a college where you will pursue professional education and which will provide you the place from where you will embark on your first journey towards your career is an important decision. We at MRIET, from the very inception emphasized on imparting quality education in various disciplines of engineering. During the past seven years we have made lot of efforts to make MRIET as one of the best engineering institutes in the country. The faculty members of the institute are selected carefully and updated continuously by exposing them to the recent technical innovations. The atmosphere at MRIET is friendly, cordial and perfectly suied to all round development of the students.</p>
		</div>
			
		</div>
		<div class="row">
		<div class="col-md-3" style="margin-top: 30px;">
		<center><img src="img/badra.jpg" class="img-responsive img-circle"></center>
		</div>
		<div class="col-md-9">
		<h2><b>Dr. BHADRA REDDY</b></h2>
		<h3>Tresurer, MRGI</h3>
		<p align="justify" style="padding-right: 10px">Dr. Ch. Bhadra Reddy is a highly qualified professional with an M.D. in medicine. With his youthful presence and a proactive approach, he tirelessly endeavors to shape the destiny of the student community by imparting quality education in a conducive environment, thereby motivating the students to successfully meet the contemporary needs of the industry.</p>
		</div>
			
		</div>

		<div class="row">
		<div class="col-md-3" style="margin-top: 30px;">
		<center><img src="img/madan.jpg" class="img-responsive img-circle"></center>
		</div>
		<div class="col-md-9">
		<h2><b>Prof. MADAN MOHAN</b></h2>
		<h3>Director (Academic), MRGI</h3>
		<p align="justify" style="padding-right: 10px">The Director Academics is considered an epitome of academic distinction. He happens to be the beacon of light for the entire group with around 40 years of experience in academics. He nurtures the welfare of the students and members of staff by constantly creating policies that foster their academic career.</p>
		</div>
			
		</div>


		<div class="row">
		<div class="col-md-3" style="margin-top: 30px;">
		<center><img src="img/director-pic.jpg" class="img-responsive img-circle" style="margin-top: 80px;"></center>
		</div>
		<div class="col-md-9">
		<h2><b>MR. PRAVEEN REDDY</b></h2>
		<h3>Director, MRIET</h3>
		<p align="justify" style="padding-right: 10px">In the quest of knowledge and with a mission to empower the students in their becoming excellent human resources and to contribute meaningfully to the Nation and the human society. MRIET has a rich tradition of pursuing academic excellence, value based education and providing a conducive environment for overall personality development of students. In addition to their excellent teaching, the faculty members are actively involved in the grooming of the students. The academic programs offered by MRIET are comprehensive and as per the affiliated university and are continuously being upgraded over and above the university syllabus to keep pace with latest developments and innovations in associated disciplines with necessary blend of IT and management. We strongly believe in human values and our commitment to the Nation and human society. Accordingly, our teaching-learning process is based on motivating factors, discipline, although in relaxed natural ambience. We are determined to help our students to understand the power of words, appreciate the beauty of languages, and learn the art, science and technology. At MRIET, in fracture, curriculum, faculty and students i.e. four basic component of education system are perfectly blended to ensure our vision. We have created a secured, congenial and serene environment for both boys and girls students to make it their coveted educational destination. And we are only in the process of further development. Wishing the student good luck and best time at MRIET.Mr. Praveen Reddy, Director, MRIET.</p>
		</div>
			
		</div>

	</div>
</div>




<?php include('footer.php'); ?>