
<?php

	$appoid=$_GET["Id"];
	
	// echo "hii";
	$qry="delete from lab_appo where appoid ='$appoid'";
	

	echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
echo '<script>alert("Item Removed")</script>';
// echo "done...............................................";

?>
<?php
	header("Location:labview.php");
?>

