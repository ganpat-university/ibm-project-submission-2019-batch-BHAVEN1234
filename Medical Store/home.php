<?php
session_start();
	include_once("hader.php");

		$medistoid=$_SESSION["medical_storeid"];
	$medstorname=$_SESSION["medicalstorename"];
		$x="welcome";

		echo "<script>alert('$x')</script>";
		?>
<?php
	include_once("fotter.php");
?>