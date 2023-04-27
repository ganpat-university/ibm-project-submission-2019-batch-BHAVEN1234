<?php
session_start();
include_once("hader.php");
?>


<div class="page-header">
							<h1>
		 						Lab
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>
		
	<div name="table" style="overflow: scroll;">					
	<?php
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry=$cnn->query("Select * from lab");
		$str="<table class='table  table-bordered table-hover'><tr><th>LABORATORY</th><th>CONTACT</th><th>USER NAME</th><th>DATE OF START</th><th>LAST ACTIVE</th><th>ADDRSS</th><th>EMAIL</th><th>UPDATE</th><th>DELETE</th></tr>";

       
		while($res=$qry->fetch_assoc())
		{
			$str.="<tr><td>".$res["labname"]."</td><td>".$res["contactno"]."</td><td> ".$res["uname"]."</td><td>".$res["dateofsrt"]."</td><td>".$res["dateodact"]."</td><td>".$res["address"]."</td><td>".$res["email"]."</td><Td>
			<a href='labupdate.php?Id=".$res["labid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td>
			<a onclick='return Confirm_Delete()' href='labdelete.php?Id=".$res["labid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";

  
		}

		$str.="</table>";

		echo $str;
		?>
	</div><br>
	
				<div class="hidden-sm hidden-xs btn-group">
															<a class="btn btn-xs btn-info" href='labinsert.php'>
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