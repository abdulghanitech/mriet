<?php
$category = "Campus Life";
$sub_category= "Library";
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
		<h3><center><font color=green><b><u>LIBRARY & INFORMATION CENTRE</u></b></font></center></h3>
                 
		<img src="#img/cse-staff-pic.jpg" class="img-responsive center-block" style="width: 80%;">

		<p>Recognizing the role of library & information Centre services is to provide comprehensive resources and services in support of the research, teaching, and learning needs of the Users community and meeting the requirements of MRIET's academic & research programmers, Library has adequate number of information resources to satisfy the information need of learning resource center users. It is considered one of the most resourceful centers in twin cities since it caters to the current educational need on a wide scale. The institute has a Large Area of a library which is spacious and voluminous enough to accommodate more than 28000 volumes of books and 4000 Titles . It has a modern infrastructure with a reading capacity of 200 students .It has subscribed for useful online journals of IEEE, J-Gate and Delnet and 120 Indian Journals & Magazines in print. <br><br></p>

		<p><br>The transaction of the Library are fully automated and automation covers the entire gamut of Library activities such as Acquition, Cataloguing, Circulation with provisional for renewal, reservation, serial control, Online Public, Access Catalogue (OPAC) and generating various types of reports and statistics.<br></p>
                <h3><a href="E-Resources.php">Access To E-Resources</a></h3>
		<h3><b>MRIET Library – Collection</b></h3>
		<br>
		<b>Library houses a large collections of reading materials such as text books, Reference books, Hand books and Encyclopedias.</b>

		<b>The following table shows the data relating to the library collection:</b>

		<div class="table-responsive">
												  
					<table class="table table-striped table-hover">
					
					<tr class="info">
                        <td>1</td>
                        <td>Total number of Volumes</td>
                        <td>27573</td>    
				    </tr>

				    <tr class="info">
                        <td>2</td>
                        <td>Total number of Titles</td>
                        <td>3980</td>    
				    </tr>

				    <tr class="info">
                        <td>3</td>
                        <td>No. of Current Journals</td>
                        <td>98</td>    
				    </tr>

				    <tr class="info">
                        <td>4</td>
                        <td>No. of Magazines</td>
                        <td>20</td>    
				    </tr>

				    <tr class="info">
                        <td>5</td>
                        <td>Total Back Volumes of Journals</td>
                        <td>900</td>    
				    </tr>

				    <tr class="info">
                        <td>6</td>
                        <td>Project Reports</td>
                        <td>1500</td>    
				    </tr>

				    <tr class="info">
                        <td>7</td>
                        <td>Total No.of DVD’S & CD’s</td>
                        <td>1750</td>    
				    </tr>

				     <tr class="info">
                        <td>8</td>
                        <td>e-Journals (IEEE,J-Gate(Jet & JSMS), Delnet)</td>
                        <td>4</td>    
				    </tr>

				    <tr class="info">
                        <td>9</td>
                        <td>News Papers</td>
                        <td>6</td>    
				    </tr>
					
					
				</table>              
			
			</div>


			<h3><b>Digital Library Resources:</b></h3>
			<br>

			<p>Digital Library of MRIET has with 25 systems to access good collection of vast number of E-Books, E-journals, and other digitized materials for the Members. Multimedia Center and photocopying are made available for the convenience of the users. NPTEL facility (National Programme on Technology Enhanced Learning) to access video lectures and Membership of DELNET (Inter library loan) for resource sharing. Library is fully computerized with bar-coding system.</p>
			<div class="table-responsive">
			<table class="table table-striped">
									  <tr>
										<th>Publisher</th>
										<th>Subjects</th>
										<th>E-Contents</th>
										<th>URL/Login</th>
										
									  </tr>
									  <tr>
										<td><img src="img/ieee-explore.jpg" style="width:200px;height:100px;"></td>
										<td>Electrical<br>
											Electronics<br>
											Computer Science<br>
											Telecommunication</td>
										<td>169 E-Journals</td>
										<td>URL:http://IEEExplore.ieee.org</td>
										
									  </tr>
									  <tr>
										<td><img src="img/delnet.jpg" style="width:200px;height:100px;"></td>
										<td>Engineering<br>
											Management<br>
											Architecture</td>
										<td>Journals<br>
											Books<br>
											Databases<br>
											Thesis</td>
										<td>URL:http://www.delnet.nic.in</td>	
										
										
									  </tr>
									  <tr>
										<td><img src="img/j-gate.png" style="width:200px;height:100px;"></td>
										<td>JET (Full Text) – 3592 <br>
										&amp; JSMS(Full Text) – 3938</td>
										<td>7500 E-journals</td>
										<td>URL:http://www.jgateplus.com</td>
										
										
									  </tr>
									  <tr>
										<td>MRIET Learning’s</td>
										<td>Engineering &amp; <br>
											Management</td>
										<td>NPTEL-Videos,<br>
											Lectures,<br>
											&amp; Projects</td>
										<td></td>	
										
										
									  </tr>
									</table>

									</div>

									<h3><b>Library Team of MRIET:</b></h3>

									<div class="table-responsive">
								<table class="table table-striped">
									  <tr>
										<th>S.No</th>
										<th>Name</th>
										<th>Qualification</th>
										<th>Designation</th>
										<th>Email Id1</th>
										<th>Email Id2</th>
										
									  </tr>
									  <tr>
										<td>1</td>
										<td>Smt. K. Vidyavathi</td>
										<td>MLISc, PGDLAN,
												MBA(HR)</td>
										<td>Librarian</td>
										<td>mrietlibrary@gmail.com</td>
                                                                                <td>kosuruvidya@ gmail.com</td>
									  </tr>
									  <tr>
										<td>2</td>
										<td>Mr. G. Srinivas</td>
										<td>MLISc.</td>
										<td>Asst. Librarian</td>
										<td>goliyashavant@gmail.com</td>
									  </tr>
                                                                          <tr>
										<td>3</td>
										<td>Mr. M. Yadagiri</td>
										<td>B.A</td>
										<td>Book Reader</td>
                                                                                <td>manneyadagiri1950@gmail.com</td>
									  </tr>


									  <tr>
										<td>4</td>
										<td>Smt. T. Jayanthi</td>
										<td>CLISc.</td>
										<td>Book Reader</td>
										<td>jayanthimudhiraj10@gmail.com</td>
									  </tr>
									  
									  <tr>
										<td>5</td>
										<td>Mr. G. Rajendhra Prasad</td>
										<td>10th</td>
										<td>Attender</td>
										<td></td>
									  </tr>
									</table>

									</div>

									

									<h3><b><u>Services of Library and Information Centre:</u></b></h3>

									<p><b>
										
                                                                                                                                                                
                                                                                1. Issues and Returns<br><br>
                                                                                2. Open access Systems <br><br>
                                                                                3. OPAC (online Public Access Catalogue)<br><br>
                                                                                4. NPTEL (National Programme on Technology Enhanced Learning)<br><br>
                                                                                5. Digital Services<br><br>
                                                                                6. Internet Access<br><br>
                                                                                7. Wi-Fi and Research Support Service <br><br>
                                                                                8. Learning and Customized Services<br><br>
                                                                                9. Reference and Resource Sharing<br><br>
                                                                                10.User Education<br><br>
                                                                                11.Availability of E- Journals and E- Books<br><br>
                                                                                12.Printout and Xerox facilities <br><br>
                                                                                13.Projects Referral Services etc.
									</b></p>

									<h3><b>User Guidelines:</b></h3>

									<p>
										Members are responsible for all the books borrowed on their borrower cards. All student members should return the borrower cards at the end of the final year and obtain "No Dues Certificate" from the library. Similarly the staff members who intend to leave the college should settle all the dues from College Library and obtain "No Dues Certificate" from the Librarian.<br>
									</p>

									<h3><b>Loss of borrower Cards:</b></h3>

									<p>
										1. Loss of cards should be reported to the library immediately.<br>
										2. Duplicate borrower Cards will be issued by the Library for Student members. <br>
									</p>
									<br>

									<h3><b>Issue and Return of Books:</b></h3>

									<p>
										1. Four Library Books/materials will be issued to members only on producing valid borrower Cards.<br>
										2. Members should not use other's borrower Cards.<br>
										3. Books other than reference books will be issued to student members for a period of 15 days. For teachers, the loan period is one full semester.<br>
										4. Hand Books, Reference Books, Dictionaries, Periodicals and Back Volumes are only for reference.<br>
										5. Renewal of books will be permitted if there are no reservations against these books. For renewal, books have to be presented physically to the library.<br>
										6. Books that are in special demand may be lent for such shorter period as may be necessary and books lent out may be recalled at any time, if required.<br>
										7. Absence from the college will not be accepted as an excuse for the delay in the return of books.<br>
									</p>

									<h3><b>General:</b></h3>

									<p>
										1. Entry has to be endorsed in Entry Register.<br>
										2. Library staff has the authorized to maintain serene and calm atmosphere in the library.<br>
										3. Students are not allowed to Library in the middle of the class’s hours, if it’s necessary, come along with signature of HOD’s Or Principal Sir.<br>
										4. On no account, personal books, files and other articles (except a small notebook or loose sheets of papers) will be allowed inside the library. They shall be deposited at the property counter at the entrance.<br>
										5. Strict silence shall be observed inside the library.<br>
										6. Using Mobile inside the library is strictly prohibited.<br>
										7. A member shall be responsible for any damage done by him/her to the books or other properties. He/she will be required to replace the book or other property damaged.<br>
										8. Misbehavior in the library will lead to cancellation of membership and also lead to serious disciplinary action.<br>
										9. Any marking or writing inside the books by the members is strictly prohibited.<br>
										10. Not withstanding anything contained in these rules, the decision of the authorities of this institution in all matters shall be final and binding.<br>
									</p>

									<br>



		


			
		</div></div>




<?php include('footer.php'); ?>