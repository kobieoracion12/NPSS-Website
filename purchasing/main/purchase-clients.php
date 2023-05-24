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

                <!-- Client Card -->
                <div class="row">
                    <?php 
                        $logo = mysqli_query($config, "SELECT * FROM company_profile");
                        while($data = mysqli_fetch_array($logo)) { 
                    ?>
                    <div class="card-group col-xl-3 col-md-6">

                        <div class="card rounded-lg">
                            <div class="card-body p-4">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-client<?php echo $data['company_no'] ?>">Edit</a>
                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-client<?php echo $data['company_no'] ?>">Delete</a>
                                        <a href="purchase-manage.php?company=<?php echo $data['company_no'] ?>" target="_blank" class="dropdown-item">Manage</a>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <img src="<?php echo "../../uploads/logo/" . $data['company_logo']; ?>" alt="image" class="img-fluid" />
                                </div>

                                <h3 class="mt-3 mb-0"><?php echo $data['company_name']?></h3>
                                <h6 class="mt-0 mb-0 text-muted font-weight-light mt-1"><?php echo $data['branch_site']?></h6>
                        
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- Edit Client Modal -->
                    <div class="modal fade" id="edit-client<?php echo $data['company_no'] ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <h3 class="modal-title" id="modal-title">Client Information</h3>
                                </div>

                                <div class="modal-body mx-4">
                                    <form method="post" action="../../php/edit-client.php" enctype="multipart/form-data" >
                                        
                                    <input class="form-control" name="company_id" type="text" value="<?php echo $data['company_no'] ?>" hidden>

                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12">
                                                <label class="form-label">Company Name</label>
                                                <input class="form-control" name="company_name" type="text" value="<?php echo $data['company_name'] ?>" required>
                                            </div>

                                            <div class="col-lg-6 col-sm-12">
                                                <label class="form-label">Company Description</label>
                                                <input class="form-control" name="company_desc" type="text" value="<?php echo $data['company_desc'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-4 col-sm-12">
                                                <label class="form-label">Branch/Site</label>
                                                <input class="form-control" name="branch_site" type="text" value="<?php echo $data['branch_site'] ?>" required>
                                            </div>

                                            <div class="col-lg-4 col-sm-12">
                                                <label class="form-label">Contact Person</label>
                                                <input class="form-control" name="contact_person" type="text" value="<?php echo $data['contact_person'] ?>" required>
                                            </div>

                                            <div class="col-lg-4 col-sm-12">
                                                <label class="form-label">Contact Number</label>
                                                <input class="form-control" name="contact_no" type="text" value="<?php echo $data['contact_no'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mt-3 mb-4">
                                            <div class="col-lg-4 col-sm-12 d-flex justify-content-center my-auto">
                                                <img src="<?php echo "../../uploads/logo/" . $data['company_logo'] ?>" class="img-fluid" required/>
                                            </div>

                                            <div class="col-lg-8 col-sm-12 my-auto">
                                                <label class="form-label">Company Logo</label>
                                                <input class="form-control" name="company_logo" type="file" />
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                <button type="submit" name="edit-client" class="btn btn-primary px-5 rounded-pill" id="btn-save-event">Edit</button>
                                                <button type="button" class="btn btn-danger px-5 rounded-pill" data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div> <!-- end modal-content-->
                        </div> <!-- end modal dialog-->
                    </div>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="delete-client<?php echo $data['company_no'] ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-md">
                            <div class="modal-content">
                                <div class="modal-header  px-4 border-bottom-0 d-block">
                                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <h4 class="modal-title" id="modal-title">Delete Client</h4>
                                </div>

                                <div class="modal-body mx-4">
                                    <form class="needs-validation" method="post" action="../../php/delete-client.php" enctype="multipart/form-data" novalidate>
                                        
                                        <input type="hidden" name="company_no" value="<?php echo $data['company_no'] ?>">
                                        <div>
                                            <h5>Do you want to delete this client?</h5>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                <button type="submit" class="btn btn-danger px-5 rounded-pill" id="btn-save-event">Continue</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div> <!-- end modal-content-->
                        </div> <!-- end modal dialog-->
                    </div>

                    <?php } ?>
                </div>
                <!-- end row -->

                <!-- Add Client Modal -->
                <div class="modal fade" id="add-client" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h3 class="modal-title" id="modal-title">Client Information</h3>
                            </div>

                            <div class="modal-body mx-4">
                                <form class="needs-validation" method="post" action="../../php/add-client.php" enctype="multipart/form-data" novalidate>
                                    
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <label class="form-label">Company Name</label>
                                            <input class="form-control" name="company_name" type="text" required>
                                        </div>

                                        <div class="col-lg-6 col-sm-12">
                                            <label class="form-label">Company Description</label>
                                            <input class="form-control" name="company_desc" type="text" required>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-lg-4 col-sm-12">
                                            <label class="form-label">Branch/Site</label>
                                            <input class="form-control" name="branch_site" type="text" required>
                                        </div>

                                        <div class="col-lg-4 col-sm-12">
                                            <label class="form-label">Contact Person</label>
                                            <input class="form-control" name="contact_person" type="text" required>
                                        </div>

                                        <div class="col-lg-4 col-sm-12">
                                            <label class="form-label">Contact Number</label>
                                            <input class="form-control" name="contact_no" type="text" required>
                                        </div>
                                    </div>

                                    <div class="row mt-3 mb-4">
                                        <div>
                                            <label class="form-label">Company Logo</label>
                                            <input class="form-control" name="company_logo" type="file" multiple required />
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
