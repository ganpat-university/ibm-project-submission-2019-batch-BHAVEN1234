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
// $appointmentdetails="";
$isnew="";
$Isconform="";
$Rejectedreason="";
$chek="";


$doctorappointmentid=$_GET["Id"];

$qes="Select * from doctorappointment where doctorappointmentid=$doctorappointmentid";
		// echo $qes;
$con = mysqli_connect("localhost","root","","careathome");
$qry=$con->query($qes);
$res=$qry->fetch_assoc();


$dateofappointment=$res["dateofappointment"];
$appointmenttime=$res["appointmenttime"];
// $appointmentdetails=$res["appointmentdetails"];

?>

<?php
$Isconform="register";
  if(isset($_POST["conformbtn"]))
 {
 	$doctorappointmentid=$_GET["Id"];
 	// echo $_GET["Id"]."<br>";
 	// echo $doctorappointmentid."<br>";
 $Isconform="register";
 
 $qry="update doctorappointment set Isconform='$Isconform' where doctorappointmentid=$doctorappointmentid";

 $con = mysqli_connect("localhost","root","","careathome");
 				$res=$con->query($qry);

 	echo ("<script>location.href='manage appointment(maharsh).php'</script>");

 }
?>


	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Date Of Appointment</label>
<div class="col-xs-8 col-sm-3">

	<div class="input-group">

		<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" value="<?php echo $dateofappointment; ?>"><br><br>
		<span class="input-group-addon">
		<i class="fa fa-calendar bigger-110"></i>
		</span><br>
	</div>
</div>
</div>

		
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Appointment Time</label>
<div class="col-xs-8 col-sm-3">
<div class="input-group bootstrap-timepicker">

	<input id="timepicker1" type="text" class="form-control" value="<?php echo $appointmenttime; ?>">
		<span class="input-group-addon">
			<i class="fa fa-clock-o bigger-110"></i>
		</span>
</div>
</div>
</div>


<!-- <div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Appointment Details</label>
	<div class="col-sm-7">
		<lable placeholder="" class="col-sm-1 control-label no-padding-right"><?php echo $appointmentdetails;?></lable>
	</div>
</div><br>
 -->
		
<center>
<div class="form-group">
	<div class="col-sm-9">
		<input type="submit" name="conformbtn" class="btn btn-white btn-success" vlaue="conform"> <br><br>
	</div>
</div>
</center>

<?php
include_once("fotter.php");
?>