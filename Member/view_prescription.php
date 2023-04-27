<?php
session_start();
?>

<?php

$dr_name = '';
$dr_cnt = '';

$cnn=mysqli_connect("localhost","root","","careathome");
$id = $_GET['id'];
$qes="Select * from member_prescription where member_prescriptionid=$id";
$qry=$cnn->query($qes);
$res=$qry->fetch_assoc();

$do=$res['doctorid'];
$qes1="Select * from doctor where doctorid=$do";
$qry1=$cnn->query($qes1);
$res1=$qry1->fetch_assoc();

$dr_name = $res1['docfname']." ".$res1['doclname'];
$dr_cnt = $res1['contact'];


// echo $dr_name.'<br>'.$dr_cnt.'<br>'.$res['symptoms'].'<br>'.$res['medicine_name'].'<br>'.$res['how_many_time_take'].'<br>'.$res['bef_aft'].'<br>'.$res['how_much_time'];



?>

<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
      <style>
         body {
         transition: all 0.3s ease;
         }
         .wrapper {
         height: 100vh;
         width: 100vw;
         display: flex;
         flex-direction: column;
         background: red;
         margin: 50px;
         }
         .prescription_form {
         width: 100%;
         height: 100vh;
         background: white;
         }
         .prescription {
         width: 720px;
         height: 960px;
         margin: 0 auto;
         border: 1px solid lightgrey;
         }
         .prescription tr > td {
         padding: 15px;
         }
         .header {
         color: #333;
         width: 100%;
         display: flex;
         justify-content: space-between;
         align-items: center;
         }
         .logo {
         flex: 1;
         }
         .logo img {
         width: 120px;
         height: 120px;
         float: left;
         }
         .credentials {
         flex: 1;
         }
         .credentials h4 {
         line-height: 1em;
         letter-spacing: 1px;
         font-weight: 700;
         margin: 0px;
         padding: 0px;
         }
         .credentials p {
         margin: 0 0 5px 0;
         padding: 3px 0px;
         }
         .credentials small {
         margin: 0;
         padding: 0;
         letter-spacing: 1px;
         padding-right: 80px;
         }
         .d-header {
         width: 100%;
         text-align: center;
         background: mediumseagreen;
         padding: 5px;
         color: white;
         font-weight: 800;
         }
         .symptoms,
         .tests,
         .advice {
         display: flex;
         flex-direction: column;
         flex: 1;
         }
         .symptoms ul,
         .tests ul {
         list-style: square;
         margin: 0;
         padding-left: 10px;
         height: 100%;
         }
         .advice p {
         letter-spacing: 0;
         font-size: 14px;
         }
         .advice .adv_text {
         flex-grow: 1;
         width: 100%;
         height: 100%;
         }
         .desease_details {
         height: 100%;
         display: flex;
         flex-direction: column;
         justify-content: flex-start;
         }
         .med_name {
         font-size: 16px;
         font-weight: bold;
         padding: 0;
         }
         .taking_time {
         display: flex;
         flex-direction: row;
         justify-content: flex-end;
         text-align: right;
         }
         .schedual {
         display: flex;
         flex-direction: row;
         justify-content: space-between;
         }
         .sc_time {
         margin: 0;
         padding: 0;
         float: left;
         }
         .sc_time span {
         font-weight: bold;
         margin-right: 1rem;
         }
         .sc {
         border: none;
         outline: none;
         font-size: 15px;
         }
         select {
         -webkit-appearance: none;
         -moz-appearance: none;
         -ms-appearance: none;
         appearance: none;
         outline: 0;
         box-shadow: none;
         border: 0 !important;
         background: #fff;
         background-image: none;
         }
         select::-ms-expand {
         display: none;
         }
         .select {
         font-size: 15px;
         color: #335;
         position: relative;
         float: left;
         overflow: hidden;
         }
         select {
         font-weight: bold;
         padding: 0 0.5em;
         color: #333;
         cursor: pointer;
         outline: none;
         }
         .med_name {
         border: 0;
         outline: 0;
         }
         .period {
         font-size: 14px;
         }
         input[type="date"] {
         padding: 0;
         margin: 0;
         font-weight: bold;
         border: none;
         }
         .medicine {
         display: flex;
         flex-flow: column;
         height: 100%;
         }
         .med_name_action,
         .med_when_action,
         .med_period_action {
         display: none;
         }
         .med_meal_action .btn {
         margin: 2px;
         }
         .med_period {
         border: none;
         outline: none;
         }
         #add_med {
         margin: 20px 5px;
         flex-grow: 1;
         }
         #add_med {
         animation: shake 1.5s linear infinite;
         }
         @keyframes shake {
         10%, 90% {
         transform: translate3d(-1px, 0, 0);
         }
         20%, 80% {
         transform: translate3d(2px, 0, 0);
         }
         30%, 50%, 70% {
         transform: translate3d(-4px, 0, 0);
         }
         40%, 60% {
         transform: translate3d(4px, 0, 0);
         }
         95% {
         opacity: 0;
         }
         }
         #add_symptoms {
         margin: 20px 5px;
         flex-grow: 1;
         opacity: 1;
         }
         .symp_action,
         .test_action,
         .adv_action {
         display: none;
         }
         .med_footer {
         display: flex;
         flex-direction: column;
         justify-content: space-between;
         }
         hr {
         margin: 10px 0px;
         }
         .med:hover hr {
         border-top: 3px #111 solid;
         }
         .med_period_action {
         float: right;
         }
         span.date {
         color: #333399;
         float: right;
         clear: both;
         }
         .del_action {
         width: 100%;
         text-align: right;
         }
         .delete {
         width: 50px;
         opacity: 0;
         display: none;
         }
         .med:hover .delete {
         display: inline;
         opacity: 1;
         }
         .folded {
         visibility: hidden;
         }
         .button_group {
         position: fixed;
         right: 120px;
         bottom: 100px;
         }
         #snacking, #snacked {
         visibility: hidden;
         min-width: 250px;
         margin-left: -125px;
         background-color: #333;
         color: #fff;
         text-align: center;
         border-radius: 2px;
         padding: 16px;
         position: fixed;
         z-index: 1;
         left: 50%;
         bottom: 30px;
         font-size: 17px;
         }
         #snacking.show, #snacked.show {
         visibility: visible;
         -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
         animation: fadein 0.5s, fadeout 0.5s 2.5s;
         }
         @-webkit-keyframes fadein {
         from {bottom: 0; opacity: 0;} 
         to {bottom: 30px; opacity: 1;}
         }
         @keyframes fadein {
         from {bottom: 0; opacity: 0;}
         to {bottom: 30px; opacity: 1;}
         }
         @-webkit-keyframes fadeout {
         from {bottom: 30px; opacity: 1;} 
         to {bottom: 0; opacity: 0;}
         }
         @keyframes fadeout {
         from {bottom: 30px; opacity: 1;}
         to {bottom: 0; opacity: 0;}
         }
      </style>
   </head>
   <body translate="no">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/3.0.1/mustache.min.js" integrity="sha256-srhz/t0GOrmVGZryG24MVDyFDYZpvUH2+dnJ8FbpGi0=" crossorigin="anonymous"></script>
      <div class="wrapper">
         <div class="prescription_form">
            <table class="prescription" border="1">
               <tbody>
                  <tr height="15%">
                     <td colspan="2">
                        <div class="header">
                           <div class="logo">
                              <img src="https://seeklogo.com/images/H/hospital-clinic-plus-logo-7916383C7A-seeklogo.com.png">
                           </div>
                           <div class="credentials">
                              <h4><?php echo $dr_name;?></h4>
                              <p>Chamber Name</p>
                              <small>Adress</small>
                              <br>
                              <small><?php echo $dr_cnt; ?></small>
                           </div>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td width="40%">
                        <div class="desease_details">
                           <div class="symptoms">
                              <h4 class="d-header">Symptoms</h4>
                              <ul class="symp"  title="">
                                 <li><?php echo $res['symptoms']?></li> 
                              </ul>
                              
                           </div>
                           
                        </div>
                     </td>
                     <td width="60%" valign="top">
                        <span style="font-size: 3em;">R<sub>x</sub></span>
                        <hr>
                        <div class="medicine">
                           <section class="med_list">
                              <div class="med">
                                 ⚫ <?php echo $res['medicine_name'];?>
                                 <br>
                                 <br>
                                 <div class="schedual">
                                    <div class="sc_time">
                                    	<?php echo $res['how_many_time_take'];?>
                                    </div>
                                    <div class="taking_time select">

                                       <?php echo $res['bef_aft'];?>
                                    </div>
                                 </div>
                                 <br>
                                 <div class="med_footer">
                                    <div class="period">
                                       Take for <?php echo $res['how_much_time'];?>
                                    </div>
                                 </div>
                                 <hr>
                              </div>
                           </section>
                           <!-- <div id="add_med" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click anywhere on the blank space to add more.">Click to add...</div> -->
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </body>
</html>