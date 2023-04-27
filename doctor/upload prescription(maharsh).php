<?php
session_start();
include_once("hader.php");
?>
<head>
<!-- 	<style type="text/css">
		.disabledbutton {
    pointer-events: none;
    opacity: 0.4;
}
	</style> -->
</head>
<div class="page-header">
							<h1>
								Give Prescription
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>

<!-- File upload code start -->

<?php

// if(isset($_FILES['file'])){
//     $errors= array();
//     $file_name = $_FILES['file']['name'];
//     $file_size =$_FILES['file']['size'];
//     $file_tmp =$_FILES['file']['tmp_name'];
//     $file_type=$_FILES['file']['type'];   
//     $exploded = explode('.',$_FILES['file']['name']);
//  	$last_element = end($exploded);
// 	$file_ext=strtolower($last_element);

//     $extensions = array("jpeg","jpg","png"); 		

//     if(in_array($file_ext,$extensions )=== false)
// 	{
//      $errors[]="Upload only image file JPEG or PNG file.";
//      $a='1';
//     }
//     else
//     {
//     	$a='0';
//     }

//     if($file_size > 2097152){
//     $errors[]='File size must < 2 MB';
//     }				

//     if(empty($errors)==true){
//         move_uploaded_file($file_tmp,"piscriptions/".$file_name);
//         echo "Upload successfully";
//     }else{
//         print_r($errors);
//     }
// }


// if(isset($_POST["upload"]))
// {
// 	if($a=='1')
// 	{
// 	}
// 	else
// 	{

// 		$docid=$_SESSION["docid"];
// 		// echo $docid;
// 		$dt=date('Y-m-d H:i:s');
// 		$cnn = mysqli_connect("localhost","root","","careathome");
// 		$qry="INSERT INTO member_prescription (memid,doctorid,prescription,datentime) VALUES ($memid,$docid,$file_name,$dt)";
// 		$result=$cnn->query($qry);
// 		echo $qry;
// 	}
// }

// if (isset($_POST["upload"]))
// {

// }
?>

<!-- file upload code end -->




<?php

$cnn=mysqli_connect("localhost","root","","careathome");
$docid=$_SESSION["docid"];

$qry="select * from doctorappointment,member_master where doctorappointment.doctorid='$docid' and doctorappointment.Isconform='yes' and doctorappointment.memid=member_master.memid";

 //echo $qry;		
$qryf=$cnn->query($qry);

		while($row=$qryf->fetch_assoc())
		{
				$memid=$row["memid"];
?>
	<table >

<form method="post" enctype="multipart/form-data">
<tr>
	
	<td style="height: 200px;width: 200px;">
		<img style="height:100px;width: 100px;" src="<?php echo '../mempic/'.$row['mempic'];?>">
	</td>
	
	<td style="height: 200px;width: 150px;"><center>
		<a href="memberpiscreption.php?Id=<?php echo $row["memid"];?>"><i class="ace-icon fa fa-cloud-upload"></i> Upload Prescription To <?php echo $row['memfname'].' '.$row['memlname'];?></a><br></center>
	</td>

	<!-- <a href="#"><i class="ace-icon fa fa-cloud-upload"></i></a> -->

	<!-- <td style="height: 200px;width: 200px;border-color: black;">
		<center>
	
			<div class="form-group">
				<div class="col-xs-12">
					<label class="ace-file-input ace-file-multiple">
						<input multiple="" type="file" name="file">
						<span class="ace-file-container" data-title="Drop files here or click to choose">
							<span class="ace-file-name" data-title="No File ...">
								<i class=" ace-icon ace-icon fa fa-cloud-upload"></i>
							</span>
						</span>
					</label>
				</div>
			</div> -->


		</center>
	</td>
</tr>
<tr>
	<!-- <td><input type="submit" name="upload"></td> -->
</tr>

</form>
		</table>
		<?php
	}

		?>


	
<?php
include_once("fotter.php");
?>