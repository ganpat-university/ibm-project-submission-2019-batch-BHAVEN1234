<?php
session_start();
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
	include_once("hader.php");
?>

<?php

$userno="";
$docfname="";
$doclname="";
$lastdegree="";
$docpic="";
$experience="";
$likecounter="";
$viewsofdoc="";
$docreg="";
$email="";
$contact="";
$gender="";
$uname="";
$password="";
$isactive="";
$imgofcerty="";
$verified="";
$prescreimg="";
$speciality="";
$available="";
// $file_name="";
// $a="";


if(isset($_FILES['doclastdegree'])){
    $errors= array();
    $file_name = $_FILES['doclastdegree']['name'];
    $file_size =$_FILES['doclastdegree']['size'];
    $file_tmp =$_FILES['doclastdegree']['tmp_name'];
    $file_type=$_FILES['doclastdegree']['type'];   
    $exploded = explode('.',$_FILES['doclastdegree']['name']);
 	$last_element = end($exploded);
	$file_ext=strtolower($last_element);

    $extensions = array("jpg","png","pdf","doc","docx"); 		

    if(in_array($file_ext,$extensions )=== false)
	{
     // $errors[]="Upload only file JPEG,PNG,doc,docx or pdf file.";
	echo "<script>alert('Upload only JPEG,PNG,doc,docx or pdf file');</script>";

     $a='1';
    }
    else
    {
    	$a='0';
    }

    // echo "<br>".$a."<br>";
    // echo $file_name."<br>";
    if($file_size > 2097152){
    // $errors[]='File size must < 2 MB';
	echo "<script>alert('File size must < 2 MB');</script>";

    }				

    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"degree/".$file_name);
        // echo "Upload successfully";
    }else{
        print_r($errors);
    }
}



// 
	if(isset($_FILES['docpic'])){
    $errorsdp= array();
    $file_namedp = $_FILES['docpic']['name'];
    $file_sizedp =$_FILES['docpic']['size'];
    $file_tmpdp =$_FILES['docpic']['tmp_name'];
    $file_typedp=$_FILES['docpic']['type'];   
    $explodeddp = explode('.',$_FILES['docpic']['name']);
 	$last_elementdp = end($explodeddp);
	$file_extdp=strtolower($last_elementdp);

    $extensionsdp = array("jpg","png"); 		

    if(in_array($file_extdp,$extensionsdp)=== false)
	{
	echo "<script>alert('Upload only JPEG Or PNG file');</script>";

    	// $errorsdp[]="Upload only file JPEG or PNG file.";
     	$adp='1';
    }
    else
    {
    	$adp='0';
    }

    // echo "<br>".$a."<br>";
    // echo $file_name."<br>";
    if($file_sizedp > 2097152){
    // $errorsdp[]='File size must < 2 MB';
	echo "<script>alert('File size must < 2 MB');</script>";

    }				

    if(empty($errorsdp)==true){
        move_uploaded_file($file_tmpdp,"img/".$file_namedp);
        // echo "Upload successfully";
    }else{
        print_r($errorsdp);
    }
}
// 

if(isset($_FILES['imgofcerty'])){
    $errorsc= array();
    $file_namec = $_FILES['imgofcerty']['name'];
    $file_sizec =$_FILES['imgofcerty']['size'];
    $file_tmpc =$_FILES['imgofcerty']['tmp_name'];
    $file_typec=$_FILES['imgofcerty']['type'];   
    $explodedc = explode('.',$_FILES['imgofcerty']['name']);
 	$last_elementc = end($explodedc);
	$file_extc=strtolower($last_elementc);

    $extensionsc = array("jpg","png"); 		

    if(in_array($file_extc,$extensionsc )=== false)
	{
     // $errorsc[]="Upload only file JPEG or PNG file.";
	echo "<script>alert('Upload only JPEG Or PNG file');</script>";

     $ac='1';
    }
    else
    {
    	$ac='0';
    }

    // echo "<br>".$a."<br>";
    // echo $file_name."<br>";
    if($file_sizec > 2097152){
    // $errorsc[]='File size must < 2 MB';
	echo "<script>alert('File size must < 2 MB');</script>";
    	
    }				

    if(empty($errorsc)==true){
        move_uploaded_file($file_tmpc,"certy/".$file_namec);
        // echo "Upload successfully";
    }else{
        print_r($errorsc);
    }
}

// 


if(isset($_POST["btnSubmit"]))
{
	$userno="1";
	$docfname=$_POST["txtfirstname"];
	$doclname=$_POST["txtlastname"];
	//$lastdegree=$_FILES['file']['doclastdegree'];
    //$docpic=$_FILES['file']['docpic'];
    $experience=$_POST["txtexperience"];
    $likecounter="1";
    $viewsofdoc="100";
    $docreg=date('Y-m-d H:i:s');
    $email=$_POST["txtemail"];
    $conta=$_POST["txtcontact"];
    $gender=$_POST["rage"];
    $un=$_POST["txtuname"];
    $password=$_POST["txtpassword"];
    $repassword=$_POST["txtrepassword"];
    $isactive="Yes";
    //$imgofcerty=$_FILES['file']['imgofcerty'];
    $verified="Yes";
    // $lastdegree='';
    // $docpic='xyz.jpg';
    $imgofcerty='ab.jpg';
   
    $speciality=$_POST["expert_in_fild"];
    $available="Yes";
    $conf=$_POST["txtcon"];



// start

   
		// $cnn = mysqli_connect("localhost","root","","careathome");
		 // $qry="INSERT INTO  (file) VALUES ('$file_name')";
		// $result=$cnn->query($qry);
		// echo $qry;
	

// end

/*if($_FILES['file']['name'] != "" )
{
move_uploaded_file($_FILES["file"]["tmp_name"],
      "img/" . $_FILES["file"]["name"]);
	
}
else
{
	echo "File is not selected";
}*/

	if($experience == "select")
	{
		echo "<script>alert('Select Doctor Experience');</script>";
		$experience = "";
	}
	else
	{
	if($password == $repassword)
	{
	
	

	$con = mysqli_connect("localhost","root","","careathome");




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
	// echo $a.$adp.$ac;
 if($a=='1')
	{
	}
	else
	{
		if($adp=='1')
		{

		}
		else
		{
			if($ac=='1')
				{

				}
				else
				{
		$qry="Insert into doctor(docfname,doclname,lastdegree,docpic,experience,lcnt,viewcnt,doreg,email,contact,gender,uname,pwd,isactive,degree_cer,verified,dcname,available,Consultancyfee) values('$docfname','$doclname','$file_name','$file_namedp','$experience','$likecounter','$viewsofdoc','$docreg','$email','$conta','$gender','$un','$password','$isactive','$file_namec','$verified','$speciality','$available','$conf')";
		//echo $qry;
	
$result=$con->query($qry);

echo "<script>alert('Registered Successfully');</script>";
// echo ("<script>location.href='../login.php'</script>");
}}}
}}}
	}
	else
	{
		echo "<script>alert('Password and Re-Password is wrong');</script>";
		
	}
			
	}

}

?> 



<div class="page-header">

							<h1>
								Doctor Registration
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>

						<div class="page-header">

						<form class="form-horizontal" enctype="multipart/form-data" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First Name </label>

										<div class="col-sm-9">
											<input type="text" placeholder="First Name" class="col-xs-10 col-sm-5" pattern="[a-zA-Z]{2,30}" name="txtfirstname" required="" maxlength="30">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Last Name </label>

										<div class="col-sm-9">
											<input type="text" placeholder="Last Name" class="col-xs-10 col-sm-5" pattern="[a-zA-Z]{2,30}" name="txtlastname" required="" maxlength="30">
											
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Doctor Last Degree </label>
												&nbsp &nbsp
											<div class="fileUpload btn btn-primary">
    											<span>Upload</span>
    											<input type="file" class="upload" name="doclastdegree" required="">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Doctor Photo </label>
											&nbsp &nbsp
											<div class="fileUpload btn btn-primary">
    											<span>Upload</span>
    											<input type="file" class="upload" name="docpic" required="">
											</div>
									</div>

									


										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Doctor Experience </label>
											

										<div class="col-sm-9">																	
									<select class="col-xs-10 col-sm-5" name="txtexperience" required="">
											<option value="Select">Select</option>
											<option value="less then 1 year">Less then 1 year</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
  											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
  											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
  											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
  											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
  											<option value="29">29</option>
											<option value="30">30</option>
											<option value="more then 30">More Then 30</option>
									</select>
									</div>
									</div>





									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> User Name </label>

										<div class="col-sm-9">
											<input type="text" placeholder="User name" class="col-xs-10 col-sm-5" name="txtuname" maxlength="30" required="">		
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Email </label>

										<div class="col-sm-9">
											<input type="email" placeholder="Email" class="col-xs-10 col-sm-5" name="txtemail" maxlength="50" required="">
										</div>
									</div>	

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Contact </label>

										<div class="col-sm-9">
											<input type="text" placeholder="Contact" class="col-xs-10 col-sm-5" pattern="[6|7|8|9][0-9]{9}" name="txtcontact" minlength="10" maxlength="10" required="">
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

									
									<br>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Certificate Image </label>

											&nbsp &nbsp
											<div class="fileUpload btn btn-primary">
    											<span>Upload</span>
    											<input type="file" class="upload" name="imgofcerty" required="">
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
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Consultancy Fee </label>

										<div class="col-sm-9">
												<input type="text" placeholder="Consultancy Fee" class="col-xs-10 col-sm-5" name="txtcon" minlength="1" maxlength="4" required="">
  									 	</div>
									</div>							
									
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Expert in Fild </label>
											

										<div class="col-sm-9">																	
									<select class="col-xs-10 col-sm-5" name="expert_in_fild" required="">
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
								
								
								
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
										<input type="submit" class="btn btn-info" name="btnSubmit">
										

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