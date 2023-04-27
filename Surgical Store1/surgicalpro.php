<?php
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
        move_uploaded_file($file_tmp,"../surimg/".$file_name);
        // echo "Upload successfully";
    }else{
        print_r($errors);
    }
}



if(isset($_POST["btnsubmit"]))
{
	// $image=$_POST["txtpre"];
	$spname=	$_POST["txt_spname"];
	$spdes=	$_POST["txt_des"];
	$rentpri=	$_POST["txt_rentpri"];
	$sellpri=	$_POST["txt_sellpri"];
	
// $dateoflv=date('Y-m-d H:i:s');
// $dateofreg=date('Y-m-d H:i:s');
// 	date_default_timezone_set('Asia/Kolkata');
// 	$doo=date("Y-m-d");
	
// 	echo date("M,d,Y h:i:s A");
    

$qry=" INSERT INTO surproduct(surproname, surprodec, selling_price, rentpri,img) VALUES ('$spname','$spdes','$rentpri','$sellpri','$file_name')";
	// echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);

// echo "done...............................................";
}


?>

<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Surgical Product Name </label>

										<div class="col-sm-9">
											<input type="text" name="txt_spname" class="col-xs-10 col-sm-5" > <br><br>
										</div>
									</div>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Surgical Product Description	</label>

										<div class="col-sm-9">
											<input type="text" name="txt_des"class="col-xs-10 col-sm-5" ><br><br><br>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Rent Price	 </label>

										<div class="col-sm-9">
											<input type="text" name="txt_rentpri"class="col-xs-10 col-sm-5" ><br> <br><br>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Sell Price	 </label>

										<div class="col-sm-9">
														:	<input type="text" name="txt_sellpri"class="col-xs-10 col-sm-5" ><br> <br><br>
										</div>





										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Upload Product Image </label>

										<div class="col-sm-9">
										
									<input type="file" class="upload" name="img" required="">	
									
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