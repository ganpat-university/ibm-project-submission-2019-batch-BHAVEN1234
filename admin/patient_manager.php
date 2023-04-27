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
		$qry=$cnn->query("Select * from patient_manager");
		$str="<table class='table  table-bordered table-hover'><tr><th> patientmanaid </th><th> regid </th><th> patientmananame </th>
		<th> contactno </th><th> email </th><th> gender </th><th> likecounter </th><th> verified </th><th> uname </th><th> pwd </th><th> isactive </th><th> Edit </th><th> Delete </th></tr>";


		while($res=$qry->fetch_assoc())
		{
			$str.="<tr><td>".$res["patientmanaid"]."</td><td>".$res["regid"]."</td><td>".$res["patientmananame"]."</td>			<td>".$res["contactno"]."</td><td>".$res["email"]."</td><td>".$res["gender"]."</td><td>".$res["likecounter"]."</td><td>".$res["verified"]."</td><td>".$res["uname"]."</td><td>".$res["pwd"]."</td><td>".$res["isactive"]."</td><td><a class='btn btn-xs btn-info'	href='patient_managerupdate.php?Id=".$res["patientmanaid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><Td><a class='btn btn-xs btn-danger' href='patient_managerdelete.php?Id=".$res["patientmanaid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
		}

		$str.="</table>";

		echo $str;
		?>
</div><br>
			<div class="hidden-sm hidden-xs btn-group"><div class="col-sm-9">
					<a class='btn btn-xs btn-info'	href='patient_managerinsert.php'>
						Insert <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
					</a>
			</div></div>


	
<?php
include_once("fotter.php");
?>