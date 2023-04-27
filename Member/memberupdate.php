<?php
session_start();
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


		
	<?php
	$memid="";
$memfname="";
			$conta="";
			$email="";
			$un="";
			$pass="";
			$gen="";
			$isdiabic="";
			$issmoking="";
			$bloodpressure="";

if(isset($_POST["btnsubmit"]))
{


	$memid=$_GET["Id"];
	$memfname =	$_POST["txt_name"];
	$conta=	$_POST["txt_con"];
	$email=	$_POST["txt_email"];

	$gen=$_POST["gen"];
	$isdiabic=$_POST["isd"];
	$issmoking=$_POST["iss"];
	$bloodpressure=$_POST["blo"];

// echo $un.$conta.$email.$pass;



$cnn = mysqli_connect("localhost","root","","careathome");

// uname
// $member="Select * from member_master where memid='$memid' ";

// contact 
$memberc="Select * from member_master where contact='$conta' and memid != '$memid'";
$doctorc="Select * from doctor where contact='$conta'";
$labc="Select * from lab where contactno='$conta'";
$patient_managerc="Select * from patient_manager where contactno='$conta'";
// $adminc="Select * from admin_master where contact='$conta'";
$surgical_storec="Select * from surgicalstore where contactno='$conta'";
$delivery_masterc="Select * from delivery_master where contact='$conta'";
$medical_storec="Select * from medical_store where contact='$conta'";
$caretakerc= "Select * from caretaker_master where caretakercontact='$conta'";

// email
$membere="Select * from member_master where email='$email' and memid != '$memid'";
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
 				$qry="update member_master set memfname='$memfname',contact='$conta',email='$email',gender='$gen', isdiabic='$isdiabic',issmoking='$issmoking',bloodpressure='$bloodpressure' where memid='$memid'";

 				// echo $qry;
			

 				$con = mysqli_connect("localhost","root","","careathome");
				$fire=$con->query($qry);

// echo "done...............................................";

								echo "<script>alert('Update sucessfully');</script>";	

	echo ("<script>location.href='memberveiw.php'</script>");			

}

}


}

			$memid=$_GET["Id"];
			$qes="Select * from member_master where memid = $memid";
			$cnn=mysqli_connect("localhost","root","","careathome");
			$qry=$cnn->query($qes);
			$res=$qry->fetch_assoc();

			$memfname=$res["memfname"];
			$conta=$res["contact"];
			$email=	$res["email"];
			$un=	$res["uname"];
			$pass=	$res["pwd"];
			// $gen=$res["gender"];
	


	$isdiabic=$res["isdiabic"];
	$isdiabic1="";
	$isdiabic2="";

	if($isdiabic=="Yes")
	{
		$isdiabic1="checked";
	}
	else
	{
		$isdiabic2="checked";
	}

	$issmoking=$res["issmoking"];
	$issmoking1="";
	$issmoking2="";

	if($issmoking=="Yes")
	{
		$issmoking1="checked";
	}
	else
	{
		$issmoking2="checked";
	}
	$bloodpressure=$res["bloodpressure"];
	// echo $bloodpressure;
	$bloodpressure1="";
	$bloodpressure2="";

	if($bloodpressure=="Yes")
	{
		$bloodpressure1="checked";
	}
	else
	{
		$bloodpressure2="checked";
	}

	$gen=$res["gender"];
	// echo $gen;
	$gen1="";
	$gen2="";

	if($gen == "Male")
{
	$gen1="checked";
}
else
{
	$gen2="checked";
}


		
?>
	

<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member First Name 	</label>

										<div class="col-sm-9">
											<input type="text" name="txt_name" class="col-xs-10 col-sm-5" pattern="[a-zA-Z]{2,30}" minlength="2" maxlength="25" required="" value="<?php echo $memfname; ?>"> <br><br>
										</div>
									</div>


		<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Contact 	</label>

										<div class="col-sm-9">
											<input type="text" name="txt_con"class="col-xs-10 col-sm-5" pattern="[0-9]{0,10}" minlength="10" maxlength="10" required="" value="<?php echo $conta; ?>"><br><br><br>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> E-mail</label>

										<div class="col-sm-9">
											<input type="email" name="txt_email"class="col-xs-10 col-sm-5" minlength="2" maxlength="50" required="" value="<?php echo $email; ?>"><br> <br><br>
										</div>
									</div>
								<!-- 	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> User Name </label>

										<div class="col-sm-9">
											<input type="text" name="txt_uname"class="col-xs-10 col-sm-5" minlength="2" maxlength="30" required="" value="<?php// echo $un; ?>"><br> <br><br>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Password</label>

										<div class="col-sm-9"><input type="password" name="txt_pwd" maxlength="20" required="" minlength="8" class="col-xs-10 col-sm-5"value="<?php //echo $pass; ?>"><br> <br><br>
										</div>
									</div> -->


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Gender </label>
									<div class="col-sm-9">
									<div class="radio">
													<label>
														<input type="radio" class="ace" name="gen" value="Male" required="" <?php echo $gen1; ?>>
														<span class="lbl"> Male </span>
													</label>
											
													<label>
														<input type="radio" class="ace" name="gen" value="Female" required="" <?php echo $gen2; ?>>
														<span class="lbl"> Female </span>
													</label>
									</div>			</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Isdiabic : </label>
									<div class="col-sm-9">
									<div class="radio">
													<label>
														<input type="radio" class="ace" name="isd" value="Yes" required="" <?php echo $isdiabic1;?>>
														<span class="lbl"> Yes </span>
													</label>
											
													<label>
														<input type="radio" class="ace" name="isd" value="No" required="" <?php echo $isdiabic2; ?>>
														<span class="lbl"> No </span>
													</label>
									</div>			</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Issmoking : </label>
									<div class="col-sm-9">
									<div class="radio">
													<label>
														<input type="radio" class="ace" name="iss" value="Yes" required="" <?php echo $issmoking1;?>>
														<span class="lbl"> Yes </span>
													</label>
											
													<label>
														<input type="radio" class="ace" name="iss" value="No" required="" <?php echo $issmoking2;?>>
														<span class="lbl"> No </span>
													</label>
									</div>			</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Bloodpressure : </label>
									<div class="col-sm-9">
									<div class="radio">
													<label>
														<input type="radio" class="ace" name="blo" value="Yes" required="" <?php echo $bloodpressure1;?>>
														<span class="lbl"> Yes </span>
													</label>
											
													<label>
														<input type="radio" class="ace" name="blo" value="No" required="" <?php echo $bloodpressure2;?>>
														<span class="lbl"> No </span>
													</label>
									</div>			</div>
									</div>


									<div class="col-md-offset-3 col-md-9">


						<input type="submit" name="btnsubmit"class="btn btn-info" value="Submit">
					</div>
			
			
		</form>
	<?php
include_once("fotter.php");
?>