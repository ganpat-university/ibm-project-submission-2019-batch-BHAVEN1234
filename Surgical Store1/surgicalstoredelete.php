
<?php

	$surproid=$_GET["Id"];
	
	// echo "hii";
	$qry="delete from surproduct where surproid ='$surproid'";
	

	// echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
echo '<script>alert("Item Removed")</script>';
// echo "done...............................................";

?>
<?php
	header("Location:surgicalstoreview.php");
?>
