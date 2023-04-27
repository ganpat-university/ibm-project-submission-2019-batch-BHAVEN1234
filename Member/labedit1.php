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
	$appoid="";
	$labname="";
	$quantity="";
	if(isset($_POST["btnSubmit"]))
	{
		$appoid=$_GET["Id"];
		$labname=$_POST["txt_lname" ];
		$Appointmentdate=$_POST["txt_date"];
		$Appointmenttime=$_POST["txt_time"];
		

		$qry="update lab_appo SET labname='$labname',Appointmentdat='$Appointmentdate',Appointmenttime='$Appointmenttime' where appoid='$appoid'";
		echo $qry;

		$cnn=mysqli_connect("localhost","root","","careathome");
		$fire=$cnn->query($qry);
	

echo "done";

	}
			$appoid=$_GET["Id"];
			$qes="Select * from lab_appo   where appoid=$appoid";
			echo $qes;

			$cnn=mysqli_connect("localhost","root","","careathome");
			$qry=$cnn->query($qes);
			$res=$qry->fetch_assoc();

		$labname=$res["labname"];
		$Appointmentdate=$res["Appointmentdate"];
		$Appointmenttime=$res["Appointmenttime"];

?>

			
		
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
  


	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Laboratory Name </label>

										<div class="col-sm-9">
											
											<input type="lable"   name="txt_lname" value="<?php echo $labname; ?>">
											
										</div>
									</div>

	<div class="col-md-offset-3 col-md-9">
<input type="date"  class="btn btn-info" name="txt_date"  value="<?php echo $Appointmentdate; ?>">
</div>
<div class="col-md-offset-3 col-md-9">
<input type="time"  class="btn btn-info" name="txt_time"  value="<?php echo $Appointmenttime; ?>">
</div>			

<div class="col-md-offset-3 col-md-9">
<input type="submit" value="Book Appointment" class="btn btn-info" name="btnSubmit">
</div>


<?php
include_once("fotter.php");
?> 