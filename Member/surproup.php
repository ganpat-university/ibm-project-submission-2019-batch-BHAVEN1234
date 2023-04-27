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

	<?php
	$MName="";
	$Mtype="";
	$quantity="";

	
	

	if(isset($_POST["btnSubmit"]))
	{
		$tempid=$_GET["Id"];
		$proname=$_POST["cmbmedicine"];
		//$Mtype=$_POST["cmbmedicinetype"];
		$item_quantity=$_POST["txt_qty"];
		

		$qry="update tempcart SET MName='$MName',Mtype='$Mtype',quantity='$quantity' where TMid=$TMid";
		echo $qry;

		$cnn=mysqli_connect("localhost","root","","careathome");
		$fire=$cnn->query($qry);
	

echo "done";

	}
			$tempid=$_GET["Id"];
			$qes="Select * from tempcart where tempid = $tempid";
			$cnn=mysqli_connect("localhost","root","","careathome");
			$qry=$cnn->query($qes);
			$res=$qry->fetch_assoc();

		$proname=$res["proname"];
		//$Mtype=$res["Mtype"];
		$item_quantity=$res["item_quantity"];
		
			



?>

			<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		
	
		
	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Surgical Product Name </label>

										<div class="col-sm-9">
											
											<select name="cmbmedicine" value="<?php echo $proname; ?>">
											<?php
							
											$cnn=mysqli_connect("localhost","root","","careathome");

											$result=$cnn->query("select * from  surproduct");			
	
											while($row=$result->fetch_assoc())
											{
												echo "<option value='".$row["surproname"] ."'>".$row["surproname"]."</option>";
												
											}
											
											?>
											</select>
											
										</div>
									</div>
								


<!-- 
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Medicine Type </label>

										<div class="col-sm-9">
											
											<select name="cmbmedicinetype" value="<?php echo $Mtype; ?>">
											<?php
							
											$cnn=mysqli_connect("localhost","root","","careathome");

											$result=$cnn->query("select * from medicine_master");			
	
											while($row=$result->fetch_assoc())
											{
												echo "<option value='".$row["medtype"] ."'>".$row["medtype"]."</option>";
												
											}
											
											?>
											</select>
											
										</div> -->
									
	


	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Quantity: </label>
<div class="col-sm-9">
	<input type="text" class="col-xs-10 col-sm-5" name="txt_qty" value="<?php echo $item_quantity; ?>"><br><br>
</div>



<div class="col-md-offset-4 col-md-9">
<input class="btn btn-info" type="submit" value="done" name="btnSubmit">
</div>

<?php
include_once("fotter.php");
?> 