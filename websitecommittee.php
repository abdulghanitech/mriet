<?php
$pagename= "Website Committee";

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

		<center><h3><b>Website Committee</b></h3></center>
		<h4><b>Website Committee</b> is formed with the following members.<br>

<b>Composition</b></h4>

		<table class="table table-striped table-hover " border="1" bordercolor="red">
  <thead>
  <tr bgcolor=green>
    <th>Sl.No</th>
    <th>Name</th>
    <th>Department</th>
    <th>Designation</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>1.</td>
    <td>Dr M Ashok</td>
    <td></td>
    <td>Principal</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Mr. M. Sreenivas</td>
    <td></td>
    <td>Dean academics</td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Mr. D. Kalyan Kumar</td>
    <td>CSE</td>
    <td>HOD</td>
  </tr>
 <tr>
    <td>4.</td>
    <td>Dr M Narsing Yadav</td>
    <td>ECE</td>
    <td>HOD</td>
  </tr>
 <tr>
    <td>5.</td>
    <td>Dr K Hanumaji</td>
    <td>EEE</td>
    <td>HOD</td>
  </tr>
  <tr>
    <td>6.</td>
    <td>Mr. Aziz Pasha</td>
    <td>EEE</td>
    <td>Asst. Prof.</td>
  </tr>
  <tr>
    <td>7.</td>
    <td>Mr. Ananth Kumar</td>
    <td>ECE</td>
    <td>Asst. Prof.</td>
  </tr>
 <tr>
    <td>8.</td>
    <td>Mrs.Ruth Sunitha</td>
    <td>MBA</td>
    <td>HOD</td>
  </tr>
 
  </tbody>
</table>



							
										<h4><b><u>RESPONSIBILITES OF WEBSITE COMMITTEE:</u></b></h4><br>
										
<p style="text-align:justify">							1.	Collection of data from each department (ECE, EEE, CSE, H&S and MBA).<br>
						        2.	Department data consists of vision and mission, news letter, about department, faculty, achievements, events, sports, placements, academics, attendance, labs and research activities in department.<br>
							3.      Collection of data from library.<br>
							4.	Library data consists of Total number of Volumes, Titles, Journals, Magazines, Back Volumes of Journals, Project Reports, No. of DVD’S&CD’s, News Papers and E-Journals (IEEE, J-Gate, Delnet).<br>
							5.	Collection of data from placement cell (placement records of all students’ branch and year wise and recruitment company’s details).<br>
						        6.	Collection of data from sports (land marks achieved by the students in the area of sports and games   year wise)..<br>
													7.	Collection of data from administrative office (admissions details of UG and PG, staff details and transportation data)...<br>

8.	Collection of data from exam branch (exam branch staff, exam time tables, results, exam fees, condo nation fees for semester and year wise)..<br>

9.	Regular updating of events conducted in college....<br>

10.	Collect the data from department, library, placement cell, exam branch, administrative office, sports and updating the website in regular intervals of time...<br>

									</p>	<br><br>	


<h4><b><u>GUIDELINES FOR THE COMMITTEE:</u></b></h4><br>
										
<p style="text-align:justify">							1.	The Committee will function as per the guidelines issued by the Chairman/Principal.<br>
						        2.	The committee shall meet at least twice a month or whenever it is required or called for by the Chair to discuss..<br>
							3.      The term of Office of the committee will be for the academic year 2015-16.<br>
							4.	All the decisions taken by committee should put up to the principal for approval.<br>
							5.	The Member Secretary and Members shall maintain all the Data/Information related to the College Website.<br>
						        6.	Minutes of various meetings shall be reduced to writing by the Member Secretary and put up to Principal/Chairman for perusal and approval. They will also be signed by all the members.<br>
													
									</p>	<br><br>	
			
		</div>

		</div>




<?php include('footer.php'); ?>