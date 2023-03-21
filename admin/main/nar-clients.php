<?php
    include('../../php/database.php');
    session_start();
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
    <body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

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
                                            <img src="../assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
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
                                            <img src="assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
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
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-client">Edit</a>
                                                <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                                                <a href="javascript:void(0);" class="dropdown-item">Manage</a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <img src="<?php echo "../../uploads/logo/" . $data['company_logo']; ?>" alt="image" class="img-fluid" />
                                        </div>

                                        <h3 class="mt-3 mb-0"><?php echo $data['company_name']?></h3>
                                        <h6 class="mt-0 mb-0 text-muted font-weight-light mt-1"><?php echo $data['branch_site']?></h6>
                                   
                                    </div>
                                </div>
                            </div><!-- end col -->
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
                                                    <input class="form-control" name="company_name" type="text">
                                                </div>

                                                <div class="col-lg-6 col-sm-12">
                                                    <label class="form-label">Company Description</label>
                                                    <input class="form-control" name="company_desc" type="text">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-lg-4 col-sm-12">
                                                    <label class="form-label">Branch/Site</label>
                                                    <input class="form-control" name="branch_site" type="text">
                                                </div>

                                                <div class="col-lg-4 col-sm-12">
                                                    <label class="form-label">Contact Person</label>
                                                    <input class="form-control" name="contact_person" type="text">
                                                </div>

                                                <div class="col-lg-4 col-sm-12">
                                                    <label class="form-label">Contact Number</label>
                                                    <input class="form-control" name="contact_no" type="text">
                                                </div>
                                            </div>

                                            <div class="row mt-3 mb-4">
                                                <div>
                                                    <label class="form-label">Company Logo</label>
                                                    <input class="form-control" name="company_logo" type="file" multiple />
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

                        <!-- Edit Client Modal -->
                        <div class="modal fade" id="edit-client" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <h3 class="modal-title" id="modal-title">Edit Information</h3>
                                    </div>

                                    <div class="modal-body mx-4">
                                        <form class="needs-validation" method="post" action="../../php/add-client.php" enctype="multipart/form-data" novalidate>
                                            
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-12">
                                                    <label class="form-label">Company Name</label>
                                                    <input class="form-control" name="company_name" type="text">
                                                </div>

                                                <div class="col-lg-6 col-sm-12">
                                                    <label class="form-label">Company Description</label>
                                                    <input class="form-control" name="company_desc" type="text">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-lg-4 col-sm-12">
                                                    <label class="form-label">Branch/Site</label>
                                                    <input class="form-control" name="branch_site" type="text">
                                                </div>

                                                <div class="col-lg-4 col-sm-12">
                                                    <label class="form-label">Contact Person</label>
                                                    <input class="form-control" name="contact_person" type="text">
                                                </div>

                                                <div class="col-lg-4 col-sm-12">
                                                    <label class="form-label">Contact Number</label>
                                                    <input class="form-control" name="contact_no" type="text">
                                                </div>
                                            </div>

                                            <div class="row mt-3 mb-4">
                                                <div>
                                                    <label class="form-label">Company Logo</label>
                                                    <input class="form-control" name="company_logo" type="file" multiple />
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
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; NAR Power System Specialists Corporation</a> 
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
        
    </body>
</html>