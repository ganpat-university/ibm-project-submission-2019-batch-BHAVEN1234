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
    $contact=$_POST["txtcontact"];
    $gender=$_POST["rage"];
    $uname=$_POST["txtuname"];
    $password=$_POST["txtpassword"];
    $repassword=$_POST["txtrepassword"];
    $isactive="Yes";
    //$imgofcerty=$_FILES['file']['imgofcerty'];
    $verified="Yes";
    $lastdegree='abc.jpg';
    $docpic='xyz.jpg';
    $imgofcerty='ab.jpg';
   
    $speciality=$_POST["expert_in_fild"];
    $available="Yes";


/*if($_FILES['file']['name'] != "" )
{
move_uploaded_file($_FILES["file"]["tmp_name"],
      "img/" . $_FILES["file"]["name"]);
	
}
else
{
	echo "File is not selected";
}*/

	if($txtexperience == "select")
	{
		echo "<script>alert('Select Doctor Experience');</script>";
		$txtexperience = "";
	}
	else
	{
		$txtexperience = $txtexperience;
	}

	if($password == $repassword)
	{
		$password = $password;
	}
	else
	{
		echo "<script>alert('Password and Re-Password is wrong');</script>";
		$password = "";
	}

$qry1="Select * from doctor where uname='$uname'";


$con = mysqli_connect("localhost","root","","careathome");

$resultd=$con->query($qry1);
$cntd=mysqli_num_rows($resultd);


if($cntd==1)
{
	echo "<script>alert('user name exist');</script>";
}
else
{
		$qry="Insert into doctor(docfname,doclname,lastdegree,docpic,experience,lcnt,viewcnt,doreg,email,contact,gender,uname,pwd,isactive,degree_cer,verified,dcname,available) values('$docfname','$doclname','$lastdegree','$docpic','$experience','$likecounter','$viewsofdoc','$docreg','$email','$contact','$gender','$uname','$password','$isactive','$imgofcerty','$verified','$speciality','$available')";

$result=$con->query($qry);

echo "<script>alert('Registration sucessfully');</script>";

	
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

						<form class="form-horizontal" role="form" method="post">
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
											<input type="text" placeholder="experience" class="col-xs-10 col-sm-5" name="" required="">		
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
											<input type="text" placeholder="User name" class="col-xs-10 col-sm-5" name="txtuname" required="">		
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Email </label>

										<div class="col-sm-9">
											<input type="email" placeholder="Email" class="col-xs-10 col-sm-5" name="txtemail" required="">
										</div>
									</div>	

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Contact </label>

										<div class="col-sm-9">
											<input type="text" placeholder="Contact" class="col-xs-10 col-sm-5" name="txtcontact" required="">
										</div>
									</div>	

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password </label>

										<div class="col-sm-9">
											<input type="password" placeholder="Password" class="col-xs-10 col-sm-5" name="txtpassword" required="">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Re-Password </label>

										<div class="col-sm-9">
												<input type="password" placeholder="Re Enter Password" class="col-xs-10 col-sm-5" name="txtrepassword" required="">
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
							
							</form></div>

<?php
	include_once("fotter.php");
?>