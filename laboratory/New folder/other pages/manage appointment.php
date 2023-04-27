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

<div style="overflow:scroll;">

<?php
		$cnn=mysqli_connect("localhost","root","","careathome");

		$qry="Select * from doctorappointment,member_master where doctorappointment.memid=member_master.memid";
		// echo $qry;
		$qes=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th>Member First Name </th><th>Member Last Name </th><th> Date of Appointment </th><th> Appointment Time </th><th> Appointment Details </th><th> Appointment is new? </th><th> Appointment Conform </th><th> Rejection Reason </th><th> View </th></tr>";
		

		while($res=$qes->fetch_assoc())
		{
		
				$str.="<tr><td>".$res["memfname"]."</td><td>".$res["memlname"]."</td><td>".$res["dateofappointment"]."</td><td>".$res["appointmenttime"]."</td><td>".$res["appointmentdetails"]."</td><td>".$res["Appointmenttype"]."</td><td>".$res["Isconform"]."</td><td>".$res["Rejectedreason"]."</td>
				<td><a class='btn btn-xs btn-info'  
				href='doctorform.php?Id=".$res["doctorappointmentid"]. "'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td></tr>";
			
		}

		$str.="</table>";

		echo $str;
		?>
	</div>
</div><br>

	
<?php
include_once("fotter.php");
?>