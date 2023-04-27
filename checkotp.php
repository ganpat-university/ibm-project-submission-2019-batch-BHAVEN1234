<?php
session_start();


$rotp="";
$getotp="";
 
$rotp=$_SESSION['otp'];
// echo $rotp;

$cnn=mysqli_connect("localhost","root","","careathome");
if(!isset($_SESSION['otp']))
{
    header("location:forgot password");
}



if(isset($_POST["btnSubmit"]))
{

    $getotp=$_POST["txt_otp"];
    // echo $getotp;
    if($getotp==$rotp)
    {
       header("location:re password/new password.php");
    }
 else
    {
          echo "<script>alert('OTP not match ..');</script>";
    }
}


?>



 <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
OTP:<input type="text" name="txt_otp" required="">
												<input type="submit" value="done" class="btn btn-info" name="btnSubmit">
													
							
</form>
<?php
	include_once("fotter.php");
?>