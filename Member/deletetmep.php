<?php

	$tid=$_GET["Id"];
	
	// echo "hii";
	$qry="delete from  med_cart where tid ='$tid'";
	

	 echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
echo '<script>alert("Item Removed")</script>';
// echo "done...............................................";

?>
<?php
	header("Location:viewmedcart.php");
?>