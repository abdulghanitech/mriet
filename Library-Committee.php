<?php
$pagename= "Library Committee";

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

		<center><h3><b>Library Committee</b></h3></center>

               
										
<p>	The Library Committee monitors the Library activities of the College.  
	 
</p>		



		<h4><b>The following are the members of the Committee</b><br>

</h4>

		<table class="table table-striped table-hover " border="1" bordercolor="red">
  <thead>
  <tr bgcolor=green>
    <th>Sl.No</th>
    <th>Name</th>
    <th>Department</th>
    <th>Designation</th>
     <th>Category</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>1.</td>
    <td>Dr M Ashok</td>
    <td></td>
    <td>Principal</td>
    <td>Chairman</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Dr M Narsing Yadav</td>
    <td>ECE</td>
    <td>HOD</td>
     <td>Member</td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Mr. D. Kalyan Kumar</td>
    <td>CSE</td>
    <td>HOD</td>
     <td>Member</td>
  </tr>
 <tr>
    <td>4.</td>
    <td>Dr K Hanumaji</td>
    <td>CSE</td>
    <td>HOD</td>
     <td>Member</td>
  </tr>
 <tr>
    <td>5.</td>
    <td>Ms. P. Umarani </td>
    <td>ECE</td>
    <td>Assistant Professor</td>
    <td>Member</td>
  </tr>
  <tr>
    <td>6.</td>
    <td>Ms. M. Mounika </td>
    <td>EEE</td>
    <td>Assistant Professor</td>
    <td>Member</td>
  </tr>
 
 <tr>
    <td>7.</td>
    <td>Mrs. Kalpana </td>
    <td>CSE</td>
    <td>Assistant Professor</td>
    <td>Member</td>
  </tr>
   <tr>
    <td>8.</td>
    <td>Mrs.T.Sunitha </td>
    <td>MBA</td>
    <td>Assistant Professor</td>
    <td>Member</td>
  </tr>
<tr>
    <td>9.</td>
    <td>Mrs. Shiresha </td>
    <td>H&S</td>
    <td>Assistant Professor</td>
    <td>Member</td>
  </tr>
<tr>
    <td>10.</td>
    <td>Mrs. K Vidhyavathi</td>
    <td></td>
    <td>Librarian</td>
    <td>Member</td>
  </tr>
<tr>
    <td>11.</td>
    <td>Mr. G Srinivas</td>
    <td></td>
    <td>Assistant Librarian</td>
    <td>Member</td>
  </tr>
<tr>
    <td>12.</td>
    <td>Ms. Manisha</td>
    <td>ECE</td>
    <td>Student member</td>
    <td>Member</td>
  </tr>
<tr>
    <td>13.</td>
    <td>Mr. Mahesh</td>
    <td>CSE</td>
    <td>Student member</td>
    <td>Member</td>
  </tr>
<tr>
    <td>14.</td>
    <td>Mr. Srinivas</td>
    <td>EEE</td>
    <td>Student member</td>
    <td>Member</td>
  </tr>
  </tbody>
</table>



							
										

<h4><b><u>Functions:</u></b></h4><br>
										
<p>	
1.	Guide the Librarian in formulating general library policies and regulations.<br><br>
2.	Provide for proper documentation services and updating the Library collection. <br><br>
3.	Work towards modernization and improvement of Library and documentation Services.<br><br>
4.	Formulate policies and procedures for efficient use of Library resources.<br><br>
5.	Review Library readership dept-wise and adopt measures to enhance readership. <br><br>
6.      Prepare budget and proposals for the development of the Library.  <br><br>										
7.	Recommend to the authorities the fees and other charges for Library. <br><br>
8.	Seek feedback on Library functions from readers.  <br><br>
9.	Submit the annual report on the functioning of the library. <br><br>
10.	Take measures to increase the membership of the Library.<br><br>									</p>		
			
		</div>

		</div>




<?php include('footer.php'); ?>