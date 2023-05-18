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
                        <a href="../main/purchase-profile.php" class="dropdown-item notify-item">
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
                <a href="../main/admin-dashboard.php" class="logo logo-light text-center">
                    <span class="logo-sm">
                        <img src="../dist/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="../dist/assets/images/logo-light.png" alt="" height="16">
                    </span>
                </a>
                <a href="../main/admin-dashboard.php" class="logo logo-dark text-center">
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
                            <a href="admin-profile.php" class="dropdown-item notify-item">
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
                            <a href="admin-dashboard.php">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="menu-title mt-2">Apps</li>

                        <li>
                            <a href="admin-accounts.php">
                                <i class="mdi mdi-account-outline"></i>
                                <span> Accounts </span>
                            </a>
                        </li>

                        <li>
                            <a href="admin-applicants.php">
                                <i class="mdi mdi-card-account-details-outline"></i>
                                <span class="badge bg-success rounded-pill float-end">9+</span>
                                <span> Applicants </span>
                            </a>
                        </li>

                        <li>
                            <a href="admin-clients.php">
                                <i class="mdi mdi-briefcase-variant-outline"></i>
                                <span> Clients </span>
                            </a>
                        </li>

                        <li>
                            <a href="admin-documents.php">
                                <i class="mdi mdi-file-document-outline"></i>
                                <span> Documents </span>
                            </a>
                        </li>

                        <li class="menu-title mt-2">Management</li>

                        <li>
                            <a href="admin-settings.php">
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
                          
                            <div class="card-group col-xl-3 col-md-6">

                                <div class="card rounded-lg">
                                    <div class="card-body p-4">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-client">Edit</a>
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-client">Delete</a>
                                                <a href="javascript:void(0);" class="dropdown-item">Manage</a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <img src="" alt="image" class="img-fluid" />
                                        </div>

                                        <h3 class="mt-3 mb-0">Jollibee</h3>
                                        <h6 class="mt-0 mb-0 text-muted font-weight-light mt-1"></h6>
                                   
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <!-- Edit Client Modal -->
                            <div class="modal fade" id="edit-client" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <h3 class="modal-title" id="modal-title">Client Information</h3>
                                        </div>

                                        <div class="modal-body mx-4">
                                            <form method="post" action="../../php/edit-client.php" enctype="multipart/form-data" >
                                                
                                            <input class="form-control" name="company_id" type="text" value="" hidden>

                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-12">
                                                        <label class="form-label">Company Name</label>
                                                        <input class="form-control" name="company_name" type="text" value="<?php echo $data['company_name'] ?>" required>
                                                    </div>

                                                    <div class="col-lg-6 col-sm-12">
                                                        <label class="form-label">Company Description</label>
                                                        <input class="form-control" name="company_desc" type="text" value="" required>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-lg-4 col-sm-12">
                                                        <label class="form-label">Branch/Site</label>
                                                        <input class="form-control" name="branch_site" type="text" value="" required>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12">
                                                        <label class="form-label">Contact Person</label>
                                                        <input class="form-control" name="contact_person" type="text" value="" required>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12">
                                                        <label class="form-label">Contact Number</label>
                                                        <input class="form-control" name="contact_no" type="text" value="" required>
                                                    </div>
                                                </div>

                                                <div class="row mt-3 mb-4">
                                                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center my-auto">
                                                        <img src="" class="img-fluid" required/>
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
                            <div class="modal fade" id="delete-client" tabindex="-1">
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
                                            <p class="text-muted h4 text-center">Do you really want to delete these client? This process cannot be undone.</p>
                                            <form class="needs-validation" method="post" action="../../php/delete-client.php" enctype="multipart/form-data" novalidate>
                                                
                                                <input type="hidden" name="company_no" value="">
                                                <div class="row mt-4">
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                        <button type="submit" class="btn btn-danger px-4 rounded-pill" id="btn-save-event">Delete</button>
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
