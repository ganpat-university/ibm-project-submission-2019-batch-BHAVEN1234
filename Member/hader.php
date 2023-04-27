<?php
  // session_start();
?>
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
    <div id="navbar" class="navbar navbar-default          ace-save-state"style="background-color:#ffffff">
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
              <!-- <i class="fa fa-leaf"></i> -->
              <img src="home/img/logo-2.png" height="50px">
            </small>
          </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation" style="background-color:#ffffff;border:white;">
          <ul class="nav ace-nav"style="border:white;">
            <li class="grey dropdown-modal">
              
                <li class="dropdown-content">
                  <ul class="dropdown-menu dropdown-navbar"style="border:white;">
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
$memid=$_SESSION["memberid"];
// echo $memid;

$cnn = mysqli_connect("localhost","root","","careathome");
$qes="Select * from member_master where memid='$memid'";
$qry=$cnn->query($qes);
$res=$qry->fetch_assoc();
    $mempic=$res["mempic"];
    $memfname=$res["memfname"];
    $memlname=$res["memlname"];
?>

            

            <li class="light-blue dropdown-modal"style="border:white;">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle"style="background-color:#ffffff;color:#207f88;" >
                <img class="nav-user-photo" src="../mempic/<?php echo $mempic;?>">
                <span class="user-info">
                  <small>Welcome <?php echo $memfname.' '.$memlname;?></small>
                  
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
                  <a href="memberprofil.php">
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

        <ul class="nav nav-list">
          
        


         <li class="">
            <a href="youractivity.php">
              
              <span class="menu-text">
               My Orders
                <span class="badge badge-transparent tooltip-error" title="2 Important Events">
                  
                </span>
              </span>
            </a>

            <b class="arrow"></b>
          </li>    

          <li class="">
            <a href="search doctor.php">
              
              <span class="menu-text">Search Doctor  </span>
            </a>

            <b class="arrow"></b>
          </li>     

          <li class="">
            <a href="medicinemaster.php">
              
              <span class="menu-text"> Medicines </span>
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="suritem.php">
              
              <span class="menu-text"> Surgical Items </span>
            </a>

            <b class="arrow"></b>
          </li>
        
          <li class="">
            <a href="lab.php">
              
              <span class="menu-text"> Laboratory </span>
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="search caretaker.php">
              
              <span class="menu-text"> Caretaker </span>
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
                <a href="localhost:8080\project\home.php"style="color:#207f88;">Home</a>
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