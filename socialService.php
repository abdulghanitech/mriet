<?php
$category = "Campus Life";
$sub_category= "Social Service";
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
		<h3><b>Social Service</b></h3>
		<p>MRIET strongly believes in the saying that, â€œhelping hands are always better than the praying lips. The main activities of MRIET under the social service activities are Plantation, Blood donation camp, Services at orphanages and old age homes, Anti ragging squads, First aid training to students and staff and the recent service by the students and the faculty was to contribute towards the HUD HUD relief fund. <br><br></p>

		<h3><b>Womens Protection Cell</b></h3>

			<div class="table-responsive">
												  
				<table class="table table-striped">
					<tr>
						<th>S.No</th>
						<th>Name</th>
						<th>Designation</th>
						<th>Phone Number</th>
						
						
					</tr>
					<tr class="success">
                        <td>1</td>
                        <td>ANUPAMA</td>
                        <td>ASST PROF</td>
                        <td>98667 85880</td>
                        
				    </tr>

				    <tr class="success">
                        <td>2</td>
                        <td>B RAMA DEVI</td>
                        <td>ASST PROF</td>
                        <td>90523 34266</td>
                        
				    </tr>

				    <tr class="success">
                        <td>3</td>
                        <td>LAHARIKA</td>
                        <td>ASST PROF</td>
                        <td>98850 47520</td>
                        
				    </tr>

				    <tr class="success">
                        <td>4</td>
                        <td>SUSHMA</td>
                        <td>ASST PROF</td>
                        <td>99896 09116</td>
                        
				    </tr>
				      <tr class="success">
                        <td>5</td>
                        <td>SATYAVATHI</td>
                        <td>ASST PROF</td>
                        <td>77993 64222</td>
                        
				    </tr>
					
				</table>              
			
			</div>

			<br><br>

			<img src="img/chiranjeeviblooddonation.png" class="img-responsive">

		


			
		</div></div>




<?php include('footer.php'); ?>