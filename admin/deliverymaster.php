<?php
session_start();
include_once("hader.php");
?>


<div class="page-header">
							<h1>
								Delivery Person
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>

<div name="table" style="overflow: scroll;">
		<?php
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry=$cnn->query("Select * from delivery_master");
		$str="<table class='table  table-bordered table-hover'><tr><th>deliveryid</th><th>sturid</th><th>testid</th><th>madid</th><th>deliverypername</th><th>email</th><th>contact</th><th>uname</th><th>pwd</th><th>deliverperpic</th><th>ratings</th><th>edit</th><th>delete</th></tr>";


		while($res=$qry->fetch_assoc())
		{
			$str.="<tr><td>".$res["deliveryid"]."</td><td>".$res["sturid"]."</td><td>".$res["testid"]."</td><td>".$res["madid"]."</td><td>".$res["deliverypername"]."</td><td>".$res["email"]."</td><td>".$res["contact"]."</td><td>".$res["uname"]."</td><td>".$res["pwd"]."</td><td>".$res["deliveryperpic"]."</td><td>".$res["ratings"]."</td><td><a class='btn btn-xs btn-info'	href='deliverymasterupdate.php?Id=".$res["deliveryid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><Td><a class='btn btn-xs btn-danger' href='deliverymasterdelete.php?Id=".$res["deliveryid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
		}

		$str.="</table>";

		echo $str;
		?>
	</div><br>
		<div class="hidden-sm hidden-xs btn-group">
															<a class="btn btn-xs btn-info" href='deliverymasterinsert.php'>
																Insert
																<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
															</a>
														</div>
	<?php
include_once("fotter.php");
?>