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
        $surproid="";
		$name="";
		$img="";
		$desc="";
		$price="";
		$surgid="";
		$surproid=$_GET["Id"]; 	

		$_SESSION['sid']=$surproid;

		

		           $q="select * from surproduct where surproid=$surproid";


            $cnn=mysqli_connect("localhost","root","","careathome");
            $res=$cnn->query($q);
		    $result=$cnn->query("select * from surproduct where surproid='$surproid'");
		    
          
		while($ro=$res->fetch_assoc())
		{            
                     $img=$ro["img"];
                     $_SESSION['img']=$img;
	             	$name=$ro["surproname"];
	             	$_SESSION['sn']=$name;
					$desc=$ro["surprodec"];
					$price=$ro["selling_price"];
												
		}										
											?>
											</div></div>

                                         <div class="form-group">
										<label class="col-sm-3 control-label no-padding-rig for="form-field-1"> </label>
										<div class="col-sm-9">
                                            
                                             <?php
                                             	while($row=$result->fetch_assoc())
											{
			                                   $x='img1\\'.$row["img"];
			                                   echo "<img src='$x' height='200px' width='500px' style ='float:left;'>"."<br>";}
                                           	?>
                                           	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
											
                                        </div>
                                    </div>

                                      <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> PRODUCT NAME: </label>

										<div class="col-sm-9">
											<label><?php echo $name; ?></label>
											
									</div>
									

										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> DETAILS: </label>

										<div class="col-sm-9">
											<label><?php echo $desc; ?></label>
										</div>
									</div>
								

								     	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> PRICE: </label>

										<div class="col-sm-9">
											<label><?php echo $price; ?></label><br><br>
										</div>
									</div>
                                  
                                   <div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
                                    <input type="submit" name="btn" value="Order" class="btn btn-app btn-inverse btn-xs" style="margin-top:5px;"> 
                                    </div></div>
									<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
                                    <a class='btn btn-white btn-inverse btn-sm' name="atc" href='index.php'>
                                      <i class='ace-icon fa fa-shopping-cart bigger-160'></i>Add to Cart</a>

                                      </div></div>
                                  </form>
                                  <?php 
                                   if(isset($_POST['atc']))
                                   {
                                   	echo "hi";
                                   }
                                  ?>

<?php
$name=$_SESSION['sn'];
$surgid=$_SESSION['surgid'];
$price=$_SESSION['selling_price'];

$memid=$_SESSION['memberid'];

if(isset($_POST["btn"]))
{
 
 $qry="insert into purchase(memid,surgid,surproname,price)value('$memid','$surgid','$name','$price')";
 $con = mysqli_connect("localhost","root","","careathome");
 $q=mysqli_query($con,$qry);
  $fire=$con->query($qry);
  echo("<script>location.href='pur.php'</script>");
  //echo $qry;
    
		    

}
?>
								
		
<?php
include_once("fotter.php");
?>
									
		


