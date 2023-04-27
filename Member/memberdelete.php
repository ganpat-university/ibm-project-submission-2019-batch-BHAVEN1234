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



if(isset($_POST["btnsubmit"]))
{
	$memid=$_GET["Id"];
					$memfname=	$_POST["txt_name"];
			$contact=	$_POST["txt_con"];
			$email=	$_POST["txt_email"];
			$uname=	$_POST["txt_uname"];
			$pwd=	$_POST["txt_pwd"];

	
	$qry="delete from member_master where memid='$memid'";

	echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);

echo "done...............................................";
}

			$memid=$_GET["Id"];
			$qes="Select * from member_master where memid=$memid";
			$cnn=mysqli_connect("localhost","root","","careathome");
			$qry=$cnn->query($qes);
			$res=$qry->fetch_assoc();

			$memfname=$res["memfname"];
			$contact=$res["contact"];
			$email=	$res["email"];
			$uname=	$res["uname"];
			$pwd=	$res["pwd"];		
 				

?>

<body>
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> memfname </label>

										<div class="col-sm-9">
											<input type="text" name="txt_name" class="col-xs-10 col-sm-5" value="<?php echo $memfname; ?>"> <br><br>
										</div>
									</div>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> contact	</label>

										<div class="col-sm-9">
											<input type="text" name="txt_con"class="col-xs-10 col-sm-5" value="<?php echo $contact; ?>"><br><br><br>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> email	 </label>

										<div class="col-sm-9">
											<input type="email" name="txt_email"class="col-xs-10 col-sm-5" value="<?php echo $email; ?>"><br> <br><br>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> uname	 </label>

										<div class="col-sm-9">
														:	<input type="text" name="txt_uname"class="col-xs-10 col-sm-5" value="<?php echo $uname; ?>"><br> <br><br>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">pwd 	 </label>

										<div class="col-sm-9"><input type="password" name="txt_pwd" class="col-xs-10 col-sm-5"value="<?php echo $pwd; ?>"><br> <br><br>
										</div>
									</div>
									<div class="col-md-offset-3 col-md-9">


						<input type="submit" name="btnsubmit"class="btn btn-info" value="Submit">
					</div>
			
			
		</form>
		
<?php
include_once("fotter.php");
?>