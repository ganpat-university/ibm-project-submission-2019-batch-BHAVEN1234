<?php

	$tempid=$_GET["Id"];
	
	// echo "hii";
	$qry="delete from tempcart  where tempid ='$tempid'";
	

	 echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
echo '<script>alert("Item Removed")</script>';
// echo "done...............................................";

?>
<?php
	header("Location:viewcart.php");
?>