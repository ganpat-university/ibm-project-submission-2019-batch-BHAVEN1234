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

$surproid="";
$surproname="";
$surprodec="";
$selling_price="";
$surproimg="";
$rentpri="";
$rentdur="";
$deposit="";
$stock="";


if(isset($_POST["btn"]))
{
	$surproid=$_GET["Id"];
	$surproname=$_POST["txt_surproname"];
	$surprodec=$_POST["txt_surprodec"];
	$selling_price=$_POST["txt_selling_price"];
	$surproimg=$_POST["upd_surproimg"];
	$rentpri=$_POST["txt_rentpri"];
	$rentdur=$_POST["txt_rentdur"];
	$deposit=$_POST["txt_deposit"];
	$stock=$_POST["txt_stock"];
	
	$qry="update surproduct SET surproname='$surproname',surprodec='$surprodec',selling_price='$selling_price',	surproimg='$surproimg',rentpri='$rentpri',rentdur='$rentdur',deposit='$deposit',stock='$stock' WHERE surproid='$surproid'";

	// echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);

// echo "done...............................................";
}


$surproid=$_GET["Id"];
			$qes="Select * from surproduct where surproid = $surproid";
			$cnn=mysqli_connect("localhost","root","","careathome");
			$qry=$cnn->query($qes);
			$res=$qry->fetch_assoc();

			
			$surproname=$res["surproname"];
			$surprodec=$res["surprodec"];
			$selling_price=$res["selling_price"];
			$surproimg=$res["surproimg"];
			$rentpri=$res["rentpri"];
			$rentdur=$res["rentdur"];
			$deposit=$res["deposit"];
			$stock=$res["stock"];


?>


<body>
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			
<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Surgical Product Name: </label>
<div class="col-sm-9">

			<input class="col-xs-10 col-sm-5" type="text" name="txt_surproname" value="<?php echo $surproname; ?>"><br><br>
</div>
</div>


<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Surgical Product Details : </label>	
<div class="col-sm-9">

			<input class="col-xs-10 col-sm-5" type="text" name="txt_surprodec" value="<?php echo $surprodec; ?>"><br><br>
</div>
</div>


<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Selling Price : </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="txt_selling_price" value="<?php echo $selling_price; ?>"><br><br>
</div>
</div>
 


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Surgical Product Img : </label>
	<div class="col-sm-9">
	&nbsp
	<div class="fileUpload btn btn-primary">
		<span>Upload</span>
		<input type="file" class="upload" name="upd_surproimg" value="<?php echo $surproimg; ?>">
	</div>				
	</div>						
</div><br><br>




<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Rent Price : </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="txt_rentpri" value="<?php echo $rentpri; ?>"><br><br>
</div>
</div>


<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Rent Duration : </label>	
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="txt_rentdur" value="<?php echo $rentdur; ?>"><br><br>
</div>
</div>

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Deposit : </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="txt_deposit" value="<?php echo $deposit;?>"><br><br>
</div>
</div>


<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Stock : </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="txt_stock" value="<?php echo $stock; ?>"><br><br>
</div>
</div>


<div class="col-md-offset-3 col-md-9">
		<input class="btn btn-info" type="submit" name="btn" value="Submit">
</div>								

	</form>
</body>


<?php
include_once("fotter.php");
?>