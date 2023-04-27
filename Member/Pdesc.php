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
	<td>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
<input type="submit" class="btn btn-minier btn-yellow" name="addtocart" value="Add To Cart">
</form>
</center>
<?php
	if (isset($_POST["addtocart"]))
	{
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
		$pq=$Price*$qty;
		// $Tid=$_SESSION['Tid'];
			$que="INSERT INTO med_cart(Mid,Mname,Price,Mimg,Qty,PQ,Mtype) VALUES ('$medid','$mname','$Price','$Mimg','$qty','$pq','$mtype')";
			// echo $que;
			$qe=$cnn->query($que);
			echo "<script>location.href='viewmedcart.php?Id=$medid'</script>";
	}
?>
<?php
	include_once("fotter.php");
?>