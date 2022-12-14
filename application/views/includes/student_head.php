<?php
$session = $_SESSION['userdata'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/student_plugin/');?>logo-icon.png">
    <title>Home - Student</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap/" />
    <link href="<?= base_url('assets/student_plugin/');?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/student_plugin/');?>footable/css/footable.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/student_plugin/');?>bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/student_plugin/');?>css/pages/contact-app-page.css" rel="stylesheet">
    <link href="<?= base_url('assets/student_plugin/');?>css/pages/footable-page.css" rel="stylesheet">
    <link href="<?= base_url('assets/student_plugin/');?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/student_plugin/');?>css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <link href="<?= base_url('assets/student_plugin/');?>/all.css" rel="stylesheet">
    <link href="<?= base_url('assets/student_plugin/');?>/form-icheck.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body class="card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"><?= $session->firstname ?> <?= $session->lastname ?></p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= base_url('student'); ?>">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?= base_url('assets/');?>images/logo-icon.png" alt="homepage" class="light-logo" />
                            <!-- Light Logo icon -->
                            <!-- <img src="</?= base_url('assets/');?>images/logo-light-icon.png" alt="homepage" class="light-logo" /> -->
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="<?= base_url('assets/');?>images/logo-text.png" alt="homepage" class="light-logo" />
                         <!-- Light Logo text -->    
                         <!-- <img src="</?= base_url('assets/');?>images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a> -->
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down"><span></span></li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" style="width: 100%; height: 100%; object-fit: cover;" href="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/uploads/').$session->user_image ?>"
                                    alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?= base_url('assets/uploads/').$session->user_image ?>" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?=$session->firstname ?> <?=$session->lastname ?></h4>
                                                <p class="text-muted"><?= $session->email; ?></p>
                                                <a href="<?= base_url('studentprofile'); ?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    

                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="logout" id="student_logout">
                                            <i class="fa fa-power-off"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
        <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">PERSONAL</li>

                        <li> <a id="dashboard" class="has-arrow waves-effect waves-dark" aria-expanded="false"><i
                                    class="icon-Car-Wheel"></i><span class="hide-menu" style="color:#000000">Dashboard</span></a>
                            <!-- <ul aria-expanded="false" class="collapse">
                                <li><a href="</?= base_url('student'); ?>" id="view_dashboard"> View Dashboard </a></li>
                            </ul> -->
                                
                        </li>

                        <li> <a id="online_activity" class="has-arrow waves-effect waves-dark" aria-expanded="false"> <i class="fa fa-pencil" 
                        aria-hidden="true"></i> <span  class="hide-menu" style="color:#000000">Online Exam</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a id="sample1" href="javascript:void(0)" >Sample Exam A</a></li> 
                                <li><a id="sample2" href="javascript:void(0)" >Sample Exam B</a></li> 
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"> <i 
                                    class="icon-Box-Full"></i> <span class="hide-menu" style="color:#000000">Academics</span></a>
                            <ul aria-expanded="false" class="collapse">
                             <li><a href="<?= base_url('exam_results'); ?>">Exam Result</a></li> 
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>

        

        

