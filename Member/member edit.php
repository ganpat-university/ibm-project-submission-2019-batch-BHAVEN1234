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
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First Name </label>

										<div class="col-sm-9">
											<input type="text" placeholder="First Name" class="col-xs-10 col-sm-5" name="txtfirstname" required="">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Last Name </label>

										<div class="col-sm-9">
											<input type="text" placeholder="Last Name" class="col-xs-10 col-sm-5" name="txtlastname" required="">
											
										</div>
									</div>

									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> User Name </label>

										<div class="col-sm-9">
											<input type="text" placeholder="User name" class="col-xs-10 col-sm-5" name="txtuname" required="">		
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Email </label>

										<div class="col-sm-9">
											<input type="Email" placeholder="Email" class="col-xs-10 col-sm-5" name="txtemail" required="*">
										</div>
									</div>	

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Contact </label>

										<div class="col-sm-9">
											<input type="text" placeholder="Contact" class="col-xs-10 col-sm-5" name="txtcontact" required="*">
										</div>
									</div>	

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Is Diabetic </label>

										<div class="col-sm-9">
											
										

										<div class="radio">
													<label>
														<input  type="radio" class="ace" name="radia" value="Yes">
														<span class="lbl"> Yes </span>
													</label>
																				
													<label>
														<input  type="radio" class="ace" name="radia" value="No">
														<span class="lbl"> No </span>
													</label>
										</div>	

										</div>
									</div>									
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Gender </label>
									<div class="col-sm-9">
									<div class="radio">
													<label>
														<input type="radio" class="ace" name="rage" text="Male" value="Male">
														<span class="lbl"> Male </span>
													</label>
											
													<label>
														<input type="radio" class="ace" name="rage" text="Female" value="Female">
														<span class="lbl"> Female </span>
													</label>
									</div>			</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Is Smoking </label>
									<div class="col-sm-9">
									<div class="radio">
													<label>
														<input type="radio" class="ace" name="rsmoking" value="Yes">
														<span class="lbl"> Yes </span>
													</label>
											
													<label>
														<input type="radio" class="ace" name="rsmoking" value="No">
														<span class="lbl"> No </span>
													</label>
									</div>			</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Bloodpressure </label>
									<div class="col-sm-9">
									<div class="radio">
													<label>
														<input type="radio" class="ace" name="Bloodpressure" value="Yes">
														<span class="lbl"> Yes </span>
													</label>
											
													<label>
														<input type="radio" class="ace" name="Bloodpressure" value="No">
														<span class="lbl"> No </span>
													</label>
									</div>			</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Member Pic </label>

										&nbsp
											<div class="fileUpload btn btn-primary">
    											
											</div>										
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Address </label>

										<div class="col-sm-9">

									 		<textarea class="form-control" placeholder="Address" name="txtaddress"></textarea>
  									 	</div>
									</div>									

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> City </label>
											

										<div class="col-sm-9">																	
									<select class="form-control" name="ddlc">
											<option value="Ahmedabad">Ahmedabad</option>
											<option value="Vadodara">Vadodara</option>
											<option value="Anand">Anand</option>
											<option value="Chhota Udaipur">Chhota Udaipur</option>
  											<option value="Dahod">Dahod</option>
											<option value="Kheda">Kheda</option>
													
									</select>
									</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Area </label>
											

										<div class="col-sm-9">																	
									<select class="form-control" name="areaid">
											<option value="Gurukul">Gurukul</option>
											<option value="Thaltej">Thaltej</option>
											<option value="Memnagar">Memnagar</option>
											<option value="Jashoda">Jashoda</option>
  											<option value="Gota">Gota</option>

									</select>
									</div>
									</div>



									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" name="btnSubmit" onclick="abc()">submit</button>

											<script>
											function abc()
											{
												alert("Data insert is successfully");
											}
											</script>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset" name="btnreset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>
							
							
																	</form>


<?php
		include_once("fotter.php");
?>