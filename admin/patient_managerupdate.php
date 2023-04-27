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

$patientmanaid="";
$regid="";
$patientmananame="";
$contactno="";
$email="";
$gender="";
$likecounter="";
$verified="";
$uname="";
$pwd="";
$isactive="";


if(isset($_POST["btn"]))
{
	$patientmanaid=$_GET["Id"];
	$regid='2';
	$patientmananame=$_POST["txt_patientmananame"];
	$contactno=$_POST["txt_contactno"];
	$email=$_POST["txt_email"];
	$gender=$_POST[""];
	$likecounter="645";
	$verified="yes";
	$uname=$_POST["txt_uname"];
	$password=$_POST["txt_password"];
	$isactive="yes";
	
	
	$qry="update patient_manager SET regid='$regid',patientmananame='$patientmananame',contactno='$contactno',email='$email',gender='$gender'likecounter='$likecounter',verified='$verified',uname='$uname',pwd='$password',isactive='$isactive' WHERE patientmanaid='$patientmanaid'";

	echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);

echo "done...............................................";
}

	$patientmanaid=$_GET["Id"];
			$qes="Select * from patient_manager where patientmanaid = $patientmanaid";
			$cnn=mysqli_connect("localhost","root","","careathome");
			$qry=$cnn->query($qes);
			$res=$qry->fetch_assoc();

			$patientmananame=$res["patientmananame"];
			$contactno=$res["contactno"];
			$email=$res["email"];
			$gender=$res["gender"];
			$uname=$res["uname"];
			$contactno=$res["contactno"];
			$password=$res["pwd"];			

?>
<body>
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Patientmana Name: </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="txt_patientmananame" value="<?php echo $patientmananame ; ?>"><br><br>
</div>
</div>

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Contact No : </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="txt_contactno" value="<?php echo $contactno ; ?>"><br><br><br>
</div>
</div>

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email : </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="txt_email" value="<?php echo $email ; ?>"><br><br><br>
</div>
</div>

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Gender : </label>
			<div class="col-sm-9">
			<div class="radio">
				<label>
					<input  type="radio" class="ace" name="txt_gender" value="male">
						<span class="lbl"> Male </span>
				</label>
				<label>
					<input  type="radio" class="ace" name="txt_gender" value="female">
						<span class="lbl"> Female </span>
				</label>
			</div>	
			</div>
</div>					


<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Uname : </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="txt_uname" value="<?php echo $uname ; ?>"><br><br><br>
</div>
</div>

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> password : </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="txt_password" value="<?php echo $password ; ?>"><br><br><br>
</div>
</div>


<div class="col-md-offset-3 col-md-9">
		<input class="btn btn-info" type="submit" name="btn" value="Submit">
</div>								

	</form>
</body>


<?php
include_once("fotter.php");
?>