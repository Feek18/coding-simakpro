<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Dashboard-SIMAKPRO</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Logo -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/logopnb.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?php echo base_url() ?>">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/logopnb.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <span style="color: #000; font-family: 'Open Sans'; font-style: normal; font-weight: 600; font-size: 18px; line-height: 25px; text-transform: uppercase; margin-left: 2px;">SIMAKPRO</span>
                        </b>
                        <!--End Logo icon -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="mdi mdi-menu"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-magnify me-1"></i> <span class="font-16">Search</span></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/pict.png" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    Log Out</a>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
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
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div style="background-color: background: #253C56;" xclass="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <hr>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="fa-solid fa-gauge"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-profile.html" aria-expanded="false"><i class="fa-solid fa-gear"></i><span 
                                    class="hide-menu">Management User</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-basic.html" aria-expanded="false"><i class="fa-solid fa-file"></i><span
                                    class="hide-menu">Report</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="icon-material.html" aria-expanded="false"><i class="fa-solid fa-user"></i><span
                                    class="hide-menu">Management User</span></a></li>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Welcome to Dashboard</h1> 
                    </div>
                    <div class="col-6">
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="box" style="width: 99%; height: 140px; margin-left: 10px; padding: 10px; background-color: #27374D; border-radius: 8px;">
                            <p style="font-size: 26px; color: #fff; font-weight: bold; line-height: 30px; padding-left: 10px; margin-top: 11px; display: inline-block;">120</br><span style="font-size: 16px; font-weight: 400; color: #F5F5F5;">Total Program</span></p>
                            <i style="font-size: 40px!important; float: right; margin-top: 20px; color: #fff; padding-right: 10px;" class="fa-solid fa-book box-icon"></i>
                            <div>
                                <a style="font-size: 13px; padding: 5px 15px; background-color: #ECF8F9; float: right; font-weight: 450; color: #27374D;" class="btn" href="#">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="box" style="width: 99%; height: 140px; margin-left: 10px; padding: 10px; background-color: #27374D; border-radius: 8px;">
                            <p style="font-size: 26px; color: #fff; font-weight: bold; line-height: 30px; padding-left: 10px; margin-top: 11px; display: inline-block;">98</br><span style="font-size: 16px; font-weight: 400; color: #F5F5F5;">Daftar Kegiatan</span></p>
                            <i style="font-size: 40px!important; float: right; margin-top: 20px; color: #fff; padding-right: 10px;" class="fa-solid fa-list"></i>
                            <div>
                                <a style="font-size: 13px; padding: 5px 15px; background-color: #ECF8F9; float: right; font-weight: 450; color: #27374D;" class="btn" href="">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="box" style="width: 99%; height: 140px; margin-left: 10px; padding: 10px; background-color: #27374D; border-radius: 8px;">
                            <p style="font-size: 26px; color: #fff; font-weight: bold; line-height: 30px; padding-left: 10px; margin-top: 11px; display: inline-block;">15</br><span style="font-size: 16px; font-weight: 400; color: #F5F5F5;">Berlangsung</span></p>
                            <i style="font-size: 40px!important; float: right; margin-top: 20px; color: #fff; padding-right: 10px;" class="fa-solid fa-gears"></i>
                            <div>
                                <a style="font-size: 13px; padding: 5px 15px; background-color: #ECF8F9; float: right; font-weight: 450; color: #27374D;" class="btn" href="">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="box" style="width: 99%; height: 140px; margin-left: 10px; padding: 10px; background-color: #27374D; border-radius: 8px;">
                            <p style="font-size: 26px; color: #fff; font-weight: bold; line-height: 30px; padding-left: 10px; margin-top: 11px; display: inline-block;">24</br><span style="font-size: 16px; font-weight: 400; color: #F5F5F5;">Kegiatan Selesai</span></p>
                            <i style="font-size: 40px!important; float: right; margin-top: 20px; color: #fff; padding-right: 10px;" class="fa-solid fa-check"></i>
                            <div>
                                <a style="font-size: 13px; padding: 5px 15px; background-color: #ECF8F9; float: right; font-weight: 450; color: #27374D;" class="btn" href="">See More</a>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <br/><br/>
                </div>




            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Designed and Developed by Admin 
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>