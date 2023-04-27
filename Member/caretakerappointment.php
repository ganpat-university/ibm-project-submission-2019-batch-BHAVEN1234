<?php
session_start();
$caretakerid=$_GET["Id"];
$memid=$_SESSION["memberid"];
$todaydate=date('Y-m-d');
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

	$q="select * from caretakerappointment where memid='$memid' and caretkrid='$caretakerid' and fromdate='$todaydate'";
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
						<?php
            


if(isset($_POST["btnSubmit"]))
{
	// $doctorid=$_GET["Id"];
	
	 // $doctorfname=$_POST["txt_fname"];
	 // $doctorlname=$_POST["txt_lname"];
	$fromdate=$_POST["txt_fromdate"];
	$todate=$_POST["txt_todate"];
	$timestart=$_POST["txt_timestart"];	
	$timeend=$_POST["txt_timeend"];	
	$appoireason=$_POST["txt_appoireason"];
	
	$memid=$_SESSION["memberid"];

$qry="INSERT INTO caretakerappointment(caretkrid,memid,fromdate,todate,timestart,timeend,appointmentdetails) VALUES ('$caretakerid','$memid','$fromdate','$todate','$timestart','$timeend','$appoireason')";
	// echo $qry;

$con = mysqli_connect("localhost","root","","careathome");
$result=$con->query($qry);

// echo "done";
 echo ("<script>location.href='caretakerappointmentview.php?Id=$caretakerid'</script>");	

 
}
	
	
	 

			$qes="Select * from caretaker_master where  caretkrid= $caretakerid";
	 		$cnn=mysqli_connect("localhost","root","","careathome");
	 		$qry=$cnn->query($qes);
	 		$res=$qry->fetch_assoc();

	 		$caretakername=$res["caretakename"];
	 	// $doctorfname=$res["docfname"];	
	 	// $doctorlname=$res["doclname"];
	 	?>
<?php
}
?>

<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
  


	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> CareTaker Name </h4></label>

										<div class="col-sm-8">
											
											<label class="col-sm-1 control-label no-padding-center" name="txt_fname"><h5><?php echo $caretakername; ?></h5></label>
											
										</div>
									</div>

  								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> Problem</h4></label>

										<div class="col-sm-9">
											
											<input type="text" name="txt_appoireason" required="">
											
										</div>
									</div>


<?php
	
	// echo $todaydate;
	$fromdate=date('Y-m-d', strtotime($todaydate.'+28 days'));
	// $to=date('Y-m-d', strtotime($todaydate.'+7 days'));

?>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> From Date</h4></label>

<div class="col-md-offset-0 col-md-3">
	<div class="input-group">
		<input type="date"  class="form-control date-picker" required="" name="txt_fromdate" min="<?php echo $todaydate;?>" max="<?php echo $fromdate;?>">
		<span class="input-group-addon">
			<i class="fa fa-calendar bigger-110"></i>
		</span>
	</div>
</div>
</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> To Date</h4></label>

<div class="col-md-offset-0 col-md-3">
	<div class="input-group">
		<input type="date"  class="form-control date-picker required" name="txt_todate" min="<?php echo $todaydate;?>" max="<?php echo $fromdate;?>">
		<span class="input-group-addon">
			<i class="fa fa-calendar bigger-110"></i>
		</span>
	</div>
</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> Appointment Time Start</h4></label>
<div class="col-md-offset-0 col-md-3">
<div class="input-group bootstrap-timepicker">
<input type="time" class="form-control" required="" name="txt_timestart">
<span class="input-group-addon">
	<i class="fa fa-clock-o bigger-110"></i>
</span>
</div>			
</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> Appointment Time End</h4></label>
<div class="col-md-offset-0 col-md-3">
<div class="input-group bootstrap-timepicker">
<input type="time" class="form-control" required="" name="txt_timeend">
<span class="input-group-addon">
	<i class="fa fa-clock-o bigger-110"></i>
</span>
</div>			
</div>
</div>

<div class="col-md-offset-3 col-md-9">
<input type="submit" value="Book Appointment" class="btn btn-white btn-success" name="btnSubmit">
</div>

</form>


<?php
include_once("fotter.php");
?>