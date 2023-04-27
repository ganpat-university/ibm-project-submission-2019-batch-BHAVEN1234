<?php
session_start();
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



<!DOCTYPE html>
<html>
	<head>
		<title> Shopping Cart</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
				<?php

                $q="select * from surproduct";
			    $connect = mysqli_connect("localhost", "root", "", "careathome");
				$query = "select * from surproduct where surproid='{$_SESSION['sid']}'";
				$result = mysqli_query($connect, $query);
								
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))

					{
						$surproid=$row["surproid"];
						$x=$row["img"];
						// echo 'img1/'.$x;
				?>

			<div class="col-md-4">
				<form method="post" action="suredit4.php?action=add&id=<?php echo $row["surproid"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="<?php echo 'img1/'.$x;?>"style=" height:100px; width:100px;"/> <br/>

						<h4 class="text-info"><?php echo $row["surproname"]; ?></h4>

						<h4 class="text-danger"><?php echo $row["selling_price"]; ?></h4>

						<input type="text" name="quantity" value="1" minlength="1" maxlength="1" pattern=[1,10]{1,1} class="form-control" />



						<input type="hidden" name="hidden_name" value="<?php echo $row["surproname"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["selling_price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Update"
					 />
                       <!--  <input type="submit" name="view_cart" style="margin-top:5px;" class="btn btn-success" value="View Your Cart"
					 /> -->
					  <!-- <input type="submit" name="pdc" style="margin-top:5px;" class="btn btn-success" value="Proceed To Check Out"
					 /> -->
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>

								
<?php
if(isset($_POST["add_to_cart"]))
{
	 $name=$_POST['hidden_name'];
	 $price=$_POST['hidden_price'];
	 $quantity=$_POST['quantity'];
	 $itemprice=$_POST['hidden_price'];
	 $total=$quantity*$itemprice;
	 $memid=$_SESSION["memberid"];
	 
		$q="UPDATE tempcart SET proname='$name',img='$x',price='$price',item_quantity='$quantity',total='$total' where memid='$memid'";					
	echo $q;
 	$qry=mysqli_query($connect,$q) or die(mysqli_error($connect));
 	echo("<script>location.href='viewcart.php'</script>");
 }

?>
<?php
if(isset($_POST["pdc"]))
{

	echo("<script>location.href='pur.php'</script>");
	 // $name=$_POST['hidden_name'];
	 // $price=$_POST['hidden_price'];
	 // $quantity=$_POST['quantity'];
	 // $itemprice=$_POST['hidden_price'];
	 // $tempid=$value1["tempid"];
	 // $total=0;
	 // $total = $total + ($value1["quantity"] * $value1["price"]);
 

 	// $qry=mysqli_query($connect,"insert into tempcart(proname,img,price,item_quantity,total) value('$name','$x','$price','$quantity','$total')") or die(mysqli_error($connect));
	

	
}

?>


<?php
if(isset($_POST["view_cart"]))
{
    echo("<script>location.href='viewcart.php'</script>");
}

?>
					<!-- <tr>
						<td colspan="3" align="right">Total</td>
						<td align="right"><?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr> -->
					<?php
					//}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>


<?php
include_once("fotter.php");
?>
