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

$eid="";

if(isset($_POST["btn"]))
{
	$surproid=$_GET["Id"];
	
	
	$qry="delete from surproduct where surproid='$surproid'";

	// echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);

// echo "done...............................................";
}


?>

<body>
	<form method="post">
			<input class="btn btn-info" type="submit" name="btn" value = "delete">
	</form>


<?php
include_once("fotter.php");
?>