<?php
if(isset($_SESSION['userdata'])){
    $session = $_SESSION['userdata'];
}
else{
    $session = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Student Exam System</title> 
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/uploads/logo.png') ?>">
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap/" />
    <!-- bootstrap v4.3.1  -->
    <link href="<?= base_url('assets/'); ?>node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>node_modules/c3-master/c3.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/colors/default.css" id="theme" rel="stylesheet">
    <!-- Footable CSS -->
    <link href="<?= base_url('assets/'); ?>node_modules/footable/css/footable.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <!-- Page CSS -->
    <link href="<?= base_url('assets/'); ?>css/pages/contact-app-page.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/pages/footable-page.css" rel="stylesheet">
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head>

<body class="fix-header fix-sidebar card-no-border"> 
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Student Exam System</p>
        </div>
    </div>

 
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light"> 
            <div class="navbar-header bg-dark">
                <a class="navbar-brand" href="<?= base_url(); ?>"> 
                        <b>
                            <img width="30" src="<?= base_url('assets/uploads/logo.png') ?>" alt="homepage" class="dark-logo" />  
                        </b> 
                        <span>  
                            <img width="70" src="https://firebasestorage.googleapis.com/v0/b/profile-evemilberdin.appspot.com/o/Berdin.ico?alt=media&token=164b6ee2-ca57-4c58-8c3f-ddcb68e8bad7" alt="homepage" class="proweaverdarklogo" style="background-repeat: no-repeat;"/>  
                        </span>
                </a>
            </div> 

            <div class="navbar-collapse"> 
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down"><span></span></li>
                    </ul> 
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/uploads/').$session->user_image ?>" alt="user" class="" /> <span class="hidden-md-down"><?= $session->username ?> &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?= base_url('assets/uploads/').$session->user_image ?>" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?=$session->firstname ?> <?=$session->lastname ?></h4>
                                                <p class="text-muted"><?= $session->email; ?></p>
                                                <a href="<?= base_url('admin'); ?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    

                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="javascript:void(0)" id="admin_logout">
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

    <aside class="left-sidebar"> 
        <div class="scroll-sidebar"> 
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">--- Admin</li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="<?= base_url('admin'); ?>" aria-expanded="false"><i class="icon-Car-Wheel"></i><span class="hide-menu">Dashboard
 
                        </a>
                        <!-- <ul aria-expanded="false" class="collapse">
                            <li><a href="</?= base_url('admin'); ?>">View Dashboard</a></li>
                        </ul> -->
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="<?= base_url('manage'); ?>" aria-expanded="false"><i class="fa-solid fa-user"></i><span class="hide-menu">Manage Student</span></a>
                        <!-- <ul aria-expanded="false" class="collapse">
                            <li><a href="</?= base_url('manage'); ?>">View Registered Student</a></li>
                        </ul> -->
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="<?= base_url('exam'); ?>" aria-expanded="false"><i class="icon-Box-Full"></i><span class="hide-menu">Exam results</span></a>
                        <!-- <ul aria-expanded="false" class="collapse">
                            <li><a href="</?= base_url('exam'); ?>">View Results</a></li>
                        </ul> -->
                    </li>
                </ul>
            </nav> 
        </div> 
    </aside> 
    <div id="main-content">
        <div class="page-wrapper">
            <div class="container-fluid">
