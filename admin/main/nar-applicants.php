<?php
include('../../php/database.php');
include('../../php/access.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Applicants | NAR Power System Specialists Corp.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../../assets/nar-icon.ico">

        <!-- App css -->

        <link href="../dist/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- icons -->
        <link href="../dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

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
                                                            <li class="active"><a href="javascript:void(0);">Inbox<span> (43)</span></a>
                                                            </li>
                                                            <li><a href="javascript:void(0);">Unread</a></li>
                                                            <li><a href="javascript:void(0);">Pending</a></li>
                                                            <li><a href="javascript:void(0);">Outgoing</a></li>
                                                        </ul>
                                                    </menu>

                                                    <div class="separator"></div>

                                                    <div class="menu-segment">
                                                        <ul class="labels list-unstyled">
                                                            <li class="title">Labels <span class="icon">+</span></li>
                                                            <li><a href="#">Important <span class="ball green"></span></a>
                                                            </li>
                                                            <li><a href="#">Denied <span
                                                                    class="ball red"></span></a></li>
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
                                                            <tr class="text-success fw-bold">
                                                                <th class="p-3" scope="row">1</th>
                                                                <td class="p-3">Kobie Oracion</td>
                                                                <td class="p-3">IT Specialist</td>
                                                                <td class="p-3">Antipolo City</td>
                                                                <td class="p-3">March 14, 2023</td>
                                                                <td class="p-3 text-center">Pending</td>
                                                            </tr>
                                                            <tr class="fw-bold">
                                                                <th class="p-3" scope="row">2</th>
                                                                <td class="p-3">Jireh Geleo Ramos</td>
                                                                <td class="p-3">IT Specialist</td>
                                                                <td class="p-3">Antipolo City</td>
                                                                <td class="p-3">February 23, 2023</td>
                                                                <td class="p-3 text-center">Pending</td>
                                                            </tr>
                                                            <tr class="text-danger">
                                                                <th class="p-3" scope="row">3</th>
                                                                <td class="p-3">Richard Ramos</td>
                                                                <td class="p-3">Macho Dancer</td>
                                                                <td class="p-3">Antipolo City</td>
                                                                <td class="p-3">January 1, 2022</td>
                                                                <td class="p-3 text-center">Denied</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="p-3" scope="row">4</th>
                                                                <td class="p-3">Neil Arthur Pornela</td>
                                                                <td class="p-3">Sex Worker</td>
                                                                <td class="p-3">Antipolo City</td>
                                                                <td class="p-3">April 6, 2019</td>
                                                                <td class="p-3 text-center">Approved</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </main>
                                        </div> <!-- end col -->
                                    </div><!-- end row -->
                                </div>

                            </div>

                        </div>
                        <!-- End row -->

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

        <!-- App js-->
        <script src="../dist/assets/js/app.min.js"></script>
        

    </body>
</html>