
<?php

	$appoid=$_GET["Id"];
	
	// echo "hii";
	$qry="delete from doctorappointment where doctorappointmentid ='$appoid'";
	

	// echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
echo '<script>alert("Item Removed")</script>';
// echo "done...............................................";

?>
<?php
	header("Location:doctorappointmentview.php");
?>
