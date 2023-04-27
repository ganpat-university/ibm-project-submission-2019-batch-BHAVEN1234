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
		$docid=$_GET["Id"];
		$qry="Select * from doctor where doctorid='$docid'";
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
		<img style="height:300px;width: 300px;" src="img/<?php echo $res['docpic']; ?>">
	</td>
	<td>
		&nbsp;
		&nbsp;
		&nbsp;
		&nbsp;
	</td>
	<td style="height: 100px;width: 200px;"><br>
		<b>Name </b>: <br><br>
<b>Doctor User Name </b>: <br><br>
<b>Number </b>:<br><br>
<b>E-Mail </b>:<br><br>
<b>Degree </b>:<br><br>
<b>Experience Year </b>:<br><br>
<b>Gender </b>:<br><br>
<b>Likes </b>:<br><br>

	</td>
	<td style="height: 300px;width: 300px;">

	

			<?php echo " ".$res['docfname']." ".$res['doclname'];?><br><br>
		


			<?php echo " ".$res['uname'];?><br><br>
		


			<?php echo " ".$res['contact'];?><br><br>
		


			<?php echo " ".$res['email'];?><br><br>
		


			<?php echo " ".$res['lastdegree'];?><br><br>
		


			<?php echo " ".$res['experience'];?><br><br>
		


			<?php echo " ".$res['gender'];?><br><br> 
		

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