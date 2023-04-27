<?php
session_start();
include_once("hader.php");
?>


<div class="page-header">
							<h1>
								Medical Store
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>

	<div style="overflow: scroll;">
		<?php
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry=$cnn->query("Select * from medical_store");
		$str="<table class='table  table-bordered table-hover'><tr><th>medicalstorename</th><th>contact</th><th>email</th><th>uname</th></th><th>dateofreg</th><th>dateofl</th><th>Edit</th><th>Delete</th></tr>";


		while($res=$qry->fetch_assoc())
		{
			$str.="<tr><td>".$res["medicalstorename"]."</td><td>".$res["contact"]."</td><td>".$res["email"]."</td><td>".$res["uname"]."</td><td>".$res["dateofreg"]."</td><td>".$res["dateofl"]."</td><td><a href='medicalstoreupdate.php?Id=".$res["medistoid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><Td><a onclick='return Confirm_Delete()' href='medicalstoredelete.php?Id=".$res["medistoid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
					}

		$str.="</table>";


		echo $str;
		?>
	</div><br>
	
				<div class="hidden-sm hidden-xs btn-group">
															<a class="btn btn-xs btn-info" href='medicalstoreinsert.php'>
																Insert
																<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
															</a>
														</div>


<script>
	function Confirm_Delete()
	{


	var x=confirm("Are You sure you want to delete");
	if(x)
	{
		return true;
	}
	else
	{
		return false;
	}
}
	</script>

		
		
<?php
include_once("fotter.php");
?>