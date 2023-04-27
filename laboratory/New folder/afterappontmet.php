<?php
	include_once("hader.php");
?>

	
<center>
<?php
	$id=$_GET["Id"];
	// echo $id;
	$name=$_GET["name"];
?>
<h3>Make Your Choice For Appointment Confirmation Of <?php echo $name; ?> ?</h3>
<br>
<a href="appointmentconform.php?Id=<?php echo $id;?>" class="btn btn-app btn-success">Confirm</a>
<a href="appointmentdelete.php?Id=<?php echo $id;?>" class="btn btn-app btn-danger">Cancle</a>
</center>


<?php
	include_once("fotter.php");
?>