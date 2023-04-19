<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/nar-icon.ico">

    <!-- App css -->

    <link href="../dist/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- icons -->
    <link href="../dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="../dist/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="../dist/assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .vr {
            border-left: 2px solid;
            height: 30px;
            margin-top: 10px;
            color: #42A5F5;
        }

        .dropdown a:hover {
            color: #42A5F5;
        }
        .card:hover{
          z-index: 1;
          box-shadow: 0 8px 50px rgba(0,0,0,0.2);
          transform: scale(1.05);
        }

    </style>

</head>

<body>
    <nav class="topnav navbar navbar-expand-lg bg-body-tertiary mt-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../dist/assets/images/nar_logo.png" class="ms-4" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #42A5F5;">
                <span style="color: #42A5F5;"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center me-5" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link arrow-none" href="home.php" id="topnav-dashboard" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-home me-1"></i>Home
                        </a>

                    </li>
                    <div class="vr d-none d-md-block"></div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-cogs me-1"></i>Services<div class="arrow-down"></div>
                        </a>
                        <ul class="dropdown-menu border border-1" aria-labelledby="topnav-apps">
                            <a href="main_services.php" class="dropdown-item">Main Services Offered</a>
                            <a href="eng_design.php" class="dropdown-item">Engineering & Design Services</a>
                            <a href="quality_manage.php" class="dropdown-item">Quality Management</a>
                            <a href="equip.php" class="dropdown-item">Equipments</a>
                        </ul>
                    </li>
                    <div class="vr d-none d-md-block"></div>
                    <li class="nav-item">
                        <a class="nav-link" href=clients.php><i class="fas fa-users me-1"></i>Clients</a>
                    </li>
                    <div class="vr d-none d-md-block"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="careers.php"><i class="fas fa-briefcase me-1"></i>Careers</a>
                    </li>
                    <div class="vr d-none d-md-block"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><i class="fas fa-phone-alt me-1"></i>Contact Us</a>
                    </li>
                    <div class="vr d-none d-md-block"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="fas fa-info-circle me-1"></i>About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--  Main Content -->
    <div class="bg-image">
        <img src="../dist/assets/images/power-plant.jpg" class="img-fluid" style="height: 60vh; width: 100%; background-repeat: no-repeat; ">
    </div>
    <div class="container-fluid">
        <h3 class="mt-3 ms-5" style="color: #146dac;">News & Update</h3>
        <hr class="border border-1">
        <div class="container">
            <div class="row mb-3">
                <div class="card-group" >
                    <div class="card me-4 border border-2" style=" border-radius: 25px;">
                        <img src="../dist/assets/images/gallery/1.jpg" class="card-img-top" alt="..."  style=" border-top-left-radius: 25px; border-top-right-radius: 25px;">
                        <div class="card-body">
                            <p class="card-text fs-3 fw-bold">Technical Work Schedule in Aklan, Philippines</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <p class="card-text fw-bold" style="color: #146dac;">READ MORE <i class="fas fa-angle-double-right ms-1"></i></p>
                        </div>
                    </div>
                    <div class="card me-4 border border-2" style=" border-radius: 25px;">
                        <img src="../dist/assets/images/gallery/2.jpg" class="card-img-top" alt="..." style=" border-top-left-radius: 25px; border-top-right-radius: 25px;">
                        <div class="card-body">
                            <p class="card-text fs-3 fw-bold">NAR Power is Looking for an Electrical Engineer</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <p class="card-text fw-bold" style="color: #146dac;">READ MORE <i class="fas fa-angle-double-right ms-1"></i></p>
                        </div>
                    </div>
                    <div class="card me-4 border border-2" style=" border-radius: 25px;">
                        <img src="../dist/assets/images/gallery/3.jpg" class="card-img-top" alt="..." style=" border-top-left-radius: 25px; border-top-right-radius: 25px;">
                        <div class="card-body">
                            <p class="card-text fs-3 fw-bold">Preventive Maintenance at MWC - Siruna PS</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <p class="card-text fw-bold" style="color: #146dac;">READ MORE <i class="fas fa-angle-double-right ms-1"></i></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="card-group">
                    <div class="card me-4 border border-2" style=" border-radius: 25px;">
                        <img src="../dist/assets/images/gallery/1.jpg" class="card-img-top" alt="..." style=" border-top-left-radius: 25px; border-top-right-radius: 25px;">
                        <div class="card-body">
                            <p class="card-text fs-3 fw-bold">Technical Work Schedule in Aklan, Philippines</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <p class="card-text fw-bold" style="color: #146dac;">READ MORE <i class="fas fa-angle-double-right ms-1"></i></p>
                        </div>
                    </div>
                    <div class="card me-4 border border-2" style=" border-radius: 25px;">
                        <img src="../dist/assets/images/gallery/2.jpg" class="card-img-top" alt="..." style=" border-top-left-radius: 25px; border-top-right-radius: 25px;">
                        <div class="card-body">
                            <p class="card-text fs-3 fw-bold">NAR Power is Looking for an Electrical Engineer</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <p class="card-text fw-bold" style="color: #146dac;">READ MORE <i class="fas fa-angle-double-right ms-1"></i></p>
                        </div>
                    </div>
                    <div class="card me-4 border border-2" style=" border-radius: 25px;">
                        <img src="../dist/assets/images/gallery/3.jpg" class="card-img-top" alt="..." style=" border-top-left-radius: 25px; border-top-right-radius: 25px;">
                        <div class="card-body">
                            <p class="card-text fs-3 fw-bold">Preventive Maintenance at MWC - Siruna PS</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <p class="card-text fw-bold" style="color: #146dac;">READ MORE <i class="fas fa-angle-double-right ms-1"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <footer class="text-center text-lg-start text-white " style="background-color: #146dac; position: absolute; width: 100%; ">
        <!-- Grid container -->
        <div class="container mb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row mb-2">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-2">
                        <img src="../dist/assets/images/nar_logo.png" class="mt-3 text-center" height="90">
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-white">Address</h5>
                        <p>
                            Unit 223 Ciannat Complex, Marcos Highway,
                            Barangay Mayamot, Antipolo City, Rizal Province
                        </p>

                    </div>

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-white">Telephone Number</h5>
                        <p><i class="fas fa-phone mr-3 me-1"></i>(02) 531-5594</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-white">Contact with us</h5>

                        <!-- Facebook -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Google -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>
                    </div>
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #ffdb2b; color: #42A5F5; font-weight: bold; ">
            NAR Power System Specialists Corporation © 2023. All rights reserved.
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->










</body>
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

</html>
