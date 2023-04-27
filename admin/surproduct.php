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

<div name="table" style="overflow: scroll;">
		<?php
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry=$cnn->query("select * from surproduct");
		$str="<table class='table  table-bordered table-hover'><tr><th> surgical_product_id </th><th> surgical_store_id </th><th> surgical_product_name </th><th> surgical_product_description </th><th> selling_price </th><th> surgical_product_img </th><th> Rent_price </th><th> Rent_duration </th><th> deposit </th><th> stock </th><th> Edit </th><th> Update </th></tr>";


		while($res=$qry->fetch_assoc())
		{
			$str.="<tr><td>".$res["surproid"]."</td><td>".$res["surid"]."</td><td>".$res["surproname"]."</td><td>".$res["surprodec"]."</td><td>".$res["selling_price"]."</td><td>".$res["surproimg"]."</td><td>".$res["rentpri"]."</td><td>".$res["rentdur"]."</td><td>".$res["deposit"]."</td><td>".$res["stock"]."</td><td><a class='btn btn-xs btn-info'	href='surproductupdate.php?Id=".$res["surproid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><Td><a class='btn btn-xs btn-danger' href='surproductdelete.php?Id=".$res["surproid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
		}

		$str.="</table>";

		echo $str;
		?>
</div><br>
			<div class="hidden-sm hidden-xs btn-group"><div class="col-sm-9">
					<a class='btn btn-xs btn-info'	href='surproductinsert.php'>
						Insert
						<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
					</a>
			</div></div>



<?php
include_once("fotter.php");
?> 