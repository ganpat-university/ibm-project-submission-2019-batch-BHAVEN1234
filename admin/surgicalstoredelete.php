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

$eno="";


	$surgid=$_GET["Id"];


	
	$qry="delete from surgicalstore where surgid='$surgid'";

	// echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);

// echo "done...............................................";
	echo ("<script>location.href='surgicalstore.php'</script>");

 				

?>

		<?php
include_once("fotter.php");
?>