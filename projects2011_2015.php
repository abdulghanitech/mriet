<?php
$category = "Research and Development";
$sub_category= "Projects 2011-2015";
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
		<h3><b>Research & Development Projects 2011-2015</b></h3>
		
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
                                                        <td>K SOWMYA<br> K JYOTHI <br>SRIKANTH</td>
                                                        <td>POLICE HELP LINE</td>
                                                        <td>2011-2015</td>
                                                        <td><a href="http://mriet.ac.in/policehelp.docx">Click Here</a></td>
												    </tr>
													
												</table>              
			
			</div>
			
		</div></div>




<?php include('footer.php'); ?>