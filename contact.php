<!DOCTYPE html>
<html>
<head>
	<title>Contact Us - MRIET</title>
<?php include('header.php'); ?>

<div class="container-fluid">

<div class="row custom-row-grey-color">
	<div class="col-md-4">
	<h3>Contact Us</h3>
	</div>
	<div class="col-md-8 breadcrumb-fix">
		<ul class="breadcrumb" style="margin-bottom: 5px;">
			You are here:
		  <li><a href="index.php">Home</a></li>
		
		  <li class="active">Contact Us</li>
		</ul>
	</div>
</div>

	<div class="container">
        <div class="col-md-12 col-sm-12 contentPartLeft">
          <div class="row">                
                    <div class="col-md-12" style="margin-bottom:20px;">
                    <div class="widget-item">                    
     					<div class="col-md-4">
                        <p style="font-size:18px;font-weight:bold;padding-bottom: 10px;">Address</p>
                        <p><strong>Malla Reddy Institute of Engineering &amp; Technology</strong></p>
<p>Maisammaguda (Hamlet), Gundlapochampally (Village),</p>
<p>Near Dhulapally, Medchal (Mandal), Rangareddy District, Secunderabad – 500 014.</p>
<p><strong>Email: </strong><br>adminmriet@gmail.com</p>
<p><strong>Phone:</strong><br> (Admin office Landline):&nbsp; &nbsp;+91 040 65552040 <br> (Mobile):&nbsp; &nbsp; +91 9676402608 <br><br>
</p><p><strong>Phone:</strong><br> (Exam branch Landline) :&nbsp; &nbsp;+91 040 64634233 <br><br>
Dr.M.Ashok(HOD CSE):&nbsp; &nbsp; +91 9705296909 <br><br> Dr K.Hanumaji(HOD EEE): &nbsp; &nbsp;+91 9573228520 <br><br> Dr M.Yadav (HOD ECE):&nbsp; &nbsp; +91 7013689317<br><br> N.Arjun(HOD H&amp;S):&nbsp; &nbsp; +91 9700684108 <br><br>  B.Ruth Sunitha(HOD MBA): &nbsp; &nbsp;+91 9347594445<br><br> </p>
                        </div>
<script language="javascript">
    function valid1(){
	var sa = /^[A-Za-z. ]+$/;
	var f = document.form_F1;
	if(f.name_f.value == ''){
		alert("Please Enter The Name");
		f.name_f.focus();
		return false;		
	}
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!filter.test(f.email_f.value)) {
    alert('Please Provide a Valid Email address');
    f.email_f.focus();
    return false;
	}

		if(f.message_f.value == ''){
		alert("Please Enter The Message");
		f.message_f.focus();
		return false;		
	}
		
			return true;
}
			
</script>
 <form method="post" action="mailsend.php" name="form_F1" onsubmit="javascript: return valid1();" enctype="multipart/form-data">
                        
                        <div class="col-md-4">
                        <p style="font-size:18px;font-weight:bold;padding-bottom: 10px;">Ask Us</p>
                        
	<div class="row">
		<label for="name">Your name:</label><br>
		<input id="name" class="input" name="name_f" type="text" value="" size="30"><br>
	</div>
	<div class="row">
		<label for="email">Your email:</label><br>
		<input id="email" class="input" name="email_f" type="text" value="" size="30"><br>
	</div>
	<div class="row">
		<label for="message">Your message:</label><br>
		<textarea id="message" class="input" name="message_f" rows="7" cols="32"></textarea><br>
	</div>
	<input id="submit_button" type="submit" class="btn btn-success" value="Send email" name="submit">
						
                        </div></form>
                       
                        <div class="col-md-4">
                        <p style="font-size:18px;font-weight:bold;padding-bottom: 10px;">Find us on Google Map</p>
                      <iframe style="width:100%!important;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3803.928132879334!2d78.445084!3d17.558608!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x286202839e024324!2sMalla+Reddy+Institute+of+Engineering+%26+Technology!5e0!3m2!1sen!2sin!4v1454923712893" height="300" frameborder="0" allowfullscreen=""></iframe>
                      
                      </div>
                      </div><br>
                      
                         <!-- /.widget-item -->
                    </div>                 
                    <!-- /.col-md-12 -->
                </div>
        </div>
      <!--homeright-->
<!--homeright-->
       
    </div>




<?php include('footer.php'); ?>