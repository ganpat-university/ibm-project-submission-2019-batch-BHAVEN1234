<?php
session_start();
include_once("hader.php");
?>
<head>
<!-- 	<style type="text/css">
		.disabledbutton {
    pointer-events: none;
    opacity: 0.4;
}
	</style> -->
</head>
<div class="page-header">
							<h1>
								Appointments
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>



<?php
$docid=$_SESSION["docid"];
		$cnn=mysqli_connect("localhost","root","","careathome");

		$qry="Select * from doctorappointment,member_master where doctorappointment.doctorid=$docid and doctorappointment.memid=member_master.memid";
		// echo $qry;
		$qes=$cnn->query($qry);

		

		
?>
	<table >
<?php

		while($res=$qes->fetch_assoc())
		{
		
			$Isconform=$res['Isconform'];
			$bookingclass="";

		if ($res['Isconform'] == "")
		{
			$c="white";
			$text="Book";
		}
		elseif ($res['Isconform'] == "yes")
		{
			$c="Green";
			$bookingclass="btn disabled";
			$text="Already Booked";
			// $("book").addClass("disabledbutton");
		}
		else
		{
			$c="red";
			$bookingclass="btn disabled";
			$text="Rejected";
			// $("book").addClass("disabledbutton");
		}
			
		


?>

<tr>
	
	<td style="height: 200px;width: 200px;">
		<img style="height:100px;width: 100px;" src="<?php echo '../mempic/'.$res['mempic']; ?>">
	</td>
	
	<td style="height: 200px;width: 150px;"><center>
		<a href="memberdetails.php?Id=<?php echo $res['memid'];?>"><?php echo $res['memfname']." ".$res['memlname'];?></a><br></center>
	</td>

	<!-- <td style="height: 200px;width: 50px;">
		
	</td> -->

	<td style="height: 200px;width: 150px;"><center>
		<?php echo $text;?><br>
		<div name="book"><a class="<?php echo $bookingclass; ?>" href="afterappontmet.php?Id=<?php echo $res['doctorappointmentid'];?> & name=<?php echo $res['memfname']." ".$res['memlname'];?>"><i class="ace-icon glyphicon glyphicon-time"></i></a></div>
	</center>
	</td>

	<td style="height: 200px;width: 200px;border-color: black;"><center>
		<div style=" background-color:  <?php echo $c;?>; height: 50px;width: 50px;"></div>
	</center>
	</td>
</tr>

<?php
		}
?>
		</table>


	
<?php
include_once("fotter.php");
?>