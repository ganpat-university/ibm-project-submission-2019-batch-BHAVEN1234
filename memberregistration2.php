 <?php
include_once("hader.php");
?>



	<style type="text/css">
.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
</style>
<?php

$fn="";
$ln="";
$un="";
$pass="";
$repass="";
$email="";
$conta="";
$diabetic="";
$gender="";
$fui="";
$address="";
// $city="";
$area="";
$smoking="";
$Bloodpressure="";
$areaid="";

if(isset($_POST["btnSubmit"]))
{
	

	$fn=$_POST["txtfirstname"];
	$ln=$_POST["txtlastname"];
	$un=$_POST["txtuname"];
	$pass=$_POST["txtpassword"];
	$repass=$_POST["txtrepassword"];
	$email=$_POST["txtemail"];
	$conta=$_POST["txtcontact"];
	$diabetic=$_POST["radia"];
	$gender=$_POST["rage"];
	//$fui=$_FILES['file']['name'];
	$fui='abc.jpg';
	$address=$_POST["txtaddress"];
	// $city=$_POST["ddlc"];
	$vcnt=1;
	$dtofreg=date('Y-m-d H:i:s');
	$dtoflast=date('Y-m-d H:i:s');
	$areaname=$_POST["areaname"];
	// echo $areaname;
	$smoking=$_POST["rsmoking"];
	$Bloodpressure=$_POST["Bloodpressure"];
	$active="yes";
	// $areaid='';


	if($pass == $repass)
	{
		$pass = $pass;

	


$cnn = mysqli_connect("localhost","root","","careathome");

// uname
$member="Select * from member_master where uname='$un'";
$doctor="Select * from doctor where uname='$un'";
$lab="Select * from lab where uname='$un'";
$patient_manager="Select * from patient_manager where uname='$un'";
$admin="Select * from admin_master where uname='$un'";
$surgical_store="Select * from surgicalstore where uname='$un'";
$delivery_master="Select * from delivery_master where uname='$un'";
$medical_store="Select * from medical_store where uname='$un'";
$caretaker = "Select * from caretaker_master where uname='$un'";
// contact 
$memberc="Select * from member_master where contact='$conta'";
$doctorc="Select * from doctor where contact='$conta'";
$labc="Select * from lab where contactno='$conta'";
$patient_managerc="Select * from patient_manager where contactno='$conta'";
// $adminc="Select * from admin_master where contact='$conta'";
$surgical_storec="Select * from surgicalstore where contactno='$conta'";
$delivery_masterc="Select * from delivery_master where contact='$conta'";
$medical_storec="Select * from medical_store where contact='$conta'";
$caretakerc= "Select * from caretaker_master where caretakercontact='$conta'";

// email
$membere="Select * from member_master where email='$email'";
$doctore="Select * from doctor where email='$email'";
$labe="Select * from lab where email='$email'";
$patient_managere="Select * from patient_manager where email='$email'";
// $admine="Select * from admin_master where email='$email'";
$surgical_storee="Select * from surgicalstore where email='$email'";
$delivery_mastere="Select * from delivery_master where email='$email'";
$medical_storee="Select * from medical_store where email='$email'";
// $caretakere= "Select * from caretaker_master where email='$email'";



$con = mysqli_connect("localhost","root","","careathome");
// uname
$memberresult=$con->query($member);
$membercnt=mysqli_num_rows($memberresult);

$doctorresult=$con->query($doctor);
$doctorcnt=mysqli_num_rows($doctorresult);

$labresult=$con->query($lab);
$labcnt=mysqli_num_rows($labresult);

$patient_managerresult=$con->query($patient_manager);
$patient_managercnt=mysqli_num_rows($patient_managerresult);

$adminresult=$con->query($admin);
$admincnt=mysqli_num_rows($adminresult);

$surgical_storeresult=$con->query($surgical_store);
$surgical_storecnt=mysqli_num_rows($surgical_storeresult);

$delivery_masterresult=$con->query($delivery_master);
$delivery_mastercnt=mysqli_num_rows($delivery_masterresult);

$medical_storeresult=$con->query($medical_store);
$medical_storecnt=mysqli_num_rows($medical_storeresult);

$caretakerresult=$con->query($caretaker);
$caretakercnt=mysqli_num_rows($caretakerresult);

// end of uname

// conatact
$membercresult=$con->query($memberc);
$memberccnt=mysqli_num_rows($membercresult);

$doctorcresult=$con->query($doctorc);
$doctorccnt=mysqli_num_rows($doctorcresult);

$labcresult=$con->query($labc);
$labccnt=mysqli_num_rows($labcresult);


$patient_managercresult=$con->query($patient_managerc);
$patient_managerccnt=mysqli_num_rows($patient_managercresult);

// $admincresult=$con->query($adminc);
// $adminccnt=mysqli_num_rows($admincresult);

$surgical_storecresult=$con->query($surgical_storec);
$surgical_storeccnt=mysqli_num_rows($surgical_storecresult);

$delivery_mastercresult=$con->query($delivery_masterc);
$delivery_masterccnt=mysqli_num_rows($delivery_mastercresult);

$medical_storecresult=$con->query($medical_storec);
$medical_storeccnt=mysqli_num_rows($medical_storecresult);

$caretakercresult=$con->query($caretakerc);
$caretakerccnt=mysqli_num_rows($caretakercresult);
// end of contact

//email
$membereresult=$con->query($membere);
$memberecnt=mysqli_num_rows($membereresult);

$doctoreresult=$con->query($doctore);
$doctorecnt=mysqli_num_rows($doctoreresult);

$laberesult=$con->query($labe);
$labecnt=mysqli_num_rows($laberesult);


$patient_managereresult=$con->query($patient_managere);
$patient_managerecnt=mysqli_num_rows($patient_managereresult);

// $admineresult=$con->query($admine);
// $adminecnt=mysqli_num_rows($admineresult);

$surgical_storeeresult=$con->query($surgical_storee);
$surgical_storeecnt=mysqli_num_rows($surgical_storeeresult);

$delivery_mastereresult=$con->query($delivery_mastere);
$delivery_masterecnt=mysqli_num_rows($delivery_mastereresult);

$medical_storeeresult=$con->query($medical_storee);
$medical_storeecnt=mysqli_num_rows($medical_storeeresult);

// $caretakereresult=$con->query($caretakere);
// $caretakerecnt=mysqli_num_rows($caretakereresult);
//end of email




if($membercnt==1 || $doctorcnt==1 || $admincnt==1 || $patient_managercnt==1 || $labcnt==1 || $surgical_storecnt==1 || $delivery_mastercnt==1 || $medical_storecnt==1 || $caretakercnt==1)
{
	
	echo "<script>alert('user name exist');</script>";
}
else
{
	
	if($memberccnt==1 || $doctorccnt==1 || $patient_managerccnt==1 || $labccnt==1 || $surgical_storeccnt==1 || $delivery_masterccnt==1 || $delivery_masterccnt==1 || $medical_storeccnt==1 || $caretakerccnt==1)
	{
		echo "<script>alert('contact exist');</script>";
	}
	else
	{



if($memberecnt==1 || $doctorecnt==1 || $patient_managerecnt==1 || $labecnt==1 || $surgical_storeecnt==1 || $delivery_masterecnt==1 || $delivery_masterecnt==1 || $medical_storeecnt==1)
{
	echo "<script>alert('email exist');</script>";
}
else
{


								$qry="Insert into member_master(areaid,memfname,memlname,uname,pwd,doreg,dateoflv,vcnt,contact,email,issmoking,isdiabic,bloodpressure,gender,mempic,isactive,address) values('$areaname','$fn','$ln','$un','$pass','$dtofreg','$dtoflast','$vcnt','$conta','$email','$smoking','$diabetic','$Bloodpressure','$gender','$fui','$active','$address')";
								// echo $qry;
								$cnn = mysqli_connect("localhost","root","","careathome");
								$result=$cnn->query($qry);


								echo "<script>alert('Registration sucessfully');</script>";						
								echo ("<script>location.href='../login.php'</script>");
}
}
}


}


else
{
	echo "<script>alert('Password and Re-Password is wrong');</script>";
	$pass = "";
}
}
?>


<div class="page-header">
							<h1>
								Member Registration
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>

						<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First Name </label>

										<div class="col-sm-9">
											<input type="text" placeholder="First Name" class="col-xs-10 col-sm-5" pattern="[a-zA-Z]{2,30}" minlength="2" maxlength="25" name="txtfirstname" required="">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Last Name </label>

										<div class="col-sm-9">
											<input type="text" placeholder="Last Name" maxlength="15" class="col-xs-10 col-sm-5" pattern="[a-zA-Z]{2,15}" name="txtlastname" required="">
											
										</div>
									</div>

									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> User Name </label>

										<div class="col-sm-9">
											<input type="text" placeholder="User name" class="col-xs-10 col-sm-5" name="txtuname" minlength="2" maxlength="30" required="">		
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password </label>

										<div class="col-sm-9">
											<input type="password" placeholder="Password" class="col-xs-10 col-sm-5" name="txtpassword" minlength="8" maxlength="20" required="">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Re-Password </label>

										<div class="col-sm-9">
												<input type="password" placeholder="Re Enter Password" class="col-xs-10 col-sm-5" name="txtrepassword" minlength="8" maxlength="20" required="">
  									 	</div>
									</div>			

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Email </label>

										<div class="col-sm-9">
											<input type="Email" placeholder="Email" class="col-xs-10 col-sm-5" name="txtemail" minlength="2" maxlength="50" required="">
										</div>
									</div>	

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Contact </label>

										<div class="col-sm-9">
											<input type="text" placeholder="Contact" class="col-xs-10 col-sm-5" name="txtcontact" maxlength="30" required="" pattern="[0-9]{0,10}" maxlength="10" minlength="10">
										</div>
									</div>	

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Is Diabetic </label>

										<div class="col-sm-9">
											
										

										<div class="radio">
													<label>
														<input  type="radio" class="ace" name="radia" value="Yes" required="">
														<span class="lbl"> Yes </span>
													</label>
																				
													<label>
														<input  type="radio" class="ace" name="radia" value="No" required="">
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
														<input type="radio" class="ace" name="rage" text="Male" value="Male" required="">
														<span class="lbl"> Male </span>
													</label>
											
													<label>
														<input type="radio" class="ace" name="rage" text="Female" value="Female" required="">
														<span class="lbl"> Female </span>
													</label>
									</div>			</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Is Smoking </label>
									<div class="col-sm-9">
									<div class="radio">
													<label>
														<input type="radio" class="ace" name="rsmoking" value="Yes" required="">
														<span class="lbl"> Yes </span>
													</label>
											
													<label>
														<input type="radio" class="ace" name="rsmoking" value="No" required="">
														<span class="lbl"> No </span>
													</label>
									</div>			</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Bloodpressure </label>
									<div class="col-sm-9">
									<div class="radio">
													<label>
														<input type="radio" class="ace" name="Bloodpressure" value="Yes" required="">
														<span class="lbl"> Yes </span>
													</label>
											
													<label>
														<input type="radio" class="ace" name="Bloodpressure" value="No" required="">
														<span class="lbl"> No </span>
													</label>
									</div>			</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Member Pic </label>

										&nbsp
											<div class="fileUpload btn btn-primary">
    											<span>Upload</span>
    											<input type="file" class="upload" name="mempic" required="">
											</div>										
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Address </label>

										<div class="col-sm-9">

									 		<textarea class="form-control" placeholder="Address" name="txtaddress" minlength="3" maxlength="100" required=""></textarea>
  									 	</div>
									</div>									

									

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Area </label>
											

										<div class="col-sm-9">																	
									<select class="form-control" name="areaname" required="">
										<?php
											$cn = mysqli_connect("localhost","root","","careathome");
											$arean=$cn->query("select * from area_master");
											
											while($areanro = $arean->fetch_assoc())
											{
												echo "<option value='".$areanro["areaid"]."'>".$areanro["areaname"]."</option>";
											}
										?>
									</select>
									</div>
									</div>



									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="btn btn-info" name="btnSubmit" value="Submit">

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset" name="btnreset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>
							
						</form>
					</body>

<?php
include_once("fotter.php");
?>