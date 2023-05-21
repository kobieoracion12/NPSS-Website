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
                        <a href="finance-profile.php" class="dropdown-item notify-item">
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
                    <a href="finance-documents.php">
                        <i class="mdi mdi-file-document-outline"></i>
                        <span> Documents </span>
                    </a>
                </li>

                <li>
                    <a href="finance-payroll.php?sort=active">
                        <i class="mdi mdi-cash-register"></i>
                        <span> Payroll </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Management</li>

                <li>
                    <a href="finance-settings.php">
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