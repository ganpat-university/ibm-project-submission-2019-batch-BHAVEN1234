<?php
session_start();
include_once("hader.php");
?>


<div class="page-header">
              <h1>
                Home
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  
                </small>
              </h1>
            </div>

<?php

      $surstorename="";
      $contact="";
      $email="";
      $uname="";
      $pwd="";
      $isactive="yes";


  if(isset($_FILES['img'])){
    $errors= array();
    $file_name = $_FILES['img']['name'];
    $file_size =$_FILES['img']['size'];
    $file_tmp =$_FILES['img']['tmp_name'];
    $file_type=$_FILES['img']['type'];   
    $exploded = explode('.',$_FILES['img']['name']);
  $last_element = end($exploded);
  $file_ext=strtolower($last_element);

    $extensions = array("jpg","png");     

    if(in_array($file_ext,$extensions )=== false)
  {
     // $errors[]="Upload only file JPEG or PNG file.";
  echo "<script>alert('Upload only JPEG Or PNG file');</script>";
     $a='1';
    }
    else
    {
      $a='0';
    }

    // echo "<br>".$a."<br>";
    // echo $file_name."<br>";
    if($file_size > 2097152){
    // $errors[]='File size must < 2 MB';
  echo "<script>alert('File size must < 2 MB');</script>";
    
    }       

    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"medpic/".$file_name);
        // echo "Upload successfully";
    }else{
        print_r($errors);
    }
}



if(isset($_POST["btnsubmit"]))
{
  // $image=$_POST["txtpre"];
  $mname=  $_POST["txt_spname"];
  $type=$_POST["txt_type"];
  $des= $_POST["txt_des"];
  $pri= $_POST["txt_sellpri"];
  
// $dateoflv=date('Y-m-d H:i:s');
// $dateofreg=date('Y-m-d H:i:s');
//  date_default_timezone_set('Asia/Kolkata');
//  $doo=date("Y-m-d");
  
//  echo date("M,d,Y h:i:s A");
    

$qry=" INSERT INTO medicine_master(medinename,medtype,meddis,Mprice,medpic) VALUES ('$mname','$type','$des','$pri','$file_name')";
 // echo $qry;
  
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
    echo "<script>alert('Uploaded Successfully')</script>";

// echo "done...............................................";
}


?>

<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Medicine Name </label>

                    <div class="col-sm-9">
                      <input type="text" name="txt_spname" minlength="2" maxlength="40" class="col-xs-10 col-sm-5" required=""> <br><br>
                    </div>
                  </div>

<div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Medicine Type </label>

                    <div class="col-sm-9">
                      <input type="text" maxlength="40" minlength="3" name="txt_type" class="col-xs-10 col-sm-5" required=""><br><br><br>
                    </div>
                  </div>

<div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Medicine Description </label>

                    <div class="col-sm-9">
                      <input type="text" minlength="20" maxlength="500" name="txt_des"class="col-xs-10 col-sm-5" required=""><br><br><br>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Price   </label>

                    <div class="col-sm-9">
                            <input type="number" maxlength="10" minlength="1" name="txt_sellpri"class="col-xs-10 col-sm-5" required=""><br> <br><br>
                    </div>


               

                    <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Upload Product Image </label>

                    <div class="col-sm-9">
                    
                  <!-- <input type="file" class="upload" name="img" required=""> -->
                  <div class="form-group">
                              <div class="col-xs-3">
                                <label class="ace-file-input ace-file-multiple"><input multiple="" type="file" name="img" required=""><span class="ace-file-container" data-title="Drop files here or click to choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon ace-icon fa fa-cloud-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                              </div>
                            </div> 
                  
                </div>
                    </div>
                  
                      

                  </div>




                
                  <div class="col-md-offset-3 col-md-9">


            <input type="submit" name="btnsubmit"class="btn btn-info" value="Submit">
          </div>
      
      
    </form>
  <?php
include_once("fotter.php");
?>