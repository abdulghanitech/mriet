<script language="javascript" type="text/javascript">
function MSent_msg()
{
alert("Successfully Message has been sent and Updated the Query");
window.open("index.php?msg=MSent","_self");
}
function MFail_msg()
{
alert("Message not sent and Query not Updated! Please Try Again Later");
window.open("index.php?msg=MFail","_self");
}
function mandatory_msg()
{
alert("Sorry! Fields are mandatory!");
window.open("index.php?msg=Mandatory","_self");
}

</script>
<?php 

if(!empty($_REQUEST['name_f']) && !empty($_REQUEST['email_f']) ) {
	$message = '';
	$name      = $_REQUEST['name_f'];
	$email      = $_REQUEST['email_f'];
	$messages1   = $_REQUEST['message_f'];
	$subject     = "Message received regarding Enquiry."; // Subjects writtens on MAIL..
	//$datofbirth = $dob_date."-".$dob_month."-".$dob_year;
		
	ob_start();
define("MAX_SIZE",2000000);
$to = "adminmriet@gmail.com"; // To whom to send the MAIL..adminmriet@gmail.com
$from = "info@mallareddy.com"; // From whom the MAIL came..

	
	
	
	$headers = "From: $from\r\n";
	$headers .= "MIME-Version: 1.0\r\n"
	  ."Content-Type: multipart/mixed; boundary=\"1a2a3a\"";
	// Write the mail message(body) in Language Manner.. 
	$message .= "If you can see this MIME than your client doesn't accept MIME types!\r\n"."--1a2a3a\r\n";
	$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"."Content-Transfer-Encoding: 7bit\r\n\r\n"
	  ."Dear, \r\n"
	  ." <p>A mail received from $name. The Following are the Personal details.</p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>Name:&nbsp;</strong></span>$name</p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>E-mail:&nbsp;</strong></span>$email</p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>Messages:&nbsp;</strong></span>$messages1</p> \r\n"
	  ." <p>&nbsp;</p> \r\n"
	  ." <p>&nbsp;</p> \r\n"
	  ." <p>&nbsp;</p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>Warm Regards</strong></span></p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>$name</strong></span></p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>E-Mail:&nbsp;$email</strong></span></p> \r\n"."--1a2a3a\r\n";	
	
	 	 

	function makeRandomusername() { 
			//  $salt = "abchefghjkmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
			  $salt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
			  srand((double)microtime()*1000000);  
			  $i = 0; 
			  $username = '';
			  while ($i <= 8) { 
					$num = rand() % 33; 
					$tmp = substr($salt, $num, 1); 
					$username = $username . $tmp; 
					$i++; 
			  } 
			  return $username; 
		} 
	$db_username = makeRandomusername(); 
	if($_FILES['viewfile1_f']['name']!='') {
		$uploaddir="uploadeddocs/";
		$filename1 = $_FILES['viewfile1_f']['name'];
		$docs1 = $db_username."-".$filename1;
		$uploadfile1 = $uploaddir.$docs1;
		move_uploaded_file($_FILES['viewfile1_f']['tmp_name'], $uploadfile1);
	}

	//Query for Upload the image of patient --End--
	if(isset($uploadfile1)){
		$file1 = file_get_contents($uploadfile1);
		$message .= "Content-Type: image/jpg; name=\"$filename1\"\r\n"
		  ."Content-Transfer-Encoding: base64\r\n"
		  ."Content-disposition: attachment; file=\"$filename1\"\r\n"
		  ."\r\n"
		  .chunk_split(base64_encode($file1))
		  ."--1a2a3a--";
	} else {
		$file1 = '';
		$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"."Content-Transfer-Encoding: 7bit\r\n\r\n"."--1a2a3a\r\n";
	}
	
	$success = mail($to,$subject,$message,$headers);
	if (!$success) {
		$msg = "MFail";
		 echo "<script language='javascript' type='text/javascript'>MFail_msg()</script>";
	//	echo "Mail to " . $to . " failed .";
	}else {
		$msg = "MSent";
     	echo "<script language='javascript' type='text/javascript'>MSent_msg()</script>";
	//	echo "Success : Mail was send to " . $to ;
   	}
} else {
		$msg = "Mandatory";
     	echo "<script language='javascript' type='text/javascript'>mandatory_msg()</script>";
}