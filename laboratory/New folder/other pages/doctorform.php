<?php
include_once("hader.php");
?>


<div class="page-header">
							<h1>
								Manage Appointment
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>
<?php


$appointment_reg="";
$dateofappointment="";
$appointmenttime="";
$appointmentdetails="";
$isnew="";
$Isconform="";
$Isrejected="";
$Rejectedreason="";
$chek="";


$doctorappointmentid=$_GET["Id"];

$qes="Select * from doctorappointment where doctorappointmentid=$doctorappointmentid";
		echo $qes;
$con = mysqli_connect("localhost","root","","careathome");
$qry=$con->query($qes);
$res=$qry->fetch_assoc();

// $memfname=$res["memfname"];
// $memlname=$res["memlname"];
// $appointment_reg=$res["appointment_reg"];
$dateofappointment=$res["dateofappointment"];
$appointmenttime=$res["appointmenttime"];
$appointmentdetails=$res["appointmentdetails"];

?>

<?php
$Isconform="register";
  if(isset($_POST["conformbtn"]))
 {
 	$doctorappointmentid=$_GET["Id"];
 $Isconform="register";
 $Isrejected="No";
 $qry="update doctorappointment set Isconform='$Isconform',Isrejected='$Isrejected' where doctorappointmentid=$doctorappointmentid";

 $con = mysqli_connect("localhost","root","","careathome");
 				$res=$con->query($qry);
 }
?>

<?php
if(isset($_POST["rejectbtn"]))
{
	$doctorappointmentid=$_GET["Id"];
	$Isrejecte="yes";
	$Isconformd="No";
	
	{
	$qry="update doctorappointment set Isrejected='$Isrejecte',Isconform='$Isconformd' where doctorappointmentid=$doctorappointmentid";
echo $qry;
$con = mysqli_connect("localhost","root","","careathome");
				$res=$con->query($qry);
	}
	$Rejectedreason=$_POST["txt_rejreason"];
	$q="INSERT INTO doctorappointment (Rejectedreason) VALUES ('$Rejectedreason')";
	echo $q;
	$con = mysqli_connect("localhost","root","","careathome");
				$res=$con->query($qry);


}
?>

	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		 	

			<!-- <div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member First Name </label>
			<div class="col-sm-9">
			<input type="text" name="conformbtn" class="col-xs-10 col-sm-5" value="<?php echo $memfname; ?>">
			</div>
			</div>

			<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member Last Name </label>
			<div class="col-sm-9">
			<input type="text" name="conformbtn" class="col-xs-10 col-sm-5" value="<?php echo $memlname; ?>" >
			</div>
			</div> -->
<!-- 
			<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Appointment Registration</label>
			<div class="col-sm-9">
			<input type="text" name="conformbtn" class="col-xs-10 col-sm-5" value="<?php echo $appointment_reg; ?>">
			</div>
			</div> -->

			<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Date Of Appointment</label>
			<div class="col-sm-9">
			<input type="text" name="conformbtn" class="col-xs-10 col-sm-5" value="<?php echo $dateofappointment; ?>">
			</div>
			</div>

			<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Appointment Time</label>
			<div class="col-sm-9">
			<input type="text" name="conformbtn" class="col-xs-10 col-sm-5" value="<?php echo $appointmenttime; ?>">
			</div>
			</div>

			<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Appointment Details</label>
			<div class="col-sm-9">
			<input type="text" name="conformbtn" class="col-xs-10 col-sm-5" value="<?php echo $appointmentdetails; ?>"> 
			</div>
			</div>

								<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Conform</label>

										<div class="col-sm-9">
											<input type="submit" name="conformbtn" class="col-xs-10 col-sm-5" vlaue=conform> <br><br>
										</div>
									</div>
									<div class="form-group">
			
			

			<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Rejectedreason</label>

										<div class="col-sm-9">
											<input type="text" name="txt_rejreason" class="col-xs-10 col-sm-5" > <br><br>
										</div>
									</div>

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Rejected</label>

										<div class="col-sm-9">
											<input type="submit" name="rejectbtn" class="col-xs-10 col-sm-5" vlaue="rejected"> <br><br>
										</div>
									</div>


		


<?php
include_once("fotter.php");
?>