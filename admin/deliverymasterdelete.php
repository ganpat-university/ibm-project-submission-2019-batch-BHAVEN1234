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
	$deliveryid="";
	
	

	if(isset($_POST["btnSubmit"]))
	{
	
	$deliveryid=$_GET["Id"];
		$qry="Delete from deliverymaster where deliveryid ='$deliveryid'";

		
		
		echo $qry;

		$cnn=mysqli_connect("localhost","root","","careathome");
		$fire=$cnn->query($qry);
		echo " sucessfully";



	}
	$deliveryid=$_GET["Id"];
			$qes="Select * from deliverymaster where deliveryid = $deliveryid";
			$cnn=mysqli_connect("localhost","root","","careathome");
			$qry=$cnn->query($qes);
			$res=$qry->fetch_assoc();


	?>



		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

	<div class="col-sm-9">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> deliveryid </label>
<input type="text" class="col-xs-10 col-sm-5" name="txt_deliveryid" value="<?php echo $deliveryid;?>">	
	
</div>
	
	
		
		<div class="col-md-offset-4 col-md-9">
<input class="btn btn-info" type="submit" value="done" name="btnSubmit">
</div>

<?php
include_once("fotter.php");
?>