<?php
$category = "Departments";
$sub_category= "Computer Science & Engineering";
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
				<b><div class="text-center">CSE Department</div></b>
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
														<th>Profile</th>
													</tr>
													<tr class="success">
                                                        <td>1</td>
                                                        <td>Dr. ASHOK M</td>
                                                        <td>Ph.D</td>
                                                        <td>Professor &<font color=red><b> PRINCIPAL</font></b></td>
                                                        <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>

														
												    </tr>
											                                <tr class="success">
															<td>2</td>
															<td>Dr K E BALA CHANDRUDU</td>
															<td>Ph.D</td>
							                                                   <td>Professor &<font color=red><b> HOD</font></b></td> 
<td><button class="#btn btn-primary" onClick="fun2()">View Profile</button></td>

															
															
														</tr>
														<tr class="info">
															<td>3</td>
															<td>Dr. P. KIRAN KUMAR REDDY</td>
															<td>Ph.D</td>
															<td>Professor</td> <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
															
														</tr>
														<tr class="success">
															<td>4</td>
															<td>Dr. MD. ASHFAQUL HASAN</td>
															<td>Ph.D</td>
															<td>Professor</td> <td><button class="#btn btn-primary" onClick="fun4()">View Profile</button></td>
																													
														</tr>
														<tr class="danger">
															<td>5</td>
															<td>Dr. M. KONDALA RAO</td>
															<td>Ph.D</td>
															<td>Professor</td> <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
															
														</tr>
														<tr class="info">
															<td>6</td>
															<td>Dr. PRABHA SELVARAJ</td>
															<td>Ph.D</td>
															<td>Professor</td> <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>	
															
														</tr>
														<tr class="danger">
                                                                                                                <td>7</td>
														<td>Mr.D.KALYAN KUMAR </td>
                                                                                                                <td>M.Tech</td>
                                               <td>Associate.professor</td> <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
                                                        
                                                    </tr>
													<tr class="success">
<td>8</td>
													<td>Mr.A.MAHENDAR</td>
                                                                                                         <td>M.Tech(Ph.D)</td>
                                           <td>Associate.professor</td> <td><button class="#btn btn-primary" onClick="fun8()">View Profile</button></td>
														
                                                        
                                                    </tr>
							<tr class="danger">
                                                        <td>9</td>
                                                        <td>Mrs.K.KALPANA</td>
                                                        <td>M.Tech(Ph.D)</td>
                                                        <td>Associate.professor</td>
							 <td><button class="#btn btn-primary" onClick="fun9()">View Profile</button></td>							
												    </tr>
													<tr class="info">
                                                        <td>10</td>
                                                        <td>Mr.G.PRAVEEN KUMAR</td>
                                                        <td>M.Tech</td>
                                                        <td>Associate.professor</td>
							 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>							
													</tr>
                                                    
							                       <tr class="success">
                                                        <td>11</td>                                 
                                                        <td>Mr.M.NAGENDRA RAO</td>
                                                        <td>M.Tech</td>
                                                        <td>Associate.professor</td>
							 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>							
                                                    </tr>
                                                    <tr class="info">
                                                        <td>12</td>
                                                        <td>Mr.RAVI REGULAGADDA</td>
                                                        <td>M.Tech</td>
                                                        <td>Associate.professor</td>
							 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>							
                                                    </tr>
													<tr>
                                                    <tr class="danger">
                                                        <td>13</td>
							<td>Mr.B.SUNIL</td>
                                                        <td>M.Tech</td>
                                                        <td>Associate.professor & TPO</td>
							 <td><button class="#btn btn-primary" onClick="fun13()">View Profile</button></td>							
                                                    </tr>
													<tr class="success">
                                                        <td>14</td>
														<td>Mr.M.BHASKAR</td>
                                                        <td>M.Tech</td>
                                                        <td>Associate.professor</td>
							 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>							
                                                    </tr>
													<tr class="info">
                                                        <td>15</td>
														<td>Mr.T.S.S.S.L.N.SHARMA</td>
                                                        <td>M.Tech</td>
                                                        <td>Associate.professor</td>
							 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>							
                                                    </tr>
													<tr class="danger">
                                                        <td>16</td>
														<td>Mr.K.UDAY KUMAR</td>
                                                        <td>M.Tech</td>
                                                        <td>Associate.professor</td>
							 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>							
                                                    </tr>
													<tr class="success">
                                                        <td>17</td>
														<td>Mr.SK.RIYAZ</td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant.Professor</td>
							 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>							
                                                    </tr>
													<tr class="info">
                                                        <td>18</td>
														<td>Mrs.M.SWARNANJALI </td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant.Professor</td>
							 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>							
                                                    </tr>
													<tr class="danger">
                                                        <td>19</td>
														<td>Mrs.B.DEEPTHI</td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant.Professor</td>
							 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>					        
                                                    </tr>
													
													<tr class="success">
                                                        <td>20</td>
							<td>Mr.M.GANESH KUMAR</td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant.Professor</td>
							 <td><button class="#btn btn-primary" onClick="fun20()">View Profile</button></td>							
                                                        
                                                    </tr>
													<tr class="info">
                                                        <td>21</td>
														<td>Mrs.P.L.SHAILAJA</td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant.Professor</td>
							 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>							
                                                        
                                                    </tr>
													<tr class="danger">
                                                        <td>22</td>
														<td>Mrs.B.BHAVYA</td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant.Professor</td>
							 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>							
                                                        
                                                    </tr>
													
													<tr class="info">
                                                        <td>23</td>
														<td>Mrs.K.SUPRIYA SUHASINI</td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant.Professor</td>
							 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>							
													</tr>
													<tr class="danger">
                                                        <td>24</td>
														<td>Mrs.G.VANDHANA</td>
                                                        <td>M.Tech</td>
                                                        <td>Assistant.Professor</td>
							 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>							
													</tr>
													<tr class="success">
														<td>25</td>
														<td>Mr.B.AVINASH</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
													</tr>
													<tr class="info">
														<td>26</td>
														<td>Mr.K.RAJIV</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
													</tr>
													<tr class="danger">
														<td>27</td>
														<td>Mr.PSRB.SHASHANK</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
													</tr>
													<tr class="success">
														<td>28</td>
														<td>Mrs.M.SUPRIYA</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
													</tr>
														<tr class="info">
														<td>29</td>
														<td>Mrs.K.JYOTHSNA</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="danger">
														<td>30</td>
														<td>Mr.SVSV PRASAD</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="success">
														<td>31</td>
														<td>Mrs.P.SANTHUJA</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="info">
														<td>32</td>
														<td>Ms.G.SWETHA</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="danger">
														<td>33</td>
														<td>Mrs.B.LAKSHMIKANTHA</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="success">
														<td>34</td>
														<td>Mr.R.SAMPATH REDDY</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="info">
														<td>35</td>
														<td>Mrs.B.SWETHA</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="danger">
														<td>36</td>
														<td>Mrs.R.RAVALIRAJ</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="success">
														<td>37</td>
														<td>Ms.CH.NALINI</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="info">
														<td>38</td>
														<td>Mr.N.NARESH REDDY</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="danger">
														<td>39</td>
														<td>Mr.L.GNANENDER REDDY</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="success">
														<td>40</td>
														<td>Mr.G.NAGESHWAR</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="info">
														<td>41</td>
														<td>Mr.B.RAMBABU</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="danger">
														<td>42</td>
														<td>Mr.V.ROJA RANI</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="success">
														<td>43</td>
														<td>Mrs. SABITHA REDDY PATEL</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														<tr class="info">
														<td>44</td>
														<td>Ms.A B HARIKA</td>
														<td>M.Tech</td>
														<td>Assistant.Professor</td>
														 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
														
														</tr>
														 <tr class="success">
															<td>45</td>
															<td>Mr.M.ANJANEYULU</td>
															<td>M.Tech</td>
															<td>Assistant.Professor</td>
															 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
														</tr>
														<tr class="info">
															<td>46</td>
															<td>Ms.M.KALPANA</td>
															<td>M.Tech</td>
															<td>Assistant.Professor</td>
															 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
														</tr>

														<tr class="success">
															<td>47</td>
															<td>Mr.E.SAGAR</td>
															<td>M.Tech</td>
															<td>Assistant.Professor</td>
															 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
														</tr>
														<tr class="info">
															<td>48</td>
															<td>Ms.D.BHARATHI</td>
															<td>M.Tech</td>
															<td>Assistant.Professor</td>
															 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
														</tr>
														<tr class="info">
															<td>49</td>
															<td>Mr.P.SANTHOSH</td>
															<td>M.Tech</td>
															<td>Assistant.Professor</td>
															 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
														</tr>
														<tr class="danger">
															<td>50</td>
															<td>Mrs.B.SWAROOPA</td>
															<td>M.Tech</td>
															<td>Assistant.Professor</td>
															 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
														</tr>
														<tr class="danger">
															<td>51</td>
															<td>Mr.D.LAKSHMANA KUMAR</td>
															<td>M.Tech</td>
															<td>Assistant.Professor</td>
															 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
														</tr>
														<tr class="success">
															<td>52</td>
															<td>Mr.B.RAJESH</td>
															<td>M.Tech</td>
															<td>Assistant.Professor</td>
															 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
														</tr>
														<tr class="info">
															<td>53</td>
															<td>Ms.L.PRIYANKA</td>
															<td>M.Tech</td>
															<td>Assistant.Professor</td>
															 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
														</tr>
														
														
														
														<tr class="danger">
															<td>54</td>
															<td>Mr.G.ANIL</td>
															<td>M.Tech</td>
															<td>Assistant.Professor</td>
															 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
														</tr>
														<tr class="success">
															<td>55</td>
															<td>Mr.SK.VALI</td>
															<td>M.Tech</td>
															<td>Assistant.Professor</td>
															 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
														</tr>
														<tr class="info">
															<td>56</td>
															<td>Mr.ASHWIN RICH</td>
															<td>M.Tech</td>
															<td>Assistant.Professor</td>
															 <td><button class="#btn btn-primary" onClick="fun1()">View Profile</button></td>
															
														</tr>
													
												</table>              
			
		</div>
		</div>




<?php include('footer.php'); ?>

<div class="modal fade" id="myModal1" role="dialog">
		<div class="modal-dialog">
    	  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Detailed Profile</h4>
			</div>
			<div class="modal-body">
				<img src="assets/images/cse-hod1.jpg" class="img-rounded" alt="Cinque Terre" width="400" height="200"><br><br><br>
				<table class="table table-bordered">
					<tbody>
					  <tr>
						<td><b>Name:</b></td>
						<td><b>Dr.M.ASHOK</b></td>
					  </tr>
					  <tr>
						<td><b>Specializations:</b></td>
						<td><b>B.Tech,M.Tech,Ph.D</b></td>
					  </tr>
					  <tr>
						<td><b>Department:</b></td>
						<td><b>Computer Science and Engineering</b></td>
					  </tr>
					 <tr>
						<td><b>Experience:</b></td>
						<td><b>15 years</b></td>
					  </tr>
					  <tr>
						<td><b>Designation:</b></td>
						<td><b> Professor</b></td>
					  </tr>
					  <tr>
						<td><b>Email id:</b></td>
						<td><b>principal@mriet.ac.in</b></td>
					  </tr>
					  <tr>
						<td><b>PROFILE:</b></td>
						<td>He has obtained Ph.D in Computer Science and Technology from Sri Krishna Devaraya University in Digital Image Processing in the year 2012.  He has done his M.Tech. in computer Science from JNTU, Anantapur and B.Tech. in E.C.E from Sri Krishna Devaraya University.  He worked as a Principal in SSJ Engineering College, Hyderabad.  He has nearly 19 years of experience in teaching.  He has published 27 research papers in National and International journals.  He has presented 11 papers at prestigious conferences.   He has participated as well as conducted a number of workshops and conferences.  He is also a life-time member of reputed professional societies such as I.E.T.E., I.S.T.E. and C.S.I.  He has been invited to various colleges to deliver lectures and keynote addresses.   Presently he is guiding three Ph.D scholars from JNTUH.  </td>
					  </tr>
					</tbody>
				  </table>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<script>
		function fun1() {
			$('#myModal1').modal('show');
		}
	</script>
<div class="modal fade" id="myModal2" role="dialog">
		<div class="modal-dialog">
    	  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Detailed Profile</h4>
			</div>
			<div class="modal-body">
				<img src="images/mriet-principal_msg.jpg" class="img-rounded" alt="Cinque Terre" width="200" height="200"><br><br><br>
				<table class="table table-bordered">
					<tbody>
					  <tr>
						<td><b>Name:</b></td>
						<td><b>Dr K E BALA CHANDRUDU</b></td>
					  </tr>
					  <tr>
						<td><b>Specializations:</b></td>
						<td><b>B.Tech,M.Tech,Ph.D</b></td>
					  </tr>
					  <tr>
						<td><b>Department:</b></td>
						<td><b>Computer Science and Engineering</b></td>
					  </tr>
					 <tr>
						<td><b>Experience:</b></td>
						<td><b>15 years</b></td>
					  </tr>
					  <tr>
						<td><b>Designation:</b></td>
						<td><b>Professor</b></td>
					  </tr>
					  <tr>
						<td><b>Email id:</b></td>
						<td><b>principal@mriet.ac.in</b></td>
					  </tr>
					  <tr>
						<td><b>Additional Info:</b></td>
						<td>1.L V Narasimha Prasad, MannavaMunirathnam Naidu, and K. Prudhvi Kumar Reddy, Model Relating Humidity and Intensity of  Satellite Infrared Imagery for Global Precipitation Now Casting, International Journal of  Hydrology Science and Technology, Inderscience, Vol.4, Issue 4, pp. 310-335, 2014. DOI: http://dx.doi.org/10.1504/IJHST.2014.068447 (Scopus Indexed)</td>
					  </tr>
					</tbody>
				  </table>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<script>
		function fun2() {
			$('#myModal2').modal('show');
		}
	</script>
<div class="modal fade" id="myModal20" role="dialog">
		<div class="modal-dialog">
    	  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Detailed Profile</h4>
			</div>
			<div class="modal-body">
				<img src="images/mriet-ganesh.jpg" class="img-rounded" alt="Cinque Terre" width="200" height="200"><br><br><br>
				<table class="table table-bordered">
					<tbody>
					  <tr>
						<td><b>Name:</b></td>
						<td><b>Mr.M.GANESH KUMAR</b></td>
					  </tr>
					  <tr>
						<td><b>Specializations:</b></td>
						<td><b>B.Tech,M.Tech</b></td>
					  </tr>
					  <tr>
						<td><b>Department:</b></td>
						<td><b>Computer Science and Engineering</b></td>
					  </tr>
					 <tr>
						<td><b>Experience:</b></td>
						<td><b>5 years</b></td>
					  </tr>
					  <tr>
						<td><b>Designation:</b></td>
						<td><b>Assitant Professor</b></td>
					  </tr>
					  <tr>
						<td><b>Email id:</b></td>
						<td><b>ganesh.macha@mriet.ac.in</b></td>
					  </tr>
					  <tr>
						<td><b>Subjects Taught:</b></td>
						<td>1.COMPUTER PROGRAMMING <br> 2.DATA STRUCTURES <br> 3. OPERATING SYSTEM <br> 4. FORMAL LANGUAGE AND AUTOMATA <br> 5. MATHEMATICAL FOUNDATIONS OF COMPUTER SCIENCE <br> 6. DISTRIBUTED SYSTEMS <br> </td>
					  </tr>
					</tbody>
				  </table>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<script>
		function fun20() {
			$('#myModal20').modal('show');
		}
	</script>



<div class="modal fade" id="myModal42" role="dialog">
		<div class="modal-dialog">
    	  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Detailed Profile</h4>
			</div>
			<div class="modal-body">
				<img src="images/Mriet-Mahendar.jpg" class="img-rounded" alt="Cinque Terre" width="200" height="200"><br><br><br>
				<table class="table table-bordered">
					<tbody>
					  <tr>
						<td><b>Name:</b></td>
						<td><b>Mr A. MAHENDAR </b></td>
					  </tr>
					  <tr>
						<td><b>Specializations:</b></td>
						<td><b>B.Tech,M.Tech(Ph.D)</b></td>
					  </tr>
					  <tr>
						<td><b>Department:</b></td>
						<td><b>Computer Science and Engineering</b></td>
					  </tr>
					 <tr>
						<td><b>Experience:</b></td>
						<td><b>11 year</b></td>
					  </tr>
					  <tr>
						<td><b>Designation:</b></td>
						<td><b>Associate Professor</b></td>
					  </tr>
					  <tr>
						<td><b>Email id:</b></td>
						<td><b>mahi.mriet@gmail.com</b></td>
					  </tr>
					  <tr>
						<td><b>Subjects Intrested:</b></td>
						<td>1. C PROGRAMING <br> 2. DBMS <br> 3.COMPUTER NETWORKS   <> 4. CO 5. OS 6.IRS 7. OOAD 8. IS 9. MC 10. CLOUD COMPUTING 11. SE 12. STM 13. SPPM 15. FLAT 16. DAA </td>
					  </tr>
					</tbody>
				  </table>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<script>
		function fun8() {
			$('#myModal8').modal('show');
		}
	</script>


<div class="modal fade" id="myModal13" role="dialog">
		<div class="modal-dialog">
    	  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Detailed Profile</h4>
			</div>
			<div class="modal-body">
				<img src="images/mriet-sunilsir.jpg" class="img-rounded" alt="Cinque Terre" width="200" height="200"><br><br><br>
				<table class="table table-bordered">
					<tbody>
					  <tr>
						<td><b>Name:</b></td>
						<td><b>Mr SUNIL BOLLAM</b></td>
					  </tr>
					  <tr>
						<td><b>Specializations:</b></td>
						<td><b>B.Tech,M.Tech</b></td>
					  </tr>
					  <tr>
						<td><b>Department:</b></td>
						<td><b>Computer Science and Engineering</b></td>
					  </tr>
					 <tr>
						<td><b>Experience:</b></td>
						<td><b>6 years</b></td>
					  </tr>
					  <tr>
						<td><b>Designation:</b></td>
						<td><b>Associate.professor</b></td>
					  </tr>
					  <tr>
						<td><b>Email id:</b></td>
						<td><b>sunil.b@gmriet.ac.in</b></td>
					  </tr>
					  <tr>
						<td><b>Subjects Thought:</b></td>
						<td>1.JAVA PROGRAMMING <br> 2. OPERATING SYSTEMS <br> 3. COMPUTER ORGANIZATION <br> 4. C& Data Structures <br> 5.DMDW <br> 6. DLD <br> 7. WEB TECHNOLOGIES <br> 8. LINUX <br> 9.CLOUD COMPUTING <br> 10. DBMS  </td>
					  </tr>
					</tbody>
				  </table>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<script>
		function fun13() {
			$('#myModal13').modal('show');
		}
	</script>

<div class="modal fade" id="myModal4" role="dialog">
		<div class="modal-dialog">
    	  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Detailed Profile</h4>
			</div>
			<div class="modal-body">
				<img src="images/MRIET-Dr.Hasan.jpg" class="img-rounded" alt="Cinque Terre" width="200" height="200"><br><br><br>
				<table class="table table-bordered">
					<tbody>
					  <tr>
						<td><b>Name:</b></td>
						<td><b>	Dr. MD. ASHFAQUL HASAN</b></td>
					  </tr>
					  <tr>
						<td><b>Specializations:</b></td>
						<td><b>M.Tech,Ph.D</b></td>
					  </tr>
					  <tr>
						<td><b>Department:</b></td>
						<td><b>Computer Science and Engineering</b></td>
					  </tr>
					 <tr>
						<td><b>Experience:</b></td>
						<td><b>5 years</b></td>
					  </tr>
					  <tr>
						<td><b>Designation:</b></td>
						<td><b>Professor</b></td>
					  </tr>
					  <tr>
						<td><b>Email id:</b></td>
						<td><b>dr.ashfaq.mailme@gmail.com</b></td>
					  </tr>
					  <tr>
						<td><b>Profile:</b></td>
						<td>1.JAVA PROGRAMMING <br> 2. OPERATING SYSTEMS <br> 3. COMPUTER ORGANIZATION <br> 4. C& Data Structures <br> 5.DMDW <br> 6. DLD <br> 7. WEB TECHNOLOGIES <br> 8. LINUX <br> 9.CLOUD COMPUTING <br> 10. DBMS  </td>
					  </tr>
					</tbody>
				  </table>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<script>
		function fun4() {
			$('#myModal4').modal('show');
		}
	</script>

<div class="modal fade" id="myModal25" role="dialog">
		<div class="modal-dialog">
    	  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Detailed Profile</h4>
			</div>
			<div class="modal-body">
				<img src="images/mriet-avinash.jpg" class="img-rounded" alt="Cinque Terre" width="200" height="200"><br><br><br>
				<table class="table table-bordered">
					<tbody>
					  <tr>
						<td><b>Name:</b></td>
						<td><b>Mr.B.AVINASH</b></td>
					  </tr>
					  <tr>
						<td><b>Specializations:</b></td>
						<td><b>B.Tech(CSE),M.Tech(SE)</b></td>
					  </tr>
					  <tr>
						<td><b>Department:</b></td>
						<td><b>Computer Science and Engineering</b></td>
					  </tr>
					 <tr>
						<td><b>Experience:</b></td>
						<td><b>4 year</b></td>
					  </tr>
					  <tr>
						<td><b>Designation:</b></td>
						<td><b>Assistant Professor</b></td>
					  </tr>
					  <tr>
						<td><b>Email id:</b></td>
						<td><b>avinashcse@mriet.ac.in</b></td>
					  </tr>
					  <tr>
						<td><b>Subjects Intrested:</b></td>
						<td>1.DATA STRUCTURES <br> 2. OPERATING SYSTEMS <br> 3.DESIGN AND ANALYSIS OF ALGORITHMS <br>  4.SOFTWARE ENGINEERING <br> 5.SOFTWARE PROJECT MANAGEMENT  <br> 6. SOFTWARE TESTING METHODOLOGIES </td>
					  </tr>
					</tbody>
				  </table>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<script>
		function fun25() {
			$('#myModal25').modal('show');
		}
	</script>

