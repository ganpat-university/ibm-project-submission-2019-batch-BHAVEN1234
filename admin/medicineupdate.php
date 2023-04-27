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
	    $medid="";
		$medtype="";
		$medname="";
		 if(isset($_POST["btnsubmit"]))
	      {
	      
	      	$medid=$_GET["Id"];
 			$medtype=$_POST["medtype"];
 			$medname=$_POST["medname"];
 			$qry="update medicine SET medtype='$medtype',medname='$medname'WHERE medid='$medid'";
            	
            $con = mysqli_connect("localhost","root","","careathome");
            $fire=$con->query($qry);
            echo "updated..";
          }
          $medid=$_GET["Id"];
          $qes="select * from medicine where $medid=$medid";
          $con = mysqli_connect("localhost","root","","careathome");
          $qry=$con->query($qes);
          $res=$qry->fetch_assoc();
          	$madtype=$res["medtype"];
	      	$medname=$res["medname"];

 				?>
 					<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			
		    <div class="form-group">
		    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> MDICINE TYPE: </label>
		    <div class="col-sm-9">
		    <select class="medtype" id="form-field-select-15" value="<?php echo $medtype; ?>">
            <option value="Drug">Drug</option>
			<option value="Pharmacology">Pharmacology</option>
			<option value="Lithium">Lithium</option>
			<option value="Topical">Topical</option>
			<option value="Antimalarial Drugs">Antimalarial Drugs</option>
			<option value="Anti-obesity medication">Anti-obesity medication</option>
			<option value="Fertility medication">Fertility medication</option>
            </select><br>
             </div>
             </div>
           
			<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> MDICINE NAME: </label>

		   <div class="col-sm-9">
		   <input type="text"  class="col-xs-10 col-sm-5" name="medname" required="" value="<?php echo $medname; ?>" >
			</div>
			</div>

		
		 <div class="col-md-offset-4 col-md-9">
         <input type="submit" name="btn">
        </div>
			
			
		</form>

 			



<?php
include_once("fotter.php");
?>