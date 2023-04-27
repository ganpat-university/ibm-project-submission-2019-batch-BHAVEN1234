<?php
session_start();
include_once("hader.php");
?>


<div class="page-header">
              <h1>
                Confirm Appointments
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  
                </small>
              </h1>
            </div>
 <?php

		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry="Select * from lab_appo,member_master where Isnew='No' and lab_appo.memid=member_master.memid";
		// echo $qry;
		$qes=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th> Member Name </th><th> Appointment Date is </th><th>Appointment Time is </th><th> New Appointment</th></tr>";
		

		while($res=$qes->fetch_assoc())
		
		{
			$x=$res["memid"];
		
				$str.="<tr><td><a href='memberdetails.php?Id=".$x."'>".$res["memfname"]." ".$res["memlname"]."</a></td><td>".$res["Appointmentdate"]."</td><td>".$res["Appointmenttime"]."</td><td>".$res["Isnew"]."</td></tr>";
			
		}

		$str.="</table>";

		echo $str;
		?>

            <?php
include_once("fotter.php");
?>