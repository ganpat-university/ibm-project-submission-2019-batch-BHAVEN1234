<?php
session_start();
	include_once("hader.php");

		$docid=$_SESSION["docid"];
		$docfname=$_SESSION["docfname"];
		$doclname=$_SESSION["doclname"];
		$x="welcome, "." DR. ".$docfname." ".$doclname;

		echo "<script>alert('$x')</script>";

	include_once("fotter.php");
?>