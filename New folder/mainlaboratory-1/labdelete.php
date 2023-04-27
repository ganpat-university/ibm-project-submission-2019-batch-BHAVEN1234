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

<?php



if(isset($_POST["btnsubmit"]))
{
	$appoid=$_GET["Id"];
					
	
	$qry="delete from lab_appo where appoid='$appoid'";

	echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);

echo "done...............................................";
}

	
 				

?>

<body>
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">


									<div class="col-md-offset-3 col-md-9">


						<input type="submit" name="btnsubmit"class="btn btn-info" value="Submit">
					</div>
			
			
		</form>
	<?php
include_once("fotter.php");
?>