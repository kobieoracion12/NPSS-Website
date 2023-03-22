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
                        <div class="col-xl-4 col-lg-4">
                            <div class="card chat-list-card mb-xl-0">
                                <div class="card-body">
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
                                    <div class="d-flex mt-2 m-2">
                                        <div class="flex-shrink-0">
                                            <img src="../../assets/mam_ness.jpg" alt="" class="flex-shrink-0 rounded-circle avatar-md">
                                        </div>
                                        <div class="flex-grow-1 align-items-center ms-3 mt-1">
                                            <h4 class="mt-0 mb-1">JANET L. DELA CRUZ</h4>
                                            <p class="font-13 text-muted mb-0">Admin Head</p>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <div class="search-box chat-search-box">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <i class="mdi mdi-magnify search-icon"></i>
                                    </div>
                                    <hr>
                                    <div class="">
                                        <ul class="list-unstyled chat-list mb-0" style="max-height: 390px;" data-simplebar>
                                            <li class="active">
                                                <a href="#">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 chat-user-img active align-self-center me-2">
                                                            <img src="../../assets/mam_janet.jpg" class="rounded-circle avatar-sm" alt="">
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-14 mt-0 mb-1">Margaret Clayton</h5>
                                                            <p class="text-truncate mb-0">I've finished it! See you so...</p>
                                                        </div>
                                                        <div class="font-11">05 min</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 chat-user-img align-self-center me-2">
                                                            <img src="../../assets/boss_greg.jpg" class="rounded-circle avatar-sm" alt="">
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-14 mt-0 mb-1">Mark Nieto</h5>
                                                            <p class="text-truncate mb-0">This theme is awesome!</p>
                                                        </div>
                                                        <div class="font-11">32 min</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="unread">
                                                <a href="#">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 chat-user-img align-self-center me-2">
                                                            <img src="../../assets/mam_nath.jpg" class="rounded-circle avatar-sm" alt="">
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-14 mt-0 mb-1">Mark Nieto</h5>
                                                            <p class="text-truncate mb-0">This theme is awesome!</p>
                                                        </div>
                                                        <div class="font-11">32 min</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="unread">
                                                <a href="#">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 chat-user-img align-self-center me-2">
                                                            <img src="../../assets/mam_nath.jpg" class="rounded-circle avatar-sm" alt="">
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-14 mt-0 mb-1">Mark Nieto</h5>
                                                            <p class="text-truncate mb-0">This theme is awesome!</p>
                                                        </div>
                                                        <div class="font-11">32 min</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="unread">
                                                <a href="#">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 chat-user-img align-self-center me-2">
                                                            <img src="../../assets/mam_nath.jpg" class="rounded-circle avatar-sm" alt="">
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-14 mt-0 mb-1">Mark Nieto</h5>
                                                            <p class="text-truncate mb-0">This theme is awesome!</p>
                                                        </div>
                                                        <div class="font-11">32 min</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="unread">
                                                <a href="#">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 chat-user-img align-self-center me-2">
                                                            <img src="../../assets/mam_nath.jpg" class="rounded-circle avatar-sm" alt="">
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-14 mt-0 mb-1">Mark Nieto</h5>
                                                            <p class="text-truncate mb-0">This theme is awesome!</p>
                                                        </div>
                                                        <div class="font-11">32 min</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="unread">
                                                <a href="#">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 chat-user-img align-self-center me-2">
                                                            <img src="../../assets/mam_nath.jpg" class="rounded-circle avatar-sm" alt="">
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-14 mt-0 mb-1">Mark Nieto</h5>
                                                            <p class="text-truncate mb-0">This theme is awesome!</p>
                                                        </div>
                                                        <div class="font-11">32 min</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="unread">
                                                <a href="#">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 chat-user-img align-self-center me-2">
                                                            <img src="../../assets/mam_nath.jpg" class="rounded-circle avatar-sm" alt="">
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-14 mt-0 mb-1">Mark Nieto</h5>
                                                            <p class="text-truncate mb-0">This theme is awesome!</p>
                                                        </div>
                                                        <div class="font-11">32 min</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="unread">
                                                <a href="#">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 chat-user-img align-self-center me-2">
                                                            <img src="../../assets/mam_nath.jpg" class="rounded-circle avatar-sm" alt="">
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-14 mt-0 mb-1">Mark Nieto</h5>
                                                            <p class="text-truncate mb-0">This theme is awesome!</p>
                                                        </div>
                                                        <div class="font-11">32 min</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="unread">
                                                <a href="#">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 chat-user-img align-self-center me-2">
                                                            <img src="../../assets/mam_nath.jpg" class="rounded-circle avatar-sm" alt="">
                                                        </div>

                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate font-14 mt-0 mb-1">Mark Nieto</h5>
                                                            <p class="text-truncate mb-0">This theme is awesome!</p>
                                                        </div>
                                                        <div class="font-11">32 min</div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Conversation -->
                        <div class="col-xl-8 col-lg-8">
                            <div class="conversation-list-card card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop " data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <div class="dropdown-divider"></div>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-grow-3"> 
                                            <h4 class="mt-0 mb-1 text-truncate">Margaret Clayton</h4>
                                            <p class="font-13 text-muted mb-0"><i class="mdi mdi-circle text-success me-1 font-11"></i> Active</p>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <ul class="conversation-list slimscroll" style="max-height: 410px;" data-simplebar>
                                        <li>
                                            <div class="chat-day-title">
                                                <span class="title">Today</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="message-list">
                                                <div class="chat-avatar ">
                                                    <img src="../../assets/boss_greg.jpg" alt="">
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <span class="user-name">Margaret Clayton</span>
                                                        <p>
                                                            Hello!
                                                        </p>
                                                    </div>
                                                    <span class="time">10:00</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="odd">
                                            <div class="message-list">
                                                <div class="chat-avatar">
                                                    <img src="../../assets/mam_nath.jpg" alt="">
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <span class="user-name">Nowak Helme</span>
                                                        <p>
                                                            Hi, How are you? What about our next meeting?
                                                        </p>
                                                    </div>
                                                    <span class="time">10:01</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="message-list">
                                                <div class="chat-avatar">
                                                    <img src="../../assets/boss_greg.jpg" alt="">

                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <span class="user-name">Margaret Clayton</span>
                                                        <p>
                                                            Yeah everything is fine
                                                        </p>
                                                    </div>
                                                    <span class="time">10:03</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="odd">
                                            <div class="message-list">
                                                <div class="chat-avatar">
                                                    <img src="../../assets/mam_nath.jpg" alt="">
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <span class="user-name">Nowak Helme</span>
                                                        <p>
                                                            Wow that's great
                                                        </p>
                                                    </div>
                                                    <span class="time">10:04</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="odd">
                                            <div class="message-list">
                                                <div class="chat-avatar">
                                                    <img src="../../assets/mam_nath.jpg" alt="">
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <span class="user-name">Nowak Helme</span>
                                                        <p>
                                                            Wow that's great
                                                        </p>
                                                    </div>
                                                    <span class="time">10:04</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="odd">
                                            <div class="message-list">
                                                <div class="chat-avatar">
                                                    <img src="../../assets/mam_nath.jpg" alt="">
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <span class="user-name">Nowak Helme</span>
                                                        <p>
                                                            Wow that's great
                                                        </p>
                                                    </div>
                                                    <span class="time">10:04</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="odd">
                                            <div class="message-list">
                                                <div class="chat-avatar">
                                                    <img src="../../assets/mam_nath.jpg" alt="">
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <span class="user-name">Nowak Helme</span>
                                                        <p>
                                                            Wow that's great
                                                        </p>
                                                    </div>
                                                    <span class="time">10:04</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="odd">
                                            <div class="message-list">
                                                <div class="chat-avatar">
                                                    <img src="../../assets/mam_nath.jpg" alt="">
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <span class="user-name">Nowak Helme</span>
                                                        <p>
                                                            Wow that's great
                                                        </p>
                                                    </div>
                                                    <span class="time">10:04</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="odd">
                                            <div class="message-list">
                                                <div class="chat-avatar">
                                                    <img src="../../assets/mam_nath.jpg" alt="">
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <span class="user-name">Nowak Helme</span>
                                                        <p>
                                                            Wow that's great
                                                        </p>
                                                    </div>
                                                    <span class="time">10:04</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-3 conversation-input border-top">
                                    <div class="row">
                                        <div class="col">
                                            <div>
                                                <input type="text" class="form-control" placeholder="Enter Message...">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-warning text-white chat-send width-md waves-effect waves-light"><span class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send"></i></button>
                                        </div>
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
