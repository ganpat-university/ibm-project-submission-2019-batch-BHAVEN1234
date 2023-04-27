<?php
session_start();
	include_once("hader.php");
?>
<?php  
// $val=$_SESSION["val"];
//  echo $val;
// 	if($val == "1")
// 	{
// 		echo "you are come after login";
// 	}
// 	else
// 	{
// 		echo "bye";
// 		// echo ("<script>location.href='../login.php'</script>");
// 	}
// $d=$_POST["ddl"];
	

?>

<div class="page-header">
							<h1>
								Doctor
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>



<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Expert in Field </label>
											

									<div class="col-sm-9">	
									<select name="ddl" class="col-xs-10 col-sm-5" required="">
								
											<?php

											$dcnamev="";

											$cnn=mysqli_connect("localhost","root","","careathome");

											$result=$cnn->query("select * from doctorcategory");			
	
											while($row=$result->fetch_assoc())
											{
												// $dcnamev=$row["dcname"];
											// echo "<input style='background-color: #4CAF50; border: none; color: white; padding: 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px;border-radius: 50%;' type='submit' name='".$row["dcname"]."' value='".$row["dcname"]."'>";
							
											// $cnn=mysqli_connect("localhost","root","","dbproject");

											// $result=$cnn->query("select * from city");			
	
											// while($row=$result->fetch_assoc())
											// {
												echo "<option value='".$row["dcname"] ."'>".$row["dcname"]."</option>";
												
											// }
											echo "<br><br>";	
											}?>


									</select>
								</div>
							</div>

<!-- <div class="form element"> -->
	<div class="col-md-offset-3 col-md-9">
		<input type="submit" name="btn" class="btn btn-info" value="Search"><br><br>
	</div>
<!-- </div> -->
</form>
<?php
if(isset($_POST["btn"]))
{

$dcnamev=$_POST["ddl"];
$_SESSION["dcname"]=$_POST["ddl"];
$qrye=("select * from doctor where dcname='$dcnamev'");

// echo $qrye;

		$res=$cnn->query($qrye);
		

	while($ro=$res->fetch_assoc())
	{
		$docid=$ro["doctorid"];
		?>


<div class="col-xs-12">

<div class="media search-media">
	<div class="media-left">
		<a href="doctordetails.php?Id=<?php echo $docid;?>">
			<img class="media-object" data-src="holder.js/72x72" alt="72x72" src="../mempic/<?php echo $ro["docpic"];?>" data-holder-rendered="true" style="width: 100px; height: 100px;">
		</a>
		</div>

		<div class="media-body">
			<div>
				<h4 class="media-heading">
				<a href="doctordetails.php?Id=<?php echo $docid;?>" class="blue"><?php echo "DR. ".$ro['docfname']." ".$ro["doclname"]; ?></a>
			</h4>
		</div>
		<p><?php echo "Contact : ".$ro['contact']."<br>"."Email : ".$ro['email']."<br>"."Experience : ".$ro['experience']." year";?></p>

		<div class="search-actions text-center">
			<span class="text-info">₹</span>

		<span class="blue bolder bigger-150">300</span>
<br>
		Consultation fee
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
				<a class="search-btn-action btn btn-sm btn-block btn-info" href="doctorappointment1.php?Id=<?php echo $docid;?>">Book it</a>
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