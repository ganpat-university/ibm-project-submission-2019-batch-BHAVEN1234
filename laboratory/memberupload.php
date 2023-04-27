<?php 
session_start();
	include_once("hader.php");
?>

	<div class="page-header">
							<h1>
								Upload Report To Patient
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>

<!-- File upload code start -->

<?php

// if(isset($_FILES['file'])){
 //    $errors= array();
 //    $file_name = $_FILES['file']['name'];
 //    $file_size =$_FILES['file']['size'];
 //    $file_tmp =$_FILES['file']['tmp_name'];
 //    $file_type=$_FILES['file']['type'];   
 //    $exploded = explode('.',$_FILES['file']['name']);
 // 	$last_element = end($exploded);
	// $file_ext=strtolower($last_element);

 //    $extensions = array("jpeg","jpg","png"); 		

 //    if(in_array($file_ext,$extensions )=== false)
	// {
 //     $errors[]="Upload only image file JPEG or PNG file.";
 //     $a='1';
 //    }
 //    else
 //    {
 //    	$a='0';
 //    }

 //    if($file_size > 2097152){
 //    $errors[]='File size must < 2 MB';
 //    }				

 //    if(empty($errors)==true){
 //        move_uploaded_file($file_tmp,"piscriptions/".$file_name);
 //        echo "Upload successfully";
 //    }else{
 //        print_r($errors);
 //    }
// }


if(isset($_POST["submit"]))
{

	    $errors= array();
    $file_name = $_FILES['file']['name'];
    // echo $file_name;
    $file_size =$_FILES['file']['size'];
    $file_tmp =$_FILES['file']['tmp_name'];
    $file_type=$_FILES['file']['type'];   
    $exploded = explode('.',$_FILES['file']['name']);
 	$last_element = end($exploded);
	$file_ext=strtolower($last_element);

    $extensions = array("doc","docx","pdf"); 		

    if(in_array($file_ext,$extensions )=== false)
	{
     $errors[]="Upload only image file JPEG or PNG file.";
     $a='1';
    }
    else
    {
    	$a='0';
    }

    if($file_size > 2097152){
    $errors[]='File size must < 2 MB';
    }				

    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"../labimg/piccri/".$file_name);
        // echo "Upload successfully";
    }else{
        // print_r($errors);
    }

	if($a=='1')
	{
	}
	else
	{

		$labid=$_SESSION["labid"];
		$memid1=$_GET["Id"];
		// echo $docid;
		$dt=date('Y-m-d H:i:s');
		$cnn = mysqli_connect("localhost","root","","careathome");
		$qry="INSERT INTO labreport(memid,labid,report) VALUES ('$memid1','$labid','$file_name')";
		$result=$cnn->query($qry);
		// echo $qry;
	}
}


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

<!-- <tr>
	<td>
		<img style="height:100px;width: 100px;" src="<?php// echo $res['mempic']; ?>">
	</td>
	
	<td style="height: 150px;width: 150px;">
		<center>
		<?php// echo $res['memfname']." ".$res['memlname'];?><br>
		</center>
	</td>

	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['uname'];?><br> 
		</center>
	</td>

	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['contact'];?><br> 
		</center>
	</td>

	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['email'];?><br> 
		</center>
	</td>

	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['gender'];?><br> 
		</center>
	</td>

	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['isdiabic'];?><br> 
		</center>
	</td>

	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['bloodpressure'];?><br> 
		</center>
	</td>
		
	<td style="height: 150px;width: 150px;">
		<center>
			<?php// echo $res['issmoking'];?><br> 
		</center>
	</td>
</tr> -->

<tr>
	<td style="height: 300px;width: 300;">
		<img style="height:300px;width: 300px;" src="../img/<?php echo $res['mempic']; ?>">
	</td>
	<td style="height: 100px;width: 200px;"><br>
		<b>Name </b>: <br><br>
<b>User Name </b>: <br><br>
<b>Number </b>:<br><br>
<b>Mail Id </b>:<br><br>
<b>Gender </b>:<br><br>
<b>Diabic or Not </b>:<br><br>
<b>Bloodpressure or Not </b>:<br><br>
<b>Smoking or Not </b>:<br><br>
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
					<label class="ace-file-input ace-file-multiple">
						<input type="file" name="file">
						<span class="ace-file-container" data-title="Upload prescription to Patient">
							<span class="ace-file-name" data-title="No File ...">
								<i class=" ace-icon ace-icon fa fa-cloud-upload"></i>
							</span>
						</span>
					</label>
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