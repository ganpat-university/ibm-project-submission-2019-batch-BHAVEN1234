<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>healofy</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

<?php
  If(!isset($_SESSION["set"]))
  {
    echo "<script>location.href='../login.php'</script>";
  }
?>

  <body class="no-skin">
    <div id="navbar" class="navbar navbar-default          ace-save-state" style="background-color:#ffffff">
      <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
          <span class="sr-only">Toggle sidebar</span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
          <a href="home.php" class="navbar-brand">
            <small>
             <img src="img/logo-2.png" height="50px">
            </small>
          </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
          <ul class="nav ace-nav">
            <li class="grey dropdown-modal">
              
                <li class="dropdown-content">
                  <ul class="dropdown-menu dropdown-navbar">
                    <li>
                      <a href="#">
                        <div class="clearfix">
                          <span class="pull-left">Software Update</span>
                          <span class="pull-right">65%</span>
                        </div>

                        <div class="progress progress-mini">
                          <div style="width:65%" class="progress-bar"></div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <div class="clearfix">
                          <span class="pull-left">Hardware Upgrade</span>
                          <span class="pull-right">35%</span>
                        </div>

                        <div class="progress progress-mini">
                          <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <div class="clearfix">
                          <span class="pull-left">Unit Testing</span>
                          <span class="pull-right">15%</span>
                        </div>

                        <div class="progress progress-mini">
                          <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <div class="clearfix">
                          <span class="pull-left">Bug Fixes</span>
                          <span class="pull-right">90%</span>
                        </div>

                        <div class="progress progress-mini progress-striped active">
                          <div style="width:90%" class="progress-bar progress-bar-success"></div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
          <?php
$adminid=$_SESSION["adminid"];
// echo $memid;

$cnn = mysqli_connect("localhost","root","","careathome");
$qes="Select * from admin_master where adminid='$adminid'";
$qry=$cnn->query($qes);
$res=$qry->fetch_assoc();
    $adminpic=$res["adminpic"];
    $fname=$res["fname"];
    $lname=$res["lname"];
?>

            

            <li class="light-blue dropdown-modal">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle" style="background-color:#ffffff;color:#207f88;">
                <img class="nav-user-photo" src="img/<?php echo $adminpic;?>">
                <span class="user-info">
                  <small>Welcome <?php echo $fname.' '.$lname;?></small>
                  
                </span>

                <i class="ace-icon fa fa-caret-down"></i>
              </a>

              <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                <li>
                  <a href="#">
                    <i class="ace-icon fa fa-cog"></i>
                    Settings
                  </a>
                </li>

                <li>
                  <a href="adminprofile.php">
                    <i class="ace-icon fa fa-user"></i>
                    Profile
                  </a>
                </li>

                <li class="divider"></li>

                <li>
                  <a href="logout.php">
                    <i class="ace-icon fa fa-power-off"></i>
                    Logout
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- /.navbar-container -->
    </div>

    <div class="main-container ace-save-state" id="main-container">
      <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
      </script>

      <div id="sidebar" class="sidebar responsive ace-save-state">
        <script type="text/javascript">
          try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts" style="background-color:#ffffff" >
          <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            
          </div>

          <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
           
          </div>
        </div><!-- /.sidebar-shortcuts -->

         <ul class="nav nav-list">

          <li class="active">
            <a href="home.php">
              
              <span class="menu-text"> Home </span>
            </a>

            <b class="arrow"></b>
          </li>

        <li class="open">
            <a href="#" class="dropdown-toggle">
              
              <span class="menu-text"> Tables </span>

              <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

      <ul class="submenu nav-show" style="display: block;">
              

          <li class="">
            <a href="memberveiw.php">
              
              <span class="menu-text"> Members </span>
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="lab.php">
              
              <span class="menu-text">Lab</span>
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="medicalstore.php">
              
              <span class="menu-text"> Medical Shop </span>
            </a>

            <b class="arrow"></b>
          </li>          

          <li class="">
            <a href="surgicalstore.php">
              
              <span class="menu-text"> Surgical Shop </span>
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="doctorview.php">
              
              <span class="menu-text"> Doctor </span>
            </a>

            <b class="arrow"></b>
          </li>
        
           <li class="">
            <a href="area_master.php">
              
              <span class="menu-text"> Manage Area </span>
            </a>
        </ul>
            <b class="arrow"></b>
          </li>

           <li class="">
            <a href="doctorinsert.php">
              
              <span class="menu-text"> Doctor </span>
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="medicalstoreinsert.php">
              
              <span class="menu-text"> Medical Store </span>
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="surgicalstoreinsert.php">
              
              <span class="menu-text"> Surgical Store </span>
            </a>
            
            <b class="arrow"></b>
          </li>

            
          </li>

          <li class="">
            <a href="patient_managerinsert.php">
              
              <span class="menu-text"> Caretaker </span>
            </a>
            
            <b class="arrow"></b>
          </li>

      
          </li>

          <li class="">
            <a href="labinsert.php">
              
              <span class="menu-text"> Laboratory </span>
            </a>
            
            <b class="arrow"></b>
          </li>

            
          </li>

          <li class="">
            <a href="deliverymasterinsert.php">
              
              <span class="menu-text"> Delivery Person </span>
            </a>
            
            <b class="arrow"></b>
          </li>
        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
          <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
      </div>

      <div class="main-content">
        <div class="main-content-inner">
          <div class="breadcrumbs ace-save-state" id="breadcrumbs" style="background-color:#ffffff">
            <ul class="breadcrumb">
              <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="localhost:8080\project\home.php">Home</a>
              </li>
              <li class="active">Dashboard</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
              <form class="form-search">
                <span class="input-icon">
                  <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                  <i class="ace-icon fa fa-search nav-search-icon"></i>
                </span>
              </form>
            </div><!-- /.nav-search -->
          </div>

          <div class="page-content">