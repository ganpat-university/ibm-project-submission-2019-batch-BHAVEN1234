<?php 
session_start();
	include_once("hader.php");
	$memid=$_SESSION["memberid"];
?>

	<div class="page-header">
							<h1>
								
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>
<?php
		$cnn=mysqli_connect("localhost","root","","careathome");
		
		// echo $memid;
		$qry="Select * from member_master where memid='$memid'";
		// echo $qry;
		$qes=$cnn->query($qry);
while($res=$qes->fetch_assoc())
		{
		$memfname=$res['memfname'];
		$memlname=$res['memlname'];
		$uname=$res['uname'];
		$email=$res['email'];
		$contact=$res['contact'];
		$address=$res['address'];
		
		
	

	if(isset($_POST["btnsubmit"]))
	{
		$pass=$_POST["txtpassword"];
		$mempic=$_POST["mempic"];
$cnn=mysqli_connect("localhost","root","","careathome");
		$memid=$_GET["Id"];
		$q="UPDATE member_master SET memfname='$memfname',memlname='$memlname',uname='$uname',email='$email',address='$address',pwd='$pass',mempic='$mempic' where memid='$memid'";
$qes=$cnn->query($q);


	}
}
	?>


	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First Name </label>

										<div class="col-sm-9">
											<input type="text"  class="col-xs-10 col-sm-5" pattern="[a-zA-Z]{2,30}" minlength="2" maxlength="25" name="txtfirstname" required="" value="<?php echo $memfname?>">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Last Name </label>

										<div class="col-sm-9">
											<input type="text" placeholder="Last Name" maxlength="15" class="col-xs-10 col-sm-5" pattern="[a-zA-Z]{2,15}" name="txtlastname" required="" value="<?php echo $memlname?>">
											
										</div>
									</div>

									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> User Name </label>

										<div class="col-sm-9">
											<input type="text" placeholder="User name" class="col-xs-10 col-sm-5" name="txtuname" minlength="2" maxlength="30" required="" value="<?php echo $uname?>">		
										</div>
									</div>

										

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Email </label>

										<div class="col-sm-9">
											<input type="Email" placeholder="Email" class="col-xs-10 col-sm-5" name="txtemail" minlength="2" maxlength="50" required="" value="<?php echo $email?>">
										</div>
									</div>	

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Contact </label>

										<div class="col-sm-9">
											<input type="text" placeholder="Contact" class="col-xs-10 col-sm-5" name="txtcontact" minlength="10" maxlength="10" required="" pattern="[6|7|8|9][0-9]{9}" value="<?php echo $contact?>">
										</div>
									</div>	

									

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Member Pic </label>

										&nbsp
											<div class="fileUpload btn btn-primary">
    											<span>Upload</span>
    											<input type="file" class="upload" name="mempic" required="">
											</div>										
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Address </label>

										<div class="col-sm-9">

									 		<textarea class="form-control" placeholder="Address" name="txtaddress" minlength="3" maxlength="100" required="" value="<?php echo $address?>"></textarea>
  									 	</div>
									</div>									

									

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Area </label>
											

										<div class="col-sm-9">																	
									<select class="form-control" name="areaname" required="">
										<?php
											$cn = mysqli_connect("localhost","root","","careathome");
											$arean=$cn->query("select * from area_master");
											
											while($areanro = $arean->fetch_assoc())
											{
												echo "<option value='".$areanro["areaid"]."'>".$areanro["areaname"]."</option>";
											}
										?>
									</select>
									</div>
									</div>



									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="btn btn-info" name="btnSubmit" value="Submit">

										</div>
									</div>

									<div class="hr hr-24"></div>
							
						</form>

<?php 
	include_once("fotter.php");
?>