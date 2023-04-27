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

<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40">Image</th>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					
						$memid=$_SESSION['memberid'];

                         $connect = mysqli_connect("localhost", "root", "", "careathome");
                         $q="select * from tempcart where memid='$memid'";
                         // echo $q;
						$selectq=mysqli_query($connect,$q) or die(mysqli_error($connect));
						
						while($value1=mysqli_fetch_array($selectq))
						{


							$tempid=$value1["tempid"];
							
                       
			              
 	
                          // $total=0;
							// $total = $total + ($value1["item_quantity"] * $value1["item_price"]);
						
					?>
                           
                            <?php
                            echo "<tr>"."<br>";
                            // $img=$_SESSION['img'];
                            ?>
                            <td><img src="img1/<?php echo $value1['img'];?>" height=100px width=200px></td>
							<!-- img1/<?php echo $value1['img'];?> -->
							<td> <?php echo $value1['proname'];?></td>
							<td> <?php echo $value1['item_quantity'];?></td>
							
							<td> <?php echo $value1['price'];?></td>
					        <td> <?php echo $value1['total'];?></td>
                            <td><a href='de.php?Id=<?php echo $tempid;  ?>'><i class='ace-icon fa fa-trash-o fa-2x icon-only'></a></i></td>
					        
					        </tr>
							
					<?php
							}
					?>
				 <?php
					// if(!empty($_SESSION["shopping_cart"]))
					// {
					// 	$total = 0;
					// 	foreach($_SESSION["shopping_cart"] as $keys => $values)
					// 	{
				?>
				 		<tr>
						<td><?php// echo number_format($value1["item_quantity"] * $value1["item_price"], 2);?></td>
						
					</tr>
				
<?php
include_once("fotter.php");
?>
			