<?php
$pagename= "Committees";

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

		<center><h3>Committees</h3></center>

		<div class="page-row">
										<div class="container">
										<h4 class="panel-title"><a href="websitecommittee.php">Website Committee</a></h4><br>
										
										</div>
										<div class="page-row">
										<div class="container">
										  <h4 class="panel-title"><a  href="AntiRaggingCommittee&AntiRaggingSquads.php">AntiRaggingCommittee & AntiRaggingSquads Committee</a></h4><br>
										    
										<div class="page-row">
										<div class="container">
								<h4 class="panel-title"><a href="Finance-Committee.php">Finance Committee</a></h4><br>
										  
										</div>
										</div>			
                                                                                <div class="page-row">
										<div class="container">
										  <h4 class="panel-title"><a class="accordion-toggle" data-toggle="modal" data-target="#myModal4" href="Grievances&RedressalCell.php">Grievances & Redressal Cell</a></h4><br>
										    
										 </div> 
										</div>
											
											
												
										
										
											<div class="page-row">
										<div class="container">
					<h4 class="panel-title"><a   href="SportsandGames-Committee.php">Sports and Games Committee </a></h4><br>
										    
										 </div> 
										</div>
										
										
										
										
										<div class="page-row">
										<div class="container">
								 <h4 class="panel-title"><a  href="Hostel-Committee.php">Hostel Committee  </a></h4><br>
										    
										 </div> 
										</div>
										
                                                                               <div class="page-row">
										<div class="container">
					<h4 class="panel-title"><a  href="Purchase&MaintenanceCommittee.php">Purchase & Maintenance Committee</a></h4><br>
										    
										 </div> 
										</div>
										<div class="page-row">
										<div class="container">
							<h4 class="panel-title"><a  href="Library-Committee.php">Library Committee  </a></h4><br>
										    
										 </div> 
										</div>
										<div class="page-row">
										<div class="container">
							<h4 class="panel-title"><a  href="Transport-Committee.php">Transport Committee</a></h4><br>
										    
										 </div> 
										</div>
										<div class="page-row">
										<div class="container">
							<h4 class="panel-title"><a  href="WomenEmpowermentCell.php">Women Empowerment Cell</a></h4><br>
										    
										 </div> 
										</div>

                                                                                <div class="page-row">
										<div class="container">
							<h4 class="panel-title"><a  href="Disciplinary-Committee.php">Disciplinary Committee</a></h4><br>
										    
										 </div> 
										</div>
										
										
										
										<div class="page-row">
										<div class="container">
				  <h4 class="panel-title"><a  href="Research&Development-Committee.php">Research & Development Committee</a></h4><br>
										    
										 </div> 
										</div>
										
										
										
										
										
										
										
										</div>


		</div>




<?php include('footer.php'); ?>