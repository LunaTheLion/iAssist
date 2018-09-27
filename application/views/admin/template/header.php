<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
	<!-- Bootstrap Styles-->
    <link href="<?php echo base_url('assets/admin/assets/css/bootstrap.css'); ?>" rel="stylesheet">
     <!-- FontAwesome Styles-->
    <link href="<?php echo base_url('assets/admin/assets/css/font-awesome.css'); ?>" rel="stylesheet">
    <!-- Custom Styles-->
    <link href="<?php echo base_url('assets/admin/assets/css/custom-styles.css'); ?>" rel="stylesheet">
 

    <!-- Loading Icon -->
   <link href="<?php echo base_url('assets/img/iAssist.ico'); ?>" rel="shortcut icon">
   
   <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('admin'); ?>">iAssist</a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li><p><font color="white"><?php echo $this->session->userdata('username');?></font></p></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li> -->
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('admin/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <!--/. NAV TOP  -->