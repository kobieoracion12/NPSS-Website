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
                                                        <li class="active"><a href="nar-applicants.php?sort=all">Inbox<span> (43)</span></a>
                                                        </li>
                                                        <li><a href="nar-applicants.php?sort=unread">Unread</a></li>
                                                        <li><a href="nar-applicants.php?sort=outgoing">Outgoing</a></li>
                                                    </ul>
                                                </menu>

                                                <div class="separator"></div>

                                                <div class="menu-segment">
                                                    <ul class="labels list-unstyled">
                                                        <li class="title">Labels <span class="icon">+</span></li>
                                                        <li><a href="#">Important <span class="ball green"></span></a>
                                                        </li>
                                                        <li><a href="#">Denied <span class="ball red"></span></a></li>
                                                        
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
                                            <div id="main-nano-wrapper" class="nano">
                                                <div class="nano-content h-100" data-simplebar>
                                                    <ul class="message-list">
                                                        <li>
                                                            <div class="mail-col mail-col-1"><span class="dot"></span>
                                                                <b>ID</b>
                                                                <p class="title">
                                                                    <b>Job Interest</b>
                                                                </p>
                                                            </div>
                                                            <div class="mail-col mail-col-2">
                                                                <div class="subject">
                                                                    <b>Name</b>
                                                                </div>
                                                                <div class="date">
                                                                    <b>Site</b>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                <?php if(isset($_GET['sort'])) { ?>
                                                    <div>
                                                        <?php
                                                            if($_GET['sort'] == "unread") {
                                                                $sql = mysqli_query($config, "SELECT * FROM application WHERE status = 'unread'");
                                                                while($data = mysqli_fetch_array($sql)) {
                                                        ?>

                                                        <!-- Active -->
                                                        <ul class="message-list">
                                                            <a href="" class="setbtn" data-bs-toggle="modal" data-id='<?php echo $data['application_id'] ?>'>
                                                                <li>
                                                                    <div class="mail-col mail-col-1"><span class="dot"></span>
                                                                        <?php echo $data['application_id'] ?>
                                                                        <p class="title">
                                                                            <?php echo $data['job_interest'] ?>
                                                                        </p>
                                                                    </div>

                                                                    <div class="mail-col mail-col-2">
                                                                        
                                                                        <div class="subject">
                                                                            <?php 
                                                                                echo $data['last_name'];
                                                                                echo ", ";
                                                                                echo $data['first_name'];
                                                                                echo " ";
                                                                                echo $data['middle_name'];
                                                                            ?>
                                                                        </div>
                                                                        <div class="date">
                                                                            <?php echo $data['site'] ?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                        </ul>
                                                            <?php } ?>
                                                        <?php }
                                                         elseif($_GET['sort'] == "all") { 
                                                                $sql3 = mysqli_query($config, "SELECT * FROM application");
                                                                while($data3 = mysqli_fetch_array($sql3)) {
                                                        ?>

                                                        <!-- Director -->
                                                        <ul class="message-list">
                                                            <a href="">
                                                                <li>
                                                                    <div class="mail-col mail-col-1"><span class="dot"></span>
                                                                        <?php echo $data3['application_id'] ?>
                                                                        <p class="title">
                                                                            <?php echo $data3['job_interest'] ?>
                                                                        </p>
                                                                    </div>

                                                                    <div class="mail-col mail-col-2">
                                                                        <div class="subject">
                                                                            <?php 
                                                                                echo $data3['last_name'];
                                                                                echo ", ";
                                                                                echo $data3['first_name'];
                                                                                echo " ";
                                                                                echo $data3['middle_name'];
                                                                            ?>
                                                                        </div>
                                                                        
                                                                        <div class="date">
                                                                            <?php echo $data3['site'] ?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </a>     
                                                        </ul>
                                                            <?php } ?>
                                                        <?php }
                                                            elseif($_GET['sort'] == "outgoing") { 
                                                                $sql3 = mysqli_query($config, "SELECT * FROM application WHERE status = 'outgoing'");
                                                                while($data2 = mysqli_fetch_array($sql3)) {
                                                        ?>

                                                        <!-- Household -->
                                                        <ul class="message-list">
                                                            <a href="">
                                                                <li>
                                                                    <div class="mail-col mail-col-1"><span class="dot"></span>
                                                                        <?php echo $data2['application_id'] ?>
                                                                        <p class="title">
                                                                            <?php echo $data2['job_interest'] ?>
                                                                        </p>
                                                                    </div>

                                                                    <div class="mail-col mail-col-2">
                                                                        <div class="subject">
                                                                            <?php 
                                                                                echo $data2['last_name'];
                                                                                echo ", ";
                                                                                echo $data2['first_name'];
                                                                                echo " ";
                                                                                echo $data2['middle_name'];
                                                                            ?>
                                                                        </div>
                                                                        
                                                                        <div class="date">
                                                                            <?php echo $data2['site'] ?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                        </ul>
                                                            <?php } ?>
                                                        <?php } ?> 
                                                    </div>

                                                <?php } ?>
                                            </div>
                                        </div>
                                        </main>
                                    </div> <!-- end col -->
                                </div><!-- end row -->
                            </div>

                        </div>

                    </div>
                    <!-- End row -->


                    <!--Schedule  Modal -->
                    <div class="modal fade" id="modal_update">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content rounded-0">
                            <div class="modal-header bg-light p-1">
                                <label class="f4 p-2"><b>Member Info</b></label>
                            </div>
                            <div class="modal-body">
                                <div class="modssss">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="set" tabindex="-1">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="setmodal">
                                    
                                </div>
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
        <script type="text/javascript">
            $(document).ready(function() {
                $('.setbtn').click(function() {
                    var applicationid = $(this).data('id');

                    $.ajax({
                        url: '../modal/set-schedule.php',
                        type: 'post',
                        data: {
                            applicationid: applicationid
                        },
                        success: function(response) {
                            $('.setmodal').html(response);
                            $('#set').modal('show');
                        }
                    });
                });
            });
        </script>


</body>

</html>
