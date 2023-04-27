<?php
	include_once("hader.php");
?>
<?php

// start
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
// end

if(isset($_POST["submit"]))
{
	
if($a=='1')
	{
	}
	else
	{
	$medid=$_GET["Id"];
	$medinename=$_POST["mname"];
	$mtype=$_POST["mtype"];
	$sellingprice=$_POST["price"];
	$meddis=$_POST["meddis"];
		$qry="update medicine_master SET medinename='$medinename',meddis='$meddis',medtype='$mtype',medpic='$file_name',Mprice='$sellingprice' where medid='$medid'";
		// echo $qry;

		$cnn=mysqli_connect("localhost","root","","careathome");
		$fire=$cnn->query($qry);
	}
}
?>

	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Medicine Name </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" pattern="[a-zA-Z]{2,30}" minlength="2" maxlength="40" name="mname" required="">
			</div>
		</div>


			     <!-- start -->
					<div class="form-group">
							
                    	<div class="col-sm-3">
                    		<label for="form-field-3">Medicine Description</label>
                            <textarea class="form-control" name="meddis" pattern="[a-zA-Z]{2,30}" minlength="20" maxlength="500"></textarea>
                    	</div>
                    </div>
            	 <!-- end -->


		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Medicine Type </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="mtype" pattern="[a-zA-Z]{2,30}" minlength="2" maxlength="40" required="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Medicine Image </label>

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
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Price </label>

			<div class="col-sm-9">
				<input type="number" class="col-xs-10 col-sm-5" maxlength="10" minlength="1" name="price" required="">
			</div>
		</div>
<!-- 
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


		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Deposit </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="deposit" required="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Stock </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="stock" required="">
			</div>
		</div> -->

		<div class="col-md-offset-4 col-md-9">
			<input type="submit" class="btn btn-white btn-success" name="submit">
		</div>

	</form>

<?php
	include_once("fotter.php");
?>