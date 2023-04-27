<?php
session_start();
include_once("hader.php");
$surid=$_SESSION["surgical_storeid"];
?>


<div class="page-header">
              <h1>
                Confirm Order
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  
                </small>
              </h1>
            </div>
 <?php

		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry="Select * from tempcart,member_master where Isconform='Yes' and  tempcart.memid=member_master.memid and surgid=$surid";
		//echo $qry;
		$qes=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th> Member First name </th><th> Member Last name </th><th>Product Name </th><th>Quantity </th><th>Confrim Order</th><th>Price</th></tr>";
		

		while($res=$qes->fetch_assoc())
		
		{
		$x=$res["memid"];
				$str.="<tr><td><a href='memberdetails.php?Id=".$x."'>".$res["memfname"]."</td><td>".$res["memlname"]."</td><td>".$res["proname"]."</td><td>".$res["item_quantity"]."</td><td>".$res["Isconform"]."</td><td>".$res["price"]."</td></tr>";
			
		}

		$str.="</table>";

		echo $str;
		?>

            <?php
include_once("fotter.php");
?>