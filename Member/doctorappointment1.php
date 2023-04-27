<?php
session_start();
include_once("hader.php");
$memid=$_SESSION["memberid"];
$doctorid=$_GET["Id"];
$todaydate=date('Y-m-d');
// echo $memid.'  '.$doctorid;rd3dd 
?>

<?php

	$q="select * from doctorappointment where memid='$memid' and doctorid='$doctorid' and dateofappointment='$todaydate'";
	// echo $q;
	$con = mysqli_connect("localhost","root","","careathome");

	$qresult=$con->query($q);
	$qcnt=mysqli_num_rows($qresult); 

if($qcnt==1)
{
	echo "<script>alert('You have already booked appointment')</script>";
	// header("Location:home.php");
	echo ("<script>location.href='home.php'</script>");
	
}
else
{
	// echo "<script>alert('either usenamr or password is worng')</script>";


?>

<div class="page-header">
							<h1>
								Book Appointment
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>
						<?php


if(isset($_POST["btnSubmit"]))
{
	
	
	 // $doctorfname=$_POST["txt_fname"];
	 // $doctorlname=$_POST["txt_lname"];
	$date=$_POST["txt_date"];
	$time=$_POST["txt_time"];	
	// $appoireason=$_POST["txt_appoireason"];
	$appointmenttype=$_POST["raon"];
	$memid=$_SESSION["memberid"];

$qry="INSERT INTO doctorappointment(doctorid,dateofappointment, appointmenttime,Appointmenttype,memid) VALUES ('$doctorid','$date','$time','$appointmenttype','$memid')";
	// echo $qry;
$con = mysqli_connect("localhost","root","","careathome");
$result=$con->query($qry);

    echo "<script>alert('Booked Successfully')</script>";
// echo "done";
 echo ("<script>location.href='doctorappointmentview.php'</script>");	

 
}
	
	
	 

            $doctorid=$_GET["Id"];
			$qes="Select * from doctor where doctorid = $doctorid";
	 		$cnn=mysqli_connect("localhost","root","","careathome");
	 		$qry=$cnn->query($qes);
	 		$res=$qry->fetch_assoc();

	 	$doctorfname=$res["docfname"];	
	 	$doctorlname=$res["doclname"];

}
	 	?>


<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
  


	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> Doctoer Name </h4></label>

										<div class="col-sm-8">
											
											<label class="col-sm-2 control-label no-padding-center" name="txt_fname"><h5><?php echo $doctorfname." ".$doctorlname; ?></h5></label>
											
										</div>
									</div>

  							


<!-- <div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> Appointment Type (old/new)</h4></label>

	<div class="col-sm-9">
		


	<input type="text" name="raon" required="" pattern="[a-zA-Z]{2,30}">
											
	</div>
</div> -->

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> Appointment Type (old/new)</h4></label>
	<div class="col-md-offset-0 col-md-3">
	<select class="form-control" id="form-field-select-1" name="raon" required="">
		<option value="old">Old</option>
		<option value="New">New</option>
	</select>
</div></div>


<?php
	
	$fromdate=date('Y-m-d', strtotime($todaydate.'+28 days'));

?>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> Appointment Date</h4></label>

<div class="col-md-offset-0 col-md-3">
	<div class="input-group">
		<input type="date"  class="form-control date-picker" name="txt_date" required=""  min="<?php echo $todaydate;?>" max="<?php echo $fromdate;?>">
		<span class="input-group-addon">
			<i class="fa fa-calendar bigger-110"></i>
		</span>
	</div>
</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> Appointment Time</h4></label>
<div class="col-md-offset-0 col-md-3">
<div class="input-group bootstrap-timepicker">
<input type="time" class="form-control" name="txt_time" min="9:00" max="19:00" required="">
<span class="input-group-addon">
	<i class="fa fa-clock-o bigger-110"></i>
</span>
</div>			
</div>
</div>

<div class="col-md-offset-3 col-md-9">
<input type="submit" value="Book Appointment" class="btn btn-white btn-success" name="btnSubmit" required="">
</div>

</form>


<?php
include_once("fotter.php");
?>