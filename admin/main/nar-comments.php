<?php
    include('../../php/database.php');
    include('../../php/access.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Quotations | NAR Power System Specialists Corp.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/nar-icon.ico">

    <!-- App css -->
    <link href="../dist/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- icons -->
    <link href="../dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .com:hover {
            background-color: rgb(242, 242, 242);
        }

    </style>
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
                    <!-- Client Card -->
                    <div class="row">
                        <div id="comment_wrapper">
                                        
                        </div>
                    </div>
                    <div class="border-1 border">
                        <form id="comment-form">
                            <div class="d-flex flex-start mx-4 my-4">
                                <input type="hidden" name="emp_id" id="empId" value="<?php echo $_SESSION['employee_id']; ?>">
                                <?php
                                $id = $_GET['id'];
                                ?>
                                <input type="hidden" name="quot_no" id="quotNo" value="<?php echo $id ?>">
                                <?php
                                $emp_id = $_SESSION['employee_id'];
                                $records = mysqli_query($config, "SELECT * FROM employee_info WHERE employee_id = '$emp_id'");
                                while ($data = mysqli_fetch_array($records)) { ?>
                                
                                <img class="rounded-circle avatar-md ms-2 me-3" src="../../uploads/profile/<?php echo $data['profile_pic'] ?>" alt="avatar" />
                                <div class="w-100">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="text-primary fw-bold mb-0 ps-1">
                                            <?php echo $data['first_name'] ?> 
                                        </h6>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <textarea class="form-control bg-light" placeholder="Write a comment" rows="2" id="contentComment" name="content_comment"></textarea>
                                        <button id="FormSubmit" class="btn btn-warning text-white fw-bold ms-3">Send</button>
                                    </div> 
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                    <!-- end row -->
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

    <!-- App js-->
    <script src="../dist/assets/js/app.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        //##### Add record when Add Record Button is click #########
        $("#comment-form").submit(function (e) {
                e.preventDefault();
                var myData = $("#empId").val();
                var myData2 = $("#quotNo").val();
                var myData3 = $("#contentComment").val();
                //build a post data structure
                jQuery.ajax({
                type: "POST", // Post / Get method
                url: "../../php/add-comment.php", //Where form data is sent on submission
                dataType:"text", // Data type, HTML, json etc.
                data: 'emp_id=' + myData + '&quot_no=' + myData2 + '&content_comment=' + myData3, //Form variables
                success:function(response){
                    $('#contentComment').val("");
                },
                error:function (xhr, ajaxOptions, thrownError){
                    alert(thrownError);
                }
                });
            });
        });

        
    </script>
</body>

</html>
<script>
    <?php
        $id = $_GET['id'];
    ?>
    function loadcomments() {
      var xhttp = new XMLHttpRequest();
      var params = "id=<?php echo $id ?>";
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("comment_wrapper").innerHTML =
          this.responseText;
        }
      };
      xhttp.open("GET", "../modal/comment_wrapper.php?" + params, true);
      xhttp.send();
    }
    setInterval(function(){
        loadcomments();
        // 1sec
    },1000);

    window.onload = loadcomments;
</script>
