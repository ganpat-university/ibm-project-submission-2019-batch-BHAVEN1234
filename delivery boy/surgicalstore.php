<?php
$did=$_GET["Id"];
// echo $did;

$cnn = mysqli_connect("localhost","root","","careathome");
$q1="select * from delivery_master where surproid!=NULL and deliveryid='$did'";
// echo $q1;
$qry=$cnn->query($q1);
?>
<table>
	<tr>
		<th>Surgical Store Image</th>
		<th>Surgical Store Name</th>
		<th>Surgical Store Address</th>
	</tr>
	<tr>
		<td><img src=""></td>
		<td><a href=""><?php ?></a></td>
	</tr>
</table>