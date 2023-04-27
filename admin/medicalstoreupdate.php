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

			$mdistrna="";
			$contact="";
			$email="";
			$uname="";
			$pwd="";


if(isset($_POST["btnsubmit"]))
{
			$medistoid=$_GET["Id"];
			$mdistrna=	$_POST["txt_name"];
			$conta=	$_POST["txt_con"];
			$email=	$_POST["txt_email"];
			
	

			$cnn = mysqli_connect("localhost","root","","careathome");


// contact 
$memberc="Select * from member_master where contact='$conta'";
$doctorc="Select * from doctor where contact='$conta'";
$labc="Select * from lab where contactno='$conta'";
$patient_managerc="Select * from patient_manager where contactno='$conta'";
// $adminc="Select * from admin_master where contact='$conta'";
$surgical_storec="Select * from surgicalstore where contactno='$conta'";
$delivery_masterc="Select * from delivery_master where contact='$conta'";
$medical_storec="Select * from medical_store where contact='$conta' and medistoid != '$medistoid'";
$caretakerc= "Select * from caretaker_master where caretakercontact='$conta'";

// email
$membere="Select * from member_master where email='$email'";
$doctore="Select * from doctor where email='$email'";
$labe="Select * from lab where email='$email'";
$patient_managere="Select * from patient_manager where email='$email'";
// $admine="Select * from admin_master where email='$email'";
$surgical_storee="Select * from surgicalstore where email='$email'";
$delivery_mastere="Select * from delivery_master where email='$email'";
$medical_storee="Select * from medical_store where email='$email' and medistoid != '$medistoid'";
// $caretakere= "Select * from caretaker_master where email='$email'";



$con = mysqli_connect("localhost","root","","careathome");


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

$doctoerresult=$con->query($doctore);
$doctorecnt=mysqli_num_rows($doctoerresult);

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



if($memberecnt==1 || $doctorecnt==1|| $patient_managerecnt==1 || $labecnt==1 || $surgical_storeecnt==1 || $delivery_masterecnt==1 || $delivery_masterecnt==1 || $medical_storeecnt==1)
{
	echo "<script>alert('email exist');</script>";
}
else
{

 				
 			$qry="update medical_store set medicalstorename='$mdistrna',contact='$conta',email='$email' where medistoid='$medistoid'";

 				// echo $qry;
			

 				$con = mysqli_connect("localhost","root","","careathome");
				$fire=$con->query($qry);
				}
}


}

// echo "done...............................................";

			$medistoid=$_GET["Id"];
			$qes="Select * from medical_store where medistoid = $medistoid";
			$cnn=mysqli_connect("localhost","root","","careathome");
			$qry=$cnn->query($qes);
			$res=$qry->fetch_assoc();

			$mdistrna=$res["medicalstorename"];
			$conta=$res["contact"];
			$email=	$res["email"];
			
		


		
 				

		

		?>
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> medicalstorename </label>

										<div class="col-sm-9">
											<input type="text" name="txt_name" required="" class="col-xs-10 col-sm-5" pattern="[a-zA-Z]{2,30}" value="<?php echo $mdistrna; ?>"> <br><br>
										</div>
									</div>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> contact	</label>

										<div class="col-sm-9">
											<input type="text" name="txt_con" pattern="[0-9]{0,10}" required="" minlength="10" maxlength="10" class="col-xs-10 col-sm-5" value="<?php echo $conta; ?>"><br><br><br>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> email	 </label>

										<div class="col-sm-9">
											<input type="email" name="txt_email" required="" class="col-xs-10 col-sm-5" value="<?php echo $email; ?>"><br> <br><br>
										</div>
									</div>
									
									
									<div class="col-md-offset-3 col-md-9">


						<input type="submit" name="btnsubmit"class="btn btn-info" value="Submit">
					</div>
			
			
		</form>	<?php
include_once("fotter.php");
?>