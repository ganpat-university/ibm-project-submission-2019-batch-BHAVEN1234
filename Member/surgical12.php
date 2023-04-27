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
extract($_POST);
        $surgid="";
		$name="";
		$desc="";
		$price="";
	  
					?>
<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
           
											<?php
											//$surproid=$_GET["Id"];
							                //$surgid=$_GET["Id"];
							                $surproid=$_SESSION['surproid'];
							                
											 $cnn=mysqli_connect("localhost","root","","careathome");
$q="select * from surproduct where surgid=$surproid";
											$result=$cnn->query($q);			
	// echo $q;
											while($row=$result->fetch_assoc())
											{
											?>
			<div class="doctordetails">
			<div class="doctorimg" >
            <?php
			$x='img1\\'.$row["img"];
			?>
<img src=<?php echo $x; ?> height=100px weith=100px><br>
			<?php
			
		echo "<a class='btn btn-app btn-yellow btn-xs' href='buy.php?Id=".$row["surproid"]."' ><i class='ace-icon fa fa-shopping-cart bigger-160'></i>
										Shop </a>";
		echo "<a class='btn btn-app btn-yellow btn-xs' href='rent.php?Id=".$row["surproid"]."' ><i class='ace-icon fa fa-shopping-cart bigger-160'></i>
										Rent</a>"; 


}

?>

	
<?php
include_once("fotter.php");
?>

