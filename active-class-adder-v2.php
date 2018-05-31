<?php
function listItemsActiveClassAdderExtendedVersion($category, $sub_category, $sub_sub_category){

	$active="";
	$collegeOverview = "";
	$vision = "";
	$founder = "";
	$management = "";
	$principal = "";
	$director = "";
	$governing = "";
	$committees = "";
	$affiliation = "";
	$csehome = "";
	$hodmsg = "";
	$dept_vision = "";
	$peo = "";
	$faculty_list = "";
	$timetables = "";
	$mous = "";
	$infrastructure = "";
	$laboratories = "";
	$events = "";
	$csealumni = "";
	$coursematerials = "";


	switch ($category) {
		case 'About Us':
					
					switch ($sub_category) {
						case 'College Overview':
							global $collegeOverview;
							$collegeOverview = "active-custom";
							break;
						case 'Vision and Mission':
							global $vision;
							$vision = "active-custom";
							break;
						case 'Founder and Chairman':
							global $founder;
							$founder = "active-custom";
							break;
						case 'Management':
							global $management;
							$management = "active-custom";
							break;
						case 'Principal\'s Message':
							global $principal;
							$principal = "active-custom";
							break;
						case 'Director\'s Message':
							global $director;
							$director = "active-custom";
							break;
						case 'Governing Body':
							global $governing;
							$governing = "active-custom";
							break;
						case 'Committees':
							global $committees;
							$committees = "active-custom";
							break;
						case 'Affiliation':
							global $affiliation;
							$affiliation = "active-custom";
							break;
						
						default:
							global $active;
							$active = "";
							break;
					}


				echo '<div class="list-group list-fix">
			    <a href="college-overview.php" class="list-group-item '.$collegeOverview.'">College Overview</a>
			    <a href="vision-and-mission.php" class="list-group-item '.$vision.'">Vision and Mission</a>
			    <a href="founder-and-chairman.php" class="list-group-item '.$founder.'">Founder and Chairman</a>
			    <a href="management.php" class="list-group-item '.$management.'">Management</a>
			    <a href="principals-message.php" class="list-group-item '.$principal.'">Principal\'s Message</a>
			    <a href="directors-message.php" class="list-group-item '.$director.'">Director\'s Message</a>
			    <a href="governing-body.php" class="list-group-item '.$governing.'">Governing Body</a>
			    <a href="committees.php" class="list-group-item '.$committees.'">Committees</a>
			    <a href="affiliation.php" class="list-group-item '.$affiliation.'">Affiliation</a>
			    <a href="downloads/Service-Rules-2016.pdf" class="list-group-item">Service Rules</a>

			  </div>';
					break;
		
		case 'Departments':
			switch ($sub_category) {
				case 'Computer Science & Engineering':
						switch ($sub_sub_category) {
							case 'CSE Home':
								global $csehome;
								$csehome = "active-custom";
								break;
							case 'HOD\'s Message':
								global $hodmsg;
								$hodmsg = "active-custom";
								break;
							case 'Department Vision and Mission':
								global $dept_vision;
								$dept_vision = "active-custom";
								break;
							case 'PEO\'s, PO\'s & PSO\'s':
								global $peo;
								$peo = "active-custom";
								break;
							case 'Faculty List':
								global $faculty_list;
								$faculty_list = "active-custom";
								break;
							case 'Time Tables':
								global $timetables;
								$timetables = "active-custom";
								break;
							case 'MOU\'s':
								global $mous;
								$mous = "active-custom";
								break;
							case 'Infrastructure':
								global $infrastructure;
								$infrastructure = "active-custom";
								break;

							case 'Laboratories':
								global $laboratories;
								$laboratories = "active-custom";
								break;

							case 'Events':
								global $events;
								$events = "active-custom";
								break;

							case 'CSE Alumni':
								global $csealumni;
								$csealumni = "active-custom";
								break;
							case 'Course Materials':
								global $coursematerials;
								$coursematerials = "active-custom";
								break;
							default:
								# code...
								break;
						}

						echo '<div class="list-group list-fix">
		    <a href="cse.php" class="list-group-item '.$csehome.'">CSE Home</a>
		    <a href="cse-hods-msg.php" class="list-group-item '.$hodmsg.'">HOD\'s Message</a>
		    <a href="cse-vision-mission.php" class="list-group-item '.$dept_vision.'">Department Vision and Mission</a>
		    <a href="cse-pos-peos.php" class="list-group-item '.$peo.'">PEO\'s, PO\'s & PSO\'s</a>
		    <a href="cse-faculty-list.php" class="list-group-item '.$faculty_list.'">Faculty List</a>
		    <a href="cse-time-tables.php" class="list-group-item '.$timetables.'">Time Tables</a>
		    <a href="cse-mous.php" class="list-group-item '.$mous.'">MOU\'s</a>
		    <a href="cse-infrastructure.php" class="list-group-item '.$infrastructure.'">Infrastructure</a>
		    <a href="cse-labs.php" class="list-group-item '.$laboratories.'">Laboratories</a>
		    <a href="cse-events.php" class="list-group-item '.$events.'">Events</a>
		    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdMDY1xF9c3_FMSNDkSyBYzpRKRB4n_T77j2yG0EUPVMU-CaQ/viewform" class="list-group-item '.$csealumni.'">CSE Alumni</a>
		    <a href="cse-course-materials.php" class="list-group-item '.$coursematerials.'">Important Questions</a>
		    
		  </div>';
					break;
				case 'Electronics & Communication Engineering':
						switch ($sub_sub_category) {
							case 'ECE Home':
								global $csehome;
								$csehome = "active-custom";
								break;
							case 'HOD\'s Message':
								global $hodmsg;
								$hodmsg = "active-custom";
								break;
							case 'Department Vision and Mission':
								global $dept_vision;
								$dept_vision = "active-custom";
								break;
							case 'PEO\'s, PO\'s & PSO\'s':
								global $peo;
								$peo = "active-custom";
								break;
							case 'Faculty List':
								global $faculty_list;
								$faculty_list = "active-custom";
								break;
							case 'Time Tables':
								global $timetables;
								$timetables = "active-custom";
								break;
							case 'MOU\'s':
								global $mous;
								$mous = "active-custom";
								break;
							case 'Infrastructure':
								global $infrastructure;
								$infrastructure = "active-custom";
								break;

							case 'Laboratories':
								global $laboratories;
								$laboratories = "active-custom";
								break;

							case 'Events':
								global $events;
								$events = "active-custom";
								break;

							case 'ECE Alumni':
								global $csealumni;
								$csealumni = "active-custom";
								break;
							case 'Course Materials':
								global $coursematerials;
								$coursematerials = "active-custom";
								break;
							default:
								# code...
								break;
						}

						echo '<div class="list-group list-fix">
		    <a href="ece.php" class="list-group-item '.$csehome.'">ECE Home</a>
		    <a href="ece-hods-msg.php" class="list-group-item '.$hodmsg.'">HOD\'s Message</a>
		    <a href="ece-vision-mission.php" class="list-group-item '.$dept_vision.'">Department Vision and Mission</a>
		    <a href="ece-pos-peos.php" class="list-group-item '.$peo.'">PEO\'s, PO\'s & PSO\'s</a>
		    <a href="ece-faculty-list.php" class="list-group-item '.$faculty_list.'">Faculty List</a>
		    <a href="ece-time-tables.php" class="list-group-item '.$timetables.'">Time Tables</a>
		    <a href="ece-infrastructure.php" class="list-group-item '.$infrastructure.'">Infrastructure</a>
		    <a href="ece-labs.php" class="list-group-item '.$laboratories.'">Laboratories</a>
		    <a href="ece-events.php" class="list-group-item '.$events.'">Events</a>
		    
		    
		  </div>';
					
					break;
				case 'Electrical & Electronics Engineering':
					switch ($sub_sub_category) {
							case 'EEE Home':
								global $csehome;
								$csehome = "active-custom";
								break;
							case 'HOD\'s Message':
								global $hodmsg;
								$hodmsg = "active-custom";
								break;
							case 'Department Vision and Mission':
								global $dept_vision;
								$dept_vision = "active-custom";
								break;
							case 'PEO\'s, PO\'s & PSO\'s':
								global $peo;
								$peo = "active-custom";
								break;
							case 'Faculty List':
								global $faculty_list;
								$faculty_list = "active-custom";
								break;
							case 'Time Tables':
								global $timetables;
								$timetables = "active-custom";
								break;
							case 'MOU\'s':
								global $mous;
								$mous = "active-custom";
								break;
							case 'Infrastructure':
								global $infrastructure;
								$infrastructure = "active-custom";
								break;

							case 'Laboratories':
								global $laboratories;
								$laboratories = "active-custom";
								break;

							case 'Events':
								global $events;
								$events = "active-custom";
								break;

							case 'EEE Alumni':
								global $csealumni;
								$csealumni = "active-custom";
								break;
							case 'Course Materials':
								global $coursematerials;
								$coursematerials = "active-custom";
								break;
							default:
								# code...
								break;
						}

						echo '<div class="list-group list-fix">
		    <a href="eee.php" class="list-group-item '.$csehome.'">ECE Home</a>
		    <a href="eee-hods-msg.php" class="list-group-item '.$hodmsg.'">HOD\'s Message</a>
		    <a href="eee-vision-mission.php" class="list-group-item '.$dept_vision.'">Department Vision and Mission</a>
		    <a href="eee-pos-peos.php" class="list-group-item '.$peo.'">PEO\'s, PO\'s & PSO\'s</a>
		    <a href="eee-faculty-list.php" class="list-group-item '.$faculty_list.'">Faculty List</a>
		    
		    <a href="eee-infrastructure.php" class="list-group-item '.$infrastructure.'">Infrastructure</a>
		    <a href="eee-labs.php" class="list-group-item '.$laboratories.'">Laboratories</a>
		    <a href="eee-events.php" class="list-group-item '.$events.'">Events</a>
		    
		    
		  </div>';
					break;
				case 'Humanity & Sciences':
						switch ($sub_sub_category) {
							case 'H&S Home':
								global $csehome;
								$csehome = "active-custom";
								break;

							case 'HOD\'s Message':
								global $hodmsg;
								$hodmsg = "active-custom";
								break;

							case 'Department Vision and Mission':
								global $dept_vision;
								$dept_vision = "active-custom";
								break;
							
							case 'Faculty List':
								global $faculty_list;
								$faculty_list = "active-custom";
								break;
							
							default:
								# code...
								break;
						}

						echo '<div class="list-group list-fix">
		    <a href="hns.php" class="list-group-item '.$csehome.'">H&S Home</a>
		    
                    <a href="h&s-hods-msg.php" class="list-group-item '.$hodmsg.'">HOD\'s Message</a>

		    <a href="hns-vision-mission.php" class="list-group-item '.$dept_vision.'">Department Vision and Mission</a>
		    
		    <a href="hns-faculty-list.php" class="list-group-item '.$faculty_list.'">Faculty List</a>
		    
		    
		    
		  </div>';
					break;
				case 'Masters of Business Administration':
						switch ($sub_sub_category) {
							case 'MBA Home':
								global $csehome;
								$csehome = "active-custom";
								break;
						
							
							case 'Faculty List':
								global $faculty_list;
								$faculty_list = "active-custom";
								break;
							
							default:
								# code...
								break;
						}

						echo '<div class="list-group list-fix">
		    <a href="mba.php" class="list-group-item '.$csehome.'">MBA Home</a>
		    
		    
		    <a href="mba-faculty-list.php" class="list-group-item '.$faculty_list.'">Faculty List</a>
		    
		    
		    
		  </div>';
					break;
				default:
					# code...
					break;
			}


			break;
		case 'Admissions':
			switch ($sub_category) {
						case 'Why Mriet?':
							global $whymriet;
							$whymriet = "active-custom";
							break;
						case 'Admission Process':
							global $admissionprocess;
							$admissionprocess = "active-custom";
							break;
						case 'Contact for Admissions':
							global $contactforadmissions;
							$contactforadmissions = "active-custom";
							break;
						case 'Download Application Form':
							global $downloadApplicationForm;
							$downloadApplicationForm = "active-custom";
							break;
						
						default:
							global $active;
							$active = "";
							break;
					}

					echo '<div class="list-group list-fix">
		    <a href="WhyMriet.php" class="list-group-item '.$whymriet.'">Why Mriet</a>
		    
		    <a href="admissionProcess.php" class="list-group-item '.$admissionprocess.'">Admission Process</a>
		    
		    <a href="contactForAdmissions.php" class="list-group-item '.$contactforadmissions.'">Contact for Admissions</a>

		    <a href="downloadApplicationForm.php" class="list-group-item '.$downloadApplicationForm.'">Download Application Form</a>
		   
		    
		  </div>';

			break;
		case 'Research and Development':
			switch ($sub_category) {
						case 'Projects 2011-2015':
							global $projects2011_2015;
							$projects2011_2015 = "active-custom";
							break;
						case 'Projects 2012-2016':
							global $projects2012_2016;
							$projects2012_2016 = "active-custom";
							break;
					
						default:
							global $active;
							$active = "";
							break;
					}

					echo '<div class="list-group list-fix">
		    <a href="projects2011_2015.php" class="list-group-item '.$projects2011_2015.'">Projects 2011-2015</a>
		    
		    <a href="projects2012_2016.php" class="list-group-item '.$projects2012_2016.'">Projects 2012-2016</a>
		   
		    
		  </div>';

			break;
		case 'Campus Life':
			switch ($sub_category) {
						case 'Extra Curricular Activities':
							global $extraCurricularActivities;
							$extraCurricularActivities = "active-custom";
							break;
						case 'Sports & Fitness':
							global $sportsFitness;
							$sportsFitness = "active-custom";
							break;

						case 'Transport':
							global $transport;
							$transport = "active-custom";
							break;

						case 'Social Service':
							global $socialService;
							$socialService = "active-custom";
							break;

						case 'Carrier Guidance Cell':
							global $carrierGuidanceCell;
							$carrierGuidanceCell = "active-custom";
							break;

						case 'Library':
							global $library;
							$library = "active-custom";
							break;
                                                
                                                case 'E-Resources':
							global $Resources;
							$library = "active-custom";
							break;

						case 'Gallery':
							global $gallery;
							$gallery = "active-custom";
							break;

						case 'Events':
							global $events;
							$events = "active-custom";
							break;

						case 'Alumni':
							global $alumni;
							$alumni = "active-custom";
							break;

					
						default:
							global $active;
							$active = "";
							break;
					}

					echo '<div class="list-group list-fix">
		    <a href="extraCurricularActivities.php" class="list-group-item '.$extraCurricularActivities.'">Extra Curricular Activities</a>
		    <a href="sportsFitness.php" class="list-group-item '.$sportsFitness.'">Sports & Fitness</a>
		    <a href="transport.php" class="list-group-item '.$transport.'">Transport</a>
		    <a href="socialService.php" class="list-group-item '.$socialService.'">Social Service</a>
		    <a href="carrierGuidanceCell.php" class="list-group-item '.$carrierGuidanceCell.'">Carrier Guidance Cell</a>
		    <a href="library.php" class="list-group-item '.$library.'">Library</a>
                    <a href="E-Resources.php" class="list-group-item '.$Resources.'">E-Resources</a>
		    <a href="gallery.php" class="list-group-item '.$gallery.'">Gallery</a>
		    <a href="events.php" class="list-group-item '.$events.'">Events</a>
		    <a href="https://mriet.almaconnect.com/" target="blank" class="list-group-item '.$alumni.'">Alumni</a>
		   
		    
		  </div>';
			break;
		case 'Placements':
			# code...
			break;
		case 'Examination Branch':
			# code...
			break;
		default:
			# code...
			break;
	}
	


			

		  	
}
?>