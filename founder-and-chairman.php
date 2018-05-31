<?php
$pagename= "Founder and Chairman";

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

		<img src="img/founder-chairman.jpg" width="460" class="img-responsive center-block">

		<p class="para-fix" align="justify"> &nbsp; &nbsp;&nbsp;&nbsp;Shri Malla Reddy, the most humble dynamic and charismatic chairman is a visionary who brought about a revolution in the field of education. He is the avant-garde (pioneer) in creating numerous avenues which made professional and technical education accessible to young aspirants. Under his esteemed leadership, the campus has grown by leaps and bounds to become a major learning center with 14 institutes offering almost all Engineering, Management, Computers and Pharmacy courses. Two hospitals namely Narayana Hrudayalaya Malla Reddy cardiology hospital are functioning in Malla Reddy Health city. His life has rekindled many lives by not only igniting their dreams but also by accomplishing them. He strongly believes that only education can bring across a positive change in the society. .
		<br><br>
     	&nbsp; &nbsp;&nbsp;&nbsp;Education is a progressive discovery of our own ignorance. As knowledge is power, focus must be given in grooming dynamic leaders, not just graduates. Education is transmission of civilization. The aim of education is the knowledge not of facts but of values. MRIET has always believed in knowledge based education. Driven by commitment to provide and maintain high quality education, we do not compromise in the quality of faculty members, programmes and facilities. We are geared towards making the students globally competitive, thus striving for excellence and making the college one of the most distinct colleges for engineering education in the country. We at MRIET are fuelled by an ambition to reach and remain at top, by providing quality education to the students. .<br><br></p>

			
		</div>

	</div>
</div>




<?php include('footer.php'); ?>