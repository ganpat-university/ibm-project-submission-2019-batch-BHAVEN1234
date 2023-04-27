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

$areaid="";
$areaname="";
// $city="";

	$areaid=$_GET["Id"];
	
	
	$qry="delete from area_master where areaid ='$areaid'";

	// echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
	echo ("<script>location.href='area_master.php'</script>");

// echo "done...............................................";
	// echo ("<script>location.href='area_master.php'</script>");

?>

<?php
include_once("fotter.php");
?>