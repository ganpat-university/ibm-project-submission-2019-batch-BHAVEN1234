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


if(isset($_POST["btn"]))
{
	$areaname = $_POST["txt_areaname"];
	// $city = $_POST["txt_city"];
	
	$qry="INSERT INTO area_master (areaname) VALUES ('$areaname')";

	// echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
	echo "<script><alert>Data instert</alert></script>";
	echo ("<script>location.href='../login.php'</script>");
// echo "done...............................................";
}


?>


<body>
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			
<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Area Name : </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" pattern="[a-zA-Z]{2,30}" required="" name="txt_areaname">
</div>
</div>


<br>
<div class="col-md-offset-3 col-md-9">
		<input class="btn btn-info" type="submit" name="btn" value="Submit">
</div>								

	</form>
</body>


<?php
include_once("fotter.php");
?>