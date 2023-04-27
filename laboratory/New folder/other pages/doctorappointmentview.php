<?php
include_once("hader.php");
?>


<div class="page-header">
							<h1>
								Home
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>

			<div style="overflow:scroll;">

		<?php
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qes="Select doctorappointmentid,docfname,doclname,dateofappointment,appointmenttime,appointmentdetails,Isconform from doctorappointment,doctor where doctorappointment.doctorid=doctor.doctorid";
		// echo $qes;
		
		$qry=$cnn->query($qes);

		$str="<table class='table  table-bordered table-hover'><tr><th>Doctor First Name</th><th>Doctor Last Name</th><th>Appointmentdate</th><th>Appointmenttime</th><th>Appointment Reason</th><th>Appointment Conform</th><th>Booking</th><th>Discard</th></tr>";


		while($res=$qry->fetch_assoc())
		{
			$str.="<tr><td>".$res["docfname"]."</td><td>".$res["doclname"]."</td><td>".$res["dateofappointment"]."</td><td>".$res["appointmenttime"]."</td><td>".$res["appointmentdetails"]."</td><td>".$res["Isconform"]."</td>
			<td><a href='doctorappoiedit.php?Id=".$res["doctorappointmentid"]."'> <i class='ace-icon fa fa-pencil bigger-120'></i></a></td> 
				<Td><a href='doctorappoidelete.php?Id=".$res["doctorappointmentid"]."'> <i class='ace-icon fa fa-trash-o bigger-120'></i></a> </td></tr>";
		
		}

		echo $str;
		?>
	</div>
	
				
		

<?php
include_once("fotter.php");
?>