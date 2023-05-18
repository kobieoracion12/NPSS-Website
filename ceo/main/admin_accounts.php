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
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-end mb-0">

                <li class="dropdown d-inline-block d-lg-none">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-search noti-icon"></i>
                    </a>
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

                    <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">


                        <img src="../../assets/default_profile.png" alt="user-image" class="rounded-circle" />
                        <span class="pro-user-name ms-1">Kobie
                            <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="../main/admin_profile.php" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="../../php/auth-logout.php" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="../main/admin_dashboard.php" class="logo logo-light text-center">
                    <span class="logo-sm">
                        <img src="../dist/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="../dist/assets/images/logo-light.png" alt="" height="16">
                    </span>
                </a>
                <a href="../main/admin_dashboard.php" class="logo logo-dark text-center">
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

            </ul>

            <div class="clearfix"></div>

        </div>
        <!-- end Topbar -->

        <!-- Side Bar -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!-- User box -->

                <div class="user-box text-center">

                    <img src="../../assets/default_profile.png" alt="image" class="rounded-circle img-thumbnail avatar-md" />

                    <div class="dropdown">
                        <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown" aria-expanded="false">
                            Kobie Malibog
                        </a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->
                            <a href="admin_profile.php" class="dropdown-item notify-item">
                                <i class="fe-user me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out me-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>

                    <p class="text-muted left-user-info">
                        Purchaser
                    </p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="admin_dashboard.php">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="menu-title mt-2">Apps</li>

                        <li>
                            <a href="admin_accounts.php">
                                <i class="mdi mdi-account-outline"></i>
                                <span> Accounts </span>
                            </a>
                        </li>

                        <li>
                            <a href="admin_applicants.php">
                                <i class="mdi mdi-card-account-details-outline"></i>
                                <span class="badge bg-success rounded-pill float-end">9+</span>
                                <span> Applicants </span>
                            </a>
                        </li>

                        <li>
                            <a href="admin_clients.php">
                                <i class="mdi mdi-briefcase-variant-outline"></i>
                                <span> Clients </span>
                            </a>
                        </li>

                        <li>
                            <a href="admin_documents.php">
                                <i class="mdi mdi-file-document-outline"></i>
                                <span> Documents </span>
                            </a>
                        </li>

                        <li>
                            <a href="admin_quotations.php">
                                <i class="mdi mdi-account-cash-outline"></i>
                                <span> Quotations </span>
                            </a>
                        </li>

                        <li class="menu-title mt-2">Management</li>

                        <li>
                            <a href="admin_settings.php">
                                <i class="mdi mdi-cog-outline"></i>
                                <span> Settings </span>
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

        <!-- Start Page Content here -->
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
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Search...">
                                            </div>

                                            <div class="col-3">
                                                <select class="form-select" id="example-select">
                                                    <option selected>Default</option>
                                                    <option>Brand</option>
                                                    <option>Position</option>
                                                    <option>Name</option>
                                                    <option>Time Added (Last)</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Profile Card -->
                    <div class="row">


                        <div class="card-group col-xl-4 col-md-6 mt-2 ">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="col-md-4 mx-auto d-block">

                                        <img src="" alt="image" class="rounded-circle avatar-xl" />

                                        <img src="../../assets/default_profile.png" alt="image" class="rounded-circle avatar-xl" />

                                    </div>

                                    <p class="text-muted mt-3">Engineer</p>
                                    <h4 class="header-title mb-0">Oracion</h4>
                                    <h5 class="mt-0 text-primary">Intern</h5>
                                    <p class="mb-0">09**********</p>
                                    <p class="mb-0">kobie@gmail.com</p>
                                    <p class="mb-0">Antipolo</p>

                                    <div class="row g-2">
                                        <div class="col-xl-6 col-md-12">
                                            <button class="w-100 btn btn-warning text-white rounded-pill mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#edit">Edit Profile</button>
                                        </div>
                                        <div class="col-xl-6 col-md-12">
                                            <button class="w-100 btn btn-danger text-white rounded-pill mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="edit" tabindex="-1">
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
                                                        <input type="hidden" name="employee_id" value="">
                                                        <input type="text" name="first_name" class="form-control" value="" required>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group ">
                                                        <label class="mb-1">Middle Name</label>
                                                        <input type="text" name="middle_name" class="form-control" value="">
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group ">
                                                        <label class="mb-1">Last Name</label>
                                                        <input type="text" name="last_name" class="form-control" value="" required>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group ">
                                                        <label class="mb-1">Suffix</label>
                                                        <input type="text" name="given_suffix" class="form-control" value="">
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
                                                        <input type="text" name="contact_no" class="form-control" value="">
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
                                                    <div class="form-group">
                                                        <label class="mb-1">Position</label>
                                                        <input type="text" name="position" class="form-control" value="" required>
                                                        <div class="invalid-feedback">Please fill in this field</div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group mb-2">
                                                        <label class="mb-1">Email Address</label>
                                                        <input type="text" name="email_add" class="form-control" value="" required>
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
                                                    <textarea type="text" name="job_desc" class="form-control" rows="4" required></textarea>
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

                        <!-- Delete Modal -->
                        <div class="modal fade" id="delete" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content">
                                    <div class="modal-header flex-column border-bottom-0">
                                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <div class="icon-box mt-2">
                                            <i class="fas fa-trash-alt text-center text-danger fa-3x"></i>
                                        </div>
                                    </div>

                                    <div class="modal-body mx-4">
                                        <h3 class="text-center mb-1">Are you sure?</h3>
                                        <p class="text-muted h4 text-center">Do you really want to delete these user.</p>
                                        <form class="needs-validation" method="post" action="../../php/delete-account.php" enctype="multipart/form-data" novalidate>

                                            <input type="hidden" name="employee_id" value="">
                                            <div class="row mt-4 mb-1">
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                    <button type="submit" class="btn btn-danger px-4 rounded-pill" id="delete-account">Delete</button>
                                                    <button type="button" class="btn btn-white rounded-pill fw-bold px-4 py-1" data-bs-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div> <!-- end modal-content-->
                            </div> <!-- end modal dialog-->
                        </div>


                    </div>
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
                                            <input type="text" name="email_add" class="form-control" required>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-2">
                                            <label class="mb-1">Position</label>
                                            <select class="form-select" name="position" aria-label="Default select example" required>

                                                <option value=""></option>


                                            </select>
                                            <div class="invalid-feedback">Please fill in this field</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label class="mb-1">Status</label>
                                            <select class="form-select" name="status" aria-label="Default select example" required>

                                                <option value=""></option>

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

    <!-- App js-->
    <script src="../dist/assets/js/app.min.js"></script>

</body>

</html>
