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

$memfname="";
$contact="";
$email="";
$uname="";
$pwd="";

	$memid=$_GET["Id"];
	
	$qry="delete from member_master where memid='$memid'";

	// echo $qry;
	
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);

// echo "done...............................................";

	// header("Location:memberveiw.php");					

echo ("<script>location.href='memberveiw.php'</script>");

?>


<?php
include_once("fotter.php");
?>