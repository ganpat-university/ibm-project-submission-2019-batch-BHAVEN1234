<?php
session_start();
	include_once("hader.php");
?>
<!-- <form method="post">
	<div class="col-md-offset-3 col-md-9">
<h2>Your Medicine Orders</h2>
</div>
<div class="col-md-offset-3 col-md-9">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Medicine" class="btn btn-info" name="btnSubmit1">
</div>
<div class="col-md-offset-3 col-md-9">
<h2>Your Surgical Orders</h2>
</div>
<div class="col-md-offset-3 col-md-9">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Surgical Items" class="btn btn-info" name="btnSubmit2">
</div>
<div class="col-md-offset-3 col-md-9">
<h2>Reports</h2>
</div>
<div class="col-md-offset-3 col-md-9">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Reports" class="btn btn-info" name="btnSubmit3">
</div>
<div class="col-md-offset-3 col-md-9">
<h2>Prescription</h2>
</div>
<div class="col-md-offset-3 col-md-9">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Prescription" class="btn btn-info" name="btnSubmit4">
</div>
</form> -->

<?php

											
echo "<a class='label label-lg label-yellow arrowed-in arrowed-in-right' href='mediview.php'>Medicine </a><br><br>";

echo "<a class='label label-lg label-yellow arrowed-in arrowed-in-right' href='viewcart.php'>SurgicalProduct </a><br><br>";

echo "<a class='label label-lg label-yellow arrowed-in arrowed-in-right' href='doctorappointmentview.php'>Doctor Appointment</a><br><br>";

echo "<a class='label label-lg label-yellow arrowed-in arrowed-in-right'href='labview.php'>Lab Appointment</a><br><br>";

// echo "<a class='label label-lg label-yellow arrowed-in arrowed-in-right' href='caretakerappointmentview.php'>Care Taker</a><br><br>";

echo "<a class='label label-lg label-yellow arrowed-in arrowed-in-right' href='report.php'>Reports</a><br><br>";

echo "<a class='label label-lg label-yellow arrowed-in arrowed-in-right' href='prescription.php'>Prescription</a><br><br>";


?>

<?php
	include_once("fotter.php");
?>