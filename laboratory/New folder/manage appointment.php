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

<div name="table" style="overflow: scroll;">
		
		<?php
		$cnn=mysqli_connect("localhost","root","","careathome");

		$qry="Select uname,appointment_reg,dateofappointment,dateofappointment,appointmenttime,appointmentdetails,isnew,isconfirm,isreject,rejectresion from doctorappointment,member_master where doctorappointment.memid=member_master.memid";

		$qes=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th> Member Username </th><th> Appointment Registration Date </th><th> Date of Appointment </th><th> Appointment Time </th><th> Appointment Details </th><th> Appointment is new? </th><th>Confirm</th><th>Reject</th><th>Rejectresion Resion</th></tr>";
		

		while($res=$qes->fetch_assoc())
		{
		
		$str.="<tr><td>".$res["uname"]."</td><td>".$res["appointment_reg"]."</td><td>".$res["dateofappointment"]."</td><td>".$res["appointmenttime"]."</td><td>".$res["appointmentdetails"]."</td><td>".$res["isnew"]."</td><td>".$res["isconfirm"]."</td><td>".$res["isreject"]."</td><td>".$res["rejectresion"]."</td></tr>";
			}

		$str.="</table>";
  
		echo $str;
		?>
</div><br>
	
<?php
include_once("fotter.php");
?>