<?php
session_start();
	include_once("hader.php");
	$medid=$_GET["Id"];
?>
<table>
	<?php
		$q="select * from medicine_master where medid='$medid'";
		$cnn=mysqli_connect("localhost","root","","careathome");
		// echo $q;
		$qes=$cnn->query($q);

		while($row=$qes->fetch_assoc())
		{
			?>
				<tr>
	<td style="height: 300px;width: 300;">
		<img style="height:300px;width: 300px;" src="<?php echo 'medpic/'.$row['medpic']; ?>">
	</td>
	<td style="height: 100px;width: 200px;"><br>
		<b>Medicine Name </b>: <br><br>
<b>Medicine Type </b>: <br><br>
<b>Medicine Price </b>:<br><br>
<b>Medicine Description </b>:<br><br>
	</td>
	<td style="height: 300px;width: 300px;">

	

			<?php echo " ".$row['medinename'];?><br><br>
		


			<?php echo " ".$row['medtype'];?><br><br>
		


			<?php echo " ".$row['Mprice'];?><br><br>
		


			<?php echo " ".$row['meddis'];?><br><br>
	</td>
</tr>

			<?php
		}
	?>
</table>
<center>
	<form method="post" >
	<input type="text" name="txt_qty" value="1" minlength="1" maxlength="1">
<br>
<input type="submit" class="btn btn-minier btn-yellow" name="addtocart" value="Update">
</form>
</center>

<?php

	if (isset($_POST["addtocart"]))
	{
		$memid=$_SESSION["memberid"];
		// echo "hii";
		$medid=$_GET["Id"];
		$qty=$_POST["txt_qty"];

		$q="select * from medicine_master where medid='$medid'";
		$cnn=mysqli_connect("localhost","root","","careathome");
		// echo $q;
		$qes=$cnn->query($q);
		$row=$qes->fetch_assoc();
		{
			$mname=$row["medinename"];
			$mtype=$row["medtype"];
			$Price=$row["Mprice"];
			$Mimg=$row["medpic"];
		}
		$qty=$_POST['txt_qty'];
		$pq=$Price*$qty;
			$que="update memberorderdetail SET 	Mname='$mname',	Mtype='$mtype',Price='$Price',Mimg='$Mimg',Qty='$qty',PQ='$pq' where memid='$memid'";
			// echo $que;
			$qe=$cnn->query($que);
			echo "<script>location.href='mediview.php?Id=$medid'</script>";
	}
?>
<?php
	include_once("fotter.php");
?>