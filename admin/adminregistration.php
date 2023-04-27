
<?php
session_start();
	include_once("hader.php");
?>

<div class="page-header">
							<h1>
								Admin Registration
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
								</small>
							</h1>
						</div>


<?php


$uname="";
$fname="";
$lname="";
$fname="";
$lname="";
$pwd="";
$dateofreg="";
$adminpic="";

if(isset($_POST["btnSubmit"]))
{
	
	

	$uname=$_POST["txtuname"];
	$fname=$_POST["txtfname"];
	$lname=$_POST["txtlname"];
	$pwd=$_POST["txtpass"];
	$dor=date('Y-m-d H:i:s');
	$vcnt='100';
	$adminpic="abc.pdf";
	$verified="yes";
	$isactive="yes";
	$lseen=date('Y-m-d H:i:s');


/*if($_FILES['file']['name'] != "" )
{
move_uploaded_file($_FILES["file"]["tmp_name"],
      "img/" . $_FILES["file"]["name"]);
	
}
else
{
	echo "File is not selected";
}*/

	
$qry="Insert into admin_master(uname,fname,lname,pwd,dateofreg,adminpic,isactive,lseen,vcnt) values('$uname','$fname','$lname','$pwd','$dor','$adminpic','$isactive','$lseen','$vcnt')";

echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$result=$con->query($qry);

echo "<script>alert('Registration sucessfully');</script>";

}

?> 


						<div class="page-header">

						<form class="form-horizontal" role="form" method="post">

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> User Name : </label>

										<div class="col-sm-9">
											<input type="text" placeholder="User Name" class="col-xs-10 col-sm-5" name="txtuname" required="">
											
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> First Name : </label>

										<div class="col-sm-9">
											<input type="text" placeholder="First Name" class="col-xs-10 col-sm-5" name="txtfname" required="">
											
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Last Name : </label>

										<div class="col-sm-9">
											<input type="text" placeholder="Last Name" class="col-xs-10 col-sm-5" name="txtlname" required="">
											
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Password : </label>

										<div class="col-sm-9">
											<input type="text" placeholder="Password" class="col-xs-10 col-sm-5" name="txtpass" required="">
											
										</div>
									</div>

								<!-- 	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Admin Pic : </label>

										&nbsp
											<div class="fileUpload btn btn-primary">
    											<span>Upload</span>
    											<input type="file" class="upload" name="adminpic">
											</div>										
									</div> -->



									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
										<input type="submit" class="btn btn-info" name="btnSubmit">
										

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset" name="btnreset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>
							
							</form>
<?php
	include_once("fotter.php");
?>