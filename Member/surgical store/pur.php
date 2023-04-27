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
$memid=$_SESSION['memberid'];
echo $memid;
$memfname="";
$memlname="";
$address="";
$email="";

			
	
	// $name=	$_POST["txt_name"];
	// $conta=	$_POST["txt_con"];
	// $email=	$_POST["txt_email"];
	// $pincode=$_POST["pincode"];
	// $houseno=$_POST["houseno"];
	// $area=$_POST["area"];
	// $landmark=$_POST["landmark"];
	



	


            $q="select * from member_master where memid=$memid";
            echo $q;


            $cnn=mysqli_connect("localhost","root","","careathome");
            $res=$cnn->query($q);
		    $result=$cnn->query("select * from member_master where memid=$memid");

		     while($ro=$res->fetch_assoc())
		{            
                     $memfname=$ro["memfname"];
	             	$memlname=$ro["memlname"];

					$address=$ro["address"];
					$email=$ro["email"];
					//$price=$ro["price"];
												
		}										


  


?>
<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                                     
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Full Name :</label>
                                         <div class="col-sm-9">
											<label><?php echo $memfname." ".$memlname; ?></label></div>
									</div>
									

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email:	</label>

										<div class="col-sm-9">
										<label><?php echo $email ?> </label>	
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> address:	 </label>

										<div class="col-sm-9">
											<input type="text" name="address" class="col-xs-10 col-sm-5" maxlength="50" value="<?php echo $address ?>"> &nbsp; &nbsp; &nbsp;<input type="submit" name="order" style="margin-top:5px;" class="btn btn-success" value="Update Address">
					 		<br> <br><br>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
                                         <div class="col-sm-9">
									<a class='btn btn-app btn-inverse btn-xs' name="pur" href="sendmail.php">
											<i class='ace-icon fa fa-shopping-cart bigger-160'></i>
											Purchase
										</a>
</div>
									</div>
									

								

								<?php 
								

                    //         $q="select * from member_master where memid=$memid";


                    //       $cnn=mysqli_connect("localhost","root","","careathome");
                    //       $res=$cnn->query($q);
		                  // $result=$cnn->query("select * from member_master where memid=$memid");
        
                          $memberid=$_SESSION['memberid'];

                           if(isset($_POST["order"]))
                           {
                           	$address=$_POST["address"];
                            $qry="update member_master SET address='$address' WHERE memid=$memberidid";
                             $con = mysqli_connect("localhost","root","","careathome");
                            $fire=$con->query($qry);


                           }

                            if(isset($_POST["pur"]))
                           {
                           	// $address=$_POST["address"];
                            // $qry="update member_master SET address='$address' WHERE memid=$memid";
                            //  $con = mysqli_connect("localhost","root","","careathome");
                            // $fire=$con->query($qry);

                           
                           }
							?> 
 

			
		</form>	 
	<?php
include_once("fotter.php");
?>