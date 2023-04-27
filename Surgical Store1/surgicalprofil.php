<?php 
session_start();
	include_once("hader.php");
	$surid=$_SESSION["surgical_storeid"];
?>

	<div class="page-header">
							<h1>
								YOUR PROFIL
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
		
		// echo $memid;
		$qry="Select * from surgicalstore where surgid='$surid'";
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
		<img style="height:200px;width: 300px;" src="../Surgical Store/img1/<?php echo $res['img']; ?>">
	</td>
	<td style="height: 100px;width: 200px;"><br>
		<b>&nbsp;&nbsp;Surgical Store Name </b>: <br><br>
<b>&nbsp;&nbsp;User Name </b>: <br><br>
<b>&nbsp;&nbsp;Number </b>:<br><br>
<b>&nbsp;&nbsp;Mail Id </b>:<br><br>
<!--  <b>&nbsp;&nbsp;Address </b>:<br><br> -->
<!-- <b>&nbsp;&nbsp;Diabic or Not </b>:<br><br>
<b>&nbsp;&nbsp;Bloodpressure or Not </b>:<br><br>
<b>&nbsp;&nbsp;Smoking or Not </b>:<br><br>  -->
	</td>
	<td style="height: 300px;width: 300px;">

	

			<?php echo " ".$res['surstorename'];?><br><br>
		


			<?php echo " ".$res['uname'];?><br><br>
		


			<?php echo " ".$res['contactno'];?><br><br>
		


			<?php echo " ".$res['email'];?><br><br>
		


			<!-- <?php echo " ".$res['address'];?><br><br> -->
		


		<!-- 	<?php echo " ".$res['isdiabic'];?><br><br>
		


			<?php echo " ".$res['bloodpressure'];?><br><br> 
		

			<?php echo " ".$res['issmoking'];?><br>  -->
		
	</td>
	
</tr>

<?php
$email=$res['email'];
		}
?>
</table>
<!-- <?php
echo "<a class='btn btn-info' href=editpro.php>EDIT YOUR PROFIL</a>";
?> -->
	


<?php 
	include_once("fotter.php");
?>