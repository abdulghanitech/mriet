<?php
$category = "Departments";
$sub_category= "Computer Science & Engineering";
$sub_sub_category = "PEO's, PO's & PSO's";

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
				<b><div class="text-center">CSE Department</div></b>
			</div>
			<div class="panel-body">
			<?php listItemsActiveClassAdderExtendedVersion($category,$sub_category,$sub_sub_category); ?>
			</div>
		</div>
			
		</div>

		<div class="col-md-8">
		
			
				<img src="img/cse3.jpg" class="img-responsive center-block">
						<br><br>
		
							<label><b>Computer Science & Engineering PEO's</b></label>	
									<p> <b>PEO1</b> – Graduates shall have fundamental and advanced knowledge in mathematics, science, computer science engineering and interdisciplinary engineering to emerge as technocrats.<br>
 
										<b>PEO2</b> – Graduates shall have capabilities to design and develop innovative solutions for benefits of society, by diligence, team work and lifelong learning.<br>
										 
										<b>PEO3</b> – Graduates shall get employed in industries or pursue higher studies or research assignments or turn as entrepreneurs.<br>
										 
										<b>PEO4</b> – Graduates shall have good communication skills, leadership skills, professional, ethical and social responsibilities.<br>
									</p>
									<label><b>Computer Science & Engineering PO's</b></label>
									<p>Engineering Graduates will be able to: <br><br>

										<b>1. Engineering Knowledge :</b> Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems. <br>
										<b>2. Problem Analysis:</b> Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences. <br>
										<b>3. Design/development of solutions:</b> Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations. <br>
										<b>4. Conduct investigations of complex problems:</b> Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions. <br>
										<b>5. Modern tool usage:</b> Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations. <br>
										<b>6. The engineer and society:</b> Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice. <br>
										<b>7. Environment and sustainability:</b> Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development. <br>
										<b>8. Ethics:</b> Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice. <br>
										<b>9. Individual and team work:</b> Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings. <br>
										<b>10. Communication:</b> Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions. <br>
										<b>11. Project management and finance:</b> Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments. <br>
										<b>12. Life-long learning:</b> Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change.<br>

									<label><b>Computer Science & Engineering PSO's</b></label>	
									<p>	<b>PSO1:</b>	Student shall have additional skills and knowledge to design,
										 develop and implement java, .Net and cloud computing as
										 frontend application tools.<br>
										<b>PSO2:</b>	Student shall have additional skills and knowledge in
										 creating and implementing DBMS, Big Data as backend
										 application tools.
									</p>	 
			
		</div></div>




<?php include('footer.php'); ?>