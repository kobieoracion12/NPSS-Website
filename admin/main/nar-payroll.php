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
                    <form method="post" action="../../php/record-payroll.php">
                        <?php
                            $sql = mysqli_query($config, "SELECT * FROM payroll WHERE employee_id = 2023198616");
                            while($salary = mysqli_fetch_array($sql)) { 
                                $period = date("F d, Y", strtotime($salary['payroll_period']));
                                $date = date("F d, Y", strtotime($salary['payroll_date']));
                            ?>

                        <!-- Body -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card border-2">

                                    <div class="card-body">
                                        <h4 class="card-title">Payroll Overview</h4>

                                        <?php
                                            $sql = mysqli_query($config, "SELECT * FROM employee_info WHERE employee_id = 2023198616");
                                            while($employee = mysqli_fetch_array($sql)) { ?>

                                        <div class="row mb-1 mx-2">
                                            <!-- CHANGE THIS -->
                                            <input type="hidden" class="form-control" name="employee_id" value="2023198616">
                                            <input type="hidden" class="form-control" name="payroll_no" value="20231160000">

                                            <label class="col-sm-3 col-form-label">Employee Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="<?php echo strtoupper($employee['last_name']); echo ", "; echo strtoupper($employee['first_name']); ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-1 mx-2">
                                            <label f class="col-sm-3 col-form-label">Position</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="<?php echo strtoupper($employee['position']); ?>">
                                            </div>
                                        </div>

                                        <?php } ?>

                                        <div class="row mb-1 mx-2">
                                            <label f class="col-sm-3 col-form-label">Payroll Period</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="<?php echo strtoupper($period) ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-1 mx-2">
                                            <label f class="col-sm-3 col-form-label">Payroll Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="<?php echo strtoupper($date) ?>">
                                            </div>
                                        </div>
                                        <hr>
                                        <h4>INCOME</h4>
                                        
                                        <!-- Table -->
                                        <table class="table table-responsive-lg bg-light" id="inline-editable">
                                            <tbody>
                                                <tr>
                                                    <th scope="row" colspan="2">Basic Pay</th>
                                                    <td><?php echo $salary['basic_pay'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">Salary Adjustment</th>
                                                    <td><?php echo $salary['salary_adj'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">Tax Refund</th>
                                                    <td><?php echo $salary['tax_refund'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">REG OT</th>
                                                    <td><?php echo $salary['reg_ot1'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">ND on REG OT</th>
                                                    <td><?php echo $salary['nd_ot1'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">Sat./Sun/Spcl OT</th>
                                                    <td><?php echo $salary['spcl_ot1'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">Sat./Sun/Spcl OT > 8 Hrs.</th>
                                                    <td><?php echo $salary['spcl_ot2'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">ND on RD/SH OT</th>
                                                    <td><?php echo $salary['nd_ot2'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">ND on RD/SH OT in > 8</th>
                                                    <td><?php echo $salary['nd_ot3'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">LH OT</th>
                                                    <td><?php echo $salary['lh_ot1'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">LH OT in > 8</th>
                                                    <td><?php echo $salary['lh_ot2'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">ND LH OT</th>
                                                    <td><?php echo $salary['lh_ot3'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">ND LH OT in > 8</th>
                                                    <td><?php echo $salary['lh_ot4'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">Allowance</th>
                                                    <td><?php echo $salary['allowance'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">Gross Pay</th>
                                                    <td><?php echo $salary['gross_pay'] ?></td>
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
                                                    <th scope="row" colspan="2">Tardiness/Undertime</th>
                                                    <td><?php echo $salary['tardiness'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">LWOP</th>
                                                    <td><?php echo $salary['lwop'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">Absences</th>
                                                    <td><?php echo $salary['absences'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">SSS Contri</th>
                                                    <td><?php echo $salary['sss_contri'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">Philhealth Contri</th>
                                                    <td><?php echo $salary['ph_contri'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">HDMF Contri</th>
                                                    <td><?php echo $salary['hdmf_contri'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">SSS Loan</th>
                                                    <td><?php echo $salary['sss_loan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">HDMF Loan</th>
                                                    <td><?php echo $salary['hdmf_loan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">Advances</th>
                                                    <td><?php echo $salary['advances'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">WhTax</th>
                                                    <td><?php echo $salary['wh_tax'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">Total Deductions</th>
                                                    <td><?php echo $salary['total_deduc'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2">TAKE HOME PAY</th>
                                                    <td><?php echo $salary['take_home'] ?></td>
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

                        <?php } ?>

                    </form>
                </div> <!-- container-fluid -->
            </div> <!-- content -->

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
