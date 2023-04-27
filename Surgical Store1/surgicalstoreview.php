<?php
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
						<div style="overflow:scroll;">
		<?php
		$x=0;
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry=$cnn->query("Select * from surproduct");
		$str="<table class='table  table-bordered table-hover'><tr><th>Surgical Product Image</th><th>Surgical Producat Name</th><th>Surgical Producat Details</th><th>Selling Price</th><th>Rent Price</th><th>Rent Duration</th><th>Deposit</th><th>Stock</th><th>Edit</th><th>Delete</th>";


		while($res=$qry->fetch_assoc())
		{

			$str.="<tr><td><img src='img1/".$res["img"]."' height='100px' width='100px'></td><td>".$res["surproname"]."</td><td>".$res["surprodec"]."</td><td>".$res["selling_price"]."</td><td>".$res["rentpri"]."</td><td>".$res["rentdur"]." Days</td><td>".$res["deposit"]."</td><td>".$res["stock"]."</td><td><a href='surgicalstoreupdate.php?Id=".$res["surproid"]."'> <i class='ace-icon fa fa-pencil bigger-120'></i></a></td> <Td><a href='surgicalstoredelete.php?Id=".$res["surproid"]."'> <i class='ace-icon fa fa-trash-o bigger-120'></i></a> </td></tr>";
			// $x=$x+$res["PQ"];
					}

		$str.="</table>";


		echo $str;
		?>
	</div>
	
				
		

						<?php
include_once("fotter.php");
?>