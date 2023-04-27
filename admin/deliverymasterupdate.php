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
	$regid="";
	$sturid="";
	$testid="";
	$madid="";
	$deliverypername="";
	$email="";
	$contact="";
	$uname="";
	$pwd="";
	$deliverperpic="";
	$ratings="";
	$edit="";
	$Delete="";
	
	

	if(isset($_POST["btnSubmit"]))
	{
		$deliveryid=$_GET["Id"];
		$deliverypername=$_POST["txt_delivery"];
		$email=$_POST["txt_email"];
		$contact=$_POST["txt_contact"];
		$uname=$_POST["txt_uname"];
		$pwd=$_POST["pwd"];
		$deliverperpic=$_POST["pic"];
		$ratings=$_POST["ratings"];
		//$qry="Delete from emp where eno ='$eno'";

		$qry="update deliverymaster SET deliverypername='$deliverypername',email='$email',contact='$contact',uname='$uname',pwd='$pwd',deliveryperpic='$deliverperpic',ratings='$ratings' WHERE deliveryid='$deliveryid'";
		echo $qry;

		$cnn=mysqli_connect("localhost","root","","careathome");
		$fire=$cnn->query($qry);
	



	}
				$deliveryid=$_GET["Id"];
			$qes="Select * from deliverymaster where deliveryid = $deliveryid";
			$cnn=mysqli_connect("localhost","root","","careathome");
			$qry=$cnn->query($qes);
			$res=$qry->fetch_assoc();

		$deliverypername=$res["deliverypername"];
		$email=$res["email"];
		$contact=$res["contact"];
		$uname=$res["uname"];
		$pwd=$res["pwd"];
		$deliverperpic=$res["deliveryperpic"];
		$ratings=$res["ratings"];
			



?>

	



			<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		
	
		
<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> deliverypername: </label>	
<div class="col-sm-9">
		<input type="text" class="col-xs-10 col-sm-5" name="txt_delivery" value="<?php echo $deliverypername;?>">	

</div>
</div>





<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> email: </label>
<div class="col-sm-9">
	<input type="email" class="col-xs-10 col-sm-5" name="txt_email" value="<?php echo $email; ?>">

</div>
</div>
	

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> contact: </label>
<div class="col-sm-9">
	<input type="text" class="col-xs-10 col-sm-5" name="txt_contact" value="<?php echo $contact; ?>"><br><br>
</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> uname: </label>
<div class="col-sm-9">
	<input type="text" class="col-xs-10 col-sm-5" name="txt_uname" value="<?php echo $uname; ?>"><br><br>
</div>
</div>
	
		
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> pwd: </label>	
<div class="col-sm-9">
<input type="text" class="col-xs-10 col-sm-5" name="pwd" value="<?php echo $pwd; ?>"><br><br>
</div>
</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> deliverperpic: </label>
<div class="col-sm-9">
<label class="ace-file-input">
	<input type="file" name="pic" id="id-input-file-2">
	<span class="ace-file-container" data-title="Choose">
		<span class="ace-file-name" data-title="No File ...">
			<i class=" ace-icon fa fa-upload"></i>
		</span>
	</span>
			<a class="remove" href="#">
				<i class=" ace-icon fa fa-times"></i>
			</a>
		</label>
</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ratings: </label>
<div class="col-sm-9">
	<input type="text" class="col-xs-10 col-sm-5" name="ratings" value="<?php echo $ratings; ?>"><br><br>
</div>
</div>

<div class="col-md-offset-4 col-md-9">
<input class="btn btn-info" type="submit" value="done" name="btnSubmit">
</div>

<?php
include_once("fotter.php");
?> 