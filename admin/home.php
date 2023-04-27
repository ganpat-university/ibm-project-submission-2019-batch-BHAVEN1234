<?php
session_start();
include_once("hader.php");

// if(!isset($_SESSION["memberid"]) || !isset($_SESSION["docid"]) || !isset($_SESSION["adminid"]) || !isset($_SESSION["patient_managerid"]) || !isset($_SESSION["labid"]) || !isset($_SESSION["surgical_storeid"]) || !isset($_SESSION["delivery_masterid"]) || !isset($_SESSION["medical_storeid"]))
// {
//   // header("location:../login.php");
// 	echo ("<script>location.href='../login.php'</script>");
// 	// echo ("<script></script>");
// }
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
	$a=$_SESSION["adminid"];
	$cnn=mysqli_connect("localhost","root","","careathome");
// $docid=$_SESSION["docid"];
		$qry="Select * from admin_master where adminid=$a";
// echo $qry;
		// $qry="Select * from doctorappointment where Isconform='register'";
		// echo $qry;
		$qes=$cnn->query($qry);

		while($res=$qes->fetch_assoc())
		{
	$x="welcome, "." ".$res["fname"]." ".$res["lname"];
	// echo $x;
	echo "<script>alert('$x')</script>";

}
?>

<marquee>
<img src="img\d1.jpg" height='400' width='400'>
<img src="img\d2.jpg" height='400' width='400'>
<img src="img\d3.png" height='400' width='400'>
<img src="img\d4.jpg" height='400' width='400'>
<img src="img\d5.jpg" height='400' width='400'>
</marquee>

<?php

include_once("fotter.php");
?>