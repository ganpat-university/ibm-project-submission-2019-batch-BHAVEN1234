<?php


	$caretakerappointmentid=$_GET["Id"];
	// echo "hii";
	$qry="delete from caretakerappointment where caretakerappointmentid='$caretakerappointmentid'";
	

	echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
//echo '<script>alert("Item Removed")</script>';
// echo "done...............................................";

?>
<?php
	header("Location:caretakerappointmentview.php");
?>
