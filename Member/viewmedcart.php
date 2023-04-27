<?php
session_start();
include_once("hader.php");
$memid=$_SESSION["memberid"];
echo $memid;
?>


<div class="page-header">
							<h1>
								Medicine Cart
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>
						<div style="overflow:scroll;">
		<?php
		$x;
		$cnn=mysqli_connect("localhost","root","","careathome");
		$q="Select * from med_cart ";
		$qry=$cnn->query($q);
		// echo $q;
		$str="<table class='table  table-bordered table-hover'><tr><th>Medicine Image</th><th>Medicine Name</th><th>Medicine Type</th><th>Price</th><th>Quantity</th><th>Total</th><th>Edit</th><th>Delete</th>";
		$a='medpic/';
		$x=0;
		while($res=$qry->fetch_assoc())
		{
			$str.="<tr><td><img src='medpic/".$res["Mimg"]."' height='100px' width='100px'></td><td>".$res["Mname"]."</td><td>".$res["Mtype"]."</td><td>".$res["Price"]."<td>".$res["Qty"]."<td>".$res["PQ"]."</td><td><a  
				href='mediupdate.php?Id=".$res["Tid"]."'> <i class='ace-icon fa fa-pencil bigger-120'></i></a></td> 
				<Td><a
				href='deletetmep.php?Id=".$res["Tid"]."'> <i class='ace-icon fa fa-trash-o bigger-120'></i></a> </td></tr>";
				$x=$x+$res["PQ"];
					}

		$str.="</table><br> Total: $x";


		echo $str;
		?>
		<form method="post">
			<center>
		<input type="submit" name="order" value="ORDER" >
		<!-- <br>
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=payments@stevengould.org&item_name=CleanUp!&no_shipping=1&amount={$x}">Pay</a> -->
 
	</center>
		</form>
	</div>
	<?php
		if(isset($_POST["order"]))
		{
			$dateoforder=date('Y-m-d');
			$memid=$_SESSION["memberid"];
			$medid=$_GET["Id"];
			// echo $medid;
			$qo="INSERT INTO medicalorder(dateoforder,memid,medid) VALUES ('$dateoforder','$memid','$medid')";
			$qeo=$cnn->query($qo);
			// echo $qo;

			$q1="Select max(orderid) as orderid from medicalorder";
			$qeo1=$cnn->query($q1);
			$row1=$qeo1->fetch_assoc();
			$oid=$row1["orderid"];

			$qet="select * from  med_cart";
			$qeot=$cnn->query($qet);
			while ($res=$qeot->fetch_assoc())
		 	{
		 		$Tid=$res["Tid"];
		 		$meid=$res["Mid"];
		 		$mtype=$res["Mtype"];
		 		$medname=$res["Mname"];
		 		$price=$res["Price"];
		 		$medimg=$res["Mimg"];
		 		$qty=$res["Qty"];
		 		$pq=$res["PQ"];
		 		
		 		// $qry="Insert into memberorderdetail(orderid,memid,medname,price,medimg,qty,pq) values('$oid','$memid','$medname','$price','$medimg','$qty','$pq')";
		 		$qry="INSERT INTO memberorderdetail(orderid,medistoid,memid,Mid,Mtype,Mname,Price,Mimg,Qty,PQ,Isnew) VALUES ('$oid','15','$memid','$meid','$mtype','$medname','$price','$medimg','$qty','$pq','Yes')";

		 		// echo '<br>'.$qry;
			$qrye=$cnn->query($qry);

		 	}

		 	$qryot="Delete from med_cart";
		 	// $qot=;
			$qot=$cnn->query($qryot);

			echo "<script>location.href='thankspage.php'</script>";

		}
	?>
				
<!-- medicicalorder -->
 <!-- orderid,dateoforder,memberid -->
 <!-- orderdetail -->
  <!-- omid,orderid,Mid,Mname,Price,Mimg,Qty,PQ -->

<?php
include_once("fotter.php");
?>