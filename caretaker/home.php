<?php
session_start();
	include_once("hader.php");

	
			$caretkrid=$_SESSION["caretkrid"];
	 		$caretakename=$_SESSION["caretakename"];
		$x="welcome, "."".$caretakename;

		echo "<script>alert('$x')</script>";

	include_once("fotter.php");
?>