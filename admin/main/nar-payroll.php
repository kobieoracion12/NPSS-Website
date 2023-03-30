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
                                                        <li class="active"><a href="javascript:void(0);">All<span> (43)</span></a>
                                                        </li>
                                                        <li><a href="javascript:void(0);">Active</a></li>
                                                        <li><a href="javascript:void(0);">Directors</a></li>
                                                        <li><a href="javascript:void(0);">Household</a></li>
                                                        <li><a href="javascript:void(0);">Inacive</a></li>
                                                    </ul>
                                                </menu>

                                                <div class="separator"></div>

                                                <div class="menu-segment">
                                                    <ul class="labels list-unstyled">
                                                        <li class="title">Positions <span class="icon">+</span></li>
                                                        <li><a href="#">Legend<span class="ball grey"></span></a>
                                                        </li>
                                                        <li><a href="#">Active<span
                                                                class="ball green"></span></a></li>
                                                        <li><a href="#">Directors<span class="ball blue"></span></a>
                                                        </li>
                                                        <li><a href="#">Household<span class="ball blue"></span></a>
                                                        </li>
                                                        <li><a href="#">Inactive<span class="ball red"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                            <a class="icon circle-icon red"><i class="mdi mdi-close text-danger"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="search-box float-end">
                                                    <input placeholder="Search..."><span
                                                        class="icon fa fa-search"></span>
                                                </div>

                                                <div class="clearfix"></div>

                                            </header>
                                            <div class="table-responsive mx-4 mt-1">
                                                    <table class="table table-hover table-borderless mb-0">
                                                        <tbody>
                                                            <tr class="text-muted" >
                                                                
                                                                    <th class="px-3" scope="row">1</th>
                                                                    <td class="px-3">Oracion</td>
                                                                    <td class="px-3">Kobie</td>
                                                                     <td class="px-3">O.</td>
                                                                    <td class="px-3">Antipolo City</td>
                                                            </tr>
                                                            <tr class="text-muted">
                                                                   <th class="px-3" scope="row">1</th>
                                                                    <td class="px-3">Oracion</td>
                                                                    <td class="px-3">Kobie</td>
                                                                     <td class="px-3">O.</td>
                                                                    <td class="px-3">Antipolo City</td>
                                                                
                                                            </tr>
                                                            <tr class="text-muted">
                                                              
                                                                    <th class="px-3" scope="row">1</th>
                                                                    <td class="px-3">Oracion</td>
                                                                    <td class="px-3">Kobie</td>
                                                                     <td class="px-3">O.</td>
                                                                    <td class="px-3">Antipolo City</td>
                                                           
                                                            </tr>
                                                            <tr class="text-muted">
                                                                    <th class="px-3" scope="row">1</th>
                                                                    <td class="px-3">Oracion</td>
                                                                    <td class="px-3">Kobie</td>
                                                                    <td class="px-3">O.</td>
                                                                    <td class="px-3">Antipolo City</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
    window.location = 'nar-payroll-system.php';
});
</script>

</html>
