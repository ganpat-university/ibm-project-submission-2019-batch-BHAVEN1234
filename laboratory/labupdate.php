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
        $name="";
        $number="";
        $labid="";
		$labnmame="";
		$conta="";
		$un="";
		$pass="";
		$address="";
		$email="";
		

       
if(isset($_POST["btn"]))
{          
           
	        $labid=$_GET["Id"];       
		    $labname=$_POST["labname"];
 		    $conta=$_POST["contactno"];
 			// $un=$_POST["uname"];
 			// $pass=$_POST["password"];
 			$address=$_POST["address"];
 			$email=$_POST["email"];
            date_default_timezone_set('Asia/Kolkata');
			$abc=date('Y-m-d');
	

$cnn = mysqli_connect("localhost","root","","careathome");

// uname
// $member="Select * from member_master where uname='$un'";
// $doctor="Select * from doctor where uname='$un'";
// $lab="Select * from lab where uname='$un'";
// $patient_manager="Select * from patient_manager where uname='$un'";
// $admin="Select * from admin_master where uname='$un'";
// $surgical_store="Select * from surgicalstore where uname='$un'";
// $delivery_master="Select * from delivery_master where uname='$un'";
// $medical_store="Select * from medical_store where uname='$un'";
// $caretaker = "Select * from caretaker_master where uname='$un'";
// contact 
$memberc="Select * from member_master where contact='$conta'";
$doctorc="Select * from doctor where contact='$conta'";
$labc="Select * from lab where contactno='$conta' and labid != '$labid'";
// echo $labc;
$patient_managerc="Select * from patient_manager where contactno='$conta'";
// $adminc="Select * from admin_master where contact='$conta'";
$surgical_storec="Select * from surgicalstore where contactno='$conta'";
$delivery_masterc="Select * from delivery_master where contact='$conta'";
$medical_storec="Select * from medical_store where contact='$conta'";
$caretakerc= "Select * from caretaker_master where caretakercontact='$conta'";

// email
$membere="Select * from member_master where email='$email'";
$doctore="Select * from doctor where email='$email'";
$labe="Select * from lab where email='$email' and labid!='$labid'";
$patient_managere="Select * from patient_manager where email='$email'";
// $admine="Select * from admin_master where email='$email'";
$surgical_storee="Select * from surgicalstore where email='$email'";
$delivery_mastere="Select * from delivery_master where email='$email'";
$medical_storee="Select * from medical_store where email='$email'";
// $caretakere= "Select * from caretaker_master where email='$email'";



$con = mysqli_connect("localhost","root","","careathome");
// uname
// $memberresult=$con->query($member);
// $membercnt=mysqli_num_rows($memberresult);

// $doctorresult=$con->query($doctor);
// $doctorcnt=mysqli_num_rows($doctorresult);

// $labresult=$con->query($lab);
// $labcnt=mysqli_num_rows($labresult);

// $patient_managerresult=$con->query($patient_manager);
// $patient_managercnt=mysqli_num_rows($patient_managerresult);

// $adminresult=$con->query($admin);
// $admincnt=mysqli_num_rows($adminresult);

// $surgical_storeresult=$con->query($surgical_store);
// $surgical_storecnt=mysqli_num_rows($surgical_storeresult);

// $delivery_masterresult=$con->query($delivery_master);
// $delivery_mastercnt=mysqli_num_rows($delivery_masterresult);

// $medical_storeresult=$con->query($medical_store);
// $medical_storecnt=mysqli_num_rows($medical_storeresult);

// $caretakerresult=$con->query($caretaker);
// $caretakercnt=mysqli_num_rows($caretakerresult);

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




// if($membercnt==1 || $doctorcnt==1 || $admincnt==1 || $patient_managercnt==1 || $labcnt==1 || $surgical_storecnt==1 || $delivery_mastercnt==1 || $medical_storecnt==1 || $caretakercnt==1)
// {
	
// 	echo "<script>alert('user name exist');</script>";
// }
// else
// {
	
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




	$qry="update lab SET labname='$labname',contactno='$conta',address='$address',email='$email' WHERE labid='$labid'";
	// echo $qry;
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);

// echo "updated.";

	echo "<script>alert('Update sucessfully');</script>";	
	// header("Location:lab.php");					
	echo ("<script>location.href='lab.php'</script>");

}
}




}
          $labid=$_GET["Id"];
          // echo "<br><br>".$labid;
          $qes="select * from lab where labid=$labid";
          $con = mysqli_connect("localhost","root","","careathome");
          $qes=$con->query($qes);
          $res=$qes->fetch_assoc();
          	$labname=$res["labname"];
	      	  
 		    $conta=$res["contactno"];
 			// $un=$res["uname"];
 			// $pass=$res["pwd"];
 			$address=$res["address"];
 			$email=$res["email"];

?>



	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
	
	<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> LABORATORY NAME: </label>

										<div class="col-sm-9">
											<input type="text"  class="col-xs-10 col-sm-5" name="labname" required="" pattern="[a-zA-Z]{2,30}" maxlength="60" value="<?php echo $labname; ?>"><br><br>
										</div>
									</div>
									

										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> CONTACT: </label>

										<div class="col-sm-9">
											<input type="text"  class="col-xs-10 col-sm-5" pattern="[0-9]{0,10}" name="contactno" minlength="10" maxlength="10" required="" value="<?php echo $conta; ?>">
										</div>
									</div>

								<!-- 		<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">USER NAME:</label>

										<div class="col-sm-9">
											<input type="text" class="col-xs-10 col-sm-5" name="uname" required="" maxlength="30" value="<?php// echo $un; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">PASSWORD:</label>

										<div class="col-sm-9">
											<input type="password" class="col-xs-10 col-sm-5" name="password" required="" minlength="8" maxlength="20" value="<?php// echo $pass; ?>">
										</div>
									</div> -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ADDRESS:</label>

										<div class="col-sm-9">
											<input type="text" class="col-xs-10 col-sm-5" name="address" required="" maxlength="100" value="<?php echo $address; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">EMAIL:</label>

										<div class="col-sm-9">
											<input type="email" class="col-xs-10 col-sm-5" name="email" required="" maxlength="50" value="<?php echo $email; ?>">
										</div>
									</div>
	
	
									<div class="col-md-offset-4 col-md-9">
            <input type="submit" class="btn btn-info" name="btn">
        </div>
			
	</form>
