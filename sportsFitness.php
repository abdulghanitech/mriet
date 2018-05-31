<?php
$category = "Campus Life";
$sub_category= "Sports & Fitness";
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
		<h3><b>Sports & Fitness</b></h3>

		<b>LAND MARKS ACHIEVED BY THE STUDENTS IN THE AREA OF SPORTS AND GAMES DURING THE YEAR 2015-16.</b><br><br>
		
		1. Mr UJWAL KUMAR SINGH of B Tech 4th year EEE secured BRONZE medal in the JNTHU Central Zone Athletic Championships, conducted by St Martin’s college during March 2015.<br>
		2. Mr Ujwal Kumar Singh, secured 1st place in Athletics, Long Jump and 2nd place in Triple Jump in the TS Level Athletics Championships conducted at Warangal during DEC2015.<br>
		3. Mr Ujwal Kumar Singh, was selected to represent TS Athletics team, for the Inter -state meet at Visakhapatnam, AP.<br><br>

			<div class="col-md-12">
				<div class=" col-md-6">
					<img class="img-responsive" src="img/porababu1.jpg">
				</div>
				<div class="col-md-6">
					<img class="img-responsive" src="img/porababu2.jpg">
				</div>
			</div>

		4. Ms Chandana Priya Reddy, a student B Tech 4th year IT, had secured second position in the JNTUH central Zone Chess Championships conducted by JNTUH during Mar 2015.<br>
		5. Ms Chandana Priya Reddy of B Tech 4th year IT, had secured 1st place in CHESS in the MREC sports festival during Apr 2015.<br>
		6. Ms Chandana Priya Reddy had secured 1st place in CHESS in the sports festival conducted by MRITS , during Sep 2015.<br>
		7. Ms Chandana Priya Reddy was selected to represent JNTUH in CHESS, to participate in the South Zone Inter University Chess tournaments Conducted at Coimbatore during Oct 2015.<br><br>

		<div class="col-md-12">
				<div class=" col-md-6">
					<img class="img-responsive" src="img/porababu3.jpg">
				</div>
				<div class="col-md-6">
					<img class="img-responsive" src="img/porababu4.jpg">
				</div>
			</div>

		8. MRIET had reached QUARTER FINAL stage in VOLLEY BALL as well as BADMINTON in the JNTU ZONE-A sports meet, conducted by HITAM.<br>
		9. Miss Akhila, of 1st year B Tech, EEE was selected to represent Hyderabad Dist Volleyball team to participate in the TS inter-District championships conducted at Warangal during Oct 2015.<br>
		10. Miss Akhila of B Tech 1st year was selected to represent Hyderabad Dist Volley ball team to participate in TS Inter-district Under-19 Girls Volley ball tournament held at Warangal during Oct -2015.<br><br>

			<div class="col-md-12">
				
				<img class="img-responsive" src="img/porababu5.jpg">	
				
			</div>

			<div class="col-md-12">
				<div class=" col-md-6">
					<img class="img-responsive" src="img/porababu6.jpg">
				</div>
				<div class="col-md-6">
					<img class="img-responsive" src="img/porababu7.jpg">
				</div>
			</div>


		11. The college had participated in almost all the competitions conducted by JNTUH Zonal such as BASKETBALL, THROWBALL, KABADDI, CRICKET, FOOTBALL, etc and performed reasonably well.<br>
		12. Miss K Aswini, B Tech 2nd year ECE and Miss Krishnaveni, of B Tech 2nd year CSE were selected to represent JNTUH, womens Cricket Team to participate in the South Zone inter university Tournament s conducted at Chennai during Nov 2015.<br>
		13. Miss Aswini of B Tech 2nd year ECE and Miss Krishna Veni, of B Tech 2nd year CSE were selected to represent the AP-Telangana combined Senior Women‘s cricket team to participate in the All India tournament held at Kanpur, UP during Jan 2016.<br><br>

		<div class="col-md-12">
				
				<img class="img-responsive" src="img/porababu8.jpg">	
				
			</div>
		<div class="col-md-12">
				
				<img class="img-responsive" src="img/porababu9.jpg">	
				
			</div>
		<div class="col-md-12">
				
				<img class="img-responsive" src="img/porababu10.jpg">	
				
			</div>

		14. Mr Sruti Dhar, of B Tech 4th year CSE and Mr Rakshit, of B Tech 3rd year ECE, were selected to represent the TS under -23 Cricket team to participate in the All-India tournament at Jaipur during the month of Dec 2015.<br>
		15. Mr Venkat of MBA 1st year was selected to represent the JNTUH weight lifting team in the 83 Kgs class to participate in the All-India Inter university tournament held at Nagarjuna University, GUNTUR, AP during Jan 2016.<br><br>


			<div class="col-md-12">
				<div class=" col-md-6">
					<img class="img-responsive" src="img/porababu11.jpg">
				</div>
				<div class="col-md-6">
					<img class="img-responsive" src="img/porababu12.jpg">
				</div>
			</div>


			<div class="col-md-12">
				<div class=" col-md-6">
					<img class="img-responsive" src="img/porababu13.jpg">
				</div>
				<div class="col-md-6">
					<img class="img-responsive" src="img/porababu14.jpg">
				</div>
			</div>



			
		</div></div>




<?php include('footer.php'); ?>