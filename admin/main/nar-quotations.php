<?php
include('../../php/database.php');
include('../../php/access.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Clients | NAR Power System Specialists Corp.</title>
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

                        <div class="row px-2">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-xl-4 col-md-12">
                                            <button class="btn btn-warning text-white rounded">
                                                <i class="mdi mdi-plus-circle me-1"></i>Add Client
                                            </button>
                                        </div>

                                        <div class="col-xl-8 col-md-12">

                                            <div class="row justify-content-end">
                                                
                                                <div class="col-4">
                                                    <select class="form-select" id="example-select">
                                                        <option selected>Default</option>
                                                        <option>Branch</option>
                                                        <option>Name</option>
                                                    </select>
                                                </div>

                                                <div class="col-4">
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Search...">
                                                </div>

                                            </div>

                                        </div>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card rounded-lg">
                                    <div class="card-body p-4">
                                        <div class="col-md-4">
                                            <img src="../../assets/bpi_logo.png" alt="image" class="img-fluid"/>
                                        </div>

                                        <h3 class="mt-3 mb-0">Bank of the Philippine Islands</h3>
                                        <h6 class="mt-0 mb-0 text-muted font-weight-light mt-1">Branch Name</h6>
                                   
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card rounded-lg">
                                    <div class="card-body p-4">
                                        <div class="col-md-4">
                                            <img src="../../assets/coca_cola_logo.png" alt="image" class="img-fluid"/>
                                        </div>

                                        <h3 class="mt-3 mb-0">Coca-Cola Corporation</h3>
                                        <h6 class="mt-0 mb-0 text-muted font-weight-light mt-1">Branch Name</h6>
                                   
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card rounded-lg">
                                    <div class="card-body p-4">
                                        <div class="col-md-4">
                                            <img src="../../assets/filinvest_logo.png" alt="image" class="img-fluid"/>
                                        </div>

                                        <h3 class="mt-3 mb-0">Filinvest</h3>
                                        <h6 class="mt-0 mb-0 text-muted font-weight-light mt-1">Branch Name</h6>
                                   
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card rounded-lg">
                                    <div class="card-body p-4">
                                        <div class="col-md-4">
                                            <img src="../../assets/fujitsu_logo.png" alt="image" class="img-fluid"/>
                                        </div>

                                        <h3 class="mt-3 mb-0">Fujitsu</h3>
                                        <h6 class="mt-0 mb-0 text-muted font-weight-light mt-1">Branch Name</h6>
                                   
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card rounded-lg">
                                    <div class="card-body p-4">
                                        <div class="col-md-4">
                                            <img src="../../assets/jollibee_logo.png" alt="image" class="img-fluid"/>
                                        </div>

                                        <h3 class="mt-3 mb-0">Jollibee Corporation</h3>
                                        <h6 class="mt-0 mb-0 text-muted font-weight-light mt-1">Branch Name</h6>
                                   
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card rounded-lg">
                                    <div class="card-body p-4">
                                        <div class="col-md-4">
                                            <img src="../../assets/manilawater_logo.png" alt="image" class="img-fluid"/>
                                        </div>

                                        <h3 class="mt-3 mb-0">Manila Water</h3>
                                        <h6 class="mt-0 mb-0 text-muted font-weight-light mt-1">Branch Name</h6>
                                   
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card rounded-lg">
                                    <div class="card-body p-4">
                                        <div class="col-md-4">
                                            <img src="../../assets/maynilad_logo.png" alt="image" class="img-fluid"/>
                                        </div>

                                        <h3 class="mt-3 mb-0">Maynilad</h3>
                                        <h6 class="mt-0 mb-0 text-muted font-weight-light mt-1">Branch Name</h6>
                                   
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card rounded-lg">
                                    <div class="card-body p-4">
                                        <div class="col-md-4">
                                            <img src="../../assets/meralco_logo.png" alt="image" class="img-fluid"/>
                                        </div>

                                        <h3 class="mt-3 mb-0">Meralco Corporation</h3>
                                        <h6 class="mt-0 mb-0 text-muted font-weight-light mt-1">Branch Name</h6>
                                   
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                        

                    </div> <!-- container-fluid -->

                </div> <!-- content -->



                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; NAR Power System Specialists Corporation</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

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