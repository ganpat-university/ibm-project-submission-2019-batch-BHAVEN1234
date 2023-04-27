<?php
session_start();
	include_once("hader.php");
	$surgid=$_SESSION["surgical_storeid"];
?>
<?php

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
        move_uploaded_file($file_tmp,"img1/".$file_name);
        // echo "Upload successfully";
    }else{
        print_r($errors);
    }
}

if(isset($_POST["submit"]))
{
	$surproid=$_GET["Id"];
	$surproname=$_POST["surproname"];
	$surprodec=$_POST["surprodetails"];
	// $surimg=$_POST["surimg"];
	$sellingprice=$_POST["sellingprice"];
	$rentprice=$_POST["rentprice"];
	$rentduretion=$_POST["rentduretion"];
	$stock=$_POST["stock"];
// surproid
// surgid
// surproname
// surprodec
// selling_price
// rentpri
// rentdur
// deposit
// stock
// img
		$qry="update surproduct SET surproname='$surproname',surprodec='$surprodec',selling_price='$sellingprice',rentpri='$rentprice',rentdur='$rentduretion',stock='$stock',img='$file_name' where surproid='$surproid'";
		// echo $qry;

		$cnn=mysqli_connect("localhost","root","","careathome");
		$fire=$cnn->query($qry);
}
?>

	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Surgical Producat Name </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="surproname" required="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Surgical Producat Details </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="surprodetails" required="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Surgical Producat Image </label>

			<div class="col-sm-9">
				<!-- <input type="text" class="col-xs-10 col-sm-5" name="surproimg" required=""> -->


				<div class="form-group">
															<div class="col-xs-5">
																<label class="ace-file-input"><input type="file" name="img" id="id-input-file-2"><span class="ace-file-container" data-title="Choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
															</div>
														</div>

			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Selling Price </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="sellingprice" required="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Rent Price </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="rentprice" required="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Rent Duration </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="rentduretion" required="">
			</div>
		</div>


		<!-- <div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Deposit </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="deposit" required="">
			</div>
		</div> -->

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Stock </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="stock" required="">
			</div>
		</div>

		<div class="col-md-offset-4 col-md-9">
			<input type="submit" class="btn btn-white btn-success" name="submit">
		</div>

	</form>

<?php
	include_once("fotter.php");
?>