<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V10</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>



<!-- php start -->
<?php

$pass="";
$repass="";
$email="";

if(isset($_POST["btn"]))
{

	$pass=$_POST["password"];
	$repass=$_POST["repassword"];
	$email=$_SESSION["email"];

if($pass == $repass)
{
	$pass = $pass;

	


$cnn = mysqli_connect("localhost","root","","careathome");

// email
$member="Select * from member_master where email='$email'";
$doctor="Select * from doctor where email='$email'";
$lab="Select * from lab where email='$email'";
$patient_manager="Select * from patient_manager where email='$email'";
$surgical_store="Select * from surgicalstore where email='$email'";
$delivery_master="Select * from delivery_master where email='$email'";
$medical_store="Select * from medical_store where email='$email'";





$con = mysqli_connect("localhost","root","","careathome");


//email
$memberresult=$con->query($member);
$membercnt=mysqli_num_rows($memberresult);

$doctorresult=$con->query($doctor);
$doctorcnt=mysqli_num_rows($doctorresult);

$labresult=$con->query($lab);
$labcnt=mysqli_num_rows($labresult);


$patient_managerresult=$con->query($patient_manager);
$patient_managercnt=mysqli_num_rows($patient_managerresult);

$surgical_storeresult=$con->query($surgical_store);
$surgical_storecnt=mysqli_num_rows($surgical_storeresult);

$delivery_masterresult=$con->query($delivery_master);
$delivery_mastercnt=mysqli_num_rows($delivery_masterresult);

$medical_storeresult=$con->query($medical_store);
$medical_storecnt=mysqli_num_rows($medical_storeresult);

//end of email





if($membercnt==1)
{
	$table="member_master";
	$qry="update $table set pwd='$pass' where email='$email'";
	$fire=$con->query($qry);
	echo "<script>alert('member sucessfully');</script>";
}
else
{
	if($doctorcnt==1)
	{
		$table="doctor";
		$qry="update $table set pwd='$pass' where email='$email'";
		$fire=$con->query($qry);
		echo $qry;
		echo "<script>alert('doctor sucessfully');</script>";
	}
	else
	{
		if($patient_managercnt==1)
		{
			$table="patient_manager";
			$qry="update $table set pwd='$pass' where email='$email'";
			$fire=$con->query($qry);
			echo "<script>alert('patient sucessfully');</script>";
		}		
		else
		{
			if($labcnt==1)
			{
				$table="lab";
				$qry="update $table set pwd='$pass' where email='$email'";
	$fire=$con->query($qry);
	echo "<script>alert('lab sucessfully');</script>";
			}		
			else
			{
				if($surgical_storecnt==1)
				{
					$table="surgicalstore";
					$qry="update $table set pwd='$pass' where email='$email'";
	$fire=$con->query($qry);
	echo "<script>alert('surgicalstore sucessfully');</script>";
				}		
				else
				{
					if($delivery_mastercnt==1)
					{
						$table="delivery_master";
						$qry="update $table set pwd='$pass' where email='$email'";
	$fire=$con->query($qry);
	echo "<script>alert('delivery sucessfully');</script>";
					}		
					else
					{
						if($medical_storecnt==1)
						{
							$table="medical_store";
							$qry="update $table set pwd='$pass' where email='$email'";
	$fire=$con->query($qry);
	echo "<script>alert('medical store sucessfully');</script>";
						}		
						else
						{
							echo "<script>alert('Email is Wrong');</script>";		
						}
					}
				}
			}
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
<!-- php end -->





<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="post">
					<span class="login100-form-title p-b-51">
						Enter Your New Password
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" minlength="8" maxlength="20">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Re-Password is required">
						<input class="input100" type="password" name="repassword" placeholder="Re-Password" minlength="8" maxlength="20">
						<span class="focus-input100"></span>
					</div>
										

					<div class="container-login100-form-btn m-t-17">
						<input type="submit" name="btn" class="login100-form-btn" value="Submit">
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>