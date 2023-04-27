<?php
session_start();
	include_once("hader.php");
	$surid=$_SESSION["surgical_storeid"];
	$surstorename=$_SESSION["surgical_storename"];
		$x="welcome";
		echo "<script>alert('$x')</script>";
?>


<?php
	include_once("fotter.php");
?>