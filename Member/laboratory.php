<?php
session_start();
include_once("hader.php");
$memid=$_SESSION["memberid"];
 //$labid=$_SESSION["labid"];
$todaydate=date('Y-m-d');
// echo $memid.'  '.$doctorid;rd3dd 
?>

<?php
//$memid=$_GET["Id"];
	$labid=$_GET["Id"];
	$q="select * from lab where memid='$memid' and labid='$labid' and dateofappointment='$todaydate'";
	// echo $q;
	$con = mysqli_connect("localhost","root","","careathome");
	$qresult=$con->query($q);
 	@$qcnt=mysqli_num_rows($qresult); 

if($qcnt==1)
{
	echo "<script>alert('You have already booked appointment')</script>";
	// header("Location:home.php");
	echo ("<script>location.href='home.php'</script>");
	
}
else
{
	// echo "<script>alert('either usenamr or password is worng')</script>";

}
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
$labid="";
$areaid="";
$labname="";
$areaname="";
$time="";
$date="";




$labid=$_GET["Id"];
			$qes="Select * from lab where labid = $labid";
	 		$cnn=mysqli_connect("localhost","root","","careathome");
	 		$qry=$cnn->query($qes);
	 		$res=$qry->fetch_assoc();
{
	 	$labname=$res["labname"];	
	 	// echo $labname;
}

if(isset($_POST["btnSubmit"]))
{ 
	$isconfirm='NO';
	$isnew='YES';
	$labid=$_GET["Id"];
	//$memid=$_GET["Id"];
	// $labname1=$_POST["labname"];
	$date=$_POST["txt_date"];
	$time=$_POST["txt_time"];	
	$ttest=$_POST["ddl"];
	// echo $labname.'<br>';

$qry="INSERT INTO lab_appo(labid,memid,labname, Appointmentdate, Appointmenttime,labtest_id,Isconform,Isnew) VALUES ('$labid','$memid','$labname','$date','$time','$ttest','$isconfirm','$isnew')";
// echo $qry;
$con = mysqli_connect("localhost","root","","careathome");
$result=$con->query($qry);

// echo "done";
// echo ("<script>location.href='labview.php'</script>");	

 
}
?>


<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
  


	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> Laboratory Name </h4></label>

										<div class="col-sm-5">
											
											<label class="col-sm-3 control-label no-padding-right"><?php echo $labname; ?></label>
											
										</div>
									</div>
	
	<div class="form-group">

								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><h4> Type of Test </h4> </label> <select name="ddl" class="col-xs-10 col-sm-5">

<div class="col-sm-9">
											<?php
											$cnn=mysqli_connect("localhost","root","","careathome");
											$result=$cnn->query("select * from labtype");			
	
											while($row=$result->fetch_assoc())
											{
												echo "<option value='".$row["labtest_id"]."'>".$row['labtest_name']." &nbsp;&nbsp; (".$row['price']."  Rs)</option>";
												
											echo "<br><br>";	
											}?>
											</div>
										</select>
									
								</div>



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
<input type="submit" value="Book Appointment" class="btn btn-white btn-success" name="btnSubmit">
</div>

</form>
<?php
include_once("fotter.php");
?>