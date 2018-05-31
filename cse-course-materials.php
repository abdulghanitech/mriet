<?php
$category = "Departments";
$sub_category= "Computer Science & Engineering";
$sub_sub_category = "Course Materials";

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
		<h3>II Year I sem Course Questions and Materials</h3>
		<table class="table table-striped table-hover table-responsive">
		<tr class="success"><th><font color=red>Previous Question Papers</font></th><th><font color=red>Preparation Questions</font></th><th><font color=red>Assignment Questions</font></th><th><font color=red>Course Material</font></th></tr>
		<tr>
		<td><a href="img/images/pdf/DS-oldQP.pdf"><b>Data Structures</b></a></td>
		<td><a href="img/images/pdf/DS.pdf"><b>Data Structures</b></a></td>
		<td><a href="img/images/pdf/DS.pdf"><b>Data Structures</b></a></td>
		<td><table><tr>
		<td><a href="img/images/pdf/DS.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/DS.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/DS.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>

		<tr class="info"><td><a href="img/images/pdf/BEE-oldQP.pdf"><b>BEE </b></a></td><td><a href="img/images/pdf/BEE.pdf"><b>BEE</b></a></td><td><a href="img/images/pdf/BEE.pdf"><b>BEE </b></a></td><td><table><tr><td><a href="img/images/pdf/BEE.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/BEE.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/BEE-V.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>

		<tr><td><a href="img/images/pdf/MFCS-oldQP.PDF"><b>MFCS</b></a></td><td><a href="img/images/pdf/MFCS.PDF"><b>MFCS</b></a></td><td><a href="img/images/pdf/MFCS.PDF"><b>MFCS </b></a></td><td><table><tr><td><a href="img/images/pdf/MFCS-III.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/MFCS-IV.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/MFCS-V.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>

		<tr class="info"><td><a href="img/images/pdf/DLD-oldQP.pdf"><b>DLD</b></a></td><td><a href="img/images/pdf/DLD.pdf"><b>DLD</b></a></td><td><a href="img/images/pdf/DLD.pdf"><b>DLD</b></a></td><td><table><tr><td><a href="img/images/pdf/BEE.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/BEE.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/BEE.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>

		<tr><td><a href="img/images/pdf/EDC-oldQP.PDF"><b>EDC</b></a></td><td><a href="img/images/pdf/EDC.PDF"><b>EDC</b></a></td><td><a href="img/images/pdf/EDC.PDF"><b>EDC</b></a></td><td><table><tr><td><a href="img/images/pdf/EDC-III.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/EDC-IV.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/EDC-V.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>

		<tr class="info"><td><a href="img/images/pdf/P&S-oldQP.pdf"><b>P&S </b></a></td><td><a href="img/images/pdf/BEE.pdf"><b>P&S </b></a></td><td><a href="img/images/pdf/BEE.pdf"><b>P&S </b></a></td><td><table><tr><td><a href="img/images/pdf/p&s-iv.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/p&s-iv.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/BEE.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>
		<tr><td  align="center"><a href="img/images/pdf/cseIII-IExamTimeTable.PDF"><i class="fa fa-star"></i> Exam Time Table</a></td></tr>  
			</table>
			

			<h3>III Year I sem Course Questions and Materials</h3>

			<table class="table table-striped table-hover table-responsive"><tr class="success"><th><font color=red>Previous Question Papers</font></th><th><font color=red>Preparation Questions</font></th><th><font color=red>Assignment Questions</font></th><th><font color=red>Course Material</font></th></tr>

			<tr><td><a href="img/images/pdf/OS.pdf"><b>Operating Systems</b></a></td><td><a href="img/images/pdf/os_questions.PDF"><b>Operating Systems </b></a></td><td><a href="img/images/pdf/os_questions.PDF"><b>Operating Systems Questions</b></a></td><td><table><tr><!--<td><a href="img/images/pdf/os_questions.PDF"><b>Unit-I</b></a></td><td><a href="img/images/pdf/os_questions.PDF"><b>Unit-II</b></a></td>--><td><a href="img/images/pdf/OS-III.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/OS-IV.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/OS-V.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>


			<tr class="info"><td><a href="img/images/pdf/SE.pdf"><b>Software Engineering</b></a></td><td><a href="img/images/pdf/SE-five.PDF"><b>Software Engineering</b></a></td><td><a href="img/images/pdf/SE_IMP_QUESTION.PDF"><b>Software Engineering Questions</b></a></td><td><table><tr><!--<td><td><a href="img/images/pdf/SE_IMP_QUESTION.PDF"><b>Unit-I</b></a></td><td><a href="img/images/pdf/SE_IMP_QUESTION.PDF"><b>Unit-II</b></a></td>--><td><a href="img/images/pdf/SE-III.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/SE-IV.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/SE-V.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>

			<tr><td><a href="img/images/pdf/CD.pdf"><b>Compiler Design</b></a></td><td><a href="img/images/pdf/CD-five.PDF"><b>Compiler Design</b></a></td><td><a href="img/images/pdf/CD_ques.PDF"><b>Compiler Design Questions</b></a></td><td><table><tr><!--<td><td><a href="img/images/pdf/CD_ques.PDF"><b>Unit-I</b></a></td><td><a href="img/images/pdf/CD_ques.PDF"><b>Unit-II</b></a></td>--><td><a href="img/images/pdf/CD-III.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/CD-IV.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/CD-V.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>

			<tr class="info"><td><a href="img/images/pdf/CN-PRE.pdf"><b>Computer Networks</b></a></td><td><a href="img/images/pdf/CN_imp_questions.PDF"><b>Computer Networks </b></a></td><td><a href="img/images/pdf/CN_imp_questions.PDF"><b>Computer Networks Questions</b></a></td><td><table><tr><!--<td><td><a href="img/images/pdf/CN_imp_questions.PDF"><b>Unit-I</b></a></td><td><a href="img/images/pdf/CN_imp_questions.PDF"><b>Unit-II</b></a></td>--><td><a href="img/images/pdf/CN-III.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/CN-IV.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/CN-V.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>

			<tr><td><a href="img/images/pdf/IPR-PRE.pdf"><b>IPR</b></a></td><td><a href="img/images/pdf/IPR-questions.PDF"><b>IPR</b></a></td><td><a href="img/images/pdf/IPR.pdf"><b>IPR </b></a></td><td><table><tr><!--<td><td><a href="img/images/pdf/os_questions.PDF"><b>Unit-I</b></a></td><td><a href="img/images/pdf/os_questions.PDF"><b>Unit-II</b></a></td>--><td><a href="img/images/pdf/IPR-III.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/IPR-IV.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/IPR-V.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>

			<tr class="info"><td><a href="img/images/pdf/PPL.pdf"><b>PPL</b></a></td><td><a href="img/images/pdf/PPL.PDF"><b>PPL</b></a></td><td><a href="img/images/pdf/PPL.PDF"><b>PPL </b></a></td><td><table><tr><!--<td><td><a href="img/images/pdf/os_questions.PDF"><b>Unit-I</b></a></td><td><a href="img/images/pdf/os_questions.PDF"><b>Unit-II</b></a></td>--><td><a href="img/images/pdf/PPL.PDF"><b>Unit-III</b></a></td><td><a href="img/images/pdf/PPL.PDF"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/PPL.PDF"><b>Unit-V</b></a></td></tr></table></td></tr>
			 <tr align="center"><td  align="center"><a href="img/images/pdf/cseIII-IExamTimeTable.PDF"><i class="fa fa-star"></i> Exam Time Table</a></td></tr>  
			   </table>
				


				<h3>IV Year I sem Course Questions and Materials</h3>
				<table class="table table-striped table-hover table-responsive">
				<tr class="success"><th><font color=red>Previous Question Papers</font></th><th><font color=red>Preparation Questions</font></th><th><font color=red>Assignment Questions</font></th><th><font color=red>Course Material</font></th></tr>

				<tr><td><a href="img/images/pdf/LP-five.PDF"><b>Linux Programming</b></a></td><td><a href="img/images/pdf/LP-five.PDF"><b>Linux Programming</b></a></td><td><a href="img/images/pdf/LP-five.PDF"><b>Linux Programming</b></a></td><td><table><tr><!--<td><a href="img/images/pdf/os_questions.PDF"><b>Unit-I</b></a></td><td><a href="img/images/pdf/os_questions.PDF"><b>Unit-II</b></a></td>--><td><a href="img/images/pdf/OS-III.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/OS-IV.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/OS-V.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>


				<tr class="info"><td><a href="img/images/pdf/DWDM-five.PDF"><b>DMDW</b></a></td><td><a href="img/images/pdf/DWDM-five.PDF"><b>DMDW</b></a></td><td><a href="img/images/pdf/DWDM-five.PDF"><b>DMDW</b></a></td><td><table><tr><!--<td><td><a href="img/images/pdf/SE_IMP_QUESTION.PDF"><b>Unit-I</b></a></td><td><a href="img/images/pdf/SE_IMP_QUESTION.PDF"><b>Unit-II</b></a></td>--><td><a href="img/images/pdf/SE-III.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/SE-IV.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/SE-V.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>


				<tr><td><a href="img/images/pdf/CF-five.PDF"><b>Computer Forensics</b></a></td><td><a href="img/images/pdf/CF-five.PDF"><b>Computer Forensics</b></a></td><td><a href="img/images/pdf/CF-five.PDF"><b>Computer Forensics</b></a></td><td><table><tr><!--<td><td><a href="img/images/pdf/CD_ques.PDF"><b>Unit-I</b></a></td><td><a href="img/images/pdf/CD_ques.PDF"><b>Unit-II</b></a></td>--><td><a href="img/images/pdf/CD-III.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/CD-IV.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/CD-V.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>


				<tr class="info"><td><a href="img/images/pdf/SPM-five.PDF"><b>SPM</b></a></td><td><a href="img/images/pdf/SPM-five.PDF"><b>SPM</b></a></td><td><a href="img/images/pdf/SPM-five.PDF"><b>SPM</b></a></td><td><table><tr><!--<td><td><a href="img/images/pdf/CN_imp_questions.PDF"><b>Unit-I</b></a></td><td><a href="img/images/pdf/CN_imp_questions.PDF"><b>Unit-II</b></a></td>--><td><a href="img/images/pdf/CN-III.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/CN-IV.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/CN-V.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>

				<tr><td><a href="img/images/pdf/CLOUD-five.PDF"><b>Cloud Computing</b></a></td><td><a href="img/images/pdf/CLOUD-five.PDF"><b>Cloud Computing</b></a></td><td><a href="img/images/pdf/CLOUD-five.PDF"><b>Cloud Computing</b></a></td><td><table><tr><!--<td><td><a href="img/images/pdf/os_questions.PDF"><b>Unit-I</b></a></td><td><a href="img/images/pdf/os_questions.PDF"><b>Unit-II</b></a></td>--><td><a href="img/images/pdf/IPR-III.pdf"><b>Unit-III</b></a></td><td><a href="img/images/pdf/IPR-IV.pdf"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/IPR-V.pdf"><b>Unit-V</b></a></td></tr></table></td></tr>

				<tr class="info"><td><a href="img/images/pdf/DP-five.PDF"><b>Design Patterns</b></a></td><td><a href="img/images/pdf/DP-five.PDF"><b>Design Patterns</b></a></td><td><a href="img/images/pdf/DP-five.PDF"><b>Design Patterns</b></a></td><td><table><tr><!--<td><td><a href="img/images/pdf/os_questions.PDF"><b>Unit-I</b></a></td><td><a href="img/images/pdf/os_questions.PDF"><b>Unit-II</b></a></td>--><td><a href="img/images/pdf/PPL.PDF"><b>Unit-III</b></a></td><td><a href="img/images/pdf/PPL.PDF"><b>Unit-IV</b></a></td><td><a href="img/images/pdf/PPL.PDF"><b>Unit-V</b></a></td></tr></table></td></tr>

				 <tr align="center"><td  align="center"><a href="img/images/pdf/cseIII-IExamTimeTable.PDF"><i class="fa fa-star"></i> Exam Time Table</a></td></tr>  
				   </table>
			
		</div></div>




<?php include('footer.php'); ?>