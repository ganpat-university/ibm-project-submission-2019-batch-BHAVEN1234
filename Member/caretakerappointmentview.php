<?php
session_start();
include_once("hader.php");
$memid=$_SESSION["memberid"];
?>


<div class="page-header">
							<h1>
								Booking Of Caretakers
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
										
								</small>
							</h1>
						</div>

			<div style="overflow:scroll;">

		<?php
		
		// echo $memid;
		//$caretkrid=$_GET["Id"];
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qes="Select * from caretakerappointment,caretaker_master where caretakerappointment.memid=$memid and caretakerappointment.caretkrid=caretaker_master.caretkrid";
		// $q="Select doctorappointmentid,docfname,doclname,dateofappointment,appointmenttime,appointmentdetails,Isconform,memid from doctorappointment,doctor where memid=$memid and doctorappointment.doctorid=doctor.doctorid";
		// echo $qes;
		
		$qry=$cnn->query($qes);

		$str="<table class='table  table-bordered table-hover'><tr><th>CareTaker Image</th><th>Caretaker Name</th><th>Contact</th><th>Appointment From Date</th><th>Appointment To Date</th><th>Appointment Time Start</th><th>Appointment Time End</th><th>Appointment Reson</th><th>Appointment Conform</th><th>Delete</th>";


		while($res=$qry->fetch_assoc())
		{
			// $str.="<tr><td>".$res["caretakename"]."</td><td>".$res["caretakercontact"]."</td><td>".$res["fromdate"]."</td><td>".$res["todate"]."</td><td>".$res["timestart"]."</td><td>".$res["timeend"]."</td><td>".$res["appointmentdetails"]."</td><td>".$res["isconform"]."</td><td><a href='caretakerappoiedit.php?Id=$caretkrtid]'> <i class='ace-icon fa fa-pencil bigger-120'></i></a></td><Td><a onclick='return conform_delete' href='caretakerappoidelete.php?Id=".$res["caretkrtid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a> </td></tr>";

			$str.="<tr><td><img src='img/".$res["caretakepic"]."' height='100px' width='100px'></td><td>".$res["caretakename"]."</td><td>".$res["caretakercontact"]."</td><td>".$res["fromdate"]."</td><td>".$res["todate"]."</td><td>".$res["timestart"]."</td><td>".$res["timeend"]."</td><td>".$res["appointmentdetails"]."</td><td>".$res["isconfirm"]."</td>
			<td><a href='caretakerdel.php?Id=".$res["caretakerappointmentid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
		
		}

		echo $str;
		?>
	</div>
	<script>
			function conform_delete()
			{
				if(x)
				{
					return true;

				}
				else
				{
					return false;
				}
			}
		</script>
	
				
		

<?php
include_once("fotter.php");
?>	