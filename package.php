<?php include("connections/session.php"); ?>
<?php include("connections/database.php"); ?>

<?php

// add package
$user_id_id = $_SESSION['id'];
if (isset($_POST['order'])) {
    $user_id = $user_id_id;
    $account_id = $_POST['account_id'];
    $name = $_POST['name'];
    $wallet_address = $_POST['wallet_address'];
    $package = $_POST['package'];
    $amount = $_POST['amount'];
    $billing_days = $_POST['billing_days'];


    $sql = "INSERT INTO orders (user_id, account_id, name, wallet_address, package, amount, billing_days) VALUES('{$user_id}', '{$account_id}', '{$name}', '{$wallet_address}', '{$package}', '${amount}', '{$billing_days}')";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        header('location: payment-invoice.php');
    } else {
        header('location: package.php');
    }
}

?>


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
    <title>Environ Platform | User package</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="wp-content/themes/creptaam/images/logo-icon.png" type="image/x-icon">
    <!-- Custom CSS -->
    <link href="assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="dist/css/style.min.css" rel="stylesheet">
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
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="user-dashboard.php">
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
                                <a class="dropdown-item" href="profile.php"><i class="ti-user me-1 ms-1"></i>
                                    My Profile</a>
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
                                href="profile.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="package.php" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                                    class="hide-menu">Package</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="referrals.php" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                                    class="hide-menu">Referrals (coming soon!)</span></a></li>
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
                        <h4 class="page-title">Welcome, <?php echo  $_SESSION['full_name']; ?>!</h4>
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
                               <a href="profile.php"> <h6 class="text-white">Profile</h6></a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                               <a href="package.php"><h6 class="text-white">Order a Package</h6> </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <a href="referrals.php"></a><h6 class="text-white">Referrals (coming soon!)</h6></a>
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

                 <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="#">
                                <div class="card-body">
                                    <h4 class="card-title">Order a package</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname"
                                            name="name" value="<?php echo $_SESSION['full_name']; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Account ID
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname"
                                            name="account_id" value="EVP20220<?php echo $_SESSION['id']; ?>" >
                                        </div>
                                    </div>

                                    <?php
                                    //diffrent wallets fetch from database
                                            $wallet_query = "SELECT * FROM wallets ORDER BY id DESC LIMIT 1";
                                            $wallet_query_run = $connection->query($wallet_query);

                                            if ($wallet_query_run->num_rows > 0) {
                                                // output data of each row

                                    ?>
                                     <?php while ($row = $wallet_query_run->fetch_assoc()) {  ?>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Crypto Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="wallet_address" value="<?php echo $row["wallet"] ?>" class="form-control" id="lname">
                                        </div>
                                            <?php
                                                }
                                                    } else {
                                                    echo "No Recent Orders";
                                                }
                                        ?>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-end control-label col-form-label">Package</label>

                                        <div class="col-sm-9">
                                        <select class="form-control" name="package">
                                        <option>Default select</option>
                                        <option value="Basic Plan">Basic Plan</option>
                                        <option value="Deluxe Plan">Deluxe Plan</option>
                                        <option value="Super Deluxe Plan">Super Deluxe Plan</option>
                                        <option value="Executive Plan">Executive Plan</option>
                                    </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-end control-label col-form-label">Amount</label>

                                        <div class="col-sm-9">
                                        <select class="form-control" name="amount">
                                        <option>Default select</option>
                                        <option value="$500">$500</option>
                                        <option value="$1,000">$1,000</option>
                                        <option value="$3,500">$3,500</option>
                                        <option value="$7,500">$7,500</option>
                                    </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Billing Days</label>
                                        <div class="col-sm-9">
                                        <select class="form-control" name="billing_days">
                                            <option>Default select</option>
                                            <option value="7">7 days</option>
                                            <option value="14">14 days</option>
                                            <option value="28">28 days</option>
                                            <option value="41">41 days</option>
                                        </select>
                                        </div>
                                    </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="order"  class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <div class="col-md-6">
                    </div>
                </div>

                <?php
                $user_id = $_SESSION['id'];

                //$sqli = "SELECT * FROM orders WHERE user_id = $user_id LIMIT 2";
                $sqli = "SELECT * FROM orders  WHERE user_id = $user_id ORDER BY id DESC LIMIT 2";
                $resulti = $connection->query($sqli);

                if ($resulti->num_rows > 0) {
                    // output data of each row

                ?>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Current Order</h5>
                            </div>
                            
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Account ID</th>
                                        <th scope="col">Billing Days</th>
                                        <th scope="col">Package</th>
                                        <th scope="col">Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php while ($row = $resulti->fetch_assoc()) {  ?>
                                        <th scope="row"><?php echo $row["account_id"] ?></th>
                                        <td><?php echo $row["billing_days"] ?></td>
                                        <td><?php echo $row["package"] ?></td>
                                        <td><?php echo $row["order_time"] ?></td>
                                    </tr>
                        <?php
                                    }
                                } else {
                                    echo "No Recent Orders";
                                }
                        ?>
                                </tbody>
                            </table>
        
                        </div>
                    </div>
                </div>
                
                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-new-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text"
                                                name="category-name" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-select shadow-none form-white" data-placeholder="Choose a color..."
                                                name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                                <option value="inverse">Inverse</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                                    data-dismiss="modal">Save</button>
                                <button type="button" class="btn btn-secondary waves-effect"
                                    data-dismiss="modal">Close</button>
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