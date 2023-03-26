<?php
include('../../php/database.php');
include('../../php/access.php');

if(isset($_GET['folder'])) { 

$fid = $_GET['folder'];

$sql = mysqli_query($config, "SELECT * FROM docu_archive WHERE docu_no = '$fid'");
while($fetch = mysqli_fetch_array($sql)) {

?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        
        <title><?php echo $fetch['display_name'] ?> | NAR Power System Specialists Corp.</title>
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

                    <!-- Header -->
                    <div class="row px-2">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-xl-4 col-md-12">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="nar-documents.php">Documents</a></li>
                                            <li class="breadcrumb-item active"><?php echo $fetch['display_name'] ?></li>
                                        </ol>
                                    </div>

                                    <div class="col-xl-8 col-md-12">

                                        <div class="row justify-content-end">
                                            
                                            <div class="col-4">
                                                <select class="form-select" id="example-select">
                                                    <option selected>Default</option>
                                                    <option>File Type</option>
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

                    <!-- Body -->
                    <div class="row px-2">
                        <div class="card">
                            <div class="card-body">

                                

                            </div>
                        </div>
                    </div>


                    </div> <!-- container-fluid -->

                </div> <!-- content -->'
                
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

<?php } } ?>