<?php
include('../../php/database.php');
include('../../php/access.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Documents | NAR Power System Specialists Corp.</title>
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

                        <!-- Header -->
                        <div class="row px-2">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-xl-2 col-md-12">
                                            <button class="btn btn-warning text-white rounded" data-bs-toggle="modal" data-bs-target="#upload-docu">
                                                <i class="mdi mdi-upload me-1"></i>Upload Document
                                            </button>
                                        </div>

                                        <div class="col-xl-2 col-md-12">
                                            <button class="btn btn-warning text-white rounded" data-bs-toggle="modal" data-bs-target="#add-folder">
                                                <i class="mdi mdi-folder me-1"></i>New Folder
                                            </button>
                                        </div>

                                        <div class="col-xl-8 col-md-12">

                                            <div class="row justify-content-end">
                                                <div class="col-4">
                                                    <form action="" method="POST">
                                                        <input type="text" name="search" class="form-control" placeholder="Search..." value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>" autocomplete="off">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Upload Document Modal -->
                        <div class="modal fade" id="upload-docu" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <h3 class="modal-title" id="modal-title">Upload File</h3>
                                    </div>

                                    <div class="modal-body mx-4">
                                        <form class="needs-validation" method="post" action="../../php/upload-document.php" enctype="multipart/form-data" novalidate>
                                            
                                            <div class="row">
                                                <div>
                                                    <label class="form-label">Upload File</label>
                                                    <input class="form-control" name="myfile" type="file" multiple />
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-lg-12 col-sm-12">
                                                    <label class="form-label">Display Name</label>
                                                    <input class="form-control" name="display_name" type="text">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <label class="form-label">User Access</label>

                                                <?php
                                                    $fetch = mysqli_query($config, "SELECT * FROM position");
                                                    while($row = mysqli_fetch_array($fetch)) {
                                                ?>
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="<?php echo $row['position_no'] ?>" name="access[]">
                                                        <label class="form-check-label">
                                                            <?php echo $row['position_name'] ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <?php } ?>
                                                
                                            </div>

                                            <div class="row mt-4">
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button type="submit" name="upload-docu" class="btn btn-primary px-5 rounded rounded-3" id="btn-save-event">Upload File</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div> <!-- end modal-content-->
                            </div> <!-- end modal dialog-->
                        </div>

                        <!-- Add Folder Modal -->
                        <div class="modal fade" id="add-folder" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <h3 class="modal-title" id="modal-title">New Folder</h3>
                                    </div>

                                    <div class="modal-body mx-4">
                                        <form class="needs-validation" method="post" action="../../php/add-folder.php" enctype="multipart/form-data" novalidate>

                                            <div class="row">
                                                <div>
                                                    <label class="form-label">Folder Name</label>
                                                    <input class="form-control" name="folder-name" type="text" required />
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <label class="form-label">User Access</label>

                                                <?php
                                                    $fetch = mysqli_query($config, "SELECT * FROM position");
                                                    while($row = mysqli_fetch_array($fetch)) {
                                                ?>
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="<?php echo $row['0'] ?>" id="<?php echo $row['0'] ?>" name="access[]">
                                                        <label class="form-check-label" for="<?php echo $row['0'] ?>">
                                                            <?php echo $row['1'] ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <?php } ?>
                                                
                                            </div>

                                            <div class="row mt-3">
                                                <div class="d-grid gap-2 w-100">
                                                    <button type="submit" name="add-folder" class="btn btn-primary px-5 rounded rounded-3" id="btn-save-event">Add Folder</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div> <!-- end modal-content-->
                            </div> <!-- end modal dialog-->
                        </div>

                        <!-- Cards -->
                        <?php include('../modal/documents-search.php'); ?>
                        <!-- end row -->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->'
                
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