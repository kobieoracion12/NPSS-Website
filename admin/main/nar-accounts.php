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

     <!-- Plugins css -->
    <link href="../dist/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="../dist/assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />

</head>

<!-- body start -->

<body class="loading" data-layout-color="light" data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-end mb-0">

                <li class="d-none d-lg-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." id="top-search">
                                <button class="btn input-group-text" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                            <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-2">Found 22 results</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-home me-1"></i>
                                    <span>Analytics Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-aperture me-1"></i>
                                    <span>How can I help you?</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings me-1"></i>
                                    <span>User profile settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex align-items-start">
                                            <img class="d-flex me-2 rounded-circle" src="../assets/images/users/user-2.jpg" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                <span class="font-12 mb-0">UI Designer</span>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex align-items-start">
                                            <img class="d-flex me-2 rounded-circle" src="../assets/images/users/user-5.jpg" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Jacob Deo</h5>
                                                <span class="font-12 mb-0">Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </form>
                </li>

                <li class="dropdown d-inline-block d-lg-none">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-search noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                        <form class="p-3">
                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                        </form>
                    </div>
                </li>

                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-bell noti-icon"></i>
                        <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                <span class="float-end">
                                    <a href="" class="text-dark">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>

                        <div class="noti-scroll" data-simplebar>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon">
                                    <img src="../assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <p class="notify-details">Cristina Pride</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Hi, How are you? What about our next meeting</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">1 min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <p class="notify-details">Karen Robinson</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Wow ! this admin looks good and awesome design</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning">
                                    <i class="mdi mdi-account-plus"></i>
                                </div>
                                <p class="notify-details">New user registered.
                                    <small class="text-muted">5 hours ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">4 days ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-secondary">
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class="text-muted">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                            View all
                            <i class="fe-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list topbar-dropdown">
                    <?php
                        $emp_id = $_SESSION['employee_id'];
                        $record = mysqli_query($config, "SELECT * FROM employee_info WHERE employee_id = '$emp_id'");
                        while ($data = mysqli_fetch_array($record)) { ?>
                    <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <?php
                        if ($data['profile_pic'] != null) { ?>
                        <img src="<?php echo "../../uploads/profile/" . $data['profile_pic']; ?>" alt="user-image" class="rounded-circle" />
                        <?php
                        }
                        elseif ($data['profile_pic'] == null) { ?>
                            <img src="../../assets/default_profile.png" alt="user-image" class="rounded-circle" />
                        <?php
                        }
                        ?>
                        <span class="pro-user-name ms-1">
                            <?php echo $data['first_name'] ?><i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <?php
                    }
                    ?> 
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="contacts-profile.html" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="auth-lock-screen.html" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="auth-logout.html" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo logo-light text-center">
                    <span class="logo-sm">
                        <img src="../dist/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="../dist/assets/images/logo-light.png" alt="" height="16">
                    </span>
                </a>
                <a href="index.html" class="logo logo-dark text-center">
                    <span class="logo-sm">
                        <img src="../dist/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="../dist/assets/images/logo-dark.png" alt="" height="16">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                <li>
                    <button class="button-menu-mobile disable-btn waves-effect">
                        <i class="fe-menu"></i>
                    </button>
                </li>

                <li>
                    <h4 class="page-title-main">Accounts</h4>
                </li>

            </ul>

            <div class="clearfix"></div>

        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!-- User box -->
                <?php
                    $emp_id = $_SESSION['employee_id'];
                    $record = mysqli_query($config, "SELECT * FROM employee_info WHERE employee_id = '$emp_id'");
                    while ($data = mysqli_fetch_array($record)) { ?>
                    <div class="user-box text-center">

                        <?php
                        if ($data['profile_pic'] != null) { ?>
                        <img src="<?php echo "../../uploads/profile/" . $data['profile_pic']; ?>" alt="image" class="rounded-circle img-thumbnail avatar-md" />
                        <?php
                        }
                        elseif ($data['profile_pic'] == null) { ?>
                            <img src="../../assets/default_profile.png" alt="image" class="rounded-circle img-thumbnail avatar-md" />
                        <?php
                        }
                        ?>
                            <div class="dropdown">
                                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false">
                                    <?php echo $data['first_name']. " " .$data['last_name']; ?>
                                </a>
                                <div class="dropdown-menu user-pro-dropdown">

                                    <!-- item-->
                                    <a href="nar-profile.php" class="dropdown-item notify-item">
                                        <i class="fe-user me-1"></i>
                                        <span>My Account</span>
                                    </a>
        
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings me-1"></i>
                                        <span>Settings</span>
                                    </a>
        
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-lock me-1"></i>
                                        <span>Lock Screen</span>
                                    </a>
        
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-log-out me-1"></i>
                                        <span>Logout</span>
                                    </a>
        
                                </div>
                            </div>

                        <p class="text-muted left-user-info">
                            <?php echo $data['position']; ?>
                        </p>
                    </div>
                    <?php
                    }
                    ?>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="nar-dashboard.php">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="badge bg-success rounded-pill float-end">9+</span>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="menu-title mt-2">Apps</li>

                        <li>
                            <a href="nar-accounts.php">
                                <i class="mdi mdi-account-outline"></i>
                                <span> Accounts </span>
                            </a>
                        </li>

                        <li>
                            <a href="nar-applicants.php">
                                <i class="mdi mdi-card-account-details-outline"></i>
                                <span> Applicants </span>
                            </a>
                        </li>

                        <li>
                            <a href="nar-clients.php">
                                <i class="mdi mdi-briefcase-variant-outline"></i>
                                <span> Clients </span>
                            </a>
                        </li>

                        <li>
                            <a href="nar-documents.php">
                                <i class="mdi mdi-file-document-outline"></i>
                                <span> Documents </span>
                            </a>
                        </li>

                        <li>
                            <a href="nar-inquiries.php">
                                <i class="mdi mdi-chat-alert-outline"></i>
                                <span> Inquiries </span>
                            </a>
                        </li>

                        <li>
                            <a href="nar-payroll.php">
                                <i class="mdi mdi-cash-register"></i>
                                <span> Payroll </span>
                            </a>
                        </li>

                        <li>
                            <a href="nar-quotations.php">
                                <i class="mdi mdi-account-cash-outline"></i>
                                <span> Quotations </span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
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
                                        <button class="btn btn-warning text-white rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="mdi mdi-plus-circle me-1"></i>Add Account
                                        </button>
                                    </div>

                                    <div class="col-xl-8 col-md-12">

                                        <div class="row justify-content-end">

                                            <div class="col-4">
                                                <select class="form-select" id="example-select">
                                                    <option selected>Default</option>
                                                    <option>Brand</option>
                                                    <option>Position</option>
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
                        <?php
                            $sql = mysqli_query($config, "SELECT * FROM employee_info");
                            while($row = mysqli_fetch_array($sql)) {
                        ?>

                        <div class="card-group col-xl-4 col-md-6 mt-3">
                            <div class="card" >
                                <div class="card-body text-center">
                                    <div class="col-md-4 mx-auto d-block">
                                        <?php
                                        if ($row['profile_pic'] != null) { ?>
                                        <img src="<?php echo "../../uploads/profile/" . $row['profile_pic']; ?>" alt="image" class="rounded-circle avatar-xl" />
                                        <?php
                                        }
                                        elseif ($row['profile_pic'] == null) { ?>
                                            <img src="../../assets/default_profile.png" alt="image" class="rounded-circle avatar-xl" />
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <p class="text-muted mt-3"><?php echo $row['job_desc'] ?></p>
                                    <h4 class="header-title mb-0"><?php echo $row['first_name'], " ", $row['last_name']; ?></h4>
                                    <h5 class="mt-0 text-primary"><?php echo $row['position'] ?></h5>
                                    <p class="mb-0"><?php echo $row['contact_no'] ?></p>
                                    <p class="mb-0"><?php echo $row['email_add'] ?></p>
                                    <p class="mb-0"><?php echo $row['branch_site'] ?></p>

                                    <button class="btn btn-primary rounded-pill mt-3 mb-2">Send Message</button>
                                    <button class="btn btn-warning text-white rounded-pill mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['employee_id'] ?>">Edit Profile</button>                             

                                </div>
                            </div>
                        </div>
                        <!-- Edit profile MODAL -->
                        <div class="modal fade" id="edit<?php echo $row['employee_id'] ?>" tabindex="-1">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <h3 class="modal-title" id="modal-title">Edit Profile</h3>
                                    </div>

                                    <div class="modal-body px-4 pb-4 pt-0 mx-4">
                                        <form class="needs-validation" method="post" action="../../php/edit-account.php" enctype="multipart/form-data" novalidate>
                                            <div class="row mb-3">
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label class="mb-1">First Name</label>
                                                        <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ?>">
                                                        <input type="text" name="first_name" class="form-control" value="<?php echo $row['first_name'] ?>" required>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group ">
                                                        <label class="mb-1">Middle Name</label>
                                                        <input type="text" name="middle_name" class="form-control" value="<?php echo $row['middle_name'] ?>">
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group ">
                                                        <label class="mb-1">Last Name</label>
                                                        <input type="text" name="last_name" class="form-control" value="<?php echo $row['last_name'] ?>" required>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group ">
                                                        <label class="mb-1">Suffix</label>
                                                        <input type="text" name="given_suffix" class="form-control" value="<?php echo $row['given_suffix'] ?>">
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                    <div class="form-group">
                                                        <label class="mb-1">Address</label>
                                                        <textarea type="text" name="given_address" class="form-control" rows="1" required><?php echo $row['given_address'] ?></textarea>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label class="mb-1">Contact Number</label>
                                                        <input type="text" name="contact_no" class="form-control" value="<?php echo $row['contact_no'] ?>">
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group mb-2">
                                                        <label class="mb-1">Birth Date</label>
                                                        <input type="date" name="birth_date" class="form-control" value="<?php echo date('Y-m-d',strtotime($row["birth_date"])) ?>" required>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mb-1">Position</label>
                                                        <input type="text" name="position" class="form-control" value="<?php echo $row['position'] ?>" required>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group mb-2">
                                                        <label class="mb-1">Email Address</label>
                                                        <input type="text" name="email_add" class="form-control" value="<?php echo $row['email_add'] ?>"  required>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
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
                                                    <textarea type="text" name="job_desc" class="form-control" rows="4" required><?php echo $row['job_desc'] ?></textarea>
                                                    <div class="invalid-feedback">Please fill in this field</div>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label class="mb-1 text-center">Profile Picture</label>
                                                        <input name="profile_pic" id="profile_pic" class="form-control" type="file" /> 
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label class="mb-1 text-center">Upload Resume</label>
                                                        <input name="uploaded_cv" id="uploaded_cv" class="form-control" type="file" /> 
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
                        <?php } ?>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->

            </div> <!-- content -->

            <!-- Add New Account MODAL -->
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
                                            <textarea type="text" name="given_address" class="form-control" rows="1" required></textarea>
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

    <!-- Plugins js -->
        <script src="../dist/assets/libs/dropzone/min/dropzone.min.js"></script>
        <script src="../dist/assets/libs/dropify/js/dropify.min.js"></script>
    <!-- App js-->
    <script src="../dist/assets/js/app.min.js"></script>

</body>

</html>
