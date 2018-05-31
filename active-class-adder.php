<?php
function listItemsActiveClassAdder($li_name){

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
	switch ($li_name) {
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
                    <a href="committees.php" class="list-group-item '.$committees.'">Committees</a>
		    <a href="Research&Development-Committee.php" class="list-group-item '.$collegeOverview.'">Research Development Committee</a>
		    <a href="Library-Committee.php" class="list-group-item '.$vision.'">Library Committee</a>
		    <a href="AntiRaggingCommittee&AntiRaggingSquads.php" class="list-group-item '.$founder.'">AntiRaggingCommittee&AntiRaggingSquads</a>
		    <a href="websitecommittee.php" class="list-group-item '.$management.'">Website Committee</a>
		    <a href="Finance-Committee.php" class="list-group-item '.$principal.'">Finance Committee</a>
		    <a href="Grievances&RedressalCell.php" class="list-group-item '.$director.'">Grievances&RedressalCell</a>
		    <a href="Hostel-Committee.php" class="list-group-item '.$governing.'">Hostel Committee</a>
		    
		    <a href="SportsandGames-Committee.php" class="list-group-item '.$affiliation.'">Sports and Games Committee</a>
		    <a href="Purchase&MaintenanceCommittee.php" class="list-group-item">Purchase & Maintenance Committee</a>
                    <a href="Transport-Committee.php" class="list-group-item">Transport Committee</a>
                    <a href="WomenEmpowermentCell.php" class="list-group-item">Women Empowerment Cell</a>
                    <a href="Disciplinary-Committee.php" class="list-group-item">Disciplinary Committee</a>
		  </div>';
}
?>