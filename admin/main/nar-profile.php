<?php
include('../../php/database.php');
session_start();
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
                    <h4 class="page-title-main">Profile</h4>
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
