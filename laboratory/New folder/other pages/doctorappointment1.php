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


if(isset($_POST["btnSubmit"]))
{
	$doctorid=$_GET["Id"];
	
	 $doctorfname=$_POST["txt_fname"];
	 $doctorlname=$_POST["txt_lname"];
	$date=$_POST["txt_date"];
	$time=$_POST["txt_time"];	
	$appoireason=$_POST["txt_appoireason"];
	$appointmenttype=$_POST["raon"];

$qry="INSERT INTO doctorappointment(doctorid,dateofappointment, appointmenttime,appointmentdetails,Appointmenttype) VALUES ('$doctorid','$date','$time','$appoireason','$appointmenttype')";
	echo $qry;
$con = mysqli_connect("localhost","root","","careathome");
$result=$con->query($qry);

echo "done";
 //echo ("<script>location.href='doctorappointmentview.php'</script>");	

 
}
	
	
	 

            $doctorid=$_GET["Id"];
			$qes="Select * from doctor where doctorid = $doctorid";
	 		$cnn=mysqli_connect("localhost","root","","careathome");
	 		$qry=$cnn->query($qes);
	 		$res=$qry->fetch_assoc();

	 	$doctorfname=$res["docfname"];	
	 	$doctorlname=$res["doclname"];
	 	?>


<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
  


	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Doctoer First Name </label>

										<div class="col-sm-9">
											
											<input type="lable"   name="txt_fname" value="<?php echo $doctorfname; ?>">
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Doctoer Last Name </label>

										<div class="col-sm-9">
											
											<input type="lable"   name="txt_fname" value="<?php echo $doctorlname; ?>">
											
										</div>
									</div>
  								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Appointment Reason</labe>

										<div class="col-sm-9">
											
											<input type="text"   name="txt_appoireason" >
											
										</div>
									</div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Appointment Type (old/new)</labe>

										<div class="col-sm-9">
											
											<input type="text"   name="raon" >
											
										</div>
									</div>

	<div class="col-md-offset-3 col-md-9">
<input type="date"  class="btn btn-info" name="txt_date">
</div>
<div class="col-md-offset-3 col-md-9">
<input type="time"  class="btn btn-info" name="txt_time">
</div>			

<div class="col-md-offset-3 col-md-9">
<input type="submit" value="Book Appointment" class="btn btn-info" name="btnSubmit">
</div>

</form>

<
<?php
include_once("fotter.php");
?>