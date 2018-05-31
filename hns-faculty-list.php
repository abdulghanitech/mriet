<?php
$category = "Departments";
$sub_category= "Humanity & Sciences";
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
				<b><div class="text-center">H&S Department</div></b>
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
                                                        <td>ARJUN NUNE</td>
                                                        <td>M. Tech</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
                                                    <tr class="info">
                                                        <td>2</td>
                                                        <td>Dr. C. MAHENDER</td>
                                                        <td>Ph.D</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
                                                    <tr class="danger">
                                                        <td>3</td>
														<td>SHESHAGIRI</td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="success">
                                                        <td>4</td>
														<td>S.MANASA</td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="info">
                                                        <td>5</td>
														<td>B.SHASHIKANTH</td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="danger">
                                                        <td>6</td>
														<td>MARY PREM</td>
                                                        <td>M.Sc.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="success">
                                                        <td>7</td>
														<td>Ch.SIREESHA</td>
                                                        <td>M.Sc.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="info">
                                                        <td>8</td>
														<td>A.PRAKASH REDDY</td>
                                                        <td>M.Sc.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="danger">
                                                        <td>9</td>
														<td>M.SRIKANTH</td>
                                                        <td>M.Sc.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													
													<tr class="success">
                                                        <td>10</td>
														<td>PUSHPAVATHI</td>
                                                        <td>M.Sc.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="info">
                                                        <td>11</td>
														<td>K.VENKATA SHIVA</td>
                                                        <td>M.Sc.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="danger">
                                                        <td>12</td>
														<td>V.RAMADEVI</td>
                                                        <td>M.Sc.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="success">
                                                        <td>13</td>
														<td>SABITHA SWARGAM</td>
                                                        <td>M.Sc.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="info">
                                                        <td>14</td>
														<td>S.SINDHUJA</td>
                                                        <td>M.Sc.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="danger">
                                                        <td>15</td>
														<td>T.PALLAVI</td>
                                                        <td>M.Sc.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="success">
                                                        <td>16</td>
														<td>RAMESH GOUD</td>
                                                        <td>MA</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="info">
                                                        <td>17</td>
														<td>K.NIVESH</td>
                                                        <td>MA</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="danger">
                                                        <td>18</td>
														<td>P.S SREEJITH</td>
                                                        <td>MA</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="success">
                                                        <td>19</td>
														<td>SWASTIKA</td>
                                                        <td>MA</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													
													<tr class="info">
                                                        <td>20</td>
														<td>DARALA RAKESH BABU</td>
                                                        <td>M.Sc.</td>
                                                        <td>Assistant Professor</td>
														
                                                        
                                                    </tr>
													<tr class="success">
														<td>21</td>
														<td>UMA MAHESHWARI</td>
														<td>M.Sc.</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="info">
														<td>22</td>
														<td>BVL NARASIMHA RAO</td>
														<td>MA</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="danger">
														<td>23</td>
														<td>M. SANDHYA RANI</td>
														<td>M.Sc.</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="success">
														<td>24</td>
														<td>SAI SRIKANTH</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="info">
														<td>25</td>
														<td>K. SRINIVASULU</td>
														<td>M.Sc.</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="danger">
														<td>26</td>
														<td>CH.VENKATA SWAMY</td>
														<td>M.Sc.</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="success">
														<td>27</td>
														<td>RENUKA RANI</td>
														<td>M.Sc.& M.Tech(Ph.D.)</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="info">
														<td>28</td>
														<td>KAMALAKAR</td>
														<td>M.Sc.</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="danger">
														<td>29</td>
														<td>SUBASH</td>
														<td>M.Sc.</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="success">
														<td>30</td>
														<td>A. RAVALI</td>
														<td>M.Sc.</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="info">
														<td>31</td>
														<td>Dr. Abhilasha Dhariwal</td>
														<td>Ph.D.</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="danger">
														<td>32</td>
														<td>L. Rama Devi</td>
														<td>M.Sc.</td>
														<td>Assistant Professor</td>
														
														
														</tr>
														<tr class="danger">
														<td>33</td>
														<td>R. Abhinav</td>
														<td>M.Tech</td>
														<td>Assistant Professor</td>
														
														
														</tr>
													
												</table>              
			
		</div>
		</div>




<?php include('footer.php'); ?>