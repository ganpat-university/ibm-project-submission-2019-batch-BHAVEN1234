<?php
session_start();
include_once("hader.php");
//$memid=$_SESSION["memid"];
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
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Search By Area </label>
											

									<div class="col-sm-9">	
									<select name="ddl" class="col-xs-10 col-sm-5">
								
											<?php

											$dcnamev="";

											$cnn=mysqli_connect("localhost","root","","careathome");

											$result=$cnn->query("select * from area_master");			
	
											while($row=$result->fetch_assoc())
											{
												// $dcnamev=$row["dcname"];
											// echo "<input style='background-color: #4CAF50; border: none; color: white; padding: 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px;border-radius: 50%;' type='submit' name='".$row["dcname"]."' value='".$row["dcname"]."'>";
							
											// $cnn=mysqli_connect("localhost","root","","dbproject");

											// $result=$cnn->query("select * from city");			
	
											// while($row=$result->fetch_assoc())
											// {
												echo "<option value='".$row["areaid"] ."'>".$row["areaname"]."</option>";
												
											// }
											echo "<br><br>";	
											}?>


									</select>
								</div>
							</div>
<div class="col-md-offset-3 col-md-9">
		<input type="submit" name="btn" class="btn btn-info" value="Search"><br><br>
	</div>
<!-- </div> -->
</form>
<?php
if(isset($_POST["btn"]))
{

$areaname=$_POST["ddl"];

$qrye=("select * from area_master,lab where lab.areaid='$areaname' and area_master.areaid=lab.areaid");

// echo $qrye;

		$res=$cnn->query($qrye);
		

	while($ro=$res->fetch_assoc())
	{
		$labid=$ro["labid"];
		?>


<div class="col-xs-12">

<div class="media search-media">
	<div class="media-left">
		<a href="labdetalis.php?Id=<?php echo $labid;?>">
			<img class="media-object" data-src="holder.js/72x72" alt="72x72" src="../labimg/<?php echo $ro["labpic"];?>" data-holder-rendered="true" style="width: 72px; height: 72px;">
		</a>
		</div>

		<div class="media-body">
			<div>
					<h4 class="media-heading">
				<a href='labdetalis.php?Id=<?php echo $labid;?>' class="blue"><?php echo "LabName: ".$ro['labname']; ?></a>
			</h4>
		</div>
		<p><?php echo "Contact : ".$ro['contactno']."<br>"."Email : ".$ro['email'];?></p>

		<div class="search-actions text-center">
			

		

		
		<div class="action-buttons bigger-125">
			<a href="#">
				<i class="ace-icon fa fa-phone green"></i>
		</a>

		<a href="#">
			<i class="ace-icon fa fa-heart red"></i>
		</a>

					<a href="#">
						<i class="ace-icon fa fa-star orange2"></i>
					</a>
				</div>
					<a class="search-btn-action btn btn-sm btn-block btn-info" href="laboratory.php?Id=<?php echo $labid;?>">Book it!</a>
			</div>
		</div>
	</div>
</div>
<?php
	}

}											

?>


<?php
include_once("fotter.php");
?>