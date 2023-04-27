<?php

session_start();
$appointment_reg="";
$dateofappointment="";
$appointmenttime="";
$appointmentdetails="";
$isnew="";
$Isconform="";
$Isrejected="";
$Rejectedreason="";
$chek="";



	$doctorappointmentid=$_GET["Id"];
	// echo $doctorappointmentid;
	$Isconformd="No";
	
	
	$qry="DELETE FROM doctorappointment WHERE doctorappointmentid='$doctorappointmentid';";
// echo $qry;
$con = mysqli_connect("localhost","root","","careathome");
				$res=$con->query($qry);

	echo ("<script>location.href='home.php'</script>");

	
	// header("Location:manage appointment(maharsh).php");

?>



