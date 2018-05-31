<!DOCTYPE html>
<html>
<head>
	<title>NAAC - MRIET</title>
<?php include('header.php'); ?>

<style type="text/css">
    
    .fontInc{
        font-size: 20px;
        margin-bottom: 5px;
    }
</style>

<div class="container-fluid">

<div class="row custom-row-grey-color">
	<div class="col-md-4">
	<h3>NAAC</h3>
	</div>
	<div class="col-md-8 breadcrumb-fix">
		<ul class="breadcrumb" style="margin-bottom: 5px;">
			You are here:
		  <li><a href="index.php">Home</a></li>
		
		  <li class="active">NAAC</li>
		</ul>
	</div>
</div>

	<div class="container">
       
          <div class="row">                
                    
                    <style type="text/css">
                        #btnSubmit{
                                background-color: #e02445;
                                padding: 10px;
                                width: 25%;
                                text-align: center;
                                border: none;
                                margin-top: 5px;
                                font-size: 20px;
                                color: #FFF;
                        }

                        #password{
                            padding: 10px;
                            width: 100%;
                        }

                        #pwdForm{
                            margin-top: 100px;
                        }

                    </style>
                                         
     		        <div class="col-md-6 col-md-offset-3">
                       
                       <form method="post" action="naacpwdverify.php" id="pwdForm">
                            <p style="color: red; font-size: 20px;">Please Enter the Password to Download the File!</p>
                           <input type="password" name="password" id="password" placeholder="Enter the password to download the file" autofocus required>
                           <br>
                           <center><button type="submit" id="btnSubmit">Submit</button></center>
                       </form> 
                        
                    </div>
           
            </div>

            <?php 
            $i=0;
            while($i<15){
            echo "<br>";
            $i++;

        }

            ?>
                          
                  
      
      <!--homeright-->
<!--homeright-->
       
    </div>




<?php include('footer.php'); ?>