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

$labid="";
$labname="";
$contactno="";
$uname="";
$password="";
$address="";
$email="";


	$labid=$_GET["Id"];



	$qry="delete from lab where labid='$labid'";
	$con = mysqli_connect("localhost","root","","careathome");
	$fire=$con->query($qry);	

	// header("Location:lab.php");		
	echo ("<script>location.href='lab.php'</script>");			

echo ("<script>location.href='medicalstore.php'</script>");

 		?>


			

<?php
include_once("fotter.php");
?>