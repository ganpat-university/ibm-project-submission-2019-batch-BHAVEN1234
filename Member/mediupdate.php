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

	

<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">  Medicine Type </label>

<div class="col-sm-9">												
<select name="cmbmedicinetype" class="col-xs-10 col-sm-5" required="">
	<option value="Amphetamine">Amphetamine</option>
	<option value="Barbiturate">Barbiturate</option>
	<option value="Caplet">Caplet</option>
	<option value="Drug">Drug</option>
	<option value="Ear Drops">Ear Drops</option>
	<option value="Fertility Drug">Fertility Drug</option>
	<option value="Gas">Gas</option>

</select>
											
</div>
</div>
	<?php
							
		// $cnn=mysqli_connect("localhost","root","","careathome");

		// $result=$cnn->query("select * from medicine_master");			
	
		// while($row=$result->fetch_assoc())
		// {
												// echo "<option value='".$row["medtype"] ."'>".$row["medtype"]."</option>";
												
											// }
											
											?>
											
<br>
<div class="col-md-offset-3 col-md-9">
<input type="submit" value="Search" class="btn btn-info" name="btnSubmit" ><br><br>
</div>
</form>

<?php

$medtype="";
$a="";
if(isset($_POST["btnSubmit"]))
	{
		
		
		$medtype=$_POST["cmbmedicinetype"];
		// echo $medtype;

		$q="select * from medicine_master where medtype='$medtype'";
		// echo $q;
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qes=$cnn->query($q);


		while ($res=$qes->fetch_assoc())

		 {
		
		
		 	$medid=$res["medid"];
		 	// echo $medid;
		$medpic=$res["medpic"];
		$medtype=$res["medtype"];
		$medinename=$res["medinename"];
		$meddis=$res["meddis"];
		$medprice=$res["Mprice"];
		$a='2'; 	
		
?>
<div class="col-xs-6 col-sm-4 col-md-3">
	<div class="thumbnail search-thumbnail">
	<img class="media-object" data-src="holder.js/100px200?theme=gray" alt="100%x200" src="medpic/<?php echo $medpic;?>" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
	<div class="caption">
	<div class="clearfix">
		

	
	</div>


		<h3 class="search-title">
		<?php echo "<a class='blue' href='mediupdate1.php?Id=$medid'>$medinename</a>" ?>
</h3>
<p><?php echo '₹ '.$medprice;?><br>

</p>

</div>
</div>
</div>
<?php
 }

 // $qty=""; 

	}
	
	 $memid=$_SESSION["memberid"];
 // $qty=$_SESSION["qty"];

?>





<?php
include_once("fotter.php");
?>