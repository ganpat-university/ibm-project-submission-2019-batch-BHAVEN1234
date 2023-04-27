<?php
session_start();
include_once("hader.php");
?>	
<div class="page-header">
				<h1>
				Your Lab's Appointment
				<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				</small>
				</h1>
</div>
<div style="overflow:scroll;">	
<?php
		$x=0;
		$memid=$_SESSION["memberid"];
		// echo $memid;
		$cnn=mysqli_connect("localhost","root","","careathome");
		$q="Select * from lab_appo,lab where lab.labid=lab_appo.labid and lab_appo.memid='$memid'";
		$qry=$cnn->query($q);
		 $str="<table class='table  table-bordered table-hover'><tr><th>Lab Image</th><th>labname</th><th>Appointmentdate</th><th>Appointmenttime</th><th>Test Type</th><th>Delete</th>";

	while($res=$qry->fetch_assoc())
	{
			$str.="<tr><td><img src='labimg/".$res["labpic"]."' height='100px' width='100px'></td><td>".$res["labname"]."</td><td>".$res["Appointmentdate"]."</td><td>".$res["Appointmenttime"]."</td><td>".$res["labtest_name"]."</td>
			
				<Td><a 
				href='labdelete.php?Id=".$res["appoid"]."'> <i class='ace-icon fa fa-trash-o bigger-120'></i></a> </td></tr>";
	}
	echo $str;
?>
</div>


<?php
include_once("fotter.php");
?>