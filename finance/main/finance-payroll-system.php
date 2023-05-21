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
    <link href="../dist/assets/css/remove-arrow.css" rel="stylesheet" type="text/css" />
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

                        <!-- Body -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card border-2">

                                    <div class="card-body">
                                        <h4 class="card-title">Payroll Overview</h4>

                                        <?php $uid = $_GET['uid'] ?>

                                        <?php
                                            if(isset($_GET['uid'])) {
                                                $sql = mysqli_query($config, "SELECT * FROM employee_info WHERE employee_id = $uid");
                                                while($employee = mysqli_fetch_array($sql)) { ?>

                                        <div class="row mb-1 mx-2">
                                            <input type="hidden" class="form-control" name="employee_id" value="<?php echo $employee['employee_id'] ?>">

                                            <label class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="<?php echo strtoupper($employee['last_name']); echo ", "; echo strtoupper($employee['first_name']); ?>" readonly>
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
                                            <label class="col-sm-3 col-form-label">Payroll Period</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="--">
                                            </div>
                                        </div>

                                        <div class="row mb-1 mx-2">
                                            <label class="col-sm-3 col-form-label">Payroll Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="--">
                                            </div>
                                        </div>
                                        <hr>

                                        <h4>INCOME</h4>
                                        
                                        <!-- Table -->
                                        <table class="table table-responsive-lg bg-light" >
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold pe-5 border border-0">Basic Pay</span>                                                            
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="basic" class="form-control txt mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold  border border-0">Salary Adjustment</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="saladj" class="form-control txt mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0" style="padding-right: 60px;">Tax Refund</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="taxref" class="form-control txt mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0" style="padding-right: 82px;">REG OT</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="regot" class="form-control txt mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold pe-4  border border-0">ND on REG OT</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="ndreg" class="form-control txt mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>      
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold  border border-0">Sat./Sun/Spcl OT</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="spclot" class="form-control txt mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold  border border-0">Sat/Sun/Spcl OT > 8 Hrs</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="spcl8ot" class="form-control txt text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold  border border-0">ND on RD/SH OT</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="ndot" class="form-control txt mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold  border border-0">ND on RD/SH OT in > 8</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="nd8ot" class="form-control txt mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold pe-5 border border-0">LH OT</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="lhot" class="form-control txt mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold pe-4  border border-0">LH OT in > 8</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="lt8ot" class="form-control txt mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold  border border-0" style="padding-right: 55px;">ND LH OT</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="ndlhot" class="form-control txt mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold  border border-0">ND LH OT in > 8</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="ndlh8ot" class="form-control txt mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0" style="padding-right: 50px;">Allowance</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="allowance" class="form-control txt mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0" style="padding-right: 50px;">Gross Pay</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">

                                                                <span id="sum" class="pe-3 pt-1 text-center fw-bold">0</span>
                                                                <input id="sum2" name="gross" type="hidden">
                                                            </div>
                                                        </div>  
                                                    </td>
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

                                        <table class="table table-responsive-lg bg-light" >
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text minus fw-bold pe-5 border border-0">Tardiness/Undertime</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="tard" class="form-control minus mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0" style="padding-right: 110px;">LWOP</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="lwop" class="form-control minus mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0" style="padding-right: 85px;">Absences</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="absent" class="form-control minus mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0" style="padding-right: 80px;">SSS Contri</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="ssscon" class="form-control minus mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0 pe-4">Philhealth Contri</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="phcon" class="form-control minus mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>      
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0" style="padding-right: 63px;">HDMF Contri</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="hdmfcon" class="form-control minus mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0" style="padding-right: 83px;">SSS Loan</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="sssloan" class="form-control minus mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0 pe-5">HDMF Loan</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="hdmfloan" class="form-control minus mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0" style="padding-right: 80px;">Advances</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="advances" class="form-control minus mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0" style="padding-right: 100px;">WhTax</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <input type="number" name="whtax" class="form-control minus mx-3 text-center border border-0 w-50" placeholder="--">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0 pe-4">Total Deductions</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <span id="difft" class="pe-3 pt-1 subtrt text-center fw-bold text-danger">0</span>
                                                                <input id="difft2" name="deduct" type="hidden">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="input-group-text fw-bold border border-0 pe-4">TAKE HOME PAY</span>
                                                            </div>

                                                            <div class="col-6 d-flex justify-content-end">
                                                                <span id="takehome" class="pe-3 pt-1 text-center fw-bold text-success">0</span>
                                                                <input id="takehome2" name="take" type="hidden">
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>

                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-warning text-white" name="record"><span class="d-none d-sm-inline-block"><i class="fas fa-save me-2"></i>Submit</span></button>
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

    <!-- Income / Gross Pay -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.txt').each(function() {
                $(this).keyup(function() {
                    calculateSum();
                });
            });
        });


        function calculateSum() {
            let sum = 0;
            $('.txt').each(function() {
                if(!isNaN(this.value) && this.value.length != 0) {
                    sum += parseFloat(this.value);
                }
            });

            $("#sum").html(sum.toFixed(2));
            $("#sum2").val(sum.toFixed(2));
        }
    </script>

    <!-- Deductions -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.minus').each(function() {
                $(this).keyup(function() {
                    calculateDeduct();
                });
            });
        });

        function calculateDeduct() {

            var getsum = $('#sum').text();

            var diff = 0;

            $('.minus').each(function() {
                if(!isNaN(this.value) && this.value.length != 0) {
                    diff += parseFloat(this.value);
                }
            });

            $("#difft").html(diff.toFixed(2));
            $("#difft2").val(diff.toFixed(2));
        }
    </script>

    <!-- Take Home Pay -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.minus').each(function() {
                $(this).keyup(function() {
                    calculateTake();
                });
            });
        });

        function calculateTake() {

            var getsum = $('#sum').text();
            var diff = $('#difft').text();
            
            var result = 0;

            $('.minus').each(function() {
                if(!isNaN(this.value) && this.value.length != 0) {
                    result = getsum - diff;
                }
            });

            $("#takehome").html(result.toFixed(2));
            $("#takehome2").val(result.toFixed(2));
        }
    </script>

</body>
<script type="text/javascript">
    "use strict";!function(t){function o(){}o.prototype.init=function(){t("#inline-editable2").Tabledit({inputClass:"form-control form-control",editButton:!1,deleteButton:!1,columns:{identifier:[0,"id"],editable:[[1,"col1"],[2,"col2"],[3,"col3"],[4,"col4"],[6,"col6"]]}}),t("#btn-editable").Tabledit({buttons:{edit:{class:"btn btn-success",html:'<span class="mdi mdi-pencil"></span>',action:"edit"}},inputClass:"form-control form-control-sm",deleteButton:!1,saveButton:!1,autoFocus:!1,columns:{identifier:[0,"id"],editable:[[1,"col1"],[2,"col2"],[3,"col3"],[4,"col4"],[6,"col6"]]}})},t.EditableTable=new o,t.EditableTable.Constructor=o}(window.jQuery),window.jQuery.EditableTable.init();
</script>

</html>
