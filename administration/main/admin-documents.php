<?php
include('../../php/database.php');
include('../../php/access.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Documents | NAR Power System Specialists Corp.</title>
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
                                        <div class="col-xl-2 col-md-12">
                                            <button class="btn btn-warning text-white rounded" data-bs-toggle="modal" data-bs-target="#upload-docu">
                                                <i class="mdi mdi-upload me-1"></i>Upload Document
                                            </button>
                                        </div>

                                        <div class="col-xl-2 col-md-12">
                                            <button class="btn btn-warning text-white rounded" data-bs-toggle="modal" data-bs-target="#add-folder">
                                                <i class="mdi mdi-folder me-1"></i>New Folder
                                            </button>
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

                        <!-- Upload Document Modal -->
                        <div class="modal fade" id="upload-docu" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <h3 class="modal-title" id="modal-title">Upload File</h3>
                                    </div>

                                    <div class="modal-body mx-4">
                                        <form class="needs-validation" method="post" action="../../php/upload-document.php" enctype="multipart/form-data" novalidate>
                                            
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

                                            <div class="row mt-3">
                                                <label class="form-label">User Access</label>

                                                <?php
                                                    $fetch = mysqli_query($config, "SELECT * FROM position");
                                                    while($row = mysqli_fetch_array($fetch)) {
                                                ?>
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="<?php echo $row['position_no'] ?>" name="access[]">
                                                        <label class="form-check-label">
                                                            <?php echo $row['position_name'] ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <?php } ?>
                                                
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

                        <!-- Add Folder Modal -->
                        <div class="modal fade" id="add-folder" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <h3 class="modal-title" id="modal-title">New Folder</h3>
                                    </div>

                                    <div class="modal-body mx-4">
                                        <form class="needs-validation" method="post" action="../../php/add-folder.php" enctype="multipart/form-data" novalidate>

                                            <div class="row">
                                                <div>
                                                    <label class="form-label">Folder Name</label>
                                                    <input class="form-control" name="folder-name" type="text" required />
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <label class="form-label">User Access</label>

                                                <?php
                                                    $fetch = mysqli_query($config, "SELECT * FROM position");
                                                    while($row = mysqli_fetch_array($fetch)) {
                                                ?>
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="<?php echo $row['0'] ?>" id="<?php echo $row['0'] ?>" name="access[]">
                                                        <label class="form-check-label" for="<?php echo $row['0'] ?>">
                                                            <?php echo $row['1'] ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <?php } ?>
                                                
                                            </div>

                                            <div class="row mt-3">
                                                <div class="d-grid gap-2 w-100">
                                                    <button type="submit" name="add-folder" class="btn btn-primary px-5 rounded rounded-3" id="btn-save-event">Add Folder</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div> <!-- end modal-content-->
                            </div> <!-- end modal dialog-->
                        </div>

                        <!-- Cards -->
                        <div class="row">
                            <?php
                                $sql = mysqli_query($config, "SELECT * FROM docu_archive");
                                while($row = mysqli_fetch_array($sql)) {

                                    $id = $row['docu_no'];
                                    $date = date_create($row['date_uploaded']);
                                ?>	
                                
                                <div class="card-group col-xl-3 col-md-6">
                                    <div class="card rounded-lg mb-3">

                                        <div class="card-body p-4">

                                            <div class="dropdown float-end">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>

                                                <?php if(empty($row['file_name'])) { ?>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-docu<?php echo $row['docu_no'] ?>">Edit</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-docu<?php echo $row['docu_no'] ?>">Delete</a>
                                                </div>

                                                <?php } else { ?>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-docu<?php echo $row['docu_no'] ?>">Edit</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-docu<?php echo $row['docu_no'] ?>">Delete</a>
                                                    <a class="dropdown-item" href="../../uploads/documents/<?php echo $row['file_name']?>">Download</a>
                                                </div>

                                                <?php } ?>

                                            </div>

                                            <div class="col-md-4">
                                                <?php
                                                    if($row['display_icon'] != "") {
                                                ?>
                                                    <img src="<?php echo "../../assets/icon/" . $row['display_icon']; ?>" alt="image" class="img-fluid mb-0" />

                                                <?php } elseif($row['display_type'] == "xlsx" || $row['display_type'] == "cvs") { ?>
                                                    <img src="../../assets/icon/excel_icon.png" alt="image" class="img-fluid mb-0" />

                                                <?php } elseif($row['display_type'] == "pdf") { ?>
                                                    <img src="../../assets/icon/pdf_icon.png" alt="image" class="img-fluid mb-0" />

                                                <?php } elseif($row['display_type'] == "pptx" || $row['display_type'] == "ppt" || $row['display_type'] == "pptm") { ?>
                                                    <img src="../../assets/icon/ppt_icon.png" alt="image" class="img-fluid mb-0" />

                                                <?php } elseif($row['display_type'] == "docx" || $row['display_type'] == "doc") { ?>
                                                    <img src="../../assets/icon/word_icon.png" alt="image" class="img-fluid mb-0" />

                                                <?php } else { ?>
                                                    <img src="../../assets/icon/unknown_icon.png" alt="image" class="img-fluid mb-0" />
                                                <?php } ?>

                                            </div>

                                            <?php if(empty($row['file_name'])) { ?>
                                            <a href="nar-folder.php?folder=<?php echo $row['docu_no'] ?>" class="mt-2 mb-0"><h3><?php echo $row['display_name'] ?></h3></a>
                                            <?php } else { ?>
                                            <h3 class="mt-2 mb-0"><?php echo $row['display_name'] ?></h3>
                                            <?php } ?>
                                            <h6 class="mt-0 mb-0 text-muted fw-light mt-1"><?php echo date_format($date, "M d, Y") ?><br><?php echo date_format($date, "h:i A") ?></h6>

                                            <?php
                                                $get = mysqli_query($config, "SELECT * FROM file_access, position WHERE file_access.position_no = position.position_no AND docu_no = '$id'");
                                                while($access = mysqli_fetch_array($get)) { 

                                                    $position = $access['position_name'];
                                                
                                                    $get2 = mysqli_query($config, "SELECT first_name, profile_pic FROM employee_info WHERE position = '$position'");
                                                    
                                                    while($access2 = mysqli_fetch_array($get2)) { 
                                                        
                                                        $name = $access2['first_name'];
                                                        $profile = $access2['profile_pic'];
                                                        
                                                ?>
                                                    <?php if(!empty($profile)) { ?>
                                                        <img src="<?php echo "../../uploads/profile/" . $profile ?>" class="img-fluid avatar-xs rounded-circle mt-2" title="<?php echo $name ?>">
                                                    <?php } else { ?>
                                                           <img src="../../assets/default_profile.png" class="img-fluid avatar-xs rounded-circle mt-2" title="<?php echo $name ?>"> 
                                                    <?php } ?>
                                            <?php } } ?>
                                    
                                        </div>

                                    </div>
                                </div><!-- end col -->

                                <!-- Delete Modal -->
                                <div class="modal fade" id="delete-docu<?php echo $row['docu_no'] ?>" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header px-4 border-bottom-0 d-block">
                                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                                <h4 class="modal-title" id="modal-title">Delete File</h4>
                                            </div>

                                            <div class="modal-body mx-4">
                                                <form class="needs-validation" method="post" action="../../php/delete-docu.php" enctype="multipart/form-data" novalidate>
                                                    
                                                    <input type="text" name="docu_no" value="<?php echo $row['docu_no'] ?>">
                                                    <div>
                                                        <h5>Do you want to delete this client?</h5>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                            <button name="del_one" type="submit" class="btn btn-danger px-5 rounded-pill" id="btn-save-event">Continue</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div> <!-- end modal-content-->
                                    </div> <!-- end modal dialog-->
                                </div>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="edit-docu<?php echo $row['docu_no'] ?>" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                                <h3 class="modal-title" id="modal-title">Edit Document</h3>
                                            </div>

                                            <div class="modal-body mx-4">
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
                                                    <div class="row mt-3">
                                                        <label class="form-label">User Access</label>

                                                        <?php
                                                        $docu = $row['docu_no'];
                                                            $fetch_pos = mysqli_query($config, "SELECT * FROM file_access WHERE docu_no = '$docu'");
                                                                $fetch = mysqli_query($config, "SELECT * FROM position");
                                                                while($row = mysqli_fetch_array($fetch)) {
                                                            ?>
                                                        <div class="col-lg-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="access[]" value="<?php echo $row['position_no'] ?>"
                                                                <?php 
                                                                foreach($fetch_pos as $positionno){
                                                                    if ($positionno['position_no'] === $row['position_no']) {
                                                                         echo "checked='checked'";
                                                                    }
                                                                }
                                                                ?>>
                                                                <label class="form-check-label" for="<?php echo $row['position_no'] ?>">
                                                                    <?php echo $row['position_name'] ?>
                                                                </label>
                                                                
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                            <button type="submit" name="edit-docu" class="btn btn-primary px-5 rounded rounded-3" id="btn-save-event">Edit File</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div> <!-- end modal-content-->
                                    </div> <!-- end modal dialog-->
                                </div>

                            <?php } ?>

                        </div>
                        <!-- end row -->

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