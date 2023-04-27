<?php
session_start();
include_once("hader.php");
?>


<div class="page-header">
							<h1>
								Your Doctor's Appointment
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>
						<div style="overflow:scroll;">
		<?php
		$x=0;
		$memid=$_SESSION["memberid"];
		$cnn=mysqli_connect("localhost","root","","careathome");
		$q="Select * from doctorappointment,doctor where memid=$memid and doctorappointment.doctorid=doctor.doctorid";
		$qry=$cnn->query($q);
		$str="<table class='table  table-bordered table-hover'><tr><th>Doctor Image</th><th>Doctor Name</th><th>Appointmentdate</th><th>Appointmenttime</th><th>Delete</th>";


		while($res=$qry->fetch_assoc())
			{

			$str.="<tr><td><img src='docpic/".$res["docpic"]."' height='100px' width='100px'></td><td>".$res["docfname"]."&nbsp;".$res["doclname"]."</td><td>".$res["dateofappointment"]."</td><td>".$res["appointmenttime"]."</td>
			
				<Td><a onclick='return conform_delete'
				href='doctorappoidelete.php?Id=".$res["doctorappointmentid"]."'> <i class='ace-icon fa fa-trash-o bigger-120'></i></a> </td></tr>";
		
		}

		echo $str;
		?>
		</div>
		


				
		

						<?php
include_once("fotter.php");
?>