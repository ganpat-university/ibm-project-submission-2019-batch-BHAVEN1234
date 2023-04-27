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

if(isset($_POST["btnsubmit"]))
{
	
	$surstorename=	$_POST["txt_name"];
	$contact=	$_POST["txt_con"];
	$email=	$_POST["txt_email"];
	$uname=	$_POST["txt_uname"];
	$pwd=	$_POST["txt_pwd"];
$dateoflv=date('Y-m-d H:i:s');
$dateofreg=date('Y-m-d H:i:s');
	date_default_timezone_set('Asia/Kolkata');
	$doo=date("Y-m-d");
	
	echo date("M,d,Y h:i:s A");
    

$qry=" INSERT INTO surgicalstore( surstorename, contactno, email, uname, pwd, dateofreg, dateoflv) VALUES ('$surstorename','$contact','$email','$uname','$pwd','$doo','$doo')";
	// echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);

// echo "done...............................................";
}


?>

<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> surstorename </label>

										<div class="col-sm-9">
											<input type="text" name="txt_name" class="col-xs-10 col-sm-5" > <br><br>
										</div>
									</div>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> contactno	</label>

										<div class="col-sm-9">
											<input type="text" name="txt_con"class="col-xs-10 col-sm-5" ><br><br><br>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> email	 </label>

										<div class="col-sm-9">
											<input type="email" name="txt_email"class="col-xs-10 col-sm-5" ><br> <br><br>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> uname	 </label>

										<div class="col-sm-9">
														:	<input type="text" name="txt_uname"class="col-xs-10 col-sm-5" ><br> <br><br>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">pwd 	 </label>

										<div class="col-sm-9"><input type="password" name="txt_pwd" class="col-xs-10 col-sm-5"><br> <br><br>
										</div>
									</div>
									<div class="col-md-offset-3 col-md-9">


						<input type="submit" name="btnsubmit"class="btn btn-info" value="Submit">
					</div>
			
			
		</form>
	<?php
include_once("fotter.php");
?>