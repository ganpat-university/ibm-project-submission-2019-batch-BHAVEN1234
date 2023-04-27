<?php
session_start();
include_once("hader.php");
?>


<div class="page-header">
							<h1>
								Manage Area
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>

<div name="table" style="overflow: scroll;">
		
		<?php
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry=$cnn->query("Select * from area_master");
		$str="<table class='table  table-bordered table-hover'><tr><th> areaname </th><th> Edit </th><th> Delete </th></tr>";


		while($res=$qry->fetch_assoc())
		{
			$str.="<tr><td>".$res["areaname"]."</td><td><a	href='area_masterupdate.php?Id=".$res["areaid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><Td><a onclick='return Confirm_Delete()' href='area_masterdelete.php?Id=".$res["areaid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
		}

		$str.="</table>";

		echo $str;
		?>
</div><br>
			<div class="hidden-sm hidden-xs btn-group"><div class="col-sm-9">
					<a class='btn btn-xs btn-info'	href='area_masterinsert.php'>
						Insert <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
					</a>
			</div></div>



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