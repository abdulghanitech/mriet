<!DOCTYPE html>
<html>
<head>
    <title>Downloads - MRIET</title>
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
    <h3>Downloads</h3>
    </div>
    <div class="col-md-8 breadcrumb-fix">
        <ul class="breadcrumb" style="margin-bottom: 5px;">
            You are here:
          <li><a href="index.php">Home</a></li>
        
          <li class="active">Downloads</li>
        </ul>
    </div>
</div>

    <div class="container">
        
          <div class="row"> 

                <div class="col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading"><b>Quick Links</b></div>
                          <div class="panel-body quick-links">
                                <div class="list-group">
                                <a href="#" class="list-group-item" style="font-size: 20px;">Login</a>
                                <a href="#" class="list-group-item" style="font-size: 20px;">Gallery</a>
                                <a href="#" class="list-group-item" style="font-size: 20px;">Governing Body</a>
                                <a href="#" class="list-group-item" style="font-size: 20px;">Committees</a>
                                <a href="#" class="list-group-item" style="font-size: 20px;">Results</a>
                                <a href="#" class="list-group-item" style="font-size: 20px;">Downloads</a>
                              </div>
                          </div>
                    </div>         
                </div> 
                                         
                <div class="col-md-8" style="margin-top: -90px;">
              
                 <?php
                 
                 $path    = 'downloads/autodownload';
                 $files = scandir($path);
                 $files = array_diff(scandir($path), array('.', '..'));
                 
                 //print_r($files);

                 $numOfFiles = sizeof($files);
                 for($i=0;$i<$numOfFiles;$i++){
                 
                 //echo $files[$i];

                // Provides: File extensions
                $extensions = array(".pdf",".xlsx",".xls",".doc",".docx");
            
                $fileName[$i] = str_replace($extensions,"",$files[$i]);
                 
                 echo '<a href="downloads/exambranch/'.$files[$i].'" class="fontInc">'.$fileName[$i].'</a><br><br>';
                 
                 }
                 
            ?>

                        
          </div>

    </div>
                           
    </div>
 




<?php include('footer.php'); ?>