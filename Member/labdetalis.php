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

<!-- File upload code start -->


<!-- file upload code end -->


<!-- <div style="overflow:scroll;"> -->

<?php
		$cnn=mysqli_connect("localhost","root","","careathome");
		$labid=$_GET["Id"];
		// echo $memid;
		$qry="Select * from lab where labid='$labid'";
		// echo $qry;
		$qes=$cnn->query($qry);

?>
	<table>
	
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
		<img style="height:300px;width: 300px;" src="../labimg/<?php echo $res['labpic']; ?>">
	</td>
	<td style="height: 100px;width: 200px;"><br>
		<b>&nbsp;&nbsp;Lab Name </b>: <br><br>
<b>&nbsp;&nbsp;Lab Contact </b>: <br><br>
<b>&nbsp;&nbsp;Mail Id </b>:<br><br>
<b>&nbsp;&nbsp;Address </b>:<br><br>

	</td>
	<td style="height: 300px;width: 300px;">

	

			<?php echo " ".$res['labname'];?><br><br>
		


			<?php echo " ".$res['contactno'];?><br><br>
		


			<?php echo " ".$res['email'];?><br><br>
		


			<?php echo " ".$res['address'];?><br><br>
	
	</td>
	
</tr>

<?php
		}
?>
		</table>


<?php 
	include_once("fotter.php");
?>