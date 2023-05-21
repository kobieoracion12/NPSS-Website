<?php
include('../../php/database.php');
include('../../php/access.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Account | NAR Power System Specialists Corp.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/nar-icon.ico">

    <!-- App css -->

    <link href="../dist/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- icons -->
    <link href="../dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="../dist/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="../dist/assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />
</head>

<!-- body start -->

<body class="loading" data-layout-color="light" data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php include "../design/top-menu.php" ?>
        <!-- end Topbar -->

        <!-- Side Bar -->
        <?php include "../design/side-menu.php" ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="inbox-app-main">
                                <div class="row">
                                    <div class="col-md-3">
                                        <aside id="sidebar">
                                            <div class="h-100" data-simplebar>                                                
                                                <menu class="menu-segment">
                                                    <ul class="list-unstyled">
                                                        <li class="active"><a href="finance-payroll.php?sort=active">All
                                                            <span>
                                                                <?php
                                                                    $sql = mysqli_query($config, "SELECT COUNT(account_id) FROM employee_info");
                                                                    while($row = mysqli_fetch_array($sql)) {
                                                                ?>

                                                                (<?php echo $row[0] ?>)

                                                                <?php } ?>
                                                            </span></a>
                                                        </li>
                                                        <li><a href="finance-payroll.php?sort=active">Active</a></li>
                                                        <li><a href="finance-payroll.php?sort=directors">Directors</a></li>
                                                        <li><a href="finance-payroll.php?sort=household">Household</a></li>
                                                        <li><a href="finance-payroll.php?sort=inactive">Inactive</a></li>
                                                    </ul>
                                                </menu>

                                                <div class="separator"></div>

                                                <menu class="menu-segment">
                                                    <ul class="list-unstyled">
                                                        <li><a href="finance-payroll.php?sort=history">Payment History</a></li>
                                                    </ul>
                                                </menu>

                                                <div class="bottom-padding"></div>
                                            </div>
                                        </aside>
                                    </div> <!-- end col -->

                                    <div class="col-md-9">
                                        <main id="main">
                                            <div class="overlay"></div>
                                            
                                            <header class="header">

                                                <h1 class="page-title">
                                                    <a class="sidebar-toggle-btn trigger-toggle-sidebar">
                                                        <span class="line"></span>
                                                        <span class="line"></span>
                                                        <span class="line"></span>
                                                        <span class="line line-angle1"></span>
                                                        <span class="line line-angle2"></span>
                                                    </a>
                                                </h1>
                                                <div class="action-bar float-start">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a class="icon circle-icon"><i class="mdi mdi-refresh text-muted"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a class="icon circle-icon"><i class="mdi mdi-share text-muted"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a class="icon circle-icon red"><i class="mdi mdi-close text-danger"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a class="icon circle-icon red"><i class="mdi mdi-flag text-danger"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="search-box float-end">
                                                    <input placeholder="Search..."><span
                                                        class="icon fa fa-search"></span>
                                                </div>

                                                <div class="clearfix"></div>

                                            </header>

                                            <div id="main-nano-wrapper" class="nano">
                                                <div class="nano-content h-100" data-simplebar>

                                                <?php if(isset($_GET['sort'])) { ?>

                                                    <div>
                                                        <?php
                                                            if($_GET['sort'] == "active") {
                                                                $sql = mysqli_query($config, "SELECT * FROM employee_info WHERE status = 'Active' ORDER BY position ASC");
                                                                while($row = mysqli_fetch_array($sql)) {
                                                        ?>

                                                        <!-- Active -->
                                                        <ul class="message-list">
                                                            <a href="finance-payroll-system.php?uid=<?php echo $row['employee_id'] ?>">
                                                                <li>
                                                                    <div class="mail-col mail-col-1"><span class="dot"></span>
                                                                        <?php echo $row['account_id'] ?>
                                                                        
                                                                        <p class="title">
                                                                            <?php echo $row['position'] ?>
                                                                        </p>
                                                                    </div>

                                                                    <div class="mail-col mail-col-2">
                                                                        <div class="subject">
                                                                            <?php 
                                                                                echo $row['last_name'];
                                                                                echo ", ";
                                                                                echo $row['first_name'];
                                                                                echo " ";
                                                                                echo $row['middle_name'];
                                                                            ?>
                                                                        </div>
                                                                        
                                                                        <div class="date"><?php echo $row['branch_site'] ?></div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <?php } ?>
                                                        </ul>

                                                        <?php } 
                                                            elseif($_GET['sort'] == "directors") { 
                                                                $sql2 = mysqli_query($config, "SELECT * FROM employee_info WHERE emp_stat = 'Director' ORDER BY last_name ASC");
                                                                while($row2 = mysqli_fetch_array($sql2)) {
                                                        ?>

                                                        <!-- Director -->
                                                        <ul class="message-list">
                                                            <a href="finance-payroll-system.php?uid=<?php echo $row2['employee_id'] ?>">
                                                                <li>
                                                                    <div class="mail-col mail-col-1"><span class="dot"></span>
                                                                        <?php echo $row2['account_id'] ?>
                                                                        
                                                                        <p class="title">
                                                                            <?php echo $row2['position'] ?>
                                                                        </p>
                                                                    </div>

                                                                    <div class="mail-col mail-col-2">
                                                                        <div class="subject">
                                                                            <?php 
                                                                                echo $row2['last_name'];
                                                                                echo ", ";
                                                                                echo $row2['first_name'];
                                                                                echo " ";
                                                                                echo $row2['middle_name'];
                                                                            ?>
                                                                        </div>
                                                                        
                                                                        <div class="date"><?php echo $row2['branch_site'] ?></div>
                                                                    </div>
                                                                </li>
                                                            </a>        
                                                            <?php } ?>
                                                        </ul>

                                                        <?php } 
                                                            elseif($_GET['sort'] == "household") { 
                                                                $sql3 = mysqli_query($config, "SELECT * FROM employee_info WHERE emp_stat = 'Household' ORDER BY last_name ASC");
                                                                while($row3 = mysqli_fetch_array($sql3)) {
                                                        ?>

                                                        <!-- Household -->
                                                        <ul class="message-list">
                                                            <a href="finance-payroll-system.php?uid=<?php echo $row3['employee_id'] ?>">
                                                                <li>
                                                                    <div class="mail-col mail-col-1"><span class="dot"></span>
                                                                        <?php echo $row3['account_id'] ?>
                                                                        
                                                                        <p class="title">
                                                                            <?php echo $row3['position'] ?>
                                                                        </p>
                                                                    </div>

                                                                    <div class="mail-col mail-col-2">
                                                                        <div class="subject">
                                                                            <?php 
                                                                                echo $row3['last_name'];
                                                                                echo ", ";
                                                                                echo $row3['first_name'];
                                                                                echo " ";
                                                                                echo $row3['middle_name'];
                                                                            ?>
                                                                        </div>
                                                                        
                                                                        <div class="date"><?php echo $row3['branch_site'] ?></div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <?php } ?>
                                                        </ul>

                                                        <?php } 
                                                            elseif($_GET['sort'] == "inactive") { 
                                                                $sql4 = mysqli_query($config, "SELECT * FROM employee_info WHERE status = 'Inactive' ORDER BY last_name ASC");
                                                                while($row4 = mysqli_fetch_array($sql4)) {
                                                        ?>

                                                        <!-- Inactive -->
                                                        <ul class="message-list">
                                                            <a href="finance-payroll-system.php?uid=<?php echo $row4['employee_id'] ?>">
                                                                <li>
                                                                    <div class="mail-col mail-col-1"><span class="dot"></span>
                                                                        <?php echo $row4['account_id'] ?>
                                                                        
                                                                        <p class="title">
                                                                            <?php echo $row4['position'] ?>
                                                                        </p>
                                                                    </div>

                                                                    <div class="mail-col mail-col-2">
                                                                        <div class="subject">
                                                                            <?php 
                                                                                echo $row4['last_name'];
                                                                                echo ", ";
                                                                                echo $row4['first_name'];
                                                                                echo " ";
                                                                                echo $row4['middle_name'];
                                                                            ?>
                                                                        </div>
                                                                        
                                                                        <div class="date"><?php echo $row4['branch_site'] ?></div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <?php } ?>
                                                        </ul>

                                                    </div>

                                                <?php } } ?>

                                                </div>
                                            </div>

                                            </main>
                                    
                                        </div> <!-- end col -->
                                </div><!-- end row -->
                </div> <!-- container-fluid -->
            </div> <!-- content -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor -->
    <script src="../dist/assets/libs/jquery/jquery.min.js"></script>
    <script src="../dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../dist/assets/libs/node-waves/waves.min.js"></script>
    <script src="../dist/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="../dist/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="../dist/assets/libs/feather-icons/feather.min.js"></script>

    <!-- knob plugin -->
    <script src="../dist/assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!--Morris Chart-->
    <script src="../dist/assets/libs/morris.js06/morris.min.js"></script>
    <script src="../dist/assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboar init js-->
    <script src="../dist/assets/js/pages/dashboard.init.js"></script>
    <!-- Table Editable plugin-->
    <script src="../dist/assets/libs/jquery-tabledit/jquery.tabledit.min.js"></script>

    <!-- Table editable init-->
    <script src="../dist/assets/js/pages/tabledit.init.js"></script>

    <!-- App js-->
    <script src="../dist/assets/js/app.min.js"></script>

    <!-- Plugins js -->
    <script src="../dist/assets/libs/dropzone/min/dropzone.min.js"></script>
    <script src="../dist/assets/libs/dropify/js/dropify.min.js"></script>

</body>
<script type="text/javascript">
   $('table tr').click(function() {
    window.location = 'finance-payroll-system.php';
});
</script>

</html>
