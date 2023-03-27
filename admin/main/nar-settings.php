<?php
    include('../../php/database.php');
    include('../../php/access.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Settings | NAR Power System Specialists Corp.</title>
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

                                        <h5 class="mb-4">Admin Settings</h5>
                                        
                                        <div class="col-lg-6 col-md-12">

                                            <div class="row">

                                                <div class="col-12">
                                                    <label class="form-label">Employement Status</label>

                                                    <!-- Employement Status -->
                                                    <div class="row">

                                                        <div class="col-8">
                                                            <select class="form-select">

                                                            <?php $sql = mysqli_query($config, "SELECT * FROM emp_status ORDER BY emp_stat ASC");
                                                            while($stat = mysqli_fetch_array($sql)) { ?>
                                                                <option value="<?php echo $stat['stat_no'] ?>"><?php echo $stat['emp_stat'] ?></option>
                                                            <?php } ?>

                                                            </select>
                                                        </div>

                                                        <div class="col-2 d-grid gap-2 g-0">
                                                            <button type="button" class="btn btn-primary rounded rounded me-1" title="Add" data-bs-toggle="modal" data-bs-target="#add-status">
                                                                <i class="mdi mdi-plus-circle"></i>
                                                            </button>
                                                        </div>

                                                        <div class="col-2 d-grid gap-2 g-0">
                                                            <button type="button" class="btn btn-danger rounded rounded me-1" title="Delete" data-bs-toggle="modal" data-bs-target="#delete-status">
                                                                <i class="mdi mdi-delete"></i>
                                                            </button>
                                                        </div>

                                                        <!-- Add Status Modal -->
                                                        <div class="modal fade" id="add-status" tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered modal-md">
                                                                <div class="modal-content">
                                                                    <div class="modal-header  px-4 border-bottom-0 d-block">
                                                                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        <h4 class="modal-title" id="modal-title">Employement Status</h4>
                                                                    </div>

                                                                    <div class="modal-body mx-4">
                                                                        <form method="post" action="../../php/modify-settings.php">
                                                                            
                                                                            <input type="text" class="form-control" name="emp-stat" placeholder="Employement Status" required>

                                                                            <div class="row mt-4">
                                                                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                                                    <button type="submit" class="btn btn-success px-5 rounded-pill w-100" name="add-stat">Continue</button>
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>
                                                                </div> <!-- end modal-content-->
                                                            </div> <!-- end modal dialog-->
                                                        </div>

                                                        <!-- Delete Status Modal -->
                                                        <div class="modal fade" id="delete-status" tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered modal-md">
                                                                <div class="modal-content">
                                                                    <div class="modal-header px-4 border-bottom-0 d-block">
                                                                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        <h4 class="modal-title" id="modal-title">Employement Status</h4>
                                                                    </div>

                                                                    <div class="modal-body mx-4">
                                                                        <form method="post" action="../../php/modify-settings.php">
                                                                            
                                                                        <select class="form-select" name="del-stat">

                                                                            <?php $sql = mysqli_query($config, "SELECT * FROM emp_status ORDER BY emp_stat ASC");
                                                                            while($stat = mysqli_fetch_array($sql)) { ?>
                                                                                <option value="<?php echo $stat['stat_no'] ?>"><?php echo $stat['emp_stat'] ?></option>
                                                                            <?php } ?>

                                                                            </select>

                                                                            <div class="row mt-4">
                                                                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                                                    <button type="submit" class="btn btn-danger px-5 rounded-pill w-100" name="delete-stat">Delete</button>
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>
                                                                </div> <!-- end modal-content-->
                                                            </div> <!-- end modal dialog-->
                                                        </div>

                                                    </div>
                                                    
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label class="form-label">Position</label>

                                            <!-- Position -->
                                            <div class="row">

                                                <div class="col-8">
                                                    <select class="form-select">

                                                    <?php $sql = mysqli_query($config, "SELECT * FROM emp_status ORDER BY emp_stat ASC");
                                                    while($stat = mysqli_fetch_array($sql)) { ?>
                                                        <option value="<?php echo $stat['stat_no'] ?>"><?php echo $stat['emp_stat'] ?></option>
                                                    <?php } ?>

                                                    </select>
                                                </div>

                                                <div class="col-2 d-grid gap-2 g-0">
                                                    <button type="button" class="btn btn-primary rounded rounded me-1" title="Add" data-bs-toggle="modal" data-bs-target="#add-status">
                                                        <i class="mdi mdi-plus-circle"></i>
                                                    </button>
                                                </div>

                                                <div class="col-2 d-grid gap-2 g-0">
                                                    <button type="button" class="btn btn-danger rounded rounded me-1" title="Delete" data-bs-toggle="modal" data-bs-target="#delete-status">
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>
                                                </div>

                                                <!-- Add Status Modal -->
                                                <div class="modal fade" id="add-status" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header  px-4 border-bottom-0 d-block">
                                                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                <h4 class="modal-title" id="modal-title">Employement Status</h4>
                                                            </div>

                                                            <div class="modal-body mx-4">
                                                                <form method="post" action="../../php/modify-settings.php">
                                                                    
                                                                    <input type="text" class="form-control" name="emp-stat" placeholder="Employement Status" required>

                                                                    <div class="row mt-4">
                                                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                                            <button type="submit" class="btn btn-success px-5 rounded-pill w-100" name="add-stat">Continue</button>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div> <!-- end modal-content-->
                                                    </div> <!-- end modal dialog-->
                                                </div>

                                                <!-- Delete Status Modal -->
                                                <div class="modal fade" id="delete-status" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header px-4 border-bottom-0 d-block">
                                                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                <h4 class="modal-title" id="modal-title">Employement Status</h4>
                                                            </div>

                                                            <div class="modal-body mx-4">
                                                                <form method="post" action="../../php/modify-settings.php">
                                                                    
                                                                <select class="form-select" name="del-stat">

                                                                    <?php $sql = mysqli_query($config, "SELECT * FROM emp_status ORDER BY emp_stat ASC");
                                                                    while($stat = mysqli_fetch_array($sql)) { ?>
                                                                        <option value="<?php echo $stat['stat_no'] ?>"><?php echo $stat['emp_stat'] ?></option>
                                                                    <?php } ?>

                                                                    </select>

                                                                    <div class="row mt-4">
                                                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                                            <button type="submit" class="btn btn-danger px-5 rounded-pill w-100" name="delete-stat">Delete</button>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div> <!-- end modal-content-->
                                                    </div> <!-- end modal dialog-->
                                                </div>

                                            </div>
                                            
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include "../design/web-footer.php" ?>
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