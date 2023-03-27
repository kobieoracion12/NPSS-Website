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

        <!-- Plugins css -->
        <link href="../dist/assets/libs/mohithg-switchery/switchery.min.css" rel="stylesheet" type="text/css" />
        <link href="../dist/assets/libs/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
        <link href="../dist/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../dist/assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
        <link href="../dist/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />

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

                                                        <div class="col-6">
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
                                                            <button type="button" class="btn btn-warning text-white rounded rounded me-1" title="Edit" data-bs-toggle="modal" data-bs-target="#edit-status">
                                                                <i class="mdi mdi-pencil"></i>
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

                                                        <!-- Edit Status Modal -->
                                                        <div class="modal fade" id="edit-status" tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered modal-md">
                                                                <div class="modal-content">
                                                                    <div class="modal-header px-4 border-bottom-0 d-block">
                                                                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        <h4 class="modal-title" id="modal-title">Employement Status</h4>
                                                                    </div>

                                                                    <div class="modal-body mx-4">
                                                                        <form method="post" action="../../php/modify-settings.php">
                                                                            
                                                                            <select class="form-select" name="id-stat">

                                                                            <?php $sql = mysqli_query($config, "SELECT * FROM emp_status ORDER BY emp_stat ASC");
                                                                            while($stat = mysqli_fetch_array($sql)) { ?>
                                                                                <option value="<?php echo $stat['stat_no'] ?>"><?php echo $stat['emp_stat'] ?></option>
                                                                            <?php } ?>

                                                                            </select>

                                                                            <label class="form-label mt-2">Rename</label>
                                                                            <input class="form-control" type="text" name="edit-name" required>

                                                                            <div class="row mt-4">
                                                                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                                                    <button type="submit" class="btn btn-warning text-white px-5 rounded-pill w-100" name="edit-stat">Edit</button>
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

                                                <div class="col-6">
                                                    <select class="form-select">

                                                    <?php $sql = mysqli_query($config, "SELECT * FROM position ORDER BY position_name ASC");
                                                    while($stat = mysqli_fetch_array($sql)) { ?>
                                                        <option value="<?php echo $stat['position_no'] ?>"><?php echo $stat['position_name'] ?></option>
                                                    <?php } ?>

                                                    </select>
                                                </div>

                                                <div class="col-2 d-grid gap-2 g-0">
                                                    <button type="button" class="btn btn-primary rounded rounded me-1" title="Add" data-bs-toggle="modal" data-bs-target="#add-position">
                                                        <i class="mdi mdi-plus-circle"></i>
                                                    </button>
                                                </div>

                                                <div class="col-2 d-grid gap-2 g-0">
                                                    <button type="button" class="btn btn-warning text-white rounded rounded me-1" title="Edit" data-bs-toggle="modal" data-bs-target="#edit-position">
                                                        <i class="mdi mdi-pencil"></i>
                                                    </button>
                                                </div>

                                                <div class="col-2 d-grid gap-2 g-0">
                                                    <button type="button" class="btn btn-danger rounded rounded me-1" title="Delete" data-bs-toggle="modal" data-bs-target="#delete-position">
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>
                                                </div>

                                                <!-- Add Position Modal -->
                                                <div class="modal fade" id="add-position" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header  px-4 border-bottom-0 d-block">
                                                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                <h4 class="modal-title" id="modal-title">Position</h4>
                                                            </div>

                                                            <div class="modal-body mx-4">
                                                                <form method="post" action="../../php/modify-settings.php">
                                                                    
                                                                    <input type="text" class="form-control" name="post-name" placeholder="Position Title" required>

                                                                    <label class="mb-1 mt-2 fw-medium text-muted">Job Description</label>
                                                                    <textarea id="textarea" class="form-control" maxlength="150" rows="3" name="job-desc" placeholder="This textarea has a limit of 225 chars." required></textarea>

                                                                    <div class="row mt-4">
                                                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                                            <button type="submit" class="btn btn-success px-5 rounded-pill w-100" name="add-post">Continue</button>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div> <!-- end modal-content-->
                                                    </div> <!-- end modal dialog-->
                                                </div>

                                                <!-- Edit Status Modal -->
                                                <div class="modal fade" id="edit-position" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header px-4 border-bottom-0 d-block">
                                                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                <h4 class="modal-title" id="modal-title">Position</h4>
                                                            </div>

                                                            <div class="modal-body mx-4">
                                                                <form method="post" action="../../php/modify-settings.php">
                                                                    
                                                                    <select class="form-select" name="id-stat">

                                                                    <?php $sql = mysqli_query($config, "SELECT * FROM position ORDER BY position_name ASC");
                                                                    while($stat = mysqli_fetch_array($sql)) { ?>
                                                                        <option value="<?php echo $stat['position_no'] ?>"><?php echo $stat['position_name'] ?></option>
                                                                    <?php } ?>

                                                                    </select>

                                                                    <label class="form-label mt-2">Rename</label>
                                                                    <input class="form-control" type="text" name="edit-name" required>

                                                                    <label class="mb-1 mt-2 fw-medium text-muted">Job Description</label>
                                                                    <textarea id="textarea" class="form-control" maxlength="150" rows="3" name="edit-desc" placeholder="This textarea has a limit of 225 chars." required></textarea>

                                                                    <div class="row mt-4">
                                                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                                            <button type="submit" class="btn btn-warning text-white px-5 rounded-pill w-100" name="edit-post">Edit</button>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div> <!-- end modal-content-->
                                                    </div> <!-- end modal dialog-->
                                                </div>

                                                <!-- Delete Status Modal -->
                                                <div class="modal fade" id="delete-position" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header px-4 border-bottom-0 d-block">
                                                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                <h4 class="modal-title" id="modal-title">Position</h4>
                                                            </div>

                                                            <div class="modal-body mx-4">
                                                                <form method="post" action="../../php/modify-settings.php">
                                                                    
                                                                <select class="form-select" name="del-post">

                                                                    <?php $sql = mysqli_query($config, "SELECT * FROM position ORDER BY position_name ASC");
                                                                    while($stat = mysqli_fetch_array($sql)) { ?>
                                                                        <option value="<?php echo $stat['position_no'] ?>"><?php echo $stat['position_name'] ?></option>
                                                                    <?php } ?>

                                                                    </select>

                                                                    <div class="row mt-4">
                                                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                                            <button type="submit" class="btn btn-danger px-5 rounded-pill w-100" name="delete-post">Delete</button>
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

        <script src="../dist/assets/libs/selectize/js/standalone/selectize.min.js"></script>
        <script src="../dist/assets/libs/mohithg-switchery/switchery.min.js"></script>
        <script src="../dist/assets/libs/multiselect/js/jquery.multi-select.js"></script>
        <script src="../dist/assets/libs/select2/js/select2.min.js"></script>
        <script src="../dist/assets/libs/jquery-mockjax/jquery.mockjax.min.js"></script>
        <script src="../dist/assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js"></script>
        <script src="../dist/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="../dist/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

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