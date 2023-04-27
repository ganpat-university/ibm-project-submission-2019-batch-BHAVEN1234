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
	<div class="hidden-sm hidden-xn btn-group">
		<a class="btn btn-xs btn-success" href='medicineinsert.php'>
	  CLIK FOR INSERT<i class="ace-icon fa fa-check bigger-120"></i>
		</a>
	<br><br>

	<div name="table" style="overflow: scroll;">					
	<?php
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry=$cnn->query("Select * from medicine");
		$str="<table class='table  table-bordered table-hover'><tr><th>MEDICINE ID</th><th>MEDICINE TYPE</th><th>medicine name</th><th>UPDATE</th><th>DELETE</th></tr>";

       
		while($res=$qry->fetch_assoc())
		{
			$str.="<tr><td>".$res["medid"]."</td><td>".$res["medtype"]."</td><td>".$res["medname"]."</td><td>
			<a href='medicineupdate.php?Id=".$res["medid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td>
			<a href='medicinedelete.php?Id=".$res["medid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";

  
		}

		$str.="</table>";

		echo $str;

		?>
	</div>
	<?php
include_once("fotter.php");
?>