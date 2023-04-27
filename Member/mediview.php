<?php
session_start();
include_once("hader.php");
?>


<div class="page-header">
							<h1>
								Medicine Order Details 
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
		$q="Select * from memberorderdetail where memid='$memid'";
		
		$qry=$cnn->query($q);
		$str="<table class='table  table-bordered table-hover'><tr><th>Medicine Image</th><th>Medicine Type</th><th>Medicine Name</th><th>Price</th><th>Quantity</th><th>Price As Quantity</th><th>Status</th><th>Remove Order</th>";


		while($res=$qry->fetch_assoc())
		{
			$a=$res["Isnew"];
			if ($a=='Yes')
			{
				$b="Delivered";
			}
			else
			{
				$b="Pending";
			}
			$str.="<tr><td><img src='medpic/".$res["Mimg"]."' height='100px' width='100px'></td><td>".$res["Mtype"]."</td><td>".$res["Mname"]."</td><td>".$res["Price"]."<td>".$res["Qty"]."<td>".$res["PQ"]."</td> 
				<td>$b</td>
				<Td><a
				href='de.php?Id=".$res["omid"]."'> <i class='ace-icon fa fa-trash-o bigger-120'></i></a> </td></tr>";
			$x=$x+$res["PQ"];
		}

		// $str.="</table><Br> Total = $x";


		echo $str;
	    ?>
		</div>
	

		

	<?php
// if(isset($_POST["btnsubmit"]))
// {
// 	$x=0;
// 	$memid=$_SESSION["memberid"];
// 		$cnn=mysqli_connect("localhost","root","","careathome");
// 		$q="Select * from memberorderdetail where Isnew='No' and memid='$memid'";
// 		$qry=$cnn->query($q);
// 		$str="<table class='table  table-bordered table-hover'><tr><th>Medicine Image</th><th>Medicine Type</th><th>Medicine Name</th><th>Price</th><th>Quantity</th><th>Price As Quantity</th>";


// 		while($res=$qry->fetch_assoc())
// 		{
// 			$str.="<tr><td><img src='medpic/".$res["Mimg"]."' height='100px' width='100px'></td><td>".$res["Mtype"]."</td><td>".$res["Mname"]."</td><td>".$res["Price"]."<td>".$res["Qty"]."<td>".$res["PQ"]."</td></tr>";
// 			$x=$x+$res["PQ"];
// 					}
// 		$str.="</table><Br> Total = $x";

// echo $str;
// }

?>

<!-- <form method="post"> -->
<!-- <input type="submit" name="btnsubmit" value="Your Confirm Order"> -->
<!-- </form> -->

<?php
include_once("fotter.php");
?>