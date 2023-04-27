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


$doctorid=$_GET["Id"];


	
	$qry="delete from doctor where doctorid='$doctorid'";

	// echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
echo ("<script>location.href='doctorview.php'</script>");
// echo "done...............................................";

?>

<?php
include_once("fotter.php");
?>