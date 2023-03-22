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
                    <form>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card border-2">
                                    <div class="card-body">
                                        <h4 class="card-title">Payroll Overview</h4>
                                        <div class="row mb-1 mx-2">
                                            <label class="col-sm-3 col-form-label">Employee Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="ANSELMO, CHRISTIAN D.">
                                            </div>
                                        </div>
                                        <div class="row mb-1 mx-2">
                                            <label f class="col-sm-3 col-form-label">Position</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="COMPANY DRIVER">
                                            </div>
                                        </div>
                                        <div class="row mb-1 mx-2">
                                            <label f class="col-sm-3 col-form-label">Payroll Period</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="FEBRUARY 11 - 25, 2023">
                                            </div>
                                        </div>
                                        <div class="row mb-1 mx-2">
                                            <label f class="col-sm-3 col-form-label">Payroll Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="FEBRUARY 28, 2023">
                                            </div>
                                        </div>
                                        <hr>
                                        <h4>INCOME</h4>
                                        <table class="table table-responsive-lg bg-light" id="inline-editable">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Basic Pay</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Salary Adjustment</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tax Refund</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">REG OT</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ND on REG OT</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sat./Sun/Spcl OT</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sat./Sun/Spcl OT > 8 Hrs.</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ND on RD/SH OT</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ND on RD/SH OT in > 8</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">LH OT</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">LH OT in > 8</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ND LH OT</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ND LH OT in > 8</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">Allowance</th>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">Gross Pay</th>
                                                    <td>0.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card border-2">
                                    <div class="card-body">
                                        <img src="../../assets/nar_logo.png" class="avatar-md mx-auto d-block mt-2">
                                        <h3 class="text-center">Payroll System</h3>
                                        <p class="text-muted text-center fs-6">NAR Power System Specialists Corporation <br>
                                        Ciannat Complex, Marcos Highway, Antipolo City, Rizal Province</p>
                                        <h4 class="mt-4">DEDUCTIONS</h4>
                                         <table class="table table-responsive-lg bg-light" id="inline-editable2">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Tardiness/Undertime</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">LWOP</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Absences</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">SSS Contri</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Philhealth Contri</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">HDMF Contri</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">SSS Loan</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">HDMF Loan</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Advances</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">WhTax</th>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">Total Deductions</th>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">TAKE HOME PAY</th>
                                                    <td>0.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-warning text-white"><span class="d-none d-sm-inline-block"><i class="fas fa-save me-2"></i>Submit</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
    <!-- Table Editable plugin-->
    <script src="../dist/assets/libs/jquery-tabledit/jquery.tabledit.min.js"></script>

    <!-- Table editable init-->
    <script src="../dist/assets/js/pages/tabledit.init.js"></script>

    <!-- App js-->
    <script src="../dist/assets/js/app.min.js"></script>



    <!-- Plugins js -->
    <script src="../dist/assets/libs/dropzone/min/dropzone.min.js"></script>
    <script src="../dist/assets/libs/dropify/js/dropify.min.js"></script>

</body>
<script type="text/javascript">
    "use strict";!function(t){function o(){}o.prototype.init=function(){t("#inline-editable2").Tabledit({inputClass:"form-control form-control",editButton:!1,deleteButton:!1,columns:{identifier:[0,"id"],editable:[[1,"col1"],[2,"col2"],[3,"col3"],[4,"col4"],[6,"col6"]]}}),t("#btn-editable").Tabledit({buttons:{edit:{class:"btn btn-success",html:'<span class="mdi mdi-pencil"></span>',action:"edit"}},inputClass:"form-control form-control-sm",deleteButton:!1,saveButton:!1,autoFocus:!1,columns:{identifier:[0,"id"],editable:[[1,"col1"],[2,"col2"],[3,"col3"],[4,"col4"],[6,"col6"]]}})},t.EditableTable=new o,t.EditableTable.Constructor=o}(window.jQuery),window.jQuery.EditableTable.init();
</script>
</html>
