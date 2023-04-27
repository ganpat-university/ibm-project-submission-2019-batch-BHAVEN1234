<?php
session_start();
	include_once("hader.php");
	$did=$_SESSION["delivery_masterid"];
?>

<a href="surgicalstore.php?Id=<?php echo $did;?>" class="btn btn-white btn-success">Surgical Store</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="laboratory.php" class="btn btn-white btn-success">Laboratory</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="medicalstore.php" class="btn btn-white btn-success">Medical Store</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php
	include_once("fotter.php");
?>