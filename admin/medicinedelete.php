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

$medid="";
if(isset($_POST["btn"]))
{
	$medid=$_GET["Id"];
	
	
	$qry="delete from medicine where medid='$medid'";
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);

echo "done..";
}


?>

<body>
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
	
			<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Medicine ID:</label>

										<div class="col-sm-9">
											<input type="text" class="col-xs-10 col-sm-5" name="medid" required="" value="<?php echo $_GET["Id"]; ?>">
										</div>
									</div>
												<div class="col-md-offset-4 col-md-9">
            <input type="submit" name="btn">
        </div>
			
			
	</form>
<?php
include_once("fotter.php");
?>