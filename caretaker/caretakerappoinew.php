<?php
session_start();
include_once("hader.php");
$caretkrid=$_SESSION["caretkrid"];
// echo $caretkrid;
?>


<div class="page-header">
              <h1>
                New Appointments
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  
                </small>
              </h1>
            </div>
 <?php
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry="Select * from caretakerappointment,member_master where caretakerappointment.memid=member_master.memid and caretkrid='$caretkrid'";
		//echo $qry;
		$qes=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th> Member First name </th><th> Member Last name </th><th> Start Date </th><th>End Date </th><th>Start Time </th><th>End Time </th><th>Appointment Details</th><th>Appointment Is</th></tr>";
		

		while($res=$qes->fetch_assoc())
		
		{
		$x=$res["memid"];
				$str.="<tr><td><a href='memberdetails.php?Id=".$x."'>".$res["memfname"]."</td><td>".$res["memlname"]."</td><td>".$res["fromdate"]."</td><td>".$res["todate"]."</td><td>".$res["timestart"]."</td><td>".$res["timeend"]."</td><td>".$res["appointmentdetails"]."</td><td>".$res["isconfirm"]."</td></tr>";
			
		}

		$str.="</table>";

		echo $str;
		?>

            <?php
include_once("fotter.php");
?>