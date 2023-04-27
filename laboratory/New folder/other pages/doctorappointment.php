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



<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Area Name </label>

										<div class="col-sm-9">
											
											<select name="cmbarea">
											<?php
							
											$cnn=mysqli_connect("localhost","root","","careathome");

											$result=$cnn->query("select * from area_master");			
	
											while($row=$result->fetch_assoc())
											{
												echo "<option value='".$row["areaid"]."'>".$row["areaname"]."</option>";	
											}
											
											?>
											</select>
										</div>
									</div>
									

<div class="col-md-offset-3 col-md-9">
<input type="submit" value="done" class="btn btn-info" name="btn" >
</div>


</form>
<?php

$areaname="";
$areaid="";
$labname="";
$areaid="";
$areaname="";
if(isset($_POST["btn"]))
{

$areaid=$_POST["cmbarea"];
		$q="select * from doctor where areaid=$areaid";
			

			$con=mysqli_connect("localhost","root","","careathome");
			$res=$con->query($q);
		

			while($ro=$res->fetch_assoc())
		{
				?>
			
			<div class="doctordetails" style=" height: 250px;width: 1000px;background-color: lightgray;">
			<div class="doctorimg" style=" height: 100px;width: 100px;">

			<?php
			$x='pic\\'.$ro["docpic"];
			echo "<img src='$x'>";
			echo "<a class='btn btn-xs btn-info'  
			href='doctorappointment1.php?Id=".$ro["doctorid"]."' >" .$ro["docfname"]."," .$ro["doclname"]." </a> ";
			?>
		</div></div>
		<?php
		}	
}
	
		 
?>

<?php
include_once("fotter.php");
?>