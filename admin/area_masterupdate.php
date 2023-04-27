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

$areaname="";
$city="";
$Address="";

if(isset($_POST["btn"]))
{
	$areaid=$_GET["Id"];
	$areaname=$_POST["txt_Area_Name"];
	// $city=$_POST["txt_city"];
	
	
	$qry="update area_master SET areaname='$areaname' WHERE areaid='$areaid'";

	// echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
	echo ("<script>location.href='area_master.php'</script>");

// echo "done...............................................";
}

	$areaid=$_GET["Id"];
			$qes="Select * from area_master where areaid = $areaid";
			$cnn=mysqli_connect("localhost","root","","careathome");
			$qry=$cnn->query($qes);
			$res=$qry->fetch_assoc();

			$areaname=$res["areaname"];
			// $city=$res["city"];
			

?>
<body>
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Area Name: </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" required="" pattern="[a-zA-Z]{2,30}" type="text" name="txt_Area_Name" value="<?php echo $areaname ?>"><br><br>
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