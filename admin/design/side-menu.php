<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <?php
        $emp_id = $_SESSION['employee_id'];
        $record = mysqli_query($config, "SELECT * FROM employee_info WHERE employee_id = '$emp_id'");
        while ($data = mysqli_fetch_array($record)) { ?>
        <div class="user-box text-center">

            <?php
            if ($data['profile_pic'] != null) { ?>
            <img src="<?php echo "../../uploads/profile/" . $data['profile_pic']; ?>" alt="image" class="rounded-circle img-thumbnail avatar-md" />
            <?php
            }
            elseif ($data['profile_pic'] == null) { ?>
                <img src="../../assets/default_profile.png" alt="image" class="rounded-circle img-thumbnail avatar-md" />
            <?php
            }
            ?>
                <div class="dropdown">
                    <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false">
                        <?php echo $data['first_name']. " " .$data['last_name']; ?>
                    </a>
                    <div class="dropdown-menu user-pro-dropdown">

                        <!-- item-->
                        <a href="nar-profile.php" class="dropdown-item notify-item">
                            <i class="fe-user me-1"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out me-1"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </div>

            <p class="text-muted left-user-info">
                <?php echo $data['position']; ?>
            </p>
        </div>
        <?php
        }
        ?>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>
    
                <li>
                    <a href="nar-dashboard.php">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Apps</li>

                <li>
                    <a href="nar-accounts.php">
                        <i class="mdi mdi-account-outline"></i>
                        <span> Accounts </span>
                    </a>
                </li>

                <li>
                    <a href="nar-applicants.php">
                        <i class="mdi mdi-card-account-details-outline"></i>
                        <span class="badge bg-success rounded-pill float-end">9+</span>
                        <span> Applicants </span>
                    </a>
                </li>

                <li>
                    <a href="nar-clients.php">
                        <i class="mdi mdi-briefcase-variant-outline"></i>
                        <span> Clients </span>
                    </a>
                </li>

                <li>
                    <a href="nar-documents.php">
                        <i class="mdi mdi-file-document-outline"></i>
                        <span> Documents </span>
                    </a>
                </li>

                <li>
                    <a href="nar-payroll.php">
                        <i class="mdi mdi-cash-register"></i>
                        <span> Payroll </span>
                    </a>
                </li>

                <li>
                    <a href="nar-quotations.php">
                        <i class="mdi mdi-account-cash-outline"></i>
                        <span> Quotations </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Management</li>

                <li>
                    <a href="nar-settings.php">
                        <i class="mdi mdi-cog-outline"></i>
                        <span> Settings </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>