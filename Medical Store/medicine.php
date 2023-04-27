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
						<div style="overflow:scroll;">
		<?php
		$x=0;
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry=$cnn->query("Select * from medicine_master");
		$str="<table class='table  table-bordered table-hover'><tr><th>Medicine Image</th><th>Medicine Name</th><th>Medicine Type</th><th>Price</th><th>Edit</th><th>Delete</th>";


		while($res=$qry->fetch_assoc())
		{

			$str.="<tr><td><img src='medpic/".$res["medpic"]."' height='100px' width='100px'></td><td>".$res["medinename"]."</td><td>".$res["medtype"]."</td><td>".$res["Mprice"]."</td><td><a href='medicineup.php?Id=".$res["medid"]."'> <i class='ace-icon fa fa-pencil bigger-120'></i></a></td> <Td><a href='medicinedel.php?Id=".$res["medid"]."'> <i class='ace-icon fa fa-trash-o bigger-120'></i></a> </td></tr>";
			// $x=$x+$res["PQ"];
					}

		$str.="</table>";


		echo $str;
		?>
	</div>
	
				
		

						<?php
include_once("fotter.php");
?>