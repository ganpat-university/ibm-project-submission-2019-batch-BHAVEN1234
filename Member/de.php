<?php

	$omid=$_GET["Id"];
	
	// echo "hii";
	$qry="delete from  memberorderdetail where omid ='$omid'";
	

	 echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
echo '<script>alert("Item Removed")</script>';
// echo "done...............................................";

?>
<?php
	header("Location:mediview.php");
?>