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
	$doctorid="";
$docfname="";
$doclname="";
			$conta="";
			$email="";
			$un="";
			$pass="";
			$gen="";
			$experience="";
			$degree_cer="";
			$speciality="";

if(isset($_POST["btnsubmit"]))
{



	$doctorid=$_GET["Id"];
	$docfname =	$_POST["txt_name"];
	$doclname =	$_POST["txt_lname"];
	$conta=$_POST["txt_con"];
	$email=$_POST["txt_email"];

	$gen=$_POST["gen"];
	$experience=$_POST["txt_exp"];
	$degree_cer="abc.jpg";
	$speciality=$_POST["spel"];
			
 				

$cnn = mysqli_connect("localhost","root","","careathome");


// contact 
$memberc="Select * from member_master where contact='$conta'";
$doctorc="Select * from doctor where contact='$conta' and doctorid!='$doctorid'";
// echo $doctorc;
$labc="Select * from lab where contactno='$conta'";
$patient_managerc="Select * from patient_manager where contactno='$conta'";
// $adminc="Select * from admin_master where contact='$conta'";
$surgical_storec="Select * from surgicalstore where contactno='$conta'";
$delivery_masterc="Select * from delivery_master where contact='$conta'";
$medical_storec="Select * from medical_store where contact='$conta'";
$caretakerc= "Select * from caretaker_master where caretakercontact='$conta'";

// email
$membere="Select * from member_master where email='$email'";
$doctore="Select * from doctor where email='$email' and doctorid!='$doctorid'";
$labe="Select * from lab where email='$email'";
$patient_managere="Select * from patient_manager where email='$email'";
// $admine="Select * from admin_master where email='$email'";
$surgical_storee="Select * from surgicalstore where email='$email'";
$delivery_mastere="Select * from delivery_master where email='$email'";
$medical_storee="Select * from medical_store where email='$email'";
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



 				$qry="update doctor set docfname='$docfname',doclname='$doclname',contact='$conta',email='$email',gender='$gen',experience='$experience',degree_cer='$degree_cer',dcname='$speciality' where doctorid='$doctorid'";

 				// echo $qry;
			

 				$con = mysqli_connect("localhost","root","","careathome");
				$fire=$con->query($qry);
echo ("<script>location.href='doctorview.php'</script>");
// echo "done...............................................";


	echo "<script>alert('Update sucessfully');</script>";	
	// header("Location:lab.php");					
}
}




}
			$doctorid=$_GET["Id"];
			$qes="Select * from doctor where doctorid = $doctorid";
			$cnn=mysqli_connect("localhost","root","","careathome");
			$qry=$cnn->query($qes);
			$res=$qry->fetch_assoc();

			$docfname=$res["docfname"];
			$doclname=$res["doclname"];
			$conta=$res["contact"];
			$email=	$res["email"];
			$uname=	$res["uname"];
			$pwd=	$res["pwd"];
			
	$gen=$res["gender"];

	$chkgm="";
	$chkgf="";

	if($gen=="Male")
{
	$chkgm="checked";
}
else
{
	$chkgf="checked";
}
$experience=$res["experience"];
$degree_cer=$res["degree_cer"];
$speciality=$res["dcname"];
			
		
 				

		

		?>
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> docfname</label>

										<div class="col-sm-9">
											<input type="text" name="txt_name" class="col-xs-10 col-sm-5" required="" value="<?php echo $docfname; ?>"> <br><br>
										</div>
									</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> doclname</label>

										<div class="col-sm-9">
											<input type="text" name="txt_lname" class="col-xs-10 col-sm-5" required="" value="<?php echo $docfname; ?>"> <br><br>
										</div>
									</div>


<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> contact	</label>

										<div class="col-sm-9">
											<input type="text" name="txt_con"class="col-xs-10 col-sm-5" required="" minlength="10" maxlength="10" value="<?php echo $conta; ?>"><br><br><br>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> email</label>

										<div class="col-sm-9">
											<input type="email" name="txt_email"class="col-xs-10 col-sm-5" required="" value="<?php echo $email; ?>"><br> <br><br>
										</div>
									</div>
								

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Gender </label>
									<div class="col-sm-9">
									<div class="radio">
													<label>
														<input type="radio" class="ace" name="gen" text="Male" required="" value="Male"<?php echo $chkgm;?>>
														<span class="lbl"> Male </span>
													</label>
											
													<label>
														<input type="radio" class="ace" name="gen" text="Female" required="" value="Female"<?php echo $chkgf;?>>
														<span class="lbl"> Female </span>
													</label>
									</div>			</div>
									</div>


								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> experince:  </label>

										<div class="col-sm-9">
												<input type="text"  class="col-xs-10 col-sm-5" name="txt_exp" required="" value="<?php echo $experience; ?>">
  									 	</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> speciality: </label>
											

										<div class="col-sm-9">																	
									<select class="col-xs-10 col-sm-5" name="spel" required="">
											<option value="Audiologist">Audiologist</option>
											<option value="Allergist">Allergist</option>
											<option value="Anesthesiologist">Anesthesiologist</option>
											<option value="Cardiologist">Cardiologist</option>
  											<option value="Dentist">Dentist</option>
											<option value="Dermatologist">Dermatologist</option>
											<option value="Endocrinologist">Endocrinologist</option>
											<option value="Epidemiologist">Epidemiologist</option>
											<option value="Gynecologist">Gynecologist</option>
											<option value="Immunologist">Immunologist</option>
  											<option value="Infectious Disease Specialist">Infectious Disease Specialist</option>
											<option value="Internal Medicine Specialist">Internal Medicine Specialist</option>
											<option value="Medical Geneticist">Medical Geneticist</option>
											<option value="Microbiologist">Microbiologist</option>
											<option value="Neonatologist">Neonatologist</option>
											<option value="Neurologist">Neurologist</option>
  											<option value="Neurosurgeon">Neurosurgeon</option>
											<option value="Obstetrician">Obstetrician</option>
											<option value="Oncologist">Oncologist</option>
											<option value="Orthopedic Surgeon">Orthopedic Surgeon</option>
											<option value="ENT Specialist">ENT Specialist</option>
											<option value="Pediatrician">Pediatrician</option>
  											<option value="Physiologist">Physiologist</option>
											<option value="Plastic Surgeon">Plastic Surgeon</option>
											<option value="Podiatrist">Podiatrist</option>
											<option value="Psychiatrist">Psychiatrist</option>
											<option value="Radiologist">Radiologist</option>
											<option value="Rheumatologist">Rheumatologist</option>
  											<option value="Surgeon">Surgeon</option>
											<option value="Urologist">Urologist</option>
											<option value="Audiologist">Audiologist</option>
									</select>
									</div>
									</div>
									<!-- <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> degree_cer</label>

											&nbsp &nbsp
											<div class="fileUpload btn btn-primary">
    											<span>Upload</span>
    											<input type="file" class="upload" name="deg" required="">
											</div>		
									</div> -->
				<div class="col-md-offset-3 col-md-9">


						<input type="submit" name="btnsubmit"class="btn btn-info" value="Submit">
					</div>
			
			
		</form>
	<?php
include_once("fotter.php");
?>