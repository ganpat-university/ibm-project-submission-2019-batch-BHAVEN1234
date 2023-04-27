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
		//$surproname=$_GET["surproname"];
		$surproid=$_GET["Id"];
		$surgid=$_GET["Id"];
		$rentpri="";
		$deposit="";
		$stock=""; 	

		           $q="select * from surproduct where surproid=$surproid";

            $cnn=mysqli_connect("localhost","root","","careathome");
            $res=$cnn->query($q);
		    $result=$cnn->query("select * from surproduct where surproid='$surproid'");
		    
          
		while($ro=$res->fetch_assoc())
		{            
                     $img=$ro["img"];
	             	$name=$ro["surproname"];

					$desc=$ro["surprodec"];
					$rentpri=$ro["rentpri"];
					$deposit=$ro["deposit"];
					$stock=$ro["stock"];
												
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
			                                   echo "<img src='$x' height='200px' width='500px'>"."<br>";}
                                           	?>
											
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
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> RENT PRICE: </label>

										<div class="col-sm-9">
											<label><?php echo $rentpri; ?></label>
											
									</div>

									   <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> DEPOSIT: </label>

										<div class="col-sm-9">
											<label><?php echo $deposit; ?></label>
											
									</div>

									   <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> STOCK: </label>

										<div class="col-sm-9">
											<label><?php echo $stock; ?></label>
											
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
                                         <div class="col-sm-9">
									<a class='btn btn-app btn-inverse btn-xs' name="pur" href="r1.php">
											<i class='ace-icon fa fa-shopping-cart bigger-160'></i>
										      Rent
										</a>
</div>
									</div>
									
		
<?php
include_once("fotter.php");
?>
									
		


