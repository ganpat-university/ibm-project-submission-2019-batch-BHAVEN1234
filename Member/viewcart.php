<?php
session_start();
include_once("hader.php");
?>


<div class="page-header">
							<h1>
								Surgical Product Details
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
		$q="Select * from  tempcart where memid='$memid'";
		$qry=$cnn->query($q);
		$str="<table class='table  table-bordered table-hover'><tr><th>Surgical Product  Image</th><th>Surgical Product  Name</th><th>Price</th><th>Quantity</th><th>Price As Quantity</th><th>Status</th><th>Delete</th>";


		while($res=$qry->fetch_assoc())
		{
			$a=$res["Isconform"];
			if ($a=='Yes')
			{
				$b="Delivered";
			}
			else
			{
				$b="Pending";
			}

			$str.="<tr><td><img src='img/".$res["img"]."' height='100px' width='100px'></td><td>".$res["proname"]."</td><td>".$res["price"]."<td>".$res["item_quantity"]."<td>".$res["total"]."</td><td>$b</td>
			
				<Td><a
				href='surigprodel.php?Id=".$res["tempid"]."'> <i class='ace-icon fa fa-trash-o bigger-120'></i></a> </td></tr>";
			$x=$x+$res["total"];
					}

		// $str.="</table><Br> Total = $x";


		echo $str;
		?>
		</div>
		<!-- <form method="post"> -->
			<!-- <input type="submit" name="btnsubmit" value="Your Confirm Order"> -->
		<!-- </form> -->
	
	<?php
// if(isset($_POST["btnsubmit"]))
// {
// 	$x=0;
// 	$memid=$_SESSION["memberid"];
// 		$cnn=mysqli_connect("localhost","root","","careathome");
// 		$q="Select * from tempcart where Isconform='Yes' and memid='$memid'";
// 		//echo $q;
// 		$qry=$cnn->query($q);
// 		$str="<table class='table  table-bordered table-hover'><tr><th>Surgical Product  Image</th><th>Surgical Product  Name</th><th>Price</th><th>Quantity</th><th>Price As Quantity</th>";


// 		while($res=$qry->fetch_assoc())
// 		{
// 			$str.="<tr><td><img src='img/".$res["img"]."' height='100px' width='100px'></td><td>".$res["proname"]."</td><td>".$res["price"]."<td>".$res["item_quantity"]."<td>".$res["total"]."</td> 
// 				</tr>";
// 			$x=$x+$res["total"];
// 					}

// 		$str.="</table><Br> Total = $x";


// 		echo $str;
// }

	?>

	
<?php
include_once("fotter.php");
?>
			