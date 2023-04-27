<?php
session_start(); 
	include_once("hader.php");
?>

	<div class="page-header">
							<h1>
								Manage Appointment
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>

<!-- <div style="overflow:scroll;"> -->

<?php
		$cnn=mysqli_connect("localhost","root","","careathome");
		$memid=$_GET["Id"];
		// echo $memid;
		// echo $_GET["Id"];
		$qry="Select * from member_master where memid=$memid";
		// echo $qry;
		$qes=$cnn->query($qry);

		

		
?>
	<table>
	<!-- 	<tr>
			<th><center> Image </center></th>
			<th><center> Name </center></th>
			<th><center> User Name </center></th>
			<th><center> Number  </center></th>
			<th><center> Mail Id </center></th>
			<th><center> Gender </center></th>
			<th><center> Diabic or Not </center></th>
			<th><center> Bloodpressure or Not </center></th>
			<th><center> Smoking or Not </center></th>
		</tr> -->
<?php

		while($res=$qes->fetch_assoc())
		{
		
				
		
?>

<!-- <tr>
	<td>
		<img style="height:100px;width: 100px;" src="<?php// echo $res['mempic']; ?>">
	</td>
	
	<td style="height: 150px;width: 150px;">
		<center>
		<?php// echo $res['memfname']." ".$res['memlname'];?><br>
		</center>
	</td>

	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['uname'];?><br> 
		</center>
	</td>

	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['contact'];?><br> 
		</center>
	</td>

	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['email'];?><br> 
		</center>
	</td>

	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['gender'];?><br> 
		</center>
	</td>

	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['isdiabic'];?><br> 
		</center>
	</td>

	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['bloodpressure'];?><br> 
		</center>
	</td>
		
	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['issmoking'];?><br> 
		</center>
	</td>
</tr> -->

<tr>
	<td style="height: 300px;width: 300;">
		<img style="height:250px;width: 250px;" src="../Member/img/<?php echo $res['mempic']; ?>">
	</td>
	<td>
		&nbsp;
		&nbsp;
		&nbsp;
		&nbsp;
		&nbsp;

	</td>
	<td style="height: 100px;width: 200px;"><br>
		<b>Name </b>: <br><br>
<b>User Name </b>: <br><br>
<b>Contact No </b>:<br><br>
<b>Mail Id </b>:<br><br>
<b>Gender </b>:<br><br>
<b>Diabic or Not </b>:<br><br>
<b>Bloodpressure or Not </b>:<br><br>
<b>Smoking or Not </b>:<br><br>
<b>Address </b>:<br><br>
	</td>
	<td style="height: 300px;width: 300px;">

	

			<?php echo " ".$res['memfname']." ".$res['memlname'];?><br><br>
		


			<?php echo " ".$res['uname'];?><br><br>
		


			<?php echo " ".$res['contact'];?><br><br>
		


			<?php echo " ".$res['email'];?><br><br>
		


			<?php echo " ".$res['gender'];?><br><br>
		


			<?php echo " ".$res['isdiabic'];?><br><br>
		


			<?php echo " ".$res['bloodpressure'];?><br><br> 
		

			<?php echo " ".$res['issmoking'];?><br><br>

			<?php echo " ".$res['address'];?><br>  
		
	</td>
</tr>




<?php
$email=$res['email'];
		}
?>
		</table>


<?php

if(isset($_POST["btnsubmit"]))
{
	$isnew="No";
	$isconform="Yes";
	$memid=$_GET["Id"];

		$q="update tempcart set Isconform='$isconform' where memid= $memid";
		// echo $q;

		$cnn=mysqli_connect("localhost","root","","careathome");
		$fire=$cnn->query($q);

		echo ("<script>location.href='confoimorder.php'</script>");
		// echo "done";
}
?>

<form method='post'>
<div class="col-md-offset-3 col-md-9">
	&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="btnsubmit" class="btn btn-info" value="Confirm" >
	
</form>
<?php 
	include_once("fotter.php");
?>