<?php
	include_once("hader.php");
?>

<div class="page-header">
							<h1>
								Contact Us
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>



<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Member </label>
											

									<div class="col-sm-9">	


											

												<input type="text" name="txtfname" required="">
												<input type="submit" value="done" class="btn btn-info" name="btnSubmit">
													</div>
							</div>
<?php
											if(isset($_POST["btnSubmit"]))
											{

												$memfname=$_POST["txtfname"];

											$cnn=mysqli_connect("localhost","root","","careathome");
											$qes="select * from member_master where memfname='$memfname'";
											// echo $qes;
											$result=$cnn->query($qes);			
											
											while($row=$result->fetch_assoc())
											{
												?>
											
													<br>
													<div class="memdetails" >
														<center><div class="memimg" style=" height: 50px;width: 50px;">

													<?php
													echo "<img style='height: 40px; width: 40px;' src='".$row["mempic"]."'>";?>
														</div></center>
													<?php
													echo "<lable name='lbl_membername'><center><b><a href='search doctor2.php?Id=".$row["memid"]."''>".$row["memfname"]." ".$row["memlname"]."</a></b></center></lable>";
													echo "<br><br>";
													
											}
										}
											
?>

											
								   
							



					

</form>
<?php
	include_once("fotter.php");
?>