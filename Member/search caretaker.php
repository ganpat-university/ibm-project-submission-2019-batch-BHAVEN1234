<?php
	session_start();
	include_once("hader.php");
?>

<div class="page-header">
							<h1>
								Contact Us
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>



<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Search by Area </label>
											

									<div class="col-sm-9">	
									<select name="ddl" class="col-xs-10 col-sm-5">
								
											<?php

											// $dcnamev="";	

											$cnn=mysqli_connect("localhost","root","","careathome");

											$result=$cnn->query("select * from area_master");			
	
											while($row=$result->fetch_assoc())
											{
												// $a=$row["areaid"];
												$areaid=$row['areaid'];
												
												echo "<option value='".$row["areaid"] ."'>".$row["areaname"]."</option>";
												
										
											echo "<br><br>";	
											}
											
											// echo "<label>echo $a;</label>";
											// if(isset($_POST["btn"]))
											// {
											// 	echo $areaid;
											// }
											?>


									</select>
								</div>
							</div>

<?php
// echo $cityname;

	// $q="select * from area_master where city = '$cityname'";
	// echo $q;
	// $r=$cnn->query($q);

	// $rows = mysql_fetch_array($r);
	// $areaid=$rows["areaid"];
	// echo $areaid;
?>



	<div class="col-md-offset-3 col-md-9">
		<input type="submit" name="btn" class="btn btn-info" value="Search">
	</div>

</form>
<?php
if(isset($_POST["btn"]))
{
$cityname=$_POST["ddl"];


$qrye=("select * from caretaker_master,area_master where caretaker_master.areaid='$cityname' and area_master.areaid=caretaker_master.areaid");

// echo $qrye;

		$res=$cnn->query($qrye);
		

	while($ro=$res->fetch_assoc())
	{

		$caretkrid=$ro["caretkrid"];
		?>

<div class="col-xs-12">

<div class="media search-media">
	<div class="media-left">
		<a href="caretakerdetails.php?Id=<?php echo $caretkrid;?>">
			<img class="media-object" data-src="holder.js/72x72" alt="72x72" src="../img/<?php echo $ro["caretakepic"];?>" data-holder-rendered="true" style="width: 72px; height: 72px;">
		</a>
		</div>

		<div class="media-body">
			<div>
				<h4 class="media-heading">
				<a href="caretakerdetails.php?Id=<?php echo $caretkrid;?>" class="blue"><?php echo $ro['caretakename']; ?></a>
			</h4>
		</div>
		<p><?php echo "Contact : ".$ro['caretakercontact']."<br>"."Services : ".$ro['services']."<br>";?></p>

		<div class="search-actions text-center">
			<span class="text-info">₹ <?php echo $ro['charges'];?></span>

		<span class="blue bolder bigger-150"><?php echo $row["charges"];?></span>

		Per Day
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
				<a class="search-btn-action btn btn-sm btn-block btn-info" href="caretakerappointment.php?Id=<?php echo $caretkrid;?>">Book it!</a>
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