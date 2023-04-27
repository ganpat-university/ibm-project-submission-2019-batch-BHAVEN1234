<?php

	$medid=$_GET["Id"];
	
	// echo "hii";
	$qry="delete from  medicine_master where medid='$medid'";
	

	// echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
echo '<script>alert("Item Removed")</script>';
// echo "done...............................................";

?>
<?php
	header("Location:medicine.php");
?>
