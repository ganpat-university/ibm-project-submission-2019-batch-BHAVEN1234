<?php 
session_start();
	include_once("hader.php");
?>

	<div class="page-header">
							<h1>
								Manage Appointment
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>

<!-- File upload code start -->

<?php


// 



if(isset($_POST["submit"]))
{
	$memberid=$_GET["Id"];
	$docid=$_SESSION["docid"];
	$medicine_name = $_POST["medicine_name"];
	$symptoms = $_POST["symptoms"];
	$how_many_time_take = $_POST["how_many_time_take"];
	$bef_aft = $_POST["bef_aft"];
	$how_much_time = $_POST["how_much_time"];
	$cnn = mysqli_connect("localhost","root","","careathome");
	$qry="INSERT INTO member_prescription (memid,doctorid,symptoms,medicine_name,how_many_time_take,bef_aft,how_much_time,datentime) VALUES ('$memberid','$docid','$symptoms','$medicine_name','$how_many_time_take','$bef_aft','$how_much_time','$dt')";
	$result=$cnn->query($qry);
}



// if(isset($_FILES['file']))
// {
//     $errors= array();
//     $file_name = $_FILES['file']['name'];
//     $file_size =$_FILES['file']['size'];
//     $file_tmp =$_FILES['file']['tmp_name'];
//     $file_type=$_FILES['file']['type'];   
//     $exploded = explode('.',$_FILES['file']['name']);
//  	$last_element = end($exploded);
// 	$file_ext=strtolower($last_element);

//     $extensions = array("jpeg","jpg","png","doc","docx","pdf"); 		

//     if(in_array($file_ext,$extensions )=== false)
// 	{
//      // $errors[]="Upload only file JPEG or PNG file.";
// 	echo "<script>alert('Upload only JPEG Or PNG file');</script>";
//      $a='1';
//     }
//     else
//     {
//     	$a='0';
//     }

//     // echo "<br>".$a."<br>";
//     // echo $file_name."<br>";
//     if($file_size > 2097152){
//     // $errors[]='File size must < 2 MB';
// 	echo "<script>alert('File size must < 2 MB');</script>";
    
//     }				

//     if(empty($errors)==true){
//         move_uploaded_file($file_tmp,"../docpic/piscriptions/".$file_name);
//         // echo "Upload successfully";
//     }else{
//         print_r($errors);
//     }


// 	if($a=='1')
// 	{
// 	}
// 	else
// 	{

// 		$docid=$_SESSION["docid"];
// 		$memid1=$_GET["Id"];
// 		// echo $docid;
// 		$dt=date('Y-m-d H:i:s');
// 		$cnn = mysqli_connect("localhost","root","","careathome");
// 		$qry="INSERT INTO member_prescription (memid,doctorid,prescription,datentime) VALUES ('$memid1','$docid','$file_name','$dt')";
// 		$result=$cnn->query($qry);
// 		// echo $qry;
// 	}
// }


?>

<!-- file upload code end -->


<!-- <div style="overflow:scroll;"> -->

<?php
		$cnn=mysqli_connect("localhost","root","","careathome");
		$memid=$_GET["Id"];
		// echo $memid;
		$qry="Select * from member_master where memid='$memid'";
		// echo $qry;
		$qes=$cnn->query($qry);

?>
	<table>
	
<?php

		while($res=$qes->fetch_assoc())
		{
		
				
		
?>

<tr>
	<td style="height: 300px;width: 300;">
		<img style="height:300px;width: 300px;" src="../mempic/<?php echo $res['mempic']; ?>">
	</td>
	<td style="height: 100px;width: 200px;"><br>
		<b>&nbsp;&nbsp;Name </b>: <br><br>
<b>&nbsp;&nbsp;User Name </b>: <br><br>
<b>&nbsp;&nbsp;Number </b>:<br><br>
<b>&nbsp;&nbsp;Mail Id </b>:<br><br>
<b>&nbsp;&nbsp;Gender </b>:<br><br>
<b>&nbsp;&nbsp;Diabic or Not </b>:<br><br>
<b>&nbsp;&nbsp;Bloodpressure or Not </b>:<br><br>
<b>&nbsp;&nbsp;Smoking or Not </b>:<br><br>
	</td>
	<td style="height: 300px;width: 300px;">

	

			<?php echo " ".$res['memfname']." ".$res['memlname'];?><br><br>
		


			<?php echo " ".$res['uname'];?><br><br>
		


			<?php echo " ".$res['contact'];?><br><br>
		


			<?php echo " ".$res['email'];?><br><br>
		


			<?php echo " ".$res['gender'];?><br><br>
		


			<?php echo " ".$res['isdiabic'];?><br><br>
		


			<?php echo " ".$res['bloodpressure'];?><br><br> 
		

			<?php echo " ".$res['issmoking'];?><br> 
		
	</td>
	
		<td style="height: 200px;width: 200px;border-color: black;">
		<center>
	<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<div class="col-xs-12">
					<!-- <label class="ace-file-input ace-file-multiple">
						<input type="file" name="file">
						<span class="ace-file-container" data-title="Upload prescription to Patient">
							<span class="ace-file-name" data-title="No File ...">
								<i class=" ace-icon ace-icon fa fa-cloud-upload"></i>
							</span>
						</span>
					</label> -->
					<input type="text" name="medicine_name" placeholder="Medicine name" required>
					<input type="text" name="symptoms" placeholder="Symptoms" required>
					<input type="text" name="how_many_time_take" placeholder="How many times to take" required>
					<input type="text" name="bef_aft" placeholder="When to take" required>
					<input type="text" name="how_much_time" placeholder="How Long to take" required>

				</div>
			</div><br>
			
			<input type="submit" name="submit">
		</form>
	</center>
	</td>
</tr>

<?php
		}
?>
		</table>


<?php 
	include_once("fotter.php");
?>