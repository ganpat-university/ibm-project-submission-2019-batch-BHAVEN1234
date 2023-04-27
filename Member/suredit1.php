<?php
session_start();
include_once("hader.php");
// echo $_SESSION["memberid"];
?>


<div class="page-header">
							<h1>
								Home
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>
						<?php

											// $memid=$_SESSION['memid'];							
											// echo $memid;
											
						?>
<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			
		    <div class="form-group">
		    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> SELECT AREA: </label>
		    <div class="col-sm-3">
             								<select class="form-control" name="areaname" required="">
											<?php

											$cnn=mysqli_connect("localhost","root","","careathome");

											$result=$cnn->query("select * from area_master");			
	
											while($row=$result->fetch_assoc())
											{
												echo "<option value='".$row["areaid"] ."'>".$row["areaname"]."</option>";
											}										
											?>
											</select>
										</div>
									</div>
										<div class="form-group">
									
		  <div class="col-md-offset-3 col-md-9">
         <input type="submit" class="btn btn-info" name="btn" value="Search">
        </div>
			</div>
			
		</form>


<?php
$img="";
$areaname="";
$photo="";
$surgicalname="";
$areaid=""; 
		     
  		if(isset($_POST["btn"]))
	      {

           $areaid=$_POST["areaname"];
           $q="select * from surgicalstore where areaid=$areaid";

            $cnn=mysqli_connect("localhost","root","","careathome");
            $res=$cnn->query($q);
		    $result=$cnn->query("select * from surgicalstore");
          
		while($ro=$res->fetch_assoc())
		{
			?>
			<div class="doctordetails">
			<div class="doctorimg" >
            <?php
		$x='img1\\'.$ro["img"];
			echo "<img src='$x' height=100px width=200px>"."<br>";
			echo "<a class='btn btn-app btn-yellow btn-xs' href='suredit2.php?Id=".$ro["surgid"]."' >" .$ro["surstorename"]."<i class='ace-icon fa fa-shopping-cart bigger-160'></i>
											 </a>";
	
		
	
	}
}	

?>	
          </div></div>
         
	
<?php
include_once("fotter.php");
?>

