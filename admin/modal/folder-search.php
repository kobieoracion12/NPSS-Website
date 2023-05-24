<?php
if (isset($_POST['search'])) {
     $search = $_POST['search'];
?>
<div class="row">
    <?php
        $folder_docu_no = $_GET['folder'];
        $sql = mysqli_query($config, "SELECT * FROM folder_docu_archive WHERE folder_docu_no = '$folder_docu_no' AND (display_name LIKE '%$search%' OR file_name LIKE '%$search%')");
        while($row = mysqli_fetch_array($sql)) {

            $id = $row['docu_id'];
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
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-docu<?php echo $row['docu_id'] ?>">Edit</a>
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-docu<?php echo $row['docu_id'] ?>">Delete</a>
                        </div>

                        <?php } else { ?>

                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-docu<?php echo $row['docu_id'] ?>">Edit</a>
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-docu<?php echo $row['docu_id'] ?>">Delete</a>
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
                        $get = mysqli_query($config, "SELECT * FROM file_access, position WHERE file_access.position_no = position.position_no AND folder_docu_no = '$id'");
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
        <div class="modal fade" id="delete-docu<?php echo $row['docu_id'] ?>" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header px-4 border-bottom-0 d-block">
                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h4 class="modal-title" id="modal-title">Delete File</h4>
                    </div>

                    <div class="modal-body mx-4">
                        <form class="needs-validation" method="post" action="../../php/delete-docu.php" enctype="multipart/form-data" novalidate>
                            <?php
                            $folder_no = $_GET['folder'];
                            ?>
                            <input type="text" name="docu_id" value="<?php echo $row['docu_id'] ?>">
                            <input type="hidden" name="folder_no" value="<?php echo $folder_no ?>">
                            <div>
                                <h5>Do you want to delete this client?</h5>
                            </div>

                            <div class="row mt-4">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <button name="del_two" type="submit" class="btn btn-danger px-5 rounded-pill" id="btn-save-event">Continue</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div> <!-- end modal-content-->
            </div> <!-- end modal dialog-->
        </div>

        <!-- Edit Modal -->
        <div class="modal fade" id="edit-docu<?php echo $row['docu_id'] ?>" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h3 class="modal-title" id="modal-title">Edit Document</h3>
                    </div>

                    <div class="modal-body mx-4">
                        <form class="needs-validation" method="post" action="../../php/edit-docu.php" enctype="multipart/form-data" novalidate>
                            <?php
                            $folder_no = $_GET['folder'];
                            ?>
                        <input class="form-control" name="docu_id" type="text" value="<?php echo $row['docu_id'] ?>" hidden />
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
                                    <input type="hidden" name="folder_no" value="<?php echo $folder_no ?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="form-label">User Access</label>

                                <?php
                                $docu = $row['docu_id'];
                                    $fetch_pos = mysqli_query($config, "SELECT * FROM file_access WHERE folder_docu_no = '$docu'");
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
                                    <button type="submit" name="edit-doc" class="btn btn-primary px-5 rounded rounded-3" id="btn-save-event">Edit File</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div> <!-- end modal-content-->
            </div> <!-- end modal dialog-->
        </div>

    <?php } ?>

</div>
<?php
}
else { ?>
<div class="row">
<?php
    $folder_docu_no = $_GET['folder'];
    $sql = mysqli_query($config, "SELECT * FROM folder_docu_archive WHERE folder_docu_no = $folder_docu_no");
    while($row = mysqli_fetch_array($sql)) {

        $id = $row['docu_id'];
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
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-docu<?php echo $row['docu_id'] ?>">Edit</a>
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-docu<?php echo $row['docu_id'] ?>">Delete</a>
                    </div>

                    <?php } else { ?>

                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-docu<?php echo $row['docu_id'] ?>">Edit</a>
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-docu<?php echo $row['docu_id'] ?>">Delete</a>
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
                    $get = mysqli_query($config, "SELECT * FROM file_access, position WHERE file_access.position_no = position.position_no AND folder_docu_no = '$id'");
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
    <div class="modal fade" id="delete-docu<?php echo $row['docu_id'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header px-4 border-bottom-0 d-block">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title" id="modal-title">Delete File</h4>
                </div>

                <div class="modal-body mx-4">
                    <form class="needs-validation" method="post" action="../../php/delete-docu.php" enctype="multipart/form-data" novalidate>
                        <?php
                        $folder_no = $_GET['folder'];
                        ?>
                        <input type="text" name="docu_id" value="<?php echo $row['docu_id'] ?>">
                        <input type="hidden" name="folder_no" value="<?php echo $folder_no ?>">
                        <div>
                            <h5>Do you want to delete this client?</h5>
                        </div>

                        <div class="row mt-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button name="del_two" type="submit" class="btn btn-danger px-5 rounded-pill" id="btn-save-event">Continue</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="edit-docu<?php echo $row['docu_id'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h3 class="modal-title" id="modal-title">Edit Document</h3>
                </div>

                <div class="modal-body mx-4">
                    <form class="needs-validation" method="post" action="../../php/edit-docu.php" enctype="multipart/form-data" novalidate>
                        <?php
                        $folder_no = $_GET['folder'];
                        ?>
                    <input class="form-control" name="docu_id" type="text" value="<?php echo $row['docu_id'] ?>" hidden />
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
                                <input type="hidden" name="folder_no" value="<?php echo $folder_no ?>">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label class="form-label">User Access</label>

                            <?php
                            $docu = $row['docu_id'];
                                $fetch_pos = mysqli_query($config, "SELECT * FROM file_access WHERE folder_docu_no = '$docu'");
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
                                <button type="submit" name="edit-doc" class="btn btn-primary px-5 rounded rounded-3" id="btn-save-event">Edit File</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
    </div>

<?php } ?>

</div>
<?php
}
?>