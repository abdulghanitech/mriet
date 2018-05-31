<?php
$category = "Departments";
$sub_category= "Masters of Business Administration";
$sub_sub_category = "Faculty List";

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
				<b><div class="text-center">MBA Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
						
		
		<center><h3 class="page-header">Faculty Details</h3></center>                 
              <div class="table-responsive">
												  
													<table class="table table-striped table-hover">
													<tr>
														<th>S.No</th>
														<th>Name</th>
														<th>Qualification</th>
														<th>Designation</th>
														
													</tr>
													<tr class="success">
                                                        <td>1</td>
                                                        <td>Dr. K. Vanitha</td>
                                                        <td>Phd</td>
                                                        <td>Professor</td>
												    </tr>
													<tr class="danger">
                                                        <td>2</td>
                                                        <td>B. Naveen</td>
                                                        <td>MBA</td>
                                                        <td>Assistant Professor</td>
												    </tr>
													<tr class="info">
                                                        <td>3</td>
                                                        <td>B. Ruth Sunitha</td>
                                                        <td>MBA</td>
                                                        <td>Assistant Professor</td>
														
                                                    </tr>	
													 <tr class="success">
                                                        <td>4</td>                                 
                                                        <td>K. Santhoshini </td>
                                                        <td>MBA</td>
                                                        <td>Assistant Professor</td>
														
                                                    </tr>
													<tr class="danger">
                                                        <td>5</td>
														<td>B. Dhana Lakshmi</td>
                                                        <td>MBA</td>
                                                        <td>Assistant Professor</td>
														
                                                    </tr>
													<tr class="success">
                                                        <td>6</td>
														<td>P. Harika</td>
                                                        <td>MBA</td>
                                                        <td>Assistant Professor</td>
														
                                                    </tr>
													<tr class="info">
                                                        <td>7</td>
														<td>N. Kantha Bai</td>
                                                        <td>MBA</td>
                                                        <td>Assistant Professor</td>
														
                                                    </tr>
													<tr class="danger">
                                                        <td>8</td>
														<td>T. Srikanth</td>
                                                        <td>MBA</td>
                                                        <td>Assistant Professor</td>
														
                                                    </tr>
													<tr class="success">
                                                        <td>9</td>
														<td>Ch. Radhika</td>
                                                        <td>MBA</td>
                                                        <td>Assistant Professor</td>
														
                                                    </tr>
													<tr class="info">
                                                        <td>10</td>
														<td>G. Chandra Shekar Reddy</td>
                                                        <td>MBA</td>
                                                        <td>Assistant Professor</td>
														
                                                    </tr>
													<tr class="danger">
                                                        <td>11</td>
														<td>P. Vishwanath</td>
                                                        <td>MBA</td>
                                                        <td>Assistant Professor</td>
												        
                                                    </tr>
												</table>              
			
		</div>
		</div>




<?php include('footer.php'); ?>