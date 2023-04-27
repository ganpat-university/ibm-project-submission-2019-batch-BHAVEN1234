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
	

<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
  


	<div class="form-group">
										
  								<!-- <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> Problem</h4></label>

										<div class="col-sm-9">
											
											<input type="text" name="txt_appoireason" >
											
										</div>
								 -->	</div>


<!-- <?php
	
	// echo $todaydate;
	$fromdate=date('Y-m-d', strtotime($todaydate.'+28 days'));
	// $to=date('Y-m-d', strtotime($todaydate.'+7 days'));

?>
 -->
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> From Date</h4></label>

<div class="col-md-offset-0 col-md-3">
	<div class="input-group">
		<input type="date"  class="form-control date-picker" name="txt_fromdate" min="" max="">
		<span class="input-group-addon">
			<i class="fa fa-calendar bigger-110"></i>
		</span>
	</div>
</div>
</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4> To Date</h4></label>

<div class="col-md-offset-0 col-md-3">
	<div class="input-group">
		<input type="date"  class="form-control date-picker" name="txt_todate"  min="" max="">
		<span class="input-group-addon">
			<i class="fa fa-calendar bigger-110"></i>
		</span>
	</div>
</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><h4>Deposit</h4></label>

<div class="col-md-offset-0 col-md-3">
	<div class="input-group">
		<input type="text"  class="form-control date-picker" name="deposit" placeholder="50% of item" min="" max="">
	</div>
</div>
</div>


	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
                                         <div class="col-sm-9">
                                         	<input type="submit" name="book" value="Rent" class='btn btn-app btn-inverse btn-xs' / >
									</div>
									</div>
								
</form>

<?php 
$memid="";
$memid=$_SESSION['memberid'];
$fromdate=$_POST['txt_fromdate'];
$surgid=$_SESSION['surgid'];
$todate=$_POST['txt_todate'];
$deposit=$_POST['deposit'];
    
if(isset($_POST['book']))
{
	 $cnn=mysqli_connect("localhost","root","","careathome");
	$qry="INSERT INTO rent(surgid,fromdate,todate,deposit,memid) VALUES('$surgid','$fromdate',$todate','$deposit','$memid')";
	echo $qry;
	 $q=mysqli_query($cnn,$qry) or die(mysqli_error($cnn));
		echo ("<script>location.href='sendmail1.php'</script>");
    
           
}
?>


<?php
include_once("fotter.php");
?>