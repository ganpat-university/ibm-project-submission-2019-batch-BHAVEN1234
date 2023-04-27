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

$patientmanaid="";

if(isset($_POST["btn"]))
{
	$patientmanaid=$_GET["Id"];
	
	
	$qry="delete from patient_manager where patientmanaid ='$patientmanaid'";

	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);

}


?>

<body>
	<form method="post">
			<input class="btn btn-info" type="submit" name="btn" value = "delete">
	</form>


<?php
include_once("fotter.php");
?>