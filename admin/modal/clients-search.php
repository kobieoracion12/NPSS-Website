<?php
if (isset($_POST['search'])) {
     $search = $_POST['search']; ?>
<div class="row">
    <?php 
        $logo = mysqli_query($config, "SELECT * FROM company_profile WHERE (company_name LIKE '%$search%' OR branch_site LIKE '%$search%' OR contact_person LIKE '%$search%')");
        while($data = mysqli_fetch_array($logo)) { 
    ?>
    <div class="card-group col-xl-3 col-md-6">

        <div class="card rounded-lg">
            <div class="card-body p-4">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-client<?php echo $data['company_no'] ?>">Edit</a>
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-client<?php echo $data['company_no'] ?>">Delete</a>
                        <a href="nar-manage.php?company=<?php echo $data['company_no'] ?>" target="_blank" class="dropdown-item">Manage</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="<?php echo "../../uploads/logo/" . $data['company_logo']; ?>" alt="image" class="img-fluid" />
                </div>

                <h3 class="mt-3 mb-0"><?php echo $data['company_name']?></h3>
                <h6 class="mt-0 mb-0 text-muted font-weight-light mt-1"><?php echo $data['branch_site']?></h6>

            </div>
        </div>
    </div>
    <!-- end col -->

    <!-- Edit Client Modal -->
    <div class="modal fade" id="edit-client<?php echo $data['company_no'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h3 class="modal-title" id="modal-title">Client Information</h3>
                </div>

                <div class="modal-body mx-4">
                    <form method="post" action="../../php/edit-client.php" enctype="multipart/form-data">

                        <input class="form-control" name="company_id" type="text" value="<?php echo $data['company_no'] ?>" hidden>

                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <label class="form-label">Company Name</label>
                                <input class="form-control" name="company_name" type="text" value="<?php echo $data['company_name'] ?>" required>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <label class="form-label">Company Description</label>
                                <input class="form-control" name="company_desc" type="text" value="<?php echo $data['company_desc'] ?>" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label">Branch/Site</label>
                                <input class="form-control" name="branch_site" type="text" value="<?php echo $data['branch_site'] ?>" required>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label">Contact Person</label>
                                <input class="form-control" name="contact_person" type="text" value="<?php echo $data['contact_person'] ?>" required>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label">Contact Number</label>
                                <input class="form-control" name="contact_no" type="text" value="<?php echo $data['contact_no'] ?>" required>
                            </div>
                        </div>

                        <div class="row mt-3 mb-4">
                            <div class="col-lg-4 col-sm-12 d-flex justify-content-center my-auto">
                                <img src="<?php echo "../../uploads/logo/" . $data['company_logo'] ?>" class="img-fluid" required />
                            </div>

                            <div class="col-lg-8 col-sm-12 my-auto">
                                <label class="form-label">Company Logo</label>
                                <input class="form-control" name="company_logo" type="file" />
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" name="edit-client" class="btn btn-primary px-5 rounded-pill" id="btn-save-event">Edit</button>
                                <button type="button" class="btn btn-danger px-5 rounded-pill" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="delete-client<?php echo $data['company_no'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header  flex-column border-bottom-0">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="icon-box mt-2">
                        <i class="fas fa-trash-alt text-center text-danger fa-3x"></i>
                    </div>
                </div>

                <div class="modal-body mx-4">
                    <h3 class="text-center mb-1">Are you sure?</h3>
                    <p class="text-muted h4 text-center">Do you really want to delete these client? This process cannot be undone.</p>
                    <form class="needs-validation" method="post" action="../../php/delete-client.php" enctype="multipart/form-data" novalidate>

                        <input type="hidden" name="company_no" value="<?php echo $data['company_no'] ?>">

                        <div class="row mt-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" class="btn btn-danger rounded-pill rounded-pill px-4 py-1" id="btn-save-event">Delete</button>
                                <button type="button" class="btn btn-white rounded-pill fw-bold px-4 py-1" data-bs-dismiss="modal">Cancel</button>
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
		        $logo = mysqli_query($config, "SELECT * FROM company_profile");
		        while($data = mysqli_fetch_array($logo)) { 
		    ?>
    <div class="card-group col-xl-3 col-md-6">

        <div class="card rounded-lg">
            <div class="card-body p-4">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-client<?php echo $data['company_no'] ?>">Edit</a>
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-client<?php echo $data['company_no'] ?>">Delete</a>
                        <a href="nar-manage.php?company=<?php echo $data['company_no'] ?>" target="_blank" class="dropdown-item">Manage</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="<?php echo "../../uploads/logo/" . $data['company_logo']; ?>" alt="image" class="img-fluid" />
                </div>

                <h3 class="mt-3 mb-0"><?php echo $data['company_name']?></h3>
                <h6 class="mt-0 mb-0 text-muted font-weight-light mt-1"><?php echo $data['branch_site']?></h6>

            </div>
        </div>
    </div>
    <!-- end col -->

    <!-- Edit Client Modal -->
    <div class="modal fade" id="edit-client<?php echo $data['company_no'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h3 class="modal-title" id="modal-title">Client Information</h3>
                </div>

                <div class="modal-body mx-4">
                    <form method="post" action="../../php/edit-client.php" enctype="multipart/form-data">

                        <input class="form-control" name="company_id" type="text" value="<?php echo $data['company_no'] ?>" hidden>

                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <label class="form-label">Company Name</label>
                                <input class="form-control" name="company_name" type="text" value="<?php echo $data['company_name'] ?>" required>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <label class="form-label">Company Description</label>
                                <input class="form-control" name="company_desc" type="text" value="<?php echo $data['company_desc'] ?>" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label">Branch/Site</label>
                                <input class="form-control" name="branch_site" type="text" value="<?php echo $data['branch_site'] ?>" required>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label">Contact Person</label>
                                <input class="form-control" name="contact_person" type="text" value="<?php echo $data['contact_person'] ?>" required>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label">Contact Number</label>
                                <input class="form-control" name="contact_no" type="text" value="<?php echo $data['contact_no'] ?>" required>
                            </div>
                        </div>

                        <div class="row mt-3 mb-4">
                            <div class="col-lg-4 col-sm-12 d-flex justify-content-center my-auto">
                                <img src="<?php echo "../../uploads/logo/" . $data['company_logo'] ?>" class="img-fluid" required />
                            </div>

                            <div class="col-lg-8 col-sm-12 my-auto">
                                <label class="form-label">Company Logo</label>
                                <input class="form-control" name="company_logo" type="file" />
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" name="edit-client" class="btn btn-primary px-5 rounded-pill" id="btn-save-event">Edit</button>
                                <button type="button" class="btn btn-danger px-5 rounded-pill" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="delete-client<?php echo $data['company_no'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header  flex-column border-bottom-0">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="icon-box mt-2">
                        <i class="fas fa-trash-alt text-center text-danger fa-3x"></i>
                    </div>
                </div>

                <div class="modal-body mx-4">
                    <h3 class="text-center mb-1">Are you sure?</h3>
                    <p class="text-muted h4 text-center">Do you really want to delete these client? This process cannot be undone.</p>
                    <form class="needs-validation" method="post" action="../../php/delete-client.php" enctype="multipart/form-data" novalidate>

                        <input type="hidden" name="company_no" value="<?php echo $data['company_no'] ?>">


                        <div class="row mt-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" class="btn btn-danger  fw-bold px-4 py-1 rounded-pill" id="btn-save-event">Delete</button>
                                <button type="button" class="btn btn-white rounded-pill fw-bold px-4 py-1" data-bs-dismiss="modal">Cancel</button>
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
