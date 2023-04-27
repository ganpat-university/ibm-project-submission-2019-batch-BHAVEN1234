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
		$medicinename="";
		$medicinetype="";

		if(isset($_POST["btnsubmit"]))
	      {
            $medicinetype=$_POST["medtype"];
            $medicinename=$_POST["medname"];

             
 			
 		$qry="insert into medicine(medtype,medname)values('$medicinetype','$medicinename')";
 			


 				$cnn=mysqli_connect("localhost","root","","careathome");
 				$fire=$cnn->query($qry);
 				echo"inserted.";
 				 
}
 				?>
 			


			<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			
		    <div class="form-group">
		    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> MDICINE TYPE: </label>
		    <div class="col-sm-9">
		    <select class="medtype" id="form-field-select-15">
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
		   <input type="text"  class="col-xs-10 col-sm-5" name="medname" required="">
			</div>
			</div>

		
		 <div class="col-md-offset-4 col-md-9">
         <input type="SUBMIT" name="btn">
        </div>
			
			
		</form>

<?php
include_once("fotter.php");
?>