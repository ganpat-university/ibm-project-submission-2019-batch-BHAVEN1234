<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>CareAtHome</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout" style="background-color:#ffffff">	
<?php
$uname="";
$password="";
$con = mysqli_connect("localhost","root","","careathome");
if(isset($_POST["btnSubmit"]))
{

$uname=$_POST["txtuname"];
$password=$_POST["txtpass"];

$member="Select * from member_master where uname='$uname' and pwd='$password'";
$doctor="Select * from doctor where uname='$uname' and pwd='$password'";
$lab="Select * from lab where uname='$uname' and pwd='$password'";
$patient_manager="Select * from caretaker_master where uname='$uname' and pwd='$password'";
$admin="Select * from admin_master where uname='$uname' and pwd='$password'";
$surgical_store="Select * from surgicalstore where uname='$uname' and pwd='$password'";
$delivery_master="Select * from delivery_master where uname='$uname' and pwd='$password'";
$medical_store="Select * from medical_store where uname='$uname' and pwd='$password'";
$surproduct=mysqli_query($con,"Select * from surproduct");
$rent=mysqli_query($con,"Select * from rent");
$surgicalstore=mysqli_query($con,"Select * from surgicalstore");


$con = mysqli_connect("localhost","root","","careathome");

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


if($membercnt==1)
{
	
	 	$row1=mysqli_fetch_array($surproduct) or die(mysqli_error($con));
	   {
	   	$_SESSION['surproid']=$row1['surproid'];
     $_SESSION['selling_price']=$row1['selling_price'];
     $_SESSION['img']=$row1['img'];
 }
  
		$row3=mysqli_fetch_array($surgicalstore) or die(mysqli_error($con));
		{
			   $_SESSION['surgid']=$row3['surgid'];
		}
 while($memro = $memberresult->fetch_assoc())
	 {
	 	$_SESSION["set"]='yes';
	 	   
	

	 	// $_SESSION["val"]='1';
	 	$_SESSION["memberid"]=$memro["memid"];
	 	echo $_SESSION["memberid"];
	 	$_SESSION["memberfname"]=$memro["memfname"];
	 	$_SESSION["memberlname"]=$memro["memlname"];
	 	$_SESSION['email']=$memro['email'];

	 	// echo $_SESSION["memberfname"];
	 	// echo $_SESSION["memberlname"];

	header("Location:Member\home\index.php");
	 }
}
else
{
	if($doctorcnt==1)
	{
		while($docro = $doctorresult->fetch_assoc())
	 {
	 	$_SESSION["set"]='yes';
	 	// $_SESSION["val"]='1';
	 	$_SESSION["docid"]=$docro["doctorid"];
	 	$_SESSION["docfname"]=$docro["docfname"];
	 	$_SESSION["doclname"]=$docro["doclname"];
	 	// echo $_SESSION["docid"];
	 }
		header("Location:Doctor\home.php");

	}
	else
	{
		if($admincnt==1)
		{
			while($adminro = $adminresult->fetch_assoc())
	 		{
	 			$_SESSION["set"]='yes';
	 			// $_SESSION["val"]='1';
	 			$_SESSION["adminid"]=$adminro["adminid"];
		 		$_SESSION["adminfname"]=$adminro["adminfname"];
			 	$_SESSION["adminlname"]=$adminro["adminlname"];
	 			// echo $_SESSION["docid"];
			 }
			header("Location:admin\home.php");
		}		
		else
		{
			if($patient_managercnt==1)
			{
				while($patient_managerro = $patient_managerresult->fetch_assoc())
	 			{
	 				$_SESSION["set"]='yes';
	 				// $_SESSION["val"]='1';
	 				$_SESSION["caretkrid"]=$patient_managerro["caretkrid"];
	 				$_SESSION["caretakename"]=$patient_managerro["caretakename"];
	 				// echo $_SESSION["docid"];
				}
				// echo $_SESSION["patient_managerid"];
				header("Location:caretaker\home.php");
			}		
			else
			{
				if($labcnt==1)
				{
					while($labro = $labresult->fetch_assoc())
		 			{
		 				$_SESSION["set"]='yes';
		 			// $_SESSION["val"]='1';
	 				$_SESSION["labid"]=$labro["labid"];
	 				$_SESSION["labname"]=$labro["labname"];
	 				// echo $_SESSION["docid"];
					}

					header("Location:laboratory\labview1.php");
				}		
				else
				{
					if($surgical_storecnt==1)
					{
						while($surgical_storero = $surgical_storeresult->fetch_assoc())
	 					{
	 						$_SESSION["set"]='yes';
	 						// $_SESSION["val"]='1';
	 						$_SESSION["surgical_storeid"]=$surgical_storero["surgid"];
	 						$_SESSION["surgical_storename"]=$surgical_storero["surstorename"];
	 						// echo $_SESSION["docid"];
						}
						header("Location:Surgical Store\home.php");
					}		
					else
					{
						if($delivery_mastercnt==1)
						{
							while($delivery_masterro = $delivery_masterresult->fetch_assoc())
	 						{
	 							$_SESSION["set"]='yes';
	 						// $_SESSION["val"]='1';
	 						$_SESSION["delivery_masterid"]=$delivery_masterro["deliveryid"];
	 						$_SESSION["deliverypername"]=$deliverypername["deliverypername"];
	 						// echo $_SESSION["docid"];
							}

							header("Location:delivery boy\home.php");
						}		
						else
						{
							if($medical_storecnt==1)
							{
								$_SESSION["set"]='yes';

								while($medical_storero = $medical_storeresult->fetch_assoc())
	 							{
	 							// $_SESSION["val"]='1';
	 							$_SESSION["medical_storeid"]=$medical_storero["medistoid"];
	 							$_SESSION["medicalstorename"]=$medical_storero["medicalstorename"];

	 							// echo $_SESSION["docid"];
								}
								header("Location:Medical Store\home.php");
							}		
							else
							{
								echo "<script>alert('either usenamr or password is worng')</script>";
							}
						}
					}
				}
			}
		}
	}
}

}

?>
		<div class="main-container" >
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<img src="home\logo.png" height="90px">
									
								</h1>

							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border"style="background-color: #207f88;">
									
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<!-- <i class="ace-icon fa fa-coffee green"></i> -->
												Login
											</h4>

											<div class="space-6"></div>

											<form name="loginfrm" method="POST">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="txtuname" class="form-control" placeholder="Username" required="*" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="txtpass" class="form-control" placeholder="Password" required="*" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>
												

								
														
																												
												

													<div class="space"></div>

													
														<input type="submit" name="btnSubmit" class="width-37 pull-right btn btn-sm btn-primary">
																						
														<a href="forget password.php" style="width: 37;">forgot password</a>
																
																

													</div>

													<div class="space-4"></div>


													






													
												
											</form>

										

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												New User Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter your details to begin: </p>

											<form name="loginfrm" method="POST">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" minlength="8" maxlength="20" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Repeat password" />
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Reset</span>
														</button>

														<button type="submit" class="width-65 pull-right btn btn-sm btn-success">
															<span class="bigger-110">Register</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

							<!-- <div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div> -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");

			
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>