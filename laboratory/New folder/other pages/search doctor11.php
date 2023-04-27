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
</div>
<div style="overflow: scroll;">


					<?php

					$id = $_GET["Id"];
					// echo $id;	


					$qry="select * from doctorappointment where memid = '$id'";
					$con=mysqli_connect("localhost","root","","careathome");
					$fire=$con->query($qry);

					$str="<table class='table  table-bordered table-hover'><tr><th>appointment_reg</th><th>date of appointment </th><th> Appointment time </th><th> appointment details </th><th> appointment is new?  </th><th> appointment is confirm? </th><th> appointment is rejected </th><th> rejection reason </th><th> upload prescription </th></tr>";

					

				while($res=$fire->fetch_assoc())
				{

					$str.="<tr> <td>".$res["appointment_reg"]."</td><td>".$res["dateofappointment"]."</td> <td>".$res["appointmenttime"]."</td> <td>".$res["appointmentdetails"]."</td> <td>".$res["isnew"]."</td> <td>".$res["isconfirm"]."</td> <td>".$res["isreject"]."</td> <td>".$res["rejectresion"]."</td><td><a class='btn btn-xs btn-info'href=' upload prescription.php?Id=".$res["memid"]."'><i class='ace-icon fa fa-pencil bigger-120'></a></i>
					</td>";
				}

					$str.="</table>";
					echo $str;

					?>

</div>



	<?php
include_once("fotter.php");
?>