<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="forgot-password.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div id="highlighted" class="hl-basic hidden-xs">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3 col-lg-10 col-lg-offset-2">
            <h1>
               Forgot Password
            </h1>
         </div>
      </div>
   </div>
</div>

<div id="content" class="interior-page">
<div class="container-fluid">
<div class="row">



<?php



   $cnn=mysqli_connect("localhost","root","","careathome");

      // echo "hii";
if(isset($_POST["btnSubmit"]))
{
      
       $email=$_POST['email'] ;
       $_SESSION['email']=$email;
       

// check email from table

$member="Select * from member_master where email='$email'";
$doctor="Select * from doctor where email='$email'";
$lab="Select * from lab where email='$email'";
$patient_manager="Select * from patient_manager where email='$email'";
// $admin="Select * from admin_master where email='$email'";
$surgical_store="Select * from surgicalstore where email='$email'";
$delivery_master="Select * from delivery_master where email='$email'";
$medical_store="Select * from medical_store where email='$email'";

$con = mysqli_connect("localhost","root","","careathome");

$memberresult=$con->query($member);
$membercnt=mysqli_num_rows($memberresult);

$doctorresult=$con->query($doctor);
$doctorcnt=mysqli_num_rows($doctorresult);

$labresult=$con->query($lab);
$labcnt=mysqli_num_rows($labresult);


$patient_managerresult=$con->query($patient_manager);
$patient_managercnt=mysqli_num_rows($patient_managerresult);

// $adminresult=$con->query($admin);
// $admincnt=mysqli_num_rows($adminresult);

$surgical_storeresult=$con->query($surgical_store);
$surgical_storecnt=mysqli_num_rows($surgical_storeresult);

$delivery_masterresult=$con->query($delivery_master);
$delivery_mastercnt=mysqli_num_rows($delivery_masterresult);

$medical_storeresult=$con->query($medical_store);
$medical_storecnt=mysqli_num_rows($medical_storeresult);






if($membercnt==1)
{
  






       $q=mysqli_query($cnn,"select * from member_master where email='$email'") or die(mysqli_error($cnn));
       $count= mysqli_num_rows($q);
       $row= mysqli_fetch_array($q);
       $otp= rand(100000,900000);
       $_SESSION['otp']=$otp;
      
        if($count>0)
        {
         

            //Load Composer's autoloader
            require 'vendor/autoload.php';

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
           
             
           try {
                //Server settings
                $mail->SMTPDebug =0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
                $mail->Username = 'healofy70@gmail.com';                 // SMTP username
                $mail->Password = 'ovgaxzczrpsgkntk';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('healofy70@gmail.com','Heal0fy_23');
                $mail->addAddress($email, $email);     // Add a recipient
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Forget Password';
                $mail->Body = "Hi, $email your <b>OTP IS $otp</b>";
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                 
                $mail->send();
                echo "<script>alert('OPT Has Been Send To Your Email');window.location='checkotp.php';</script>";
            }
            catch (Exception $e)
            {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        }
        else
        {
            echo "<script>alert('Email Not Found');</script>";
        }






  
}
else
{
  if($doctorcnt==1)
  {
    




       $abc="select * from doctor where email='$email'";
       $q=mysqli_query($cnn,"$abc") or die(mysqli_error($cnn));
       // echo $abc."<br><br>";
       $count= mysqli_num_rows($q);
       // echo $count;
       $row= mysqli_fetch_array($q);
       $otp= rand(100000,900000);
       $_SESSION['otp']=$otp;
      
        if($count>0)
        {
         

            //Load Composer's autoloader
            require 'vendor/autoload.php';

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
           
           try {
                //Server settings
                $mail->SMTPDebug =0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
                $mail->Username = 'healofy70@gmail.com';                 // SMTP username
                $mail->Password = 'ovgaxzczrpsgkntk';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('healofy70@gmail.com','Heal0fy_23');
                $mail->addAddress($email, $email);     // Add a recipient
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Forget Password';
                $mail->Body = "Hi, $email your <b>OTP IS $otp</b>";
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                 
                $mail->send();
                echo "<script>alert('OPT Has Been Send To Your Email');window.location='checkotp.php';</script>";
            }
            catch (Exception $e)
            {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        }
        else
        {
            echo "<script>alert('Email Not Found');</script>";
        }







  }
  else
  {
       if($patient_managercnt==1)
      {
        




       $abc="select * from patient_manager where email='$email'";
       $q=mysqli_query($cnn,"$abc") or die(mysqli_error($cnn));
       // echo $abc."<br><br>";
       $count= mysqli_num_rows($q);
       // echo $count;
       $row= mysqli_fetch_array($q);
       $otp= rand(100000,900000);
       $_SESSION['otp']=$otp;
      
        if($count>0)
        {
         

            //Load Composer's autoloader
            require 'vendor/autoload.php';

            $mail = new PHPMailer(true);   

             try {
                //Server settings
                $mail->SMTPDebug =0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
                $mail->Username = 'healofy70@gmail.com';                 // SMTP username
                $mail->Password = 'ovgaxzczrpsgkntk';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('healofy70@gmail.com','Heal0fy_23');
                $mail->addAddress($email, $email);     // Add a recipient
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Forget Password';
                $mail->Body = "Hi, $email your <b>OTP IS $otp</b>";                      // Passing `true` enables exceptions
      
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                 
                $mail->send();
                echo "<script>alert('OPT Has Been Send To Your Email');window.location='checkotp.php';</script>";
            }
            catch (Exception $e)
            {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        }
        else
        {
            echo "<script>alert('Email Not Found');</script>";
        }










      }   
      else
      {
        if($labcnt==1)
        {
          





       $abc="select * from lab where email='$email'";
       $q=mysqli_query($cnn,"$abc") or die(mysqli_error($cnn));
       // echo $abc."<br><br>";
       $count= mysqli_num_rows($q);
       // echo $count;
       $row= mysqli_fetch_array($q);
       $otp= rand(100000,900000);
       $_SESSION['otp']=$otp;
      
        if($count>0)
        {
         

            //Load Composer's autoloader
            require 'vendor/autoload.php';

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
           
            try {
                //Server settings
                $mail->SMTPDebug =0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
                $mail->Username = 'healofy70@gmail.com';                 // SMTP username
                $mail->Password = 'ovgaxzczrpsgkntk';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('healofy70@gmail.com','Heal0fy_23');
                $mail->addAddress($email, $email);     // Add a recipient
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Forget Password';
                $mail->Body = "Hi, $email your <b>OTP IS $otp</b>";
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                 
                $mail->send();
                echo "<script>alert('OPT Has Been Send To Your Email');window.location='checkotp.php';</script>";
            }
            catch (Exception $e)
            {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        }
        else
        {
            echo "<script>alert('Email Not Found');</script>";
        }









        }   
        else
        {
          if($surgical_storecnt==1)
          {
           





       $abc="select * from surgicalstore where email='$email'";
       $q=mysqli_query($cnn,"$abc") or die(mysqli_error($cnn));
       // echo $abc."<br><br>";
       $count= mysqli_num_rows($q);
       // echo $count;
       $row= mysqli_fetch_array($q);
       $otp= rand(100000,900000);
       $_SESSION['otp']=$otp;
      
        if($count>0)
        {
         

            //Load Composer's autoloader
            require 'vendor/autoload.php';

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
           
            try {
                //Server settings
                $mail->SMTPDebug =0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
                $mail->Username = 'healofy70@gmail.com';                 // SMTP username
                $mail->Password = 'ovgaxzczrpsgkntk';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('healofy70@gmail.com','Heal0fy_23');
                $mail->addAddress($email, $email);     // Add a recipient
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Forget Password';
                $mail->Body = "Hi, $email your <b>OTP IS $otp</b>";
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                 
                $mail->send();
                echo "<script>alert('OPT Has Been Send To Your Email');window.location='checkotp.php';</script>";
            }
            catch (Exception $e)
            {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        }
        else
        {
            echo "<script>alert('Email Not Found');</script>";
        }










          }   
          else
          {
            if($delivery_mastercnt==1)
            {
              








              $abc="select * from delivery_master where email='$email'";
       $q=mysqli_query($cnn,"$abc") or die(mysqli_error($cnn));
       // echo $abc."<br><br>";
       $count= mysqli_num_rows($q);
       // echo $count;
       $row= mysqli_fetch_array($q);
       $otp= rand(100000,900000);
       $_SESSION['otp']=$otp;
      
        if($count>0)
        {
         

            //Load Composer's autoloader
            require 'vendor/autoload.php';

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
           
            try {
                //Server settings
                $mail->SMTPDebug =0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
                $mail->Username = 'healofy70@gmail.com';                 // SMTP username
                $mail->Password = 'ovgaxzczrpsgkntk';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('healofy70@gmail.com','Heal0fy_23');
                $mail->addAddress($email, $email);     // Add a recipient
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Forget Password';
                $mail->Body = "Hi, $email your <b>OTP IS $otp</b>";
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                 
                $mail->send();
                echo "<script>alert('OPT Has Been Send To Your Email');window.location='checkotp.php';</script>";
            }
            catch (Exception $e)
            {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        }
        else
        {
            echo "<script>alert('Email Not Found');</script>";
        }













            }   
            else
            {
              if($medical_storecnt==1)
              {
                









       $abc="select * from medical_store where email='$email'";
       $q=mysqli_query($cnn,"$abc") or die(mysqli_error($cnn));
       // echo $abc."<br><br>";
       $count= mysqli_num_rows($q);
       // echo $count;
       $row= mysqli_fetch_array($q);
       $otp= rand(100000,900000);
       $_SESSION['otp']=$otp;
      
        if($count>0)
        {
         

            //Load Composer's autoloader
            require 'vendor/autoload.php';

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
           
           try {
                //Server settings
                $mail->SMTPDebug =0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
                $mail->Username = 'healofy70@gmail.com';                 // SMTP username
                $mail->Password = 'ovgaxzczrpsgkntk';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('healofy70@gmail.com','Heal0fy_23');
                $mail->addAddress($email, $email);     // Add a recipient
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Forget Password';
                $mail->Body = "Hi, $email your <b>OTP IS $otp</b>";
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                 
                $mail->send();
                echo "<script>alert('OPT Has Been Send To Your Email');window.location='checkotp.php';</script>";
            }
            catch (Exception $e)
            {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        }
        else
        {
            echo "<script>alert('Email Not Found');</script>";
        }










              }   
              else
              {
                echo "<script>alert('Either Email Is Worng')</script>";
              }
            }
          }
        }
      }
    }
  }









  }

?>









<center>
<div class="col-sm-9 col-md-9 col-lg-10 content equal-height">
  <div class="content-area-right">
  
      <div class="row">

 <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

         <div class="col-md-5 forgot-form">
            <p>
               Please enter your email address below and we will send you information to change your password.
            </p>

            <label class="label-default" for="un">Email Address</label> <input name="email" class="form-control" type="email"><br>
            <input type="submit" value="Reset" class="btn btn-primary" name="btnSubmit">
            
         </div>
         <div class="col-md-5 forgot-return" style="display:none;">
            <h3>
               Reset Password Sent
            </h3>
            <p>
               An email has been sent to your address with a reset password you can use to access your account.
            </p>
         </div>
      </div>
   </form>
   </div>
</div>
</center>