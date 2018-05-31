<?php

//get details from the posted form

if(isset($_POST["password"])){
	//password is submitted by the user
	//now verify it the database password
	$userSubmittedPassword = $_POST["password"];
	$dbFetchedPassword = "";

	//make connection
	$server = "localhost";
	$username = "mrietaci_naac";
	$password = "naac@2018";
	$database = "mrietaci_naac";
	$conn = mysqli_connect($server,$username,$password,$database);

	if(!$conn){
		die("connection error!");
	}

	//make statement
	$sql = "SELECT * FROM naac WHERE year = 2018";

	$result = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_assoc($result)){
		$dbFetchedPassword = $row["password"];
		//echo "fetched: ".$dbFetchedPassword;
	}

	//now check if both the passwords are equal

	if($userSubmittedPassword == $dbFetchedPassword){
		//success and authenticated to download the file

		//redirect to the file location
		header('Location: images/pdf/nacc28.pdf');
	}else{
		//dont redirect just give an error
		echo "<script>
		alert('Wrong Password!');
		window.location = 'http://mriet.ac.in/naacssr.php';
		</script>";



	}
}






?>