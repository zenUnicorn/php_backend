<?php include("connections/session.php"); ?>
<?php include("connections/database.php"); ?>


<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords">
    <meta name="description">
    <meta name="robots" content="noindex,nofollow">
    <title>Environ Platform | User Dashboard</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="wp-content/themes/creptaam/images/logo-icon.png" type="image/x-icon">
    <!-- Custom CSS -->
    <link href="assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="dist/css/style.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

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
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="admin-dashboard.php">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="wp-content/themes/creptaam/images/logo-icon.png" alt="homepage" width="50px" height="50px" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                                                <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="all-user.php"><i class="ti-user me-1 ms-1"></i>
                                    All users</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="all-staff.php"><i class="ti-user me-1 ms-1"></i>
                                    All staff</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="all-orders.php"><i class="ti-user me-1 ms-1"></i>
                                    All orders</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="all-task.php"><i class="ti-user me-1 ms-1"></i>
                                    All task</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="all-details.php"><i class="ti-user me-1 ms-1"></i>
                                    All details</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                <div class="dropdown-divider"></div>
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
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="all-user.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">All users</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="all-staff.php" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                                    class="hide-menu">All Staffs</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="all-orders.php" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                                    class="hide-menu">All orders</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="all-task.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">All task</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="all-details.php" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                                    class="hide-menu">All details</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="logout.php" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                                    class="hide-menu">Logout</span></a></li>
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
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Hello, <?php echo $_SESSION['admin_username']; ?>!</h4>
                        <div class="ms-auto text-end">
                        </div>
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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                               <a href="all-user.php"> <h6 class="text-white">All users</h6></a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                               <a href="all-staff.php"><h6 class="text-white">All staffs</h6> </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <a href="all-orders.php"><h6 class="text-white">All orders</h6></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                               <a href="all-task.php"> <h6 class="text-white">All task</h6></a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <a href="all-details.php"><h6 class="text-white">All details</h6></a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <a href="logout.php"><h6 class="text-white">Logout</h6></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mt-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="peity_line_neutral left text-center mt-2"><span><span
                                                style="display: none;"></span>
                                            <canvas width="50" height="24"></canvas>
                                        </span>
                                        <h6></h6>
                                    </div>
                                </div>
                                <?php 
                                    $all_user_query = "SELECT * FROM users_table";
                                    $all_user_query_run = mysqli_query($connection, $all_user_query);

                                    if ($user_total = mysqli_num_rows($all_user_query_run)) {
                                    ?>
                                    <div class="col-md-6 border-left text-center pt-2">
                                        <h3 class="mb-0 fw-bold"><?php echo $user_total; ?></h3>
                                        <span class="text-muted">All Users</span>
                                    </div>
                                <?php 
                                    } else {
                                    echo "Null";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mt-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="peity_bar_bad left text-center mt-2"><span><span
                                                style="display: none;"></span>
                                            <canvas width="50" height="24"></canvas>
                                        </span>
                                        <h6></h6>
                                    </div>
                                </div>
                                <?php 
                                    $all_order_query = "SELECT * FROM orders";
                                    $all_order_query_run = mysqli_query($connection, $all_order_query);

                                    if ($order_total = mysqli_num_rows($all_order_query_run)) {
                                    ?>
                                <div class="col-md-6 border-left text-center pt-2">
                                    <h3 class="mb-0 fw-bold"><?php echo $order_total; ?></h3>
                                    <span class="text-muted">All Orders</span>
                                </div>
                                <?php 
                                    } else {
                                    echo "Null";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mt-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="peity_line_good left text-center mt-2"><span><span
                                                style="display: none;"></span>
                                            <canvas width="50" height="24"></canvas>
                                        </span>
                                        <h6></h6>
                                    </div>
                                </div>
                                <?php 
                                    $all_staff_query = "SELECT * FROM staff_table";
                                    $all_staff_query_run = mysqli_query($connection, $all_staff_query);

                                    if ($staff_total = mysqli_num_rows($all_staff_query_run)) {
                                    ?>
                                <div class="col-md-6 border-left text-center pt-2">
                                    <h3 class="mb-0 "><?php echo $staff_total; ?></h3>
                                    <span class="text-muted">All staffs</span> 
                                </div>
                                <?php 
                                    } else {
                                    echo "Null";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mt-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="peity_bar_good left text-center mt-2"><span></span>
                                        <h6></h6>
                                    </div>
                                </div>
                                <?php 
                                    $all_task_query = "SELECT * FROM staff_tasks";
                                    $all_task_query_run = mysqli_query($connection, $all_task_query);

                                    if ($task_total = mysqli_num_rows($all_task_query_run)) {
                                    ?>
                                <div class="col-md-6 border-left text-center pt-2">
                                    <h3 class="mb-0 fw-bold"><?php echo $task_total; ?></h3>
                                    <span class="text-muted">Staff Tasks</span>
                                </div>
                                <?php 
                                    } else {
                                    echo "Null";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mt-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="peity_bar_good left text-center mt-2"><span></span>
                                        <h6></h6>
                                    </div>
                                </div>
                                <?php 
                                    $all_social_query = "SELECT * FROM social_details";
                                    $all_social_query_run = mysqli_query($connection, $all_social_query);

                                    if ($social_total = mysqli_num_rows($all_social_query_run)) {
                                    ?>
                                <div class="col-md-6 border-left text-center pt-2">
                                    <h3 class="mb-0 fw-bold"><?php echo $social_total; ?></h3>
                                    <span class="text-muted">Staff Social Details</span>
                                </div>
                                <?php 
                                    } else {
                                    echo "Null";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Site Analysis</h4>
                                        <h5 class="card-subtitle">Overview of Latest Month</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-9">
                                        <div class="flot-chart">
                                            <div class="flot-chart-content" id="flot-line-chart"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-user mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1"><?php echo $user_total; ?></h5>
                                                    <small class="font-light">Total Users</small>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-globe mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1"><?php echo $social_total; ?></h5>
                                                    <small class="font-light">Social details</small>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-cart-plus mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1"><?php echo $order_total; ?></h5>
                                                    <small class="font-light">Total Orders</small>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-tag mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1"><?php echo $task_total; ?></h5>
                                                    <small class="font-light">Total Tasks</small>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-users mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1"><?php echo $staff_total; ?></h5>
                                                    <small class="font-light">Total staffs</small>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fas fa-times-circle mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">Log out</h5>
                                                    <a href="logout.php"><small class="font-light">Log-out</small></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
            &copy; 2022 | Environ Platform
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
    <script src="dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="dist/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="dist/js/pages/calendar/cal-init.js"></script>

</body>

</html>