<?php
include('../../php/database.php');
include('../../php/access.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Applicants | NAR Power System Specialists Corp.</title>
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

                    <div class="row">

                        <div class="col-sm-12">
                            <div class="inbox-app-main">
                                <div class="row">
                                    <div class="col-md-3">
                                        <aside id="sidebar">
                                            <div class="h-100" data-simplebar>

                                                <menu class="menu-segment">
                                                    <ul class="list-unstyled">
                                                        <li class="active"><a href="javascript:void(0);">Inbox<span> (43)</span></a>
                                                        </li>
                                                        <li><a href="javascript:void(0);">Unread</a></li>
                                                        <li><a href="javascript:void(0);">Pending</a></li>
                                                        <li><a href="javascript:void(0);">Outgoing</a></li>
                                                    </ul>
                                                </menu>

                                                <div class="separator"></div>

                                                <div class="menu-segment">
                                                    <ul class="labels list-unstyled">
                                                        <li class="title">Labels <span class="icon">+</span></li>
                                                        <li><a href="#">Important <span class="ball green"></span></a>
                                                        </li>
                                                        <li><a href="#">Denied <span class="ball red"></span></a></li>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="bottom-padding"></div>
                                            </div>
                                        </aside>
                                    </div> <!-- end col -->

                                    <div class="col-md-9">
                                        <main id="main">
                                            <div class="overlay"></div>
                                            <header class="header">

                                                <h1 class="page-title">
                                                    <a class="sidebar-toggle-btn trigger-toggle-sidebar">
                                                        <span class="line"></span>
                                                        <span class="line"></span>
                                                        <span class="line"></span>
                                                        <span class="line line-angle1"></span>
                                                        <span class="line line-angle2"></span>
                                                    </a>
                                                </h1>
                                                <div class="action-bar float-start">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a class="icon circle-icon"><i class="mdi mdi-refresh text-muted"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a class="icon circle-icon red"><i class="mdi mdi-close text-danger"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="search-box float-end">
                                                    <input placeholder="Search..."><span class="icon fa fa-search"></span>
                                                </div>

                                                <div class="clearfix"></div>

                                            </header>

                                            <div class="table-responsive mx-4 mt-1">
                                                <?php
                                                    $records = mysqli_query($config, "SELECT * FROM application");
                                                    while ($data = mysqli_fetch_array($records)) { ?>
                                                <table class="table table-hover table-borderless mb-0">
                                                    <tbody>
                                                        <tr class="text-success fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                            <th class="p-3" scope="row">1</th>
                                                            <td class="p-3"><?php echo $data['first_name']. " " .$data['last_name'] ?></td>
                                                            <td class="p-3"><?php echo $data['job_interest'] ?></td>
                                                            <td class="p-3"><?php echo $data['site'] ?></td>
                                                            <td class="p-3"><?php echo $data['date_submitted'] ?></td>
                                                            <td class="p-3 text-center">Pending</td>
                                                        </tr>
                                                        <!-- <tr class="fw-bold">
                                                                <th class="p-3" scope="row">2</th>
                                                                <td class="p-3">Jireh Geleo Ramos</td>
                                                                <td class="p-3">IT Specialist</td>
                                                                <td class="p-3">Antipolo City</td>
                                                                <td class="p-3">February 23, 2023</td>
                                                                <td class="p-3 text-center">Pending</td>
                                                            </tr>
                                                            <tr class="text-danger">
                                                                <th class="p-3" scope="row">3</th>
                                                                <td class="p-3">Richard Ramos</td>
                                                                <td class="p-3">Macho Dancer</td>
                                                                <td class="p-3">Antipolo City</td>
                                                                <td class="p-3">January 1, 2022</td>
                                                                <td class="p-3 text-center">Denied</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="p-3" scope="row">4</th>
                                                                <td class="p-3">Neil Arthur Pornela</td>
                                                                <td class="p-3">Sex Worker</td>
                                                                <td class="p-3">Antipolo City</td>
                                                                <td class="p-3">April 6, 2019</td>
                                                                <td class="p-3 text-center">Approved</td>
                                                            </tr> -->
                                                    </tbody>
                                                </table>
                                                <?php
                                                    }
                                                    ?>
                                            </div>
                                        </main>
                                    </div> <!-- end col -->
                                </div><!-- end row -->
                            </div>

                        </div>

                    </div>
                    <!-- End row -->


                    <!--Schedule  Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <img src="../../assets/nar_logo.png" class="avatar-sm mx-auto d-block">
                                                <h4 class="text-center">Job Application</h4>
                                                <p class="text-muted text-center fs-6">NAR Power System Specialists Corporation <br>
                                                    Ciannat Complex, Marcos Highway, Antipolo City, Rizal Province <br>Telephone number: (02) 551-5594 <br>email: narpowersystem@pldtdsl.net</p>

                                                <div class="input-group mb-1">
                                                    <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Job Interest:</span>
                                                    <input type="text" class="form-control" value="Electrical Engineer">
                                                </div>
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Branch/Office:</span>
                                                    <input type="text" class="form-control" value="Antipolo">
                                                </div>
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Last Name:</span>
                                                    <input type="text" class="form-control" value="Oracion">
                                                </div>
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">First Name:</span>
                                                    <input type="text" class="form-control" value="Kobie">
                                                </div>
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Middke Name:</span>
                                                    <input type="text" class="form-control" value="Malibog">
                                                </div>
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Suffix:</span>
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Birt Date:</span>
                                                    <input type="text" class="form-control" value="February 28, 2000">
                                                </div>
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Province:</span>
                                                    <input type="text" class="form-control" value="Laguna">
                                                </div>
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">City/Municipality::</span>
                                                    <input type="text" class="form-control" value="LiLiw">
                                                </div>
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Mobile Number:</span>
                                                    <input type="text" class="form-control" value="09xx-xxx-xxxx">
                                                </div>
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Email Address::</span>
                                                    <input type="text" class="form-control" value="kobiemalibog@gmail.com">
                                                </div>
                                                <div class="d-grid ps-5 mt-4 mb-2">
                                                    <button type="button" class="btn btn fw-bold border border-1">Preview CV/Resume</button>
                                                </div>

                                            </div>
                                            <div class="col-lg-6 border-start border-1">
                                                <h4 class="text-center">Set Interview Schedule</h4>
                                                <div class="form-group mx-3 mb-2">
                                                    <label class="ps-1">Date</label>
                                                    <input type="date" name="" class="form-control">
                                                </div>
                                                <div class="form-group mx-3 mb-2">
                                                     <label class="ps-1">Time</label>
                                                     <input type="time" name="" class="form-control">
                                                 </div>
                                                <div class="form-group mx-3 mb-2">
                                                    <label class="ps-1">Other Instructions (Optional)</label>
                                                    <textarea type="text" name="job_desc" class="form-control" rows="4" required></textarea>
                                                 </div>
                                                 <div class="d-grid mt-4 mx-3">
                                                    <button type="button" class="btn btn fw-bold border border-1 text-white" style="background:  #146dac;">Set Schedule</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- content -->

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
