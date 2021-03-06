
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?php echo base_url()."uploads/site_icon/".SITE_ICON;?>" /> 
  <title><?php echo SITE_NAME;?> | <?php echo ucwords(str_replace("_"," ",$module_name));?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/clockpicker-gh-pages/dist/bootstrap-clockpicker.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script src="<?php echo base_url();?>assets/malsup/jquery.form.js"></script> 
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url();?>assets/clockpicker-gh-pages/dist/bootstrap-clockpicker.js"></script>
<!--<script src="<?php echo base_url();?>assets/bower_components/PACE/pace.min.js"></script> FastClick -->
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard2.js"></script>

<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>

<link href="<?php echo base_url();?>assets/select2/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url();?>assets/select2/select2.min.js"></script>
<!--toastr-->
<link href="<?php echo base_url();?>assets/toastr/toastr.min.css" rel="stylesheet" />

<script src="<?php echo base_url();?>assets/toastr/toastr.min.js"></script>
<!--toastr  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/pace/pace.min.css">-->

<script src="<?php echo base_url();?>assets/validator/validator.js"></script>


<!--ckeditor-->
<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>


<script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script>
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-bottom-left",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
</script>

<style>

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}

.fix-btn {
    position: fixed; /* Fixed/sticky position */
    bottom: 60px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 999;
}

.select2-container--default .select2-selection--single {
    height: 34px;
    border-radius: 0px;
}

#imgPreviewModal .modal-body{
  background-color:#ecf0f5;
}

@media only screen and (max-width: 700px) {
  #main-list{
    overflow-x: auto;
  }
}
</style>
<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}

.map-marker {
    /* adjusting for the marker dimensions
    so that it is centered on coordinates */
    margin-left: -8px;
    margin-top: -8px;
}
.map-marker.map-clickable {
    cursor: pointer;
}
.pulse {
    width: 10px;
    height: 10px;
    border: 5px solid #f7f14c;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    background-color: #716f42;
    z-index: 10;
    position: absolute;
  }
.map-marker .dot {
    border: 10px solid #fff601;
    background: transparent;
    -webkit-border-radius: 60px;
    -moz-border-radius: 60px;
    border-radius: 60px;
    height: 50px;
    width: 50px;
    -webkit-animation: pulse 3s ease-out;
    -moz-animation: pulse 3s ease-out;
    animation: pulse 3s ease-out;
    -webkit-animation-iteration-count: infinite;
    -moz-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    position: absolute;
    top: -20px;
    left: -20px;
    z-index: 1;
    opacity: 0;
  }
  @-moz-keyframes pulse {
   0% {
      -moz-transform: scale(0);
      opacity: 0.0;
   }
   25% {
      -moz-transform: scale(0);
      opacity: 0.1;
   }
   50% {
      -moz-transform: scale(0.1);
      opacity: 0.3;
   }
   75% {
      -moz-transform: scale(0.5);
      opacity: 0.5;
   }
   100% {
      -moz-transform: scale(1);
      opacity: 0.0;
   }
  }
  @-webkit-keyframes "pulse" {
   0% {
      -webkit-transform: scale(0);
      opacity: 0.0;
   }
   25% {
      -webkit-transform: scale(0);
      opacity: 0.1;
   }
   50% {
      -webkit-transform: scale(0.1);
      opacity: 0.3;
   }
   75% {
      -webkit-transform: scale(0.5);
      opacity: 0.5;
   }
   100% {
      -webkit-transform: scale(1);
      opacity: 0.0;
   }
  }
  .modal { overflow: auto !important; }
</style>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url();?>assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url();?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()."portal";?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><?php //echo SITE_NAME;?></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo SITE_NAME;?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url("uploads/profile_image/").$this->session->userdata("USERIMG");?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata("FULLNM");?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url("uploads/profile_image/").$this->session->userdata("USERIMG");?>" class="img-circle" alt="User Image">
                <p>
                <?php echo $this->session->userdata("FULLNM");?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat" id="viewProfile">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url()."portal/logout";?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <?php 
          if (in_array("dashboard", $menu) ) {
             ?>
               <li class="header">MAIN NAVIGATION</li>  
               <li <?php if($module_name == "dashboard"){echo 'class="active"';}?>><a href="<?php echo base_url("portal/main/dashboard"); ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
               <?php
          } 
        ?>
        <?php  if ( in_array("banners", $menu) ) {?>
        <li class="header">HOME</li> 
        <?php }?>
        
        <?php 
          if (in_array("banners", $menu) ) {
             ?>
              <li class="<?php if($module_name == "banners" || $module_name == "mid_banners" ){echo 'active ';}?>treeview">
                <a href="#">
                  <i class="glyphicon glyphicon-picture"></i> <span>Banners</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <?php 
                    if (in_array("banners", $menu)) {
                     ?>
                        <li <?php if($module_name == "banners"){echo 'class="active"';}?>><a href="<?php echo base_url()."portal/main/banners"?>"><i class="glyphicon glyphicon-picture"></i><span>Main Banners</span></a></li>
                      <?php
                     } 
                  ?>
                  <?php 
                    if (in_array("banners", $menu)) {
                     ?>
                       <li <?php if($module_name == "mid_banners"){echo 'class="active"';}?>><a href="<?php echo base_url()."portal/main/mid_banners"?>"><i class="glyphicon glyphicon-picture"></i><span>Mid Banners</span></a></li>
                       <?php
                     } 
                  ?>
                   
                </ul>
              </li>
        <?php
          } 
        ?>

        <?php 
          if (in_array("invitations", $menu)) {
             ?>
              <li <?php if($module_name == "invitations"){echo 'class="active"';}?>><a href="<?php echo base_url()."portal/main/invitations/create"?>"><i class="fa fa-list-alt"></i><span>Invitations</span></a></li>
             <?php
          } 
        ?>

        <?php 
          if (in_array("rsvp", $menu)) {
             ?>
              <li <?php if($module_name == "rsvp"){echo 'class="active"';}?>><a href="<?php echo base_url()."portal/main/rsvp"?>"><i class="fa fa-list-alt"></i><span>View RSVP</span></a></li>
             <?php
          } 
        ?>


        <?php 
          if (in_array("blogs", $menu)) {
             ?>
              <li <?php if($module_name == "blogs"){echo 'class="active"';}?>><a href="<?php echo base_url()."portal/main/blogs"?>"><i class="fa fa-list-alt"></i><span>Blogs</span></a></li>
             <?php
          } 
        ?>
     
        <?php  if ( in_array("careers", $menu) ||  in_array("opportunities_careers", $menu)  ||  in_array("opportunities_franchise", $menu)) {?>
        <?php }?>
      <?php 
          if (in_array("charities", $menu)) {
             ?>
              <li <?php if($module_name == "charities"){echo 'class="active"';}?>><a href="<?php echo base_url()."portal/main/charities"?>"><i class="fa fa-suitcase"></i><span>Services</span></a></li>
            <?php
          } 
        ?> 

       <?php 
        if (in_array("about_us", $menu)) {
           ?>
            <li <?php if($module_name == "about_us"){echo 'class="active"';}?>><a href="<?php echo base_url()."portal/main/about_us"?>"><i class="fa fa-star"></i><span>About Us</span></a></li>
          <?php
        } 
      ?>
        <?php if (in_array("faqs", $menu)) {
                  ?>
                     <li <?php if($module_name == "faqs"){echo 'class="active"';}?>><a href="<?php echo base_url()."portal/main/faqs"?>"><i class="fa fa-gear"></i> FAQs</a></li>
                    <?php
                    } 
                  ?>
        <?php 
          if ( in_array("roles", $menu) ||  in_array("users", $menu) ||  in_array("site_settings", $menu) ||  in_array("logs", $menu) ) {
             ?>
              <li class="header">SYSTEM ADMINISTRATOR</li> 
              <li class="<?php if($module_name == "roles" || $module_name == "users" || $module_name == "site_settings" || $module_name == "logs"){echo 'active ';}?>treeview">
                <a href="#">
                  <i class="fa fa-gear"></i> <span>System Administrator</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <?php 
                    if (in_array("roles", $menu)) {
                     ?>
                        <li <?php if($module_name == "roles"){echo 'class="active"';}?>><a href="<?php echo base_url()."portal/main/roles"?>"><i class="fa fa-user"></i> Roles</a></li>
                     <?php
                     } 
                  ?>
                  <?php 
                    if (in_array("users", $menu)) {
                     ?>
                        <li <?php if($module_name == "users"){echo 'class="active"';}?>><a href="<?php echo base_url()."portal/main/users"?>"><i class="fa fa-users"></i> Users</a></li>
                     <?php
                     } 
                  ?>
                  <?php 
                    if (in_array("site_settings", $menu)) {
                     ?>
                        <li <?php if($module_name == "site_settings"){echo 'class="active"';}?>><a href="<?php echo base_url()."portal/main/site_settings"?>"><i class="fa fa-gear"></i> Site Settings</a></li>
                     <?php
                     } 
                  ?>
                  <?php 
                    if (in_array("logs", $menu)) {
                     ?>
                         <li <?php if($module_name == "logs"){echo 'class="active"';}?>><a href="<?php echo base_url()."portal/main/logs"?>"><i class="fa fa-gear"></i> Logs</a></li>
                     <?php
                     } 
                  ?>
                </ul>
              </li>
        <?php
          } 
        ?>
      </ul>
    </section>
  </aside>
