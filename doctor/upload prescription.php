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
$id="";
					$id = $_GET["Id"];
					// echo $id;	


					$qry="select * from doctorappointment where memid = '$id'";
					$con=mysqli_connect("localhost","root","","careathome");
					$fire=$con->query($qry);

					$str="<table class='table  table-bordered table-hover'><tr><th>appointment_reg</th><th>date of appointment </th><th> Appointment time </th><th> appointment details </th><th> appointment is new?  </th><th> appointment is confirm? </th><th> appointment is rejected </th><th> rejection reason </th></tr>";

					

				while($res=$fire->fetch_assoc())
				{

					$str.="<tr> <td>".$res["appointment_reg"]."</td><td>".$res["dateofappointment"]."</td> <td>".$res["appointmenttime"]."</td> <td>".$res["appointmentdetails"]."</td> <td>".$res["isnew"]."</td> <td>".$res["isconfirm"]."</td> <td>".$res["isreject"]."</td> <td>".$res["rejectresion"]."</td></tr>";
			
				}

					$str.="</table>";
					echo $str;

					?>
					
<?php
					$Prescription="";
					if(isset($_POST["btnSubmit"]))
	{
		
		$Prescription=$_POST["txtpre"];
		
		//$qry="Delete from emp where eno ='$eno'";

		$qry="insert into doctorappointment (Prescription) value('$Prescription')"; 
		
		echo $qry;

		$cnn=mysqli_connect("localhost","root","","careathome");
		$fire=$cnn->query($qry);
		echo " sucessfully";



	}

	?>



</div>
<form class="form-horizontal" role="form" method="post">
	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Enter Prescription </label>

										<div class="col-sm-9">
											<textarea placeholder="Prescription" class="col-xs-10 col-sm-5" name="txtpre" required=""></textarea>
										</div>
									</div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
										<input type="submit" class="btn btn-info" name="btnSubmit">
										

											&nbsp; &nbsp; &nbsp;
											
										</div>
									</div>

</form>


	<?php
include_once("fotter.php");
?>