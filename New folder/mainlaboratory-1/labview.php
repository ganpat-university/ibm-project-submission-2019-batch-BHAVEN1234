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
		$qry=$cnn->query("Select * from lab_appo");
		 $str="<table class='table  table-bordered table-hover'><tr><th>labname</th><th>Appointmentdate</th>><th>Appointmenttime</th><th>Appointment Conform(Yes/No)</th><th>Test Type</th><th>Edit</th><th>Delete</th>";


						while($res=$qry->fetch_assoc())
						{
$str.="<tr><td>".$res["labname"]."</td><td>".$res["Appointmentdate"]."</td><td>".$res["Appointmenttime"]."</td><td>".$res["Isconform"]."</td> <td>".$res["labtest_name"]."</td>
			<td><a class='btn btn-xs btn-info'  
				href='labedit.php?Id=".$res["appoid"]."'> <i class='ace-icon fa fa-pencil bigger-120'></i></a></td> 
				<Td><a class='btn btn-xs btn-danger'
				href='labdelete.php?Id=".$res["appoid"]."'> <i class='ace-icon fa fa-trash-o bigger-120'></i></a> </td></tr>";
						}
		echo $str;
		?>
	</div>
	
				
		

						<?php
include_once("fotter.php");
?>