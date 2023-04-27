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
$labid="";
$areaid="";
$labname="";
$areaname="";
$time="";
$date="";

if(isset($_POST["btnSubmit"]))
{
	
	$labname=$_POST["txt_lname"];
	$date=$_POST["txt_date"];
	$time=$_POST["txt_time"];	
	$ttest=$_POST["ddl"];
$qry="INSERT INTO lab_appo(labname, Appointmentdate, Appointmenttime,labtest_name) VALUES ('$labname','$date','$time','$ttest')";

	echo $qry;
$con = mysqli_connect("localhost","root","","careathome");
$result=$con->query($qry);

echo "done";
echo ("<script>location.href='labview.php'</script>");	

 
}
	
	
	 

$labid=$_GET["Id"];
			$qes="Select * from lab where labid = $labid";
	 		$cnn=mysqli_connect("localhost","root","","careathome");
	 		$qry=$cnn->query($qes);
	 		$res=$qry->fetch_assoc();

	 	$labname=$res["labname"];	
	 	?>


<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
  


	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Laboratory Name </label>

										<div class="col-sm-9">
											
											<input type="lable"   name="txt_lname" value="<?php echo $labname; ?>">
											
										</div>
									</div>
<div class="col-sm-9">
<select name="ddl" class="col-xs-10 col-sm-5">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Type of Test </label>
											<?php


											$cnn=mysqli_connect("localhost","root","","careathome");
											$result=$cnn->query("select * from labtype");			
	
											while($row=$result->fetch_assoc())
											{
												echo "<option value='".$row["labtest_name"]."'>".$row["labtest_name"]."</option>";
												
											
											echo "<br><br>";	
											}?>
										
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


<?php
include_once("fotter.php");
?>