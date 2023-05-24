<?php
    include('../../php/database.php');
    include('../../php/access.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Quotations | NAR Power System Specialists Corp.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/nar-icon.ico">

    <!-- App css -->
    <link href="../dist/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- icons -->
    <link href="../dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .com:hover {
            background-color: rgb(242, 242, 242);
        }

    </style>
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
                    <div class="row px-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 col-md-12">
                                        <button class="btn btn-warning text-white rounded" data-bs-toggle="modal" data-bs-target="#add-client">
                                            <i class="mdi mdi-plus-circle me-1"></i>Add Quotation
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

                    <!-- Client Card -->
                    <?php include('../modal/quotations-search.php'); ?>
                    <!-- end row -->

                    <!-- Add Quotation Modal -->
                    <div class="modal fade" id="add-client" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <h3 class="modal-title" id="modal-title">Client Information</h3>
                                </div>

                                <div class="modal-body mx-4">
                                    <form class="needs-validation" method="post" action="../../php/add-quotation.php" enctype="multipart/form-data" novalidate>
                                        
                                    
                                            <label class="form-label">Company Name</label>
                                            
                                            <select name="company_no" class="form-select mb-2">
                                                <?php 
                                                    $logo = mysqli_query($config, "SELECT * FROM company_profile");
                                                    while($data = mysqli_fetch_array($logo)) { 
                                                ?>
                                                <option value="<?php echo $data['company_no'] ?>"><?php echo $data['company_name'] ?></option>
                                                <?php } ?>
                                            </select>

                                        
                                        <div class="row mb-2">
                                            <div>
                                                <label class="form-label">Display Name</label>
                                                <input class="form-control" name="display_name" type="text" required />
                                            </div>
                                        </div>
                                        <div class="row mt-1 mb-4">
                                            <div>
                                                <label class="form-label">Upload Quotation</label>
                                                <input class="form-control" name="quotation" type="file" required />
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                <button type="submit" name="add-client" class="btn btn-primary px-5 rounded-pill" id="btn-save-event">Submit</button>
                                                <button type="button" class="btn btn-danger px-5 rounded-pill" data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    
                                    </form>
                                </div>
                            </div> <!-- end modal-content-->
                        </div> <!-- end modal dialog-->
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
