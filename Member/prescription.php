<?php
session_start();
	include_once("hader.php");
?>

<?php
$memid=$_SESSION["memberid"];
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qes="Select * from member_prescription where memid=$memid";
		// echo $qes;
$qry=$cnn->query($qes);
while($res=$qry->fetch_assoc())
{
$do=$res['doctorid'];

$qes1="Select * from doctor where doctorid=$do";
$qry1=$cnn->query($qes1);
$res1=$qry1->fetch_assoc();

echo "<a href='view_prescription.php?id=".$res['member_prescriptionid']."'>".$res1['docfname']." ".$res1['doclname']."</a><br>";
}
?>


<?php
	include_once("fotter.php");
?>