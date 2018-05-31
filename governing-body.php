<?php
$pagename= "Governing Body";

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

		<center><h3>Governing Body</h3></center>
		<h4><b>Governing Body</b> is formed with the following members.<br>

<b>Composition</b></h4>

		<table class="table table-striped table-hover ">
  <thead>
  <tr>
    
    <th>Name of the Member</th>
    <th>Designation of their Body</th>
    <th>Occupation</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    
    <td>Prof R Madan Mohan</td>
    <td>Chairman</td>
    <td>Prof Of EEE and Director Academics ,MRGI.</td>
  </tr>
  <tr class="info">
    
    <td>Mr. CH Mahender Reddy</td>
    <td>Member</td>
    <td>Nominee of the Society of MRES.</td>
  </tr>
  <tr>
   
    <td>CH. Bhadra Reddy</td>
    <td>Member</td>
    <td>Nominee of the Society of MRES.</td>
  </tr>
  <tr class="info">
    
    <td>Mrs. CH. Kalpana</td>
    <td>Member</td>
    <td>Nominee of the Society of MRES.</td>
  </tr>
  <tr>
    
    <td>Mrs.M. Mamatha Reddy</td>
    <td>Member</td>
    <td>Nominee of the Society of MRES.</td>
  </tr>
  <tr class="info">
    
    <td>Dr.P Ram Reddy</td>
    <td>Member</td>
    <td>Ex-Registrar, JNTUH.</td>
  </tr>
  <tr>
  
    <td>Dr. J. Viswanatha Rao</td>
    <td>Member</td>
    <td>Dean Academics, Professor of EEE.</td>
  </tr>

  <tr class="info">
    
    <td>Smt. V Naga Mani</td>
    <td>Member</td>
    <td>Nominee of State Govt., Director of Technical Education ( Ex-officio).</td>
  </tr>
  <tr>
  
    <td>Dr. Satya Savitri</td>
    <td>University Nominee</td>
    <td>Professor ECE, JNTUH and University Nominee, JNTUH.</td>
  </tr>
  <tr class="info">
    
    <td>Dr. Syed Moinuddin</td>
    <td>Member Secretary</td>
    <td>Principal.</td>
  </tr>
 
  </tbody>
</table>



							<h4><b>Term:</b></h4><br>
										<p>The term of the members, except the ex-officio member, shall be for a period of three years.</p><br>
										<h4><b>Meeting and its Venue:</b></h4><br>
										<p>The Governing Body shall meet at least twice a year. All such meetings shall be held within the respective college campuses. In the absence of the Chairman, the members can elect a pro-term Chairman from amongst the members present for that meeting. It shall be the responsibility of the Member Secretary to ensure that the meetings are held regularly and the minutes are recorded. The presence of the University nominee for the meetings is mandatory.</p>
										<br>
										<h4><b>Quorum:</b></h4><br>
										<p>The quorum for the meeting shall be 40% of the total number of members of the Governing Body and the University nominee.</p><br>
										<h4><b>Functions of the Governing Body:</b></h4><br>
										<p>The Governing Body besides being the supreme administrative authority of the college shall have the following additional functions.<br><br>

												1.	To monitor the academic and other related activities of the college.<br>
												2.	To consider the recommendations of the Staff Selection Committee.<br>
												3.	To consider the important communications, policy decisions received from the University, Government, AICTE/PCI, etc from time to time.<br>
												4.	To monitor the students performance and faculty development programmes.<br>
												5.	To consider the recommendations of the planning and Monitoring Board/College Academic Committee of the college for implementation.<br>
												6.	To pass the annual budget of the college (including Clearance of all University Dues).<br>
												7.	To check the audited income and expenditure accounts and approve the same for the college annually.<br>
												8.	To approve the increase/ reduction of intake, courses, new and closure<br>
												9.	Approval of performance appraisal of faculty.<br>
												10.	To monitor and advise for Industry and Institute Interactions.<br>
												11.	To monitor the steps taken for Students’ Training and Placement Activities.<br>
										</p>	<br><br>	

			
		</div>

		</div>




<?php include('footer.php'); ?>