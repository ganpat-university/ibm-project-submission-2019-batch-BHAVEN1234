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

						<div style="overflow:scroll;">
		<?php
		$x=0;
		$cnn=mysqli_connect("localhost","root","","careathome");
		$qry=$cnn->query("Select * from lab_appo,member_master where lab_appo.memid=member_master.memid");
		// $str="<table class='table  table-bordered table-hover'><tr><th>Member First Name</th><th>Member Last Name</th><th>Appointmentdate</th>><th>Appointmenttime</th><th>Contact No.</th><th>Address</th><th>View</th>";


		while($res=$qry->fetch_assoc())
		{
			

?>
			
			<div class="class="col-xs-12">
	<div class="media search-media">
		<div class="media-left">

			<a href="memberdetails.php?Id='<?php echo $res['memid'];?>'">
				<img class="media-object" data-src="holder.js/72x72" alt="72x72" src="img/<?php echo $res['mempic'];?>">
			</a>
		</div>

	<div class="media-body">
		<div>
			<h4 class="media-heading">
				<a href="memberdetails.php?Id='<?php echo $res['memid'];?>'" class="blue"><?php echo $res["memfname"]." ".$res["memlname"];?></a>
			</h4>
		</div>
			<p>Appointmentdate: <?php echo $res["Appointmentdate"];?><br>Appointmenttime: <?php echo $res["Appointmenttime"];?></p>
		<div class="search-actions text-center">
			<span class="text-info">$</span>
				<span class="blue bolder bigger-150">300</span>

					monthly
					<div class="action-buttons bigger-125">
						<a href="#">
						<i class="ace-icon fa fa-phone green"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-heart red"></i>
						</a>

																			<a href="#">
																				<i class="ace-icon fa fa-star orange2"></i>
																			</a>
																		</div>
																		<a class="search-btn-action btn btn-sm btn-block btn-info">Book it!</a>
																	</div>
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
