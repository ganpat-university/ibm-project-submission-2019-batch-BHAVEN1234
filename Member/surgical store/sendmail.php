<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

	if(!isset($_SESSION['email']))
	{
		header("location:login.php");
	}
	else
	{
		//echo "<script>alert('ok');</script>";
		$con=mysqli_connect("localhost","root","","careathome");
	
      // echo "hii";




       $email=$_SESSION['email'] ;
    //   $_SESSION['email']=$email;
      


      $surproid=$_SESSION['surproid'];
      $surproname= $_SESSION['sn'];
      $img=$_SESSION['img'];

                   echo "<img src='$img' height=100px width=200px>"."<br>";

    //  $q=mysqli_query($con,"select * from surproduct where surproid ='{$surproid}'") or die(mysqli_error($con));
       $q1=mysqli_query($con,"select * from member_master where email='{$email}'") or die(mysqli_error($con));
      //    $memfname=$_SESSION['memfname'];
      // $memlname=$_SESSION['memlname'];
      $memfname=$_SESSION["memberfname"];
    $memlname=$_SESSION["memberlname"];
   
      // echo "select * from member_master where email='{$email}'";
   
      
               
       $count1= mysqli_num_rows($q1);
       
      
      // $otp= rand(100000,900000);
       //$_SESSION['otp']=$otp;


       $row1=mysqli_fetch_array($q1);
      
        if( $count1>0)
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
                $mail->Username = 'careathomeljp@gmail.com';                 // SMTP username
                $mail->Password = 'care at home 1';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('careathomeljp@gmail.com', 'careathome');
                $mail->addAddress($email, $email);     // Add a recipient
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'ORDER CONFORMATION';
                $mail->Body = "Hello $memfname $memlname,
                 Thank you for your order of $surproname. We’ll send a confirmation when your order ships.If you would like to view the status of your order or make any changes to it, please visit Your Orders on CareAtHome'>";
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                 
                $mail->send();
                echo "<script>alert('check your conformation');window.location='surgical12.php';</script>";
                 
                
       

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
   







  


?>



