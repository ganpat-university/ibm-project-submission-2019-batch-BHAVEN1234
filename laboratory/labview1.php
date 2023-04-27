<?php
session_start();
include_once("hader.php");
?>


<div class="page-header">
							<h1>
								Appointment
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>

						<div style="overflow:scroll;">
		<?php
		$x=0;
		$labid=$_SESSION["labid"];
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qr="Select * from lab_appo,member_master where labid='$labid' and Isconform='No' and lab_appo.memid=member_master.memid";
		$qry=$cnn->query($qr);
		// echo $qr;
		// $str="<table class='table  table-bordered table-hover'><tr><th>Member First Name</th><th>Member Last Name</th><th>Appointmentdate</th>><th>Appointmenttime</th><th>Contact No.</th><th>Address</th><th>View</th>";
		// echo $qr;

		while($res=$qry->fetch_assoc())
		{
			

?>
			
			<div class="class="col-xs-12">
	<div class="media search-media">
		<div class="media-left">

			<a href="memberdetails.php?Id='<?php echo $res['memid'];?>'">
				<img class="media-object" data-src="holder.js/72x72" alt="72x72" height="100px" width="100px" src="img/<?php echo $res['mempic'];?>">
			</a>
		</div>

	<div class="media-body">
		<div>
			<h4 class="media-heading">
				<a href="memberdetails.php?Id='<?php echo $res['memid'];?>'" class="blue"><?php echo $res["memfname"]." ".$res["memlname"];?></a>
			</h4>
		</div>
			<p>Appointmentdate: <?php echo $res["Appointmentdate"];?><br>Appointmenttime: <?php echo $res["Appointmenttime"];?></p>
	
																</div>
															</div>
														</div>
			
		




<?php		
					}

		


		// echo $str;
		?>
	</div>

						<?php
include_once("fotter.php");
?> 
