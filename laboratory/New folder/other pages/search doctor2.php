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
</div>
<div style="overflow: scroll;">


					<?php

					$id = $_GET["Id"];
					// echo $id;	


					$qry="select * from member_master where memid = '$id'";
										$con=mysqli_connect("localhost","root","","careathome");
					$fire=$con->query($qry);

					$str="<table class='table  table-bordered table-hover'><tr><th>memfname</th><th>User Name </th><th> dateoflv </th><th> contact </th><br><th> email </th><th> issmoking </th><th> isdiabic </th><th> bloodpressure </th><th> gender </th><th> address </th><th> mempic  </th><th> view </th></tr>";

					

				while($res=$fire->fetch_assoc())
				{

					$str.="<tr> <td>".$res["memfname"].".".$res["memlname"]."</td> <td>".$res["uname"]."</td> <td>".$res["dateoflv"]."</td> <td>".$res["contact"]."</td> <td>".$res["email"]."</td> <td>".$res["issmoking"]."</td> <td>".$res["isdiabic"]."</td> <td>".$res["bloodpressure"]."</td> <td>".$res["gender"]."</td>  <td>".$res["address"]."</td><td> <img src='".$res["mempic"]."'></img></td><td><a class='btn btn-xs btn-info'	href='search doctor11.php?Id=".$res["memid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td></tr>";
				}

					$str.="</table>";
					echo $str;

					?>

</div>



	<?php
include_once("fotter.php");
?>