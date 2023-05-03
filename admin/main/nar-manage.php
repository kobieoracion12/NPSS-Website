<?php
    include('../../php/database.php');
    include('../../php/access.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Manage | NAR Power System Specialists Corp.</title>
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

                        <div class="row px-2">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-xl-4 col-md-12">
                                            <button class="btn btn-warning text-white rounded" data-bs-toggle="modal" data-bs-target="#add-client">
                                                <i class="mdi mdi-plus-circle me-1"></i>Add Documents
                                            </button>
                                        </div>

                                        <div class="col-xl-8 col-md-12">

                                            <div class="row justify-content-end">
                                                
                                                <div class="col-4">
                                                    <select class="form-select" id="example-select">
                                                        <option selected>Default</option>
                                                        <option>Branch</option>
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

                        <!-- Table -->
                        <div class="row table-responsive px-2">
                            <div class="card">
                                <div class="card-body m-2">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th hidden>Docu No.</th>
                                                <th hidden>File Name</th>
                                                <th hidden>Icon</th>
                                                <th hidden>Type</th>

                                                <th>Name</th>
                                                <th>Owner</th>
                                                <th>Last Modified</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php
                                                $no = $_GET['company'];

                                                $sql = mysqli_query($config, "SELECT * FROM docu_archive WHERE file_name != '' AND company_no = '$no'");
                                                while($row = mysqli_fetch_array($sql)) {
                                                    $docid = $row['docu_no'];
                                            ?>

                                                <tr>
                                                    <td hidden><?php echo $row['docu_no'] ?></td>
                                                    <td hidden><?php echo $row['file_name'] ?></td>


                                                    <td class="p-3">
                                                        <?php 
                                                            $icon = $row['display_type'];

                                                            if($icon == "docx") {
                                                        ?>

                                                        <img src="../../assets/icon/word_icon.png" alt="image" class="img-fluid avatar-xs me-2" style="width:20px"/>

                                                        <?php } elseif ($icon == "xlsx") { ?>

                                                        <img src="../../assets/icon/excel_icon.png" alt="image" class="img-fluid avatar-xs me-2" style="width:20px"/>

                                                        <?php } elseif ($icon == "pptx") { ?>
                                                            
                                                        <img src="../../assets/icon/ppt_icon.png" alt="image" class="img-fluid avatar-xs me-2" style="width:20px"/>

                                                        <?php } elseif ($icon == "pdf") { ?>

                                                        <img src="../../assets/icon/pdf_icon.png" alt="image" class="img-fluid avatar-xs me-2" style="width:20px"/>

                                                        <?php } else { ?>

                                                        <img src="../../assets/icon/unknown_icon.png" alt="image" class="img-fluid avatar-xs me-2" style="width:20px"/>

                                                        <?php } ?>
                                                        
                                                        <?php echo $row['display_name'] ?>
                                                    </td>

                                                    <td class="p-3">
                                                        <?php
                                                            $uid = $_SESSION['employee_id'];
                                                            $sql2 = mysqli_query($config, "SELECT profile_pic FROM employee_info WHERE employee_id = '$uid'");
                                                            while($row2 = mysqli_fetch_array($sql2)) {
                                                        ?>
                                                        
                                                        <img src="<?php echo "../../uploads/profile/" . $row2[0] ?>" class="img-fluid avatar-xs rounded-circle me-1" title="<?php echo $_SESSION['first_name'] ?>"> 
                                                        Me

                                                        <?php } ?>
                                                    </td>

                                                    <td class="p-3"><?php echo $row['date_uploaded']; ?></td>

                                                    <td class="p-3 text-center">

                                                        <div class="col-12">
                                                            <a class="text-decoration-none text-primary me-2 edit-button" href="#" data-bs-toggle="modal" data-bs-target="#editinfo<?php echo $row['docu_no']; ?>">
                                                                <i class="mdi mdi-pencil-outline"></i>
                                                            </a>

                                                            <!-- Edit Modal -->
                                                            <div class="modal fade" id="editinfo<?php echo $row['docu_no'];?>" tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered modal-md text-start">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            <h3 class="modal-title" id="modal-title">Edit Document</h3>
                                                                        </div>

                                                                        <div class="modal-body mx-4 pt-0">

                                                                            <form class="needs-validation" method="post" action="../../php/edit-docu.php" enctype="multipart/form-data" novalidate>

                                                                                <input class="form-control" name="docu_no" type="text" value="<?php echo $row['docu_no'] ?>" hidden />
                                                                                <?php
                                                                                    if (!empty($row['file_name'])) { ?>
                                                                                    <div class="row">
                                                                                        <div>
                                                                                            <label class="form-label">File Name</label>
                                                                                            <input class="form-control bg-light" type="text" value="<?php echo $row['file_name'] ?>" readonly disabled />
                                                                                        </div>
                                                                                    </div>
                                                                                <?php
                                                                                }
                                                                                ?>

                                                                                <div class="row mt-2">
                                                                                    <div>
                                                                                        <label class="form-label">Display Name</label>
                                                                                        <input class="form-control" name="display_name" type="text" value="<?php echo $row['display_name'] ?>" required />
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row mt-4">
                                                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                                                        <button type="submit" name="edit-docu2" class="btn btn-primary px-5 rounded rounded-3" id="btn-save-event">Edit File</button>
                                                                                    </div>
                                                                                </div>

                                                                            </form>
                                                                        </div>
                                                                    </div> <!-- end modal-content-->
                                                                </div> <!-- end modal dialog-->
                                                            </div>

                                                            <a class="text-decoration-none text-danger delete-button me-2" href="#" data-bs-toggle="modal" data-bs-target="#deletemodal<?php echo $row['docu_no']; ?>">
                                                                <i class="mdi mdi-delete-outline"></i>
                                                            </a>

                                                            <!-- Delete Modal -->
                                                            <div class="modal fade" id="deletemodal<?php echo $row['docu_no'] ?>" tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered modal-md">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header px-4 border-bottom-0 d-block">
                                                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            <h4 class="modal-title" id="modal-title">Delete File</h4>
                                                                        </div>

                                                                        <div class="modal-body mx-4">
                                                                            <form class="needs-validation" method="post" action="../../php/delete-docu.php">
                                                                                
                                                                                <input type="text" name="docu_no" value="<?php echo $row['docu_no'] ?>">
                                                                                <input type="text" name="company" value="<?php echo $_GET['company'] ?>">

                                                                                <div>
                                                                                    <h5>Do you want to delete this client?</h5>
                                                                                </div>

                                                                                <div class="row mt-4">
                                                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                                                        <button name="del_three" type="submit" class="btn btn-danger px-5 rounded-pill">Continue</button>
                                                                                    </div>
                                                                                </div>

                                                                            </form>
                                                                        </div>
                                                                    </div> <!-- end modal-content-->
                                                                </div> <!-- end modal dialog-->
                                                            </div>

                                                            <a class="text-decoration-none text-success me-2" href="../../uploads/documents/<?php echo $row['file_name']?>" title="Download">
                                                            <i class="mdi mdi-arrow-collapse-down"></i>
                                                            </a>
                                                        </div>

                                                    </td>
                                                </tr>

                                            <?php } ?>

                                        </tbody>
                                    </table>
                                
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- Add Documents Modal -->
                        <div class="modal fade" id="add-client" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content">
                                    <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <h3 class="modal-title" id="modal-title">Upload Document</h3>
                                    </div>

                                    <div class="modal-body mx-4 pt-0">
                                        <form class="needs-validation" method="post" action="../../php/upload-document.php" enctype="multipart/form-data" novalidate>
                                            
                                            <div class="row">
                                                <div>
                                                    <input class="form-control" name="comno" type="text" value="<?php echo $_GET['company'] ?>" hidden />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div>
                                                    <label class="form-label">Upload File</label>
                                                    <input class="form-control" name="myfile" type="file" multiple />
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-lg-12 col-sm-12">
                                                    <label class="form-label">Display Name</label>
                                                    <input class="form-control" name="display_name" type="text">
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button type="submit" name="upload-docu" class="btn btn-primary px-5 rounded rounded-3" id="btn-save-event">Upload File</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div> <!-- end modal-content-->
                            </div> <!-- end modal dialog-->
                        </div>

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
        
    </body>
</html>