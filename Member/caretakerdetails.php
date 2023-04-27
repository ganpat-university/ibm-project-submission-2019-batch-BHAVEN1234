<?php 
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
		$caretkrid=$_GET["Id"];
		$qry="Select * from caretaker_master where caretkrid='$caretkrid'";
		// echo $qry;
		$qes=$cnn->query($qry);

		

		
?>
	<table>

<?php

		while($res=$qes->fetch_assoc())
		{
		
				
		
?>


<tr>
	<td style="height: 300px;width: 300;">
		<img style="height:300px;width: 300px;" src="img/<?php echo $res['caretakepic']; ?>">
	</td>
	<td>
		&nbsp;
		&nbsp;
		&nbsp;
		&nbsp;
	</td>
	<td style="height: 100px;width: 200px;"><br>
		<b>Name </b>: <br><br>
<b>Number </b>:<br><br>
<b>Services </b>:<br><br>
<b>Charges </b>:<br><br>
<b>Likes </b>:<br><br>

	</td>
	<td style="height: 300px;width: 300px;">
		


			<?php echo " ".$res['caretakename'];?><br><br>
		


			<?php echo " ".$res['caretakercontact'];?><br><br>



			<?php echo " ".$res['services'];?><br><br>
		


			<?php echo " ".$res['charges'];?><br><br> 
		

			<?php echo " ".$res['lcnt'];?><br> 
		
	</td>
</tr>

<?php
		}
?>
		</table>


<?php 
	include_once("fotter.php");
?>