<?php
	include_once("hader.php");
?>
<?php

if(isset($_POST["submit"]))
{
	$surproname=$_POST["surproname"];
	$surprodec=$_POST["surprodetails"];
	$surimg=$_POST["surimg"];
	$sellingprice=$_POST["sellingprice"];
	$rentprice=$_POST["rentprice"];
	$rentduretion=$_POST["rentduretion"];
	$stock=$_POST["stock"];
		$qry="update surproduct SET surproname='$surproname',surprodec='$surprodec',img='$surimg',selling_price='$sellingprice',rentpri='$rentprice',rentdur='$rentduretion',stock='$stock' where doctorappointmentid='$doctorappoid'";
		// echo $qry;

		$cnn=mysqli_connect("localhost","root","","careathome");
		$fire=$cnn->query($qry);
}
?>

	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Surgical Producat Name </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="surproname" required="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Surgical Producat Details </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="surprodetails" required="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Surgical Producat Image </label>

			<div class="col-sm-9">
				<!-- <input type="text" class="col-xs-10 col-sm-5" name="surproimg" required=""> -->


				<div class="form-group">
															<div class="col-xs-5">
																<label class="ace-file-input"><input type="file" name="surimg" id="id-input-file-2"><span class="ace-file-container" data-title="Choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
															</div>
														</div>

			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Selling Price </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="sellingprice" required="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Rent Price </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="rentprice" required="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Rent Duration </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="rentduretion" required="">
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Deposit </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="deposit" required="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Stock </label>

			<div class="col-sm-9">
				<input type="text" class="col-xs-10 col-sm-5" name="stock" required="">
			</div>
		</div>

		<div class="col-md-offset-4 col-md-9">
			<input type="submit" class="btn btn-white btn-success" name="submit">
		</div>

	</form>

<?php
	include_once("fotter.php");
?>