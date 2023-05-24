<?php
if (isset($_POST['search'])) {
     $search = $_POST['search'];
?>
<div class="row">
    <?php 
            $logo = mysqli_query($config, "SELECT * FROM quotation, company_profile WHERE (quotation.company_no = company_profile.company_no) AND (display_name LIKE '%$search%' OR quotation_file LIKE '%$search%')");
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
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-quotation<?php echo $data['quotation_no'] ?>">Manage</a>
                        <a class="dropdown-item" href="../../uploads/quotations/<?php echo $data['quotation_file']?>">Download</a>
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-client<?php echo $data['quotation_no'] ?>">Delete</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="../../assets/icon/excel_icon.png" alt="image" class="img-fluid ms-3" />
                </div>

                <h4 class="mt-3 mb-0  text-dark"><?php echo $data['display_name']?></h4>

            </div>
            <div class="card-footer text-body-white bg-white border border-1 d-flex justify-content-center">
                <a href="nar-comments.php?id=<?php echo $data['quotation_no'] ?>" class="text-dark com">
                    <i class="far fa-comment-alt"></i>
                    <span class="badge bg-success rounded-pill float-end ms-3">9+</span>
                    <span class="ms-2 fw-bold">Comment</span>
                </a>
            </div>

        </div>
    </div>
    <!-- end col -->

    <!-- Edit Quotation Modal -->
    <div class="modal fade" id="edit-quotation<?php echo $data['quotation_no'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h3 class="modal-title" id="modal-title">Client Information</h3>
                </div>

                <div class="modal-body mx-4">


                    <input class="form-control" name="company_id" type="text" value="<?php echo $data['company_no'] ?>" hidden>

                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <label class="form-label">Company Name</label>
                            <input class="form-control bg-light" name="company_name" type="text" value="<?php echo $data['company_name'] ?>" disabled>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <label class="form-label">Company Description</label>
                            <input class="form-control bg-light" name="company_desc" type="text" value="<?php echo $data['company_desc'] ?>" disabled>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-4 col-sm-12">
                            <label class="form-label">Branch/Site</label>
                            <input class="form-control bg-light" name="branch_site" type="text" value="<?php echo $data['branch_site'] ?>" disabled>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <label class="form-label">Contact Person</label>
                            <input class="form-control bg-light" name="contact_person" type="text" value="<?php echo $data['contact_person'] ?>" disabled>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <label class="form-label">Contact Number</label>
                            <input class="form-control bg-light" name="contact_no" type="text" value="<?php echo $data['contact_no'] ?>" disabled>
                        </div>
                    </div>
                    <form method="post" action="../../php/edit-quotation.php" enctype="multipart/form-data">
                        <div class="row mt-3 mb-4">
                            <?php
                                $quo_no = $data['quotation_no'];
                                $dname = mysqli_query($config, "SELECT * FROM quotation WHERE quotation_no = '$quo_no'");
                                while ($datas = mysqli_fetch_array($dname)) { ?>
                            <div class="col-lg-12 col-sm-12">
                                <label class="form-label">Display Name</label>
                                <input class="form-control" name="display_name" type="text" value="<?php echo $datas['display_name'] ?>" />
                                <input class="form-control" name="quotation" type="hidden" value="<?php echo $datas['quotation_no'] ?>" />
                            </div>
                            <?php
                                }
                                ?>
                            <div class="col-lg-12 col-sm-12 mt-2">
                                <label class="form-label">Update Quotation</label>
                                <input class="form-control" name="quotation_file" type="file" />
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" name="update" class="btn btn-primary px-5 rounded-pill" id="btn-save-event">Update</button>
                                <button type="button" class="btn btn-danger px-5 rounded-pill" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="delete-client<?php echo $data['quotation_no'] ?>" tabindex="-1">
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
                    <p class="text-muted h4 text-center">Do you really want to delete these? This process cannot be undone.</p>
                    <form class="needs-validation" method="post" action="../../php/delete-quotation.php" enctype="multipart/form-data" novalidate>

                        <input type="hidden" name="quotation_no" value="<?php echo $data['quotation_no'] ?>">

                        <div class="row mt-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" class="btn btn-danger px-4 rounded-pill" id="btn-save-event">Delete</button>
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
            $logo = mysqli_query($config, "SELECT * FROM quotation, company_profile WHERE (quotation.company_no = company_profile.company_no)");
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
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-quotation<?php echo $data['quotation_no'] ?>">Manage</a>
                        <a class="dropdown-item" href="../../uploads/quotations/<?php echo $data['quotation_file']?>">Download</a>
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-client<?php echo $data['quotation_no'] ?>">Delete</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="../../assets/icon/excel_icon.png" alt="image" class="img-fluid ms-3" />
                </div>

                <h4 class="mt-3 mb-0 text-dark"><?php echo $data['display_name']?></h4>

            </div>
            <div class="card-footer text-body-white bg-white border border-1 d-flex justify-content-center">
                <a href="nar-comments.php?id=<?php echo $data['quotation_no'] ?>" class="text-dark com">
                    <i class="far fa-comment-alt"></i>
                    <span class="badge bg-success rounded-pill float-end ms-3">9+</span>
                    <span class="ms-2 fw-bold">Comment</span>
                </a>
            </div>

        </div>
    </div>
    <!-- end col -->

    <!-- Edit Quotation Modal -->
    <div class="modal fade" id="edit-quotation<?php echo $data['quotation_no'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h3 class="modal-title" id="modal-title">Client Information</h3>
                </div>

                <div class="modal-body mx-4">


                    <input class="form-control" name="company_id" type="text" value="<?php echo $data['company_no'] ?>" hidden>

                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <label class="form-label">Company Name</label>
                            <input class="form-control bg-light" name="company_name" type="text" value="<?php echo $data['company_name'] ?>" disabled>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <label class="form-label">Company Description</label>
                            <input class="form-control bg-light" name="company_desc" type="text" value="<?php echo $data['company_desc'] ?>" disabled>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-4 col-sm-12">
                            <label class="form-label">Branch/Site</label>
                            <input class="form-control bg-light" name="branch_site" type="text" value="<?php echo $data['branch_site'] ?>" disabled>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <label class="form-label">Contact Person</label>
                            <input class="form-control bg-light" name="contact_person" type="text" value="<?php echo $data['contact_person'] ?>" disabled>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <label class="form-label">Contact Number</label>
                            <input class="form-control bg-light" name="contact_no" type="text" value="<?php echo $data['contact_no'] ?>" disabled>
                        </div>
                    </div>
                    <form method="post" action="../../php/edit-quotation.php" enctype="multipart/form-data">
                        <div class="row mt-3 mb-4">
                            <?php
                                $quo_no = $data['quotation_no'];
                                $dname = mysqli_query($config, "SELECT * FROM quotation WHERE quotation_no = '$quo_no'");
                                while ($datas = mysqli_fetch_array($dname)) { ?>
                            <div class="col-lg-12 col-sm-12">
                                <label class="form-label">Display Name</label>
                                <input class="form-control" name="display_name" type="text" value="<?php echo $datas['display_name'] ?>" />
                                <input class="form-control" name="quotation" type="hidden" value="<?php echo $datas['quotation_no'] ?>" />
                            </div>
                            <?php
                                }
                                ?>
                            <div class="col-lg-12 col-sm-12 mt-2">
                                <label class="form-label">Update Quotation</label>
                                <input class="form-control" name="quotation_file" type="file" />
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" name="update" class="btn btn-primary px-5 rounded-pill" id="btn-save-event">Update</button>
                                <button type="button" class="btn btn-danger px-5 rounded-pill" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="delete-client<?php echo $data['quotation_no'] ?>" tabindex="-1">
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
                    <p class="text-muted h4 text-center">Do you really want to delete these? This process cannot be undone.</p>
                    <form class="needs-validation" method="post" action="../../php/delete-quotation.php" enctype="multipart/form-data" novalidate>

                        <input type="hidden" name="quotation_no" value="<?php echo $data['quotation_no'] ?>">

                        <div class="row mt-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" class="btn btn-danger px-4 rounded-pill" id="btn-save-event">Delete</button>
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
