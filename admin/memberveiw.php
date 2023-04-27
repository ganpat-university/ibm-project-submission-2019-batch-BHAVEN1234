<?php
session_start();
include_once("hader.php");
?>


<div class="page-header">
							<h1>
								Member
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>

<div style="overflow:scroll;">
		<?php
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry=$cnn->query("Select * from member_master");
		$str="<table class='table  table-bordered table-hover'><tr><th>Member Name</th><th>Contact</th><th>Email</th><th>User Name</th></th><th>Register Date</th><th>Last Visit</th><th>Gender</th><th>Smoking</th><th>Diabic</th><th>Bloodpressure</th><th>Edit</th><th>Delete</th></tr>";


		while($res=$qry->fetch_assoc())
		{
			$str.="<tr><td>".$res["memfname"]."</td><td>".$res["contact"]."</td><td>".$res["email"]."</td><td>".$res["uname"]."</td>><td>".$res["doreg"]."</td><td>".$res["dateoflv"]."</td><td>".$res["gender"]."</td><td>".$res["issmoking"]."</td><td>".$res["isdiabic"]."</td><td>".$res["bloodpressure"]."</td><td><a href='memberupdate.php?Id=".$res["memid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><Td><a onclick='return Confirm_Delete()'
				href='memberdelete.php?Id=".$res["memid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
					}

		$str.="</table>";


		echo $str;
		?>
	</div><br>
	
				<div class="hidden-sm hidden-xs btn-group">
															<a class="btn btn-xs btn-info" href='memberinsert.php'>
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