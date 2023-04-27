<?php
session_start();
include_once("hader.php");
		$memid=$_SESSION["memberid"];
		$memfname=$_SESSION["memberfname"];
		$memlname=$_SESSION["memberlname"];
		$x="welcome, ".$memfname." ".$memlname;
		echo "<script>alert('$x')</script>";
?>


<div class="page-header"style="color:#207f88;">
							<h1>
								Home
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>

<marquee>
<img src="img\d1.jpg" height='200' width='200'>
<img src="img\d2.jpg" height='200' width='200'>
<img src="img\d3.png" height='200' width='200'>
<img src="img\d4.jpg" height='200' width='200'>
<img src="img\d5.jpg" height='200' width='200'>
</marquee>

<?php

include_once("fotter.php");
?>