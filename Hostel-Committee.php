<?php
$pagename= "Hostel Committee";

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

		<center><h3><b>Hostel Committee</b></h3></center>

               
										
<p style="text-align:justify">	The Hostel Committee plans the infrastructure facilities required for providing hostel facility for girls and boys separately. The Hostels are effectively managed through Warden and Staff. 
	 
							

</p>	<br>	



		<h4><b>The following shall be the composition of the Hostel Committee: </b><br>

</h4>

		<table class="table table-striped table-hover " border="1" bordercolor="red" style="border-width:3px">
  <thead>
  <tr bgcolor=green>
    <th>S.No</th>
    <th>Name</th>
    <th>Designation</th>
     <th>Category</th>
  </tr>
  </thead>
<thead><tr><th colspan="4" style="text-align:center"><i>One Senior Teacher Nominated as Chairman by Principal </i></th></tr></thead>
  <tbody>
  <tr>
    <td>1.</td>
    <td>Mr K Thirupathi Rao</td>
    <td>Assistant Professor</td>
    <td>Chairman</td>
  </tr>
<thead><tr><th colspan="4" style="text-align:center"><i>Two Senior Teachers Nominated by Principal</i></th></tr></thead>
  <tr>
    <td>2.</td>
    <td>Mrs. Ch. Shireesha</td>
    <td>ASSISTANT PROFESSOR</td>
    <td>Member</td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Mrs. Kalpana</td>
    <td>ASSISTANT PROFESSOR</td>
    <td>Member</td>
  </tr>
<thead><tr><th colspan="4" style="text-align:center"><i>One Hostel Student Nominated by Principal</i></th></tr></thead>
 <tr>
    <td>4.</td>
    <td>Md Tabish Ali</td>
    <td>Student</td>
    <td>Member</td>
  </tr>
<thead><tr><th colspan="4" style="text-align:center"><i>Warden is an ex-officio Member</i></th></tr></thead>
 <tr>
    <td>5.</td>
    <td>Mr.Sai Kumar</td>
    <td>Warden</td>
    <td>Member Secretary</td>
  </tr>
  
 
 
  </tbody>
</table>



							
										

<h4><b><u>Functions:</u></b></h4><br>
										
<p style="text-align:justify">	
•	The Hostel Committee shall discuss and make recommendations regarding<br> 
(a)	Admissions; <br>
(b)	Discipline of resident students;<br> 
(c)	Maintenance and development of the Hostel; and <br>
(d)	Any other matter pertaining to the ambience of the Hostel.
<br><br>
•	Receive complaints from students regarding facilities and amenities from time to time and forward it to Principal.<br><br>
•	Submit a monthly report to the Principal on matters relating to the adequacy and quality of maintenance of the following facilities: Protected drinking water, kitchen, dining halls, newspapers, telephones, restrooms, fans, lights and power.
<br><br>
										
									</p>		
			
		</div>

		</div>




<?php include('footer.php'); ?>