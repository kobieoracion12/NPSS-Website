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
                                    <?php
                                        $emp_id = $_SESSION['employee_id'];
                                        $record = mysqli_query($config, "SELECT * FROM employee_info WHERE employee_id = '$emp_id'");
                                        while ($data = mysqli_fetch_array($record)) { ?>

                                    <!-- Profile Introductions -->
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0 avatar-lg me-3">
                                            <?php
                                                if ($data['profile_pic'] != null) { ?>
                                                <img src="<?php echo "../../uploads/profile/" . $data['profile_pic']; ?>" alt="user-image" class="img-fluid rounded-circle" />
                                                <?php
                                                }
                                                elseif ($data['profile_pic'] == null) { ?>
                                                    <img src="../../assets/default_profile.png" alt="user-image" class="img-fluid rounded-circle" />
                                            <?php
                                                }
                                            ?>
                                        </div>

                                        <div class="flex-grow-1 overflow-hidden">
                                            
                                            <h4 class="mt-0 mb-0">
                                                <?php
                                                    $middle_name = $data['middle_name'];
                                                    if (empty($middle_name)) {
                                                        echo $data['first_name']. " " .$data['last_name'];
                                                    }
                                                    else {
                                                        $m_name = $middle_name[0];
                                                        echo $data['first_name']. " " . $m_name . ".  " .$data['last_name'];
                                                    }
                                                ?>
                                            </h4>
                                            <small class="text-muted"><b><?php echo $data['position']; ?></b></small>
                                        </div>
                                    </div>
                                    
                                    <!-- Personal Information -->
                                    <div class="card-body">
                                        <form class="needs-validation" method="post" action="../../php/edit-profile.php" enctype="multipart/form-data" novalidate>

                                            <div class="row mb-3">
                                                <input type="text" name="employee_id" class="form-control" value="<?php echo $data['employee_id'] ?>" hidden required>

                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label class="mb-1">First Name</label>
                                                        <input type="text" name="first_name" class="form-control" value="<?php echo $data['first_name'] ?>" required>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group ">
                                                        <label class="mb-1">Middle Name</label>
                                                        <input type="text" name="middle_name" class="form-control" value="<?php echo $data['middle_name'] ?>">
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group ">
                                                        <label class="mb-1">Last Name</label>
                                                        <input type="text" name="last_name" class="form-control" value="<?php echo $data['last_name'] ?>" required>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group ">
                                                        <label class="mb-1">Suffix</label>
                                                        <input type="text" name="given_suffix" class="form-control" value="<?php echo $data['given_suffix'] ?>">
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                    <div class="form-group">
                                                        <label class="mb-1">Address</label>
                                                        <input type="text" name="given_address" class="form-control" value="<?php echo $data['given_address'] ?>" required></input>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label class="mb-1">Contact Number</label>
                                                        <input type="text" name="contact_no" class="form-control" value="<?php echo $data['contact_no'] ?>">
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group mb-2">
                                                        <label class="mb-1">Birth Date</label>
                                                        <input type="date" name="birth_date" class="form-control" value="<?php echo $data['birth_date'] ?>" required>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group mb-2">
                                                        <label class="mb-1">Email Address</label>
                                                        <input type="text" name="email_add" class="form-control" value="<?php echo $data['email_add'] ?>" required>
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
                                                            
                                                            <option value="<?php echo $data['position']?>" selected><?php echo $data['position'] ?></option>

                                                            <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
                                                            
                                                            <?php } ?>
                                                        </select>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>      
                                                </div>

                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label class="mb-1">Status</label>
                                                        <select class="form-select" name="emp_stat" aria-label="Default select example" required>
                                                            <?php
                                                                $sql = mysqli_query($config, "SELECT emp_stat FROM emp_status");
                                                                while($row = mysqli_fetch_array($sql)) {
                                                            ?>

                                                            <option value="<?php echo $data['emp_stat']?>" selected><?php echo $data['emp_stat'] ?></option>

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

                                                            <option value="<?php echo $data['branch_site']?>" selected><?php echo $data['branch_site'] ?></option>
                                                            <option value="Antipolo" selected>Antipolo</option>

                                                        </select>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="form-group">
                                                    <label class="mb-1">Job Description</label>
                                                    <textarea type="text" name="description" class="form-control" rows="4" required><?php echo $data['job_desc'] ?></textarea>
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

                                            <div class="col-xl-12 d-flex justify-content-end mt-3">
                                                <button class="btn btn-warning text-white rounded" name="edit-profile" type="submit">
                                                    <i class="mdi mdi-pencil me-1"></i>Edit Details
                                                </button>
                                            </div>

                                        </form>
                                    </div>

                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side -->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-4">NAR POWER SYSTEM SPEACIALISTS CORP.</h4>
                                    <div class="ms-2">
                                        <?php 
                                            $records = mysqli_query($config, "SELECT * FROM employee_info");
                                            while ($data1 = mysqli_fetch_array($records)) { ?>

                                        <div class="d-flex align-items-center mb-2">
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
                                                
                                                <h5 class="mt-0 mb-0">
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
