<?php
$category = "Research and Development";
$sub_category= "Projects 2012-2016";
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
				<b><div class="text-center">Research and Development</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
		<h3><b>Research & Development Projects 2012-2016</b></h3>
		
		<div class="table-responsive">
												  
													<table class="table table-striped table-hover">
													<tr>
														<th>S.No</th>
														<th>Name of the Student</th>
														<th>Title of Work</th>
														<th>Period</th>
														<th>Abstract</th>
														
													</tr>
													<tr class="success">
                                                        <td>1</td>
                                                        <td>B. R CYRILL NOAH<br>
															D.LALITYA<br>
															CH  SRIKANTH<br>
														</td>
                                                        <td>ATTENDENCE MANAGEMENT</td>
                                                        <td>2012-2016</td>
														<td><a href="attendance.docx"><b>Click Here</b></a></td>
                                                     </tr>
													 <tr class="success">
                                                        <td>2</td>
                                                        <td>D. SAI CHANDU<br>
															CH. SUJANI<br>
															CH. SIVA PRASAD<br>

														</td>
                                                        <td>ONLINE CRIME<br>INVESTIGATION</td>
                                                        <td>2012-2016</td>
														<td><a href="onlinecrime.docx"><b>Click Here</b></a></td>
                                                     </tr>
													 <tr class="success">
                                                        <td>3</td>
                                                        <td>G.PRAVEEN KUMAR<br>
															K. HIMA VARSHINI<br>
															G. VISHAL REDDY<br>
															K. VAIBAV VAIJANATH<br>

														</td>
                                                        <td>MOBILE THEFT</td>
                                                        <td>2012-2016</td>
														<td><a href="mobiletheft.docx" target="_blank"><b>Click Here</b></a></td>
                                                     </tr>
													 <tr class="success">
                                                        <td>4</td>
                                                        <td>K. AYYAPPA REDDY<br>
															K.C. SAIVARMA<br>
															K. SHERYA<br>
															K. MOUNIKA<br>

														</td>
                                                        <td>HOTEL INSPECTION DATA</td>
                                                        <td>2012-2016</td>
														<td><a href="hotelinspection.docx">Click Here</a></td>
                                                     </tr>
													 
													 <tr class="success">
                                                        <td>5</td>
                                                        <td>SAHIL PATEL<br>
															S. LAVANYA<br>
															S. ANUSHA<br>
															R REVENTHSWAR<br>

														</td>
                                                        <td>MEDICAL INSURANCE<br>ANALYSIC</td>
                                                        <td>2012-2016</td>
														<td><a href="medicalinsurance.docx">Click Here</a></td>
                                                     </tr>
													 
													 <tr class="success">
                                                        <td>6</td>
                                                        <td>VIKAS TIWARI<br>
															Y U L TEJASWINI<br>
															V MADHUSUDHAN<br>
															T. PAVANA<br>
														</td>
                                                        <td>SAFE DRIVING<br>USING MOBILES</td>
                                                        <td>2012-2016</td>
														<td><a href="safedriving.docx">Click Here</a></td>
                                                     </tr>
													 
													 <tr class="success">
                                                        <td>7</td>
                                                        <td>S. NIKITHA<br>
															Y U LTEJASWINI<br>
															V MADHUSUDHAN<br>
															T PRAVANA<br>
														</td>
                                                        <td>ROAD SIDE ASSISTANCE</td>
                                                        <td>2012-2016</td>
														<td><a href="roadsideassistance.docx">Click Here</a></td>
                                                     </tr>
													 
													 <tr class="success">
                                                        <td>8</td>
                                                        <td>T SANTHOSHI<br>
															TALLA MOUNIKA<br>
															YADAGIRI NARESH<br>
															THADEM MOUNIKA<br>


														</td>
                                                        <td>YUMMY</td>
                                                        <td>2012-2016</td>
														<td><a href="yummy.docx">Click Here</a></td>
                                                     </tr>
													 <tr class="success">
                                                        <td>9</td>
                                                        <td>A DIVYA<br>
															O ROHITH<br>
															K DHEERAJ REDDY<br>
															K SAI KIRAN<br>


														</td>
                                                        <td>E-BUDGET</td>
                                                        <td>2012-2016</td>
														<td><a href="ebudget.docx">Click Here</a></td>
                                                     </tr>
													 <tr class="success">
                                                        <td>10</td>
                                                        <td>G PRASHANTHI<br>
															K ANUSHA<br>
															G RAVALI<br>
															K HARSHITH REDDY<br>


														</td>
                                                        <td>OPTIMIZED SYNOPSIS</td>
                                                        <td>2012-2016</td>
														<td><a href="optimizedsynopsis.docx">Click Here</a></td>
                                                     </tr>
													 <tr class="success">
                                                        <td>11</td>
                                                        <td>A RAHUL<br>
															P SRI DIVYA<br>
															R  AYYAPA SWAMY<br>


														</td>
                                                        <td>SKILL MANAGEMENT</td>
                                                        <td>2012-2016</td>
														<td><a href="skillmanagement.docx">Click Here</a></td>
                                                     </tr>
													 <tr class="success">
                                                        <td>12</td>
                                                        <td>G  ABHISHEK REDDY<br>
															G RANJITH<br>
															S MAHAVEER<br>


														</td>
                                                        <td>E-POSTAL SYNOPSIS</td>
                                                        <td>2012-2016</td>
														<td><a href="epostalsynopsis.docx">Click Here</a></td>
                                                     </tr>
													
												</table>              
			
			</div>
			
		</div></div>




<?php include('footer.php'); ?>