<?php
session_start();
	include_once("hader.php");
?>
<input type="submit" class="btn btn-white btn-primary" name="doc" value="Doctor">

<input type="submit" class="btn btn-white btn-info" name="lab" value="Laboratory">

<input type="submit" class="btn btn-white btn-success" name="sur" value="Surgical Items">

<?php
	include_once("fotter.php");
?>