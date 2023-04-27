<?php
session_start();
include_once("hader.php");
$surid=$_SESSION["surgical_storeid"];
// echo $surid;
?>


<div class="page-header">
              <h1>
                New Orders
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  
                </small>
              </h1>
            </div>
 <?php

		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry="Select * from tempcart,member_master where tempcart.memid=member_master.memid and surgid=$surid";
		echo $qry;
		$qes=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th> Member Name </th><th> Product Name </th><th>Buy or Rent</th><th>Quantity</th><th>Price</th></tr>";
		

		while($res=$qes->fetch_assoc())
		
		{
		$x=$res["memid"];
				$str.="<tr><td><a href='memberdetails.php?Id=".$x."'>".$res["memfname"]." ".$res["memlname"]."</td><td>".$res["proname"]."</td><td></td><td>".$res["item_quantity"]."</td><td>".$res["price"]."</td></tr>";
			
		}

		$str.="</table>";

		echo $str;
		?>

            <?php
include_once("fotter.php");
?>