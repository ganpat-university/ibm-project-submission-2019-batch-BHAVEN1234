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


// 
			if(isset($_FILES['pic'])){
    $errors= array();
    $file_name = $_FILES['pic']['name'];
    $file_size =$_FILES['pic']['size'];
    $file_tmp =$_FILES['pic']['tmp_name'];
    $file_type=$_FILES['pic']['type'];   
    $exploded = explode('.',$_FILES['pic']['name']);
 	$last_element = end($exploded);
	$file_ext=strtolower($last_element);

    $extensions = array("jpg","png"); 		

    if(in_array($file_ext,$extensions )=== false)
	{
     // $errors[]="Upload only file JPEG or PNG file.";
	echo "<script>alert('Upload only JPEG Or PNG file');</script>";
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
        move_uploaded_file($file_tmp,"../caretaker/caretakerimg/".$file_name);
        // echo "Upload successfully";
    }else{
        print_r($errors);
    }
}

// 

if(isset($_POST["btn"]))
{
	
$crname=$_POST['txt_crname'];
$email=$_POST['txt_email'];
$uname=$_POST['txt_uname'];
$gen=$_POST['rb_gender'];
$pwd=$_POST['txt_password'];
// $pic=$_POST[''];
$contact=$_POST['txt_contactno'];
$serv=$_POST['serv'];
$charge=$_POST['charge'];
$areaid=$_POST['areaid'];
$repass=$_POST['txt_repassword'];





	if($pwd == $repass)
	{
		$pwd = $pwd;

	


$cnn = mysqli_connect("localhost","root","","careathome");

// uname
$member="Select * from member_master where uname='$uname'";
$doctor="Select * from doctor where uname='$uname'";
$lab="Select * from lab where uname='$uname'";
$patient_manager="Select * from patient_manager where uname='$uname'";
$admin="Select * from admin_master where uname='$uname'";
$surgical_store="Select * from surgicalstore where uname='$uname'";
$delivery_master="Select * from delivery_master where uname='$uname'";
$medical_store="Select * from medical_store where uname='$uname'";
$caretaker = "Select * from caretaker_master where uname='$uname'";
// contact 
$memberc="Select * from member_master where contact='$contact'";
$doctorc="Select * from doctor where contact='$contact'";
$labc="Select * from lab where contactno='$contact'";
$patient_managerc="Select * from patient_manager where contactno='$contact'";
// $adminc="Select * from admin_master where contact='$conta'";
$surgical_storec="Select * from surgicalstore where contactno='$contact'";
$delivery_masterc="Select * from delivery_master where contact='$contact'";
$medical_storec="Select * from medical_store where contact='$contact'";
$caretakerc= "Select * from caretaker_master where caretakercontact='$contact'";

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




	$qry="INSERT INTO caretaker_master (caretakename,email,uname,gender,pwd,caretakepic,caretakercontact,services,charges,areaid) VALUES ('$crname','$email','$uname','$gen','$pwd','$file_name','$contact','$serv','$charge','$areaid')";
	// echo $qry;
$con = mysqli_connect("localhost","root","","careathome");
$fire=$con->query($qry);
	echo "<script>alert('Registered Successfuly');</script>";


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


<body>
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">			


<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Caretaker Name </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="txt_crname" maxlength="60"><br><br>
</div>
</div>

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Contact No </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" maxlength="10" minlength="10" pattern="[6|7|8|9][0-9]{9}" type="text" name="txt_contactno"><br><br><br>
</div>
</div>

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="txt_email" maxlength="50"><br><br><br>
</div>
</div>

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Gender </label>
			<div class="col-sm-9">
			<div class="radio">
				<label>
					<input  type="radio" class="ace" name="rb_gender" value="male">
						<span class="lbl"> Male </span>
				</label>
				<label>
					<input  type="radio" class="ace" name="rb_gender" value="female">
						<span class="lbl"> Female </span>
				</label>
			</div>	
			</div>
</div>					


<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> User Name </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="txt_uname" maxlength="30"> <br><br><br>
</div>
</div>

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> password </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="password" name="txt_password" minlength="8" maxlength="20"><br><br><br>
</div>
</div>

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Re-password </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="password" name="txt_repassword" minlength="8" maxlength="20"><br><br><br>
</div>
</div>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">PICTURE:</label>

										<div class="col-sm-9">
											<input type="file" class="col-xs-10 col-sm-5" name="pic" required="">
										</div>
									</div>

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Service </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="serv" maxlength="30"> <br><br><br>
</div>
</div>

<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Charges </label>
<div class="col-sm-9">
			<input class="col-xs-10 col-sm-5" type="text" name="charge" maxlength="30"> <br><br><br>
</div>
</div>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">AREA:</label>

										<div class="col-sm-9">
											<select name="areaid">
												<?php
													$qry1="Select * from area_master";

													$con = mysqli_connect("localhost","root","","careathome");
													$qresult=$con->query($qry1);
													

													while ($row=$qresult->fetch_assoc())
													{
														
													
												?>
												<option value="<?php echo $row['areaid'];?>"><?php echo $row["areaname"];?></option>												
												<?php
													}
												?>
											</select>
										</div>
									</div>

<div class="col-md-offset-3 col-md-9">
		<input class="btn btn-info" type="submit" name="btn" value="Submit">
</div>								

	</form>
</body>


<?php
include_once("fotter.php");
?>