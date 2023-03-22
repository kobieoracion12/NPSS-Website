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
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body m-2">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <?php
                                        $emp_id = $_SESSION['employee_id'];
                                        $record = mysqli_query($config, "SELECT * FROM employee_info WHERE employee_id = '$emp_id'");
                                        while ($data = mysqli_fetch_array($record)) { ?>
                                    <div class="d-flex mt-2">
                                        <div class="flex-shrink-0">
                                            <?php
                                                if ($data['profile_pic'] != null) { ?>
                                                <img src="<?php echo "../../uploads/profile/" . $data['profile_pic']; ?>" alt="user-image" class="flex-shrink-0 rounded-circle avatar-xl" />
                                                <?php
                                                }
                                                elseif ($data['profile_pic'] == null) { ?>
                                                    <img src="../../assets/default_profile.png" alt="user-image" class="flex-shrink-0 rounded-circle avatar-xl" />
                                            <?php
                                                }
                                            ?> 
                                        </div>
                                        <div class="flex-grow-1 align-items-center ms-3 mt-1">
                                            <h4 class="mt-0 mb-1 text-uppercase">
                                                <?php 
                                                    $middle_name = $data['middle_name'];
                                                    $m_name = $middle_name[0];
                                                    if (empty($middle_name)) {
                                                        echo $data['first_name']. " " .$data['last_name'];
                                                    }
                                                    else {
                                                        $m_name = $middle_name[0];
                                                        echo $data['first_name']. " " . $m_name . ".  " .$data['last_name'];
                                                    }
                                                ?>
                                            </h4>
                                            <p class="text-muted"><small><?php echo $data['position'] ?></small></p>
                                            <p class="text-muted"><small><?php echo $data['job_desc'] ?></small/></p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="user-first" class="mb-1">Firstname</label>
                                                    <input type="text" class="form-control" value="<?php echo $data['first_name'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="user-first" class="mb-1">Lastname</label>
                                                    <input type="text" class="form-control" value="<?php echo $data['last_name'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="user-first" class="mb-1">Middlename</label>
                                                    <input type="text" class="form-control" value="<?php echo $data['middle_name'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="user-first" class="mb-1">Contact number</label>
                                                    <input type="text" class="form-control" value="<?php echo $data['contact_no'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                            <div class="form-group">
                                                <label for="user-first" class="mb-1">Address</label>
                                                <input type="text" class="form-control" value="<?php echo $data['given_address'] ?>">

                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="user-first" class="mb-1">Birthdate</label>
                                                    <input type="text" class="form-control" value="<?php echo $data['birth_date'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="user-first" class="mb-1">Email Address</label>
                                                    <input type="text" class="form-control" value="<?php echo $data['email_add'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="user-first" class="mb-1">Position</label>
                                                    <input type="text" class="form-control" value="<?php echo $data['position'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="user-first" class="mb-1">Branch/Site</label>
                                                    <input type="text" class="form-control" value="<?php echo $data['branch_site'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 d-flex justify-content-end">
                                            <button class="btn btn-warning text-white rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="mdi mdi-pencil me-1"></i>Edit Details
                                            </button>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-4">NAR POWER SYSTEM SPEACIALISTS CORP.</h4>
                                    <div class="mx-4">
                                        <?php 
                                            $records = mysqli_query($config, "SELECT * FROM employee_info");
                                            while ($data1 = mysqli_fetch_array($records)) { ?>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0 avatar-md me-3">
                                                <?php
                                                    if ($data1['profile_pic'] != null) { ?>
                                                    <img src="<?php echo "../../uploads/profile/" . $data1['profile_pic']; ?>" alt="user-image" class="img-fluid rounded-circle" />
                                                    <?php
                                                    }
                                                    elseif ($data1['profile_pic'] == null) { ?>
                                                        <img src="../../assets/default_profile.png" alt="user-image" class="img-fluid rounded-circle" />
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                
                                                <h5 class="mt-0 mb-1">
                                                    <?php
                                                        $middle_name1 = $data1['middle_name'];
                                                        if (empty($middle_name1)) {
                                                            echo $data1['first_name']. " " .$data1['last_name'];
                                                        }
                                                        else {
                                                            $m_name1 = $middle_name1[0];
                                                            echo $data1['first_name']. " " . $m_name1 . ".  " .$data1['last_name'];
                                                        }
                                                    ?>
                                                </h5>
                                                <small class="text-muted"><b><?php echo $data1['position']; ?></b></small>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- container-fluid -->
            </div> <!-- content -->

            <!-- Edit profile MODAL -->
            <div class="modal fade" id="exampleModal" tabindex="-1">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h3 class="modal-title" id="modal-title">Employee Profile</h3>
                        </div>
                        <div class="modal-body px-4 pb-4 pt-0 mx-4">
                            <form class="needs-validation" novalidate>
                                <div class="row mb-3">
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="user-first" class="mb-1">Firstname</label>
                                            <input type="text" class="form-control" value="Janet" required>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group ">
                                            <label for="user-first" class="mb-1">Middlename</label>
                                            <input type="text" class="form-control" value="Dela Cruz" required>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group ">
                                            <label for="user-first" class="mb-1">Lastname</label>
                                            <input type="text" class="form-control" value="Dela Cruz" required>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="user-first" class="mb-1">Address</label>
                                            <textarea type="text" class="form-control" rows="1" required>Antipolo City, Rizal Province</textarea>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="user-first" class="mb-1">Contact number</label>
                                            <input type="text" class="form-control" value="09xx-xxx-xxxx" required>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="user-first" class="mb-1">Birthdate</label>
                                            <input type="date" class="form-control" value="" required>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="user-first" class="mb-1">Position</label>
                                            <select class="form-select" aria-label="Default select example" required>
                                                <option selected>Administration</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="user-first" class="mb-1">Email Address</label>
                                            <input type="text" class="form-control" value="samplemail@gmail.com" required>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="user-first" class="mb-1">Branch/Site</label>
                                            <select class="form-select" aria-label="Default select example" required>
                                                <option selected>Antipolo City</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="user-first" class="mb-1 text-center">Profile Picture</label>
                                            <div class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                                <div class="fallback">
                                                    <input name="file" class="form-control" type="file" multiple />
                                                </div>
                                                <div class="dz-message needsclick">
                                                    <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                    <h3>Choose Photo</h3>
                                                    <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                        <strong>not</strong> actually uploaded.)</span>
                                                </div>
                                                <div class="dropzone-previews mt-3" id="file-previews"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                        <button type="submit" class="btn btn-success px-5 rounded-pill" id="btn-save-event">Save</button>
                                        <button type="button" class="btn btn-danger px-5 rounded-pill" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end modal-content-->
                </div> <!-- end modal dialog-->
            </div>

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())

                            </script> &copy; NAR Power System Specialists Corporation</a>
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

    <!-- Plugins js -->
    <script src="../dist/assets/libs/dropzone/min/dropzone.min.js"></script>
    <script src="../dist/assets/libs/dropify/js/dropify.min.js"></script>

</body>

</html>
