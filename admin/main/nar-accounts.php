<?php
    include('../../php/database.php');
    include('../../php/access.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Accounts | NAR Power System Specialists Corp.</title>
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

                    <!-- Header -->
                    <div class="row px-2">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-xl-4 col-md-12">
                                        <button class="btn btn-warning text-white rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="mdi mdi-plus-circle me-1"></i>Add Account
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

                    <?php include('../modal/account-search.php'); ?>
                    <!-- end row -->

                </div> <!-- container-fluid -->

            </div> <!-- content -->

            <!-- Add New Account Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h3 class="modal-title" id="modal-title">Add Profile</h3>
                        </div>

                        <div class="modal-body px-4 pb-4 pt-0 mx-4">
                            <form class="needs-validation" method="post" action="../../php/create_account.php" enctype="multipart/form-data" novalidate>
                                <div class="row mb-3">
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label class="mb-1">First Name</label>
                                            <input type="text" name="first_name" class="form-control" required>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group ">
                                            <label class="mb-1">Middle Name</label>
                                            <input type="text" name="middle_name" class="form-control">
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group ">
                                            <label class="mb-1">Last Name</label>
                                            <input type="text" name="last_name" class="form-control" required>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group ">
                                            <label class="mb-1">Suffix</label>
                                            <input type="text" name="given_suffix" class="form-control">
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-1">Address</label>
                                            <input type="text" name="given_address" class="form-control" rows="1" required>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label class="mb-1">Contact Number</label>
                                            <input type="text" name="contact_no" class="form-control">
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-2">
                                            <label class="mb-1">Birth Date</label>
                                            <input type="date" name="birth_date" class="form-control" value="" required>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-2">
                                            <label class="mb-1">Email Address</label>
                                            <input type="text" name="email_add" class="form-control"  required>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>    
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-2">
                                            <label class="mb-1">Position</label>
                                            <select class="form-select" name="position" aria-label="Default select example" required>
                                                <?php
                                                    $sql = mysqli_query($config, "SELECT position_name FROM position ORDER BY position_name");
                                                    while($row = mysqli_fetch_array($sql)) {
                                                ?>

                                                <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
                                                
                                                <?php } ?>
                                            </select>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>      
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label class="mb-1">Status</label>
                                            <select class="form-select" name="status" aria-label="Default select example" required>
                                                <?php
                                                    $sql = mysqli_query($config, "SELECT emp_stat FROM emp_status");
                                                    while($row = mysqli_fetch_array($sql)) {
                                                ?>

                                                <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
                                                
                                                <?php } ?>
                                            </select>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label class="mb-1">Branch/Site</label>
                                            <select class="form-select" name="branch_site" aria-label="Default select example" required>
                                                <option value="Antipolo" selected>Antipolo</option>
                                            </select>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="form-group">
                                        <label class="mb-1">Job Description</label>
                                        <textarea type="text" name="description" class="form-control" rows="4" required></textarea>
                                        <div class="invalid-feedback">Please fill in this field</div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label class="mb-1 text-center">Profile Picture</label>
                                            <input name="image" id="image" class="form-control" type="file" /> 
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label class="mb-1 text-center">Upload Resume</label>
                                            <input name="myfile" id="myfile" class="form-control" type="file" /> 
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                        <button type="submit" name="register_user" class="btn btn-success px-5 rounded-pill" id="btn-save-event">Save</button>
                                        <button type="button" class="btn btn-danger px-5 rounded-pill" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div> <!-- end modal-content-->
                </div> <!-- end modal dialog-->
            </div>

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

    <!-- Sweet Alerts js -->
    <script src="../dist/assets/libs/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- App js-->
    <script src="../dist/assets/js/app.min.js"></script>

</body>

</html>
