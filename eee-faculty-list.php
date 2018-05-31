<?php
$category = "Departments";
$sub_category= "Electrical & Electronics Engineering";
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
				<b><div class="text-center">EEE Department</div></b>
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
                                                        <td> Mr. CHANDRASHEKAR  BARU</td>
                                                        <td>M. Tech</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
                                                    <tr class="info">
                                                        <td>2</td>
                                                        <td>Mr. LILI KUMAR. UTTARALA</td>
                                                        <td>M. Tech</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
                                                    <tr class="danger">
                                                        <td>3</td>
														<td>Mrs. SARITHA KUMARI THUMMA</td>
                                                        <td>M. Tech</td>
                                                        <td>Associate Professor</td>
														
                                                        
                                                    </tr>
													<tr class="success">
                                                        <td>4</td>
														<td>Mr. KONDRU THIRUPATHI RAO</td>
                                                        <td>M. Tech</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="info">
                                                        <td>5</td>
														<td>Mrs. KUNDE KAVITHA</td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="danger">
                                                        <td>6</td>
														<td>Mrs. ANUPAMA RAMISETTI</td>
                                                        <td>M. Tech.(Ph.D.)</td>
                                                        <td>Associate Professor</td>
														
                                                        
                                                    </tr>
													<tr class="success">
                                                        <td>7</td>
														<td>Mrs. ASHA KIRAN BATTULA</td>
                                                        <td>M. Tech</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="info">
                                                        <td>8</td>
														<td>Mr. CHIRANJEEV IMYADAGONI</td>
                                                        <td>M. Tech.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="danger">
                                                        <td>9</td>
														<td>Ms. MOUNIKA MADISETTI</td>
                                                        <td>M. Tech.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													
													<tr class="success">
                                                        <td>10</td>
														<td>Mr. SATEESH BABU MADDINENI</td>
                                                        <td>M. Tech.,(Ph.D)</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="info">
                                                        <td>11</td>
														<td>Ms. SPANDANA MALLAM</td>
                                                        <td>M. Tech</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="danger">
                                                        <td>12</td>
														<td>Mr.SRINIVASA RAO DAVU</td>
                                                        <td>M. Tech.,(Ph.D.)</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="success">
                                                        <td>13</td>
														<td>Mr. SRINIVAS B L</td>
                                                        <td>M. Tech.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="info">
                                                        <td>14</td>
														<td> Mr. SUNIL KUMAR. PULUMATHI</td>
                                                        <td>M. Tech.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="danger">
                                                        <td>15</td>
														<td>Ms. P.MALATHI</td>
                                                        <td>M. Tech.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="success">
                                                        <td>16</td>
														<td>Mr B.NAGESWARA RAO</td>
                                                        <td>M. Tech.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="info">
                                                        <td>17</td>
														<td>Dr. K.HANUMAJI</td>
                                                        <td>Ph.D.</td>
                                                        <td>Assistant Professor & HOD</td>
														
                                                        
                                                    </tr>
													<tr class="danger">
                                                        <td>18</td>
														<td>K. PRAVEENA</td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="success">
                                                        <td>19</td>
														<td>S. NAVEED AHAMMAD</td>
                                                        <td>M. Tech</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													
													<tr class="info">
                                                        <td>20</td>
														<td>P. JHANSI RANI</td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="success">
														<td>21</td>
														<td>A. SAISREE</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="info">
														<td>22</td>
														<td>K. SWATHI PRIYA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="danger">
														<td>23</td>
														<td>B. SWAPNA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="success">
														<td>24</td>
														<td>CH. SANDHYA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="info">
														<td>25</td>
														<td>K. RAMYA</td>
														<td> M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="danger">
														<td>26</td>
														<td>D. VARA PRASAD</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="success">
														<td>27</td>
														<td>AJID PASHA</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="info">
														<td>28</td>
														<td>SURYA PRAKASH</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="danger">
														<td>29</td>
														<td>PRATHIMA DAS</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="success">
														<td>30</td>
														<td>M. LAKSHMI NARAYANA</td>
														<td>M.E/M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="info">
														<td>31</td>
														<td>Mr. M. NAVEEN KRISHNAIAH</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="danger">
														<td>32</td>
														<td>Mrs.UMA MAHESWARI</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
												</table>              
			
		</div>
		</div>




<?php include('footer.php'); ?>