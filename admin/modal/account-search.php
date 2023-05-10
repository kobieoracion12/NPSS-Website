<?php
if (isset($_POST['search'])) {
     $search = $_POST['search'];
?>
<div class="row">
    <?php
       
        $emp_id = $_SESSION['employee_id'];
        $sql = mysqli_query($config, "SELECT * FROM employee_info WHERE (first_name LIKE '%$search%' OR last_name LIKE '%$search%' OR middle_name LIKE '%$search%') AND (employee_id != '$emp_id') ORDER BY account_id DESC");
        while($row = mysqli_fetch_array($sql)) {
    ?>
    <div class="card-group col-xl-4 col-md-6 mt-2 ">
        <div class="card" >
            <div class="card-body text-center">
                <div class="col-md-4 mx-auto d-block">
                    <?php
                    if ($row['profile_pic'] != null) { ?>
                    <img src="<?php echo "../../uploads/profile/" . $row['profile_pic']; ?>" alt="image" class="rounded-circle avatar-xl" />
                    <?php
                    }
                    elseif ($row['profile_pic'] == null) { ?>
                        <img src="../../assets/default_profile.png" alt="image" class="rounded-circle avatar-xl" />
                    <?php
                    }
                    ?>
                </div>

                <p class="text-muted mt-3"><?php echo $row['job_desc'] ?></p>
                <h4 class="header-title mb-0"><?php echo $row['first_name'], " ", $row['last_name']; ?></h4>
                <h5 class="mt-0 text-primary"><?php echo $row['position'] ?></h5>
                <p class="mb-0"><?php echo $row['contact_no'] ?></p>
                <p class="mb-0"><?php echo $row['email_add'] ?></p>
                <p class="mb-0"><?php echo $row['branch_site'] ?></p>
                
                <div class="row g-2">
                    <div class="col-xl-6 col-md-12">
                        <button class="w-100 btn btn-warning text-white rounded-pill mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['employee_id'] ?>">Edit Profile</button>    
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <button class="w-100 btn btn-danger text-white rounded-pill mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#delete<?php echo $row['employee_id'] ?>">Delete</button>    
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="edit<?php echo $row['employee_id'] ?>" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h3 class="modal-title" id="modal-title">Edit Profile</h3>
                </div>

                <div class="modal-body px-4 pb-4 pt-0 mx-4">
                    <form class="needs-validation" method="post" action="../../php/edit-account.php" enctype="multipart/form-data" novalidate>
                        <div class="row mb-3">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="mb-1">First Name</label>
                                    <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ?>">
                                    <input type="text" name="first_name" class="form-control" value="<?php echo $row['first_name'] ?>" required>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group ">
                                    <label class="mb-1">Middle Name</label>
                                    <input type="text" name="middle_name" class="form-control" value="<?php echo $row['middle_name'] ?>">
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group ">
                                    <label class="mb-1">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" value="<?php echo $row['last_name'] ?>" required>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group ">
                                    <label class="mb-1">Suffix</label>
                                    <input type="text" name="given_suffix" class="form-control" value="<?php echo $row['given_suffix'] ?>">
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                <div class="form-group">
                                    <label class="mb-1">Address</label>
                                    <textarea type="text" name="given_address" class="form-control" rows="1" required><?php echo $row['given_address'] ?></textarea>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="mb-1">Contact Number</label>
                                    <input type="text" name="contact_no" class="form-control" value="<?php echo $row['contact_no'] ?>">
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group mb-2">
                                    <label class="mb-1">Birth Date</label>
                                    <input type="date" name="birth_date" class="form-control" value="<?php echo date('Y-m-d',strtotime($row["birth_date"])) ?>" required>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                                <div class="form-group">
                                    <label class="mb-1">Position</label>
                                    <input type="text" name="position" class="form-control" value="<?php echo $row['position'] ?>" required>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group mb-2">
                                    <label class="mb-1">Email Address</label>
                                    <input type="text" name="email_add" class="form-control" value="<?php echo $row['email_add'] ?>"  required>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                                <div class="form-group">
                                    <label class="mb-1">Branch/Site</label>
                                    <select class="form-select" name="branch_site" aria-label="Default select example" required>
                                        <option value="Antipolo" selected>Antipolo</option>
                                    </select>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="form-group">
                                <label class="mb-1">Job Description</label>
                                <textarea type="text" name="job_desc" class="form-control" rows="4" required><?php echo $row['job_desc'] ?></textarea>
                                <div class="invalid-feedback">Please fill in this field</div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="mb-1 text-center">Profile Picture</label>
                                    <input name="profile_pic" id="profile_pic" class="form-control" type="file" /> 
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="mb-1 text-center">Upload Resume</label>
                                    <input name="uploaded_cv" id="uploaded_cv" class="form-control" type="file" /> 
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" name="register_user" class="btn btn-success px-5 rounded-pill" id="btn-save-event">Save</button>
                                <button type="button" class="btn btn-danger px-5 rounded-pill" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="delete<?php echo $row['employee_id'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header px-4 border-bottom-0 d-block">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title" id="modal-title">Delete Client</h4>
                </div>

                <div class="modal-body mx-4">
                    <form class="needs-validation" method="post" action="../../php/delete-account.php" enctype="multipart/form-data" novalidate>
                        
                        <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ?>">
                        <div>
                            <h5>Do you want to delete this client?</h5>
                        </div>

                        <div class="row mt-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" class="btn btn-danger px-5 rounded-pill" id="delete-account">Delete</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
    </div>


    <?php } ?>
</div>
<?php }
else { ?>
    <div class="row">
    <?php
        $emp_id = $_SESSION['employee_id'];
        $sql = mysqli_query($config, "SELECT * FROM employee_info WHERE employee_id != '$emp_id' ORDER BY account_id DESC");
        while($row = mysqli_fetch_array($sql)) {
    ?>

    <div class="card-group col-xl-4 col-md-6 mt-2 ">
        <div class="card" >
            <div class="card-body text-center">
                <div class="col-md-4 mx-auto d-block">
                    <?php
                    if ($row['profile_pic'] != null) { ?>
                    <img src="<?php echo "../../uploads/profile/" . $row['profile_pic']; ?>" alt="image" class="rounded-circle avatar-xl" />
                    <?php
                    }
                    elseif ($row['profile_pic'] == null) { ?>
                        <img src="../../assets/default_profile.png" alt="image" class="rounded-circle avatar-xl" />
                    <?php
                    }
                    ?>
                </div>

                <p class="text-muted mt-3"><?php echo $row['job_desc'] ?></p>
                <h4 class="header-title mb-0"><?php echo $row['first_name'], " ", $row['last_name']; ?></h4>
                <h5 class="mt-0 text-primary"><?php echo $row['position'] ?></h5>
                <p class="mb-0"><?php echo $row['contact_no'] ?></p>
                <p class="mb-0"><?php echo $row['email_add'] ?></p>
                <p class="mb-0"><?php echo $row['branch_site'] ?></p>
                
                <div class="row g-2">
                    <div class="col-xl-6 col-md-12">
                        <button class="w-100 btn btn-warning text-white rounded-pill mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['employee_id'] ?>">Edit Profile</button>    
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <button class="w-100 btn btn-danger text-white rounded-pill mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#delete<?php echo $row['employee_id'] ?>">Delete</button>    
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="edit<?php echo $row['employee_id'] ?>" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h3 class="modal-title" id="modal-title">Edit Profile</h3>
                </div>

                <div class="modal-body px-4 pb-4 pt-0 mx-4">
                    <form class="needs-validation" method="post" action="../../php/edit-account.php" enctype="multipart/form-data" novalidate>
                        <div class="row mb-3">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="mb-1">First Name</label>
                                    <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ?>">
                                    <input type="text" name="first_name" class="form-control" value="<?php echo $row['first_name'] ?>" required>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group ">
                                    <label class="mb-1">Middle Name</label>
                                    <input type="text" name="middle_name" class="form-control" value="<?php echo $row['middle_name'] ?>">
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group ">
                                    <label class="mb-1">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" value="<?php echo $row['last_name'] ?>" required>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group ">
                                    <label class="mb-1">Suffix</label>
                                    <input type="text" name="given_suffix" class="form-control" value="<?php echo $row['given_suffix'] ?>">
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                <div class="form-group">
                                    <label class="mb-1">Address</label>
                                    <textarea type="text" name="given_address" class="form-control" rows="1" required><?php echo $row['given_address'] ?></textarea>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="mb-1">Contact Number</label>
                                    <input type="text" name="contact_no" class="form-control" value="<?php echo $row['contact_no'] ?>">
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group mb-2">
                                    <label class="mb-1">Birth Date</label>
                                    <input type="date" name="birth_date" class="form-control" value="<?php echo date('Y-m-d',strtotime($row["birth_date"])) ?>" required>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                                <div class="form-group">
                                    <label class="mb-1">Position</label>
                                    <input type="text" name="position" class="form-control" value="<?php echo $row['position'] ?>" required>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group mb-2">
                                    <label class="mb-1">Email Address</label>
                                    <input type="text" name="email_add" class="form-control" value="<?php echo $row['email_add'] ?>"  required>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                                <div class="form-group">
                                    <label class="mb-1">Branch/Site</label>
                                    <select class="form-select" name="branch_site" aria-label="Default select example" required>
                                        <option value="Antipolo" selected>Antipolo</option>
                                    </select>
                                    <div class="invalid-feedback">Please fill in this field</div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="form-group">
                                <label class="mb-1">Job Description</label>
                                <textarea type="text" name="job_desc" class="form-control" rows="4" required><?php echo $row['job_desc'] ?></textarea>
                                <div class="invalid-feedback">Please fill in this field</div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="mb-1 text-center">Profile Picture</label>
                                    <input name="profile_pic" id="profile_pic" class="form-control" type="file" /> 
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="mb-1 text-center">Upload Resume</label>
                                    <input name="uploaded_cv" id="uploaded_cv" class="form-control" type="file" /> 
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" name="register_user" class="btn btn-success px-5 rounded-pill" id="btn-save-event">Save</button>
                                <button type="button" class="btn btn-danger px-5 rounded-pill" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="delete<?php echo $row['employee_id'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header px-4 border-bottom-0 d-block">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title" id="modal-title">Delete Client</h4>
                </div>

                <div class="modal-body mx-4">
                    <form class="needs-validation" method="post" action="../../php/delete-account.php" enctype="multipart/form-data" novalidate>
                        
                        <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ?>">
                        <div>
                            <h5>Do you want to delete this client?</h5>
                        </div>

                        <div class="row mt-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" class="btn btn-danger px-5 rounded-pill" id="delete-account">Delete</button>
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