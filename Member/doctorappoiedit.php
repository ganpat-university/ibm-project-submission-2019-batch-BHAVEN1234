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
	$appoid="";
	$labname="";
	$quantity="";

	
	

	if(isset($_POST["btnSubmit"]))
	{
		$doctorappoid=$_GET["Id"];
	// 	$doctorfname=$_POST["txt_fname"];
	// $doctorlname=$_POST["txt_lname"];
		$Appointmentdate=$_POST["txt_date"];
		$Appointmenttime=$_POST["txt_time"];
		//$appointmentreason=$_POST["txt_reason"];
		

		$qry="update doctorappointment SET dateofappointment='$Appointmentdate',appointmenttime='$Appointmenttime' where doctorappointmentid='$doctorappoid'";
		// echo $qry;

		$cnn=mysqli_connect("localhost","root","","careathome");
		$fire=$cnn->query($qry);

	echo ("<script>location.href='doctorappointmentview.php'</script>");

		// echo "done";

	}
			$doctorappoid=$_GET["Id"];
			$qes="Select * from doctorappointment   where doctorappointmentid=$doctorappoid";
			
			$cnn=mysqli_connect("localhost","root","","careathome");
			$qry=$cnn->query($qes);
			$res=$qry->fetch_assoc();

		// $doctorfname=$res["doctorfname"];
		// $doctorlname=$res["doctorlname"];
		//$appointmentreason=$res["appointmentdetails"];
		$Appointmentdate=$res["dateofappointment"];
		$Appointmenttime=$res["appointmenttime"];
		
			



?>

			<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		
	
		
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
  
<!-- 

	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Doctor First Name </label>

										<div class="col-sm-9">
											
											<input type="lable"   name="txt_lname" value="<?php echo $doctorfname; ?>">
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Doctor Last Name </label>

										<div class="col-sm-9">
											
											<input type="lable"   name="txt_lname" value="<?php echo $doctorlname; ?>">
											
										</div> 
									</div> -->
									<!-- <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Appointment Reason </label>

										<div class="col-sm-9">
											
											<input type="lable"   name="txt_reason" value="<?php echo $appointmentreason; ?>">
											
										</div> 
									</div> -->

	<div class="col-md-offset-3 col-md-9">
		<label><h4>Date</h4></label>&nbsp;&nbsp;&nbsp;
<input type="date"  class="btn btn-info" name="txt_date"  value="<?php echo $Appointmentdate; ?>"><br>
</div>
<div class="col-md-offset-3 col-md-9">
	<label><h4>Time</h4></label>&nbsp;&nbsp;&nbsp;
<input type="time"  class="btn btn-info" name="txt_time"  value="<?php echo $Appointmenttime; ?>"><br><br>
</div>			

<div class="col-md-offset-3 col-md-9">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Book Appointment" class="btn btn-info" name="btnSubmit">
</div>


<?php
include_once("fotter.php");
?> 