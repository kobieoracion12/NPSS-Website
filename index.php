<?php
include('php/database.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | Adminto - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/dist/assets/images/favicon.ico">

		<!-- App css -->

		<link href="admin/dist/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

		<!-- icons -->
		<link href="admin/dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">
        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-lg-6 col-xl-4">
                        <div class="card">
                        <img src="assets/nar_logo.png" alt="" height="50" class="mx-auto mt-4">
                        <h3 class="text-uppercase mx-auto">Sign In</h3>
                            <div class="card-body p-4">
                                <form action="php/auth.php" method="post">
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email Address</label>
                                        <input class="form-control" type="email" name="email" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input class="form-control" type="password" required="" name="password" placeholder="Enter your password">
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="mb-2 d-grid text-center">
                                        <button class="btn btn-warning text-white" type="submit" name="login"> Log In </button>
                                        <a href="pages-recoverpw.html" class="text-muted ms-1 mt-3"><i class="fa fa-lock me-1"></i>Forgot your password?</a>
                                    </div>
                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor -->
        <script src="admin/dist/assets/libs/jquery/jquery.min.js"></script>
        <script src="admin/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="admin/dist/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="admin/dist/assets/libs/node-waves/waves.min.js"></script>
        <script src="admin/dist/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="admin/dist/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="admin/dist/assets/libs/feather-icons/feather.min.js"></script>

        <!-- App js -->
        <script src="admin/dist/assets/js/app.min.js"></script>
        
    </body>
</html>