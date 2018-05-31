<?php
$category = "Admissions";
$sub_category= "Why Mriet?";
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

		
		<h3><b>Why MRIET?</b></h3>
		<p class="para-fix" align="justify">1. MRIET has grown as one of the sought after colleges under the umbrella of Malla Reddy Group of Institutions. Malla Reddy Institute of Engineering and Technology is established in 2007, Permanently Affiliated to JNTUH, Approved by AICTE and certified by ISO 9001:2008 and has a strong vision of offering world class training to the promising engineers.<br><br>

2. The college offers B.Tech Programs in ECE, CSE & IT, EEE, and M.Tech Programs in Embedded Systems & VLSI Design, Computer Science Engineering, Computer Science and MBA. Most of the faculty members are ratified by JNTU HYDERABAD.<br><br>

3. MRIET emphasizes on application oriented teaching & Problem Based Solving. Since the establishment of the college it is known for academic excellence.<br><br>

4. Most of the MRIET students were placed in reputed MNCs like L&T IES, NTT DATA, ZENSAR, Tech Mahindra, ADP, IBM, IGATE, Unisys, Amazon, Virtusa, Mphasis, Tera Data and HCL.<br><br>

5. Students at MRIET continue to surpass the expectations of the recruiters and bring to the table diverse skill sets that make them an asset to any organization they choose to join.<br><br>

6. The students are not only professionally competent but also have soft skills like laudable leadership, good teamwork, creativity, negotiation and communication. Both hard and soft skills are supported by deep commitment and dynamism.<br><br>

7. Some of the unique characteristics of our students include academic excellence, leadership qualities, the ability to lead change, and a deep rooted respect for culture and values.<br><br><br>


We regularly conduct co curricular activities under IEEE, ISTE, ACM, CSI and International Conferences (ICETES), National Level Symposiums, E Day, and extra curricular activities like Parampara (Cultural Meet), Annual Day, Orientation Day, Graduation Day, Sports Meet, Teachers Day, Childrens Day, and Cultural Day.<br><br>

     	</p>
			
		</div></div>




<?php include('footer.php'); ?>