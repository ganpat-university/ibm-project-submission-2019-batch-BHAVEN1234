<?php
session_start();
include_once("hader.php");
$medistoid=$_SESSION["medical_storeid"];
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
		$qry="Select * from memberorderdetail,member_master where Isnew='Yes' and memberorderdetail.memid=member_master.memid and memberorderdetail.medistoid='$medistoid'";
		// echo $qry;
		$qes=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th> Member Name</th><th> Medicine Name </th><th>Quantity</th><th>Price</th><th>PQ</th></tr>";
		

		while($res=$qes->fetch_assoc())
		
		{
		$x=$res["memid"];
				$str.="<tr><td><a href='memberdetails.php?Id=".$x."'>".$res["memfname"]." ".$res["memlname"]."</td><td>".$res["Mname"]."</td><td>".$res["Qty"]."</td><td>".$res["Price"]."</td><td>".$res["PQ"]."</td></tr>";
			
		}

		$str.="</table>";

		echo $str;
		?>

            <?php
include_once("fotter.php");
?>