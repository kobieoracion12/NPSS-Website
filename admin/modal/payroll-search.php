<?php
if (isset($_POST['search'])) {
     $search = $_POST['search'];
?>
<div id="main-nano-wrapper" class="nano">
    <div class="nano-content h-100" data-simplebar>

    <?php if(isset($_GET['sort'])) { ?>

        <div>
            <?php
                if($_GET['sort'] == "active") {
                    $sql = mysqli_query($config, "SELECT * FROM employee_info WHERE status = 'Active' AND (position LIKE '%$search%' OR first_name LIKE '%$search%' OR middle_name LIKE '%$search%' OR last_name LIKE '%$search%') ORDER BY position ASC");
                    while($row = mysqli_fetch_array($sql)) {
            ?>

            <!-- Active -->
            <ul class="message-list">
                <a href="nar-payroll-system.php?uid=<?php echo $row['employee_id'] ?>">
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <?php echo $row['account_id'] ?>
                            
                            <p class="title">
                                <?php echo $row['position'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $row['last_name'];
                                    echo ", ";
                                    echo $row['first_name'];
                                    echo " ";
                                    echo $row['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date"><?php echo $row['branch_site'] ?></div>
                        </div>
                    </li>
                </a>
                <?php } ?>
            </ul>

            <?php } 
                elseif($_GET['sort'] == "directors") { 
                    $sql2 = mysqli_query($config, "SELECT * FROM employee_info WHERE emp_stat = 'Director' AND (position LIKE '%$search%' OR first_name LIKE '%$search%' OR middle_name LIKE '%$search%' OR last_name LIKE '%$search%') ORDER BY last_name ASC");
                    while($row2 = mysqli_fetch_array($sql2)) {
            ?>

            <!-- Director -->
            <ul class="message-list">
                <a href="nar-payroll-system.php?uid=<?php echo $row2['employee_id'] ?>">
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <?php echo $row2['account_id'] ?>
                            
                            <p class="title">
                                <?php echo $row2['position'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $row2['last_name'];
                                    echo ", ";
                                    echo $row2['first_name'];
                                    echo " ";
                                    echo $row2['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date"><?php echo $row2['branch_site'] ?></div>
                        </div>
                    </li>
                </a>        
                <?php } ?>
            </ul>

            <?php } 
                elseif($_GET['sort'] == "household") { 
                    $sql3 = mysqli_query($config, "SELECT * FROM employee_info WHERE emp_stat = 'Household' AND (position LIKE '%$search%' OR first_name LIKE '%$search%' OR middle_name LIKE '%$search%' OR last_name LIKE '%$search%') ORDER BY last_name ASC");
                    while($row3 = mysqli_fetch_array($sql3)) {
            ?>

            <!-- Household -->
            <ul class="message-list">
                <a href="nar-payroll-system.php?uid=<?php echo $row3['employee_id'] ?>">
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <?php echo $row3['account_id'] ?>
                            
                            <p class="title">
                                <?php echo $row3['position'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $row3['last_name'];
                                    echo ", ";
                                    echo $row3['first_name'];
                                    echo " ";
                                    echo $row3['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date"><?php echo $row3['branch_site'] ?></div>
                        </div>
                    </li>
                </a>
                <?php } ?>
            </ul>

            <?php } 
                elseif($_GET['sort'] == "inactive") { 
                    $sql4 = mysqli_query($config, "SELECT * FROM employee_info WHERE status = 'Inactive' AND (position LIKE '%$search%' OR first_name LIKE '%$search%' OR middle_name LIKE '%$search%' OR last_name LIKE '%$search%') ORDER BY last_name ASC");
                    while($row4 = mysqli_fetch_array($sql4)) {
            ?>

            <!-- Inactive -->
            <ul class="message-list">
                <a href="nar-payroll-system.php?uid=<?php echo $row4['employee_id'] ?>">
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <?php echo $row4['account_id'] ?>
                            
                            <p class="title">
                                <?php echo $row4['position'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $row4['last_name'];
                                    echo ", ";
                                    echo $row4['first_name'];
                                    echo " ";
                                    echo $row4['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date"><?php echo $row4['branch_site'] ?></div>
                        </div>
                    </li>
                </a>
                <?php } ?>
            </ul>

        </div>

    <?php } } ?>

    </div>
</div>
<?php
}
else { ?>
<div id="main-nano-wrapper" class="nano">
    <div class="nano-content h-100" data-simplebar>

    <?php if(isset($_GET['sort'])) { ?>

        <div>
            <?php
                if($_GET['sort'] == "active") {
                    $sql = mysqli_query($config, "SELECT * FROM employee_info WHERE status = 'Active' ORDER BY position ASC");
                    while($row = mysqli_fetch_array($sql)) {
            ?>

            <!-- Active -->
            <ul class="message-list">
                <a href="nar-payroll-system.php?uid=<?php echo $row['employee_id'] ?>">
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <?php echo $row['account_id'] ?>
                            
                            <p class="title">
                                <?php echo $row['position'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $row['last_name'];
                                    echo ", ";
                                    echo $row['first_name'];
                                    echo " ";
                                    echo $row['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date"><?php echo $row['branch_site'] ?></div>
                        </div>
                    </li>
                </a>
                <?php } ?>
            </ul>

            <?php } 
                elseif($_GET['sort'] == "directors") { 
                    $sql2 = mysqli_query($config, "SELECT * FROM employee_info WHERE emp_stat = 'Director' ORDER BY last_name ASC");
                    while($row2 = mysqli_fetch_array($sql2)) {
            ?>

            <!-- Director -->
            <ul class="message-list">
                <a href="nar-payroll-system.php?uid=<?php echo $row2['employee_id'] ?>">
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <?php echo $row2['account_id'] ?>
                            
                            <p class="title">
                                <?php echo $row2['position'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $row2['last_name'];
                                    echo ", ";
                                    echo $row2['first_name'];
                                    echo " ";
                                    echo $row2['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date"><?php echo $row2['branch_site'] ?></div>
                        </div>
                    </li>
                </a>        
                <?php } ?>
            </ul>

            <?php } 
                elseif($_GET['sort'] == "household") { 
                    $sql3 = mysqli_query($config, "SELECT * FROM employee_info WHERE emp_stat = 'Household' ORDER BY last_name ASC");
                    while($row3 = mysqli_fetch_array($sql3)) {
            ?>

            <!-- Household -->
            <ul class="message-list">
                <a href="nar-payroll-system.php?uid=<?php echo $row3['employee_id'] ?>">
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <?php echo $row3['account_id'] ?>
                            
                            <p class="title">
                                <?php echo $row3['position'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $row3['last_name'];
                                    echo ", ";
                                    echo $row3['first_name'];
                                    echo " ";
                                    echo $row3['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date"><?php echo $row3['branch_site'] ?></div>
                        </div>
                    </li>
                </a>
                <?php } ?>
            </ul>

            <?php } 
                elseif($_GET['sort'] == "inactive") { 
                    $sql4 = mysqli_query($config, "SELECT * FROM employee_info WHERE status = 'Inactive' ORDER BY last_name ASC");
                    while($row4 = mysqli_fetch_array($sql4)) {
            ?>

            <!-- Inactive -->
            <ul class="message-list">
                <a href="nar-payroll-system.php?uid=<?php echo $row4['employee_id'] ?>">
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <?php echo $row4['account_id'] ?>
                            
                            <p class="title">
                                <?php echo $row4['position'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $row4['last_name'];
                                    echo ", ";
                                    echo $row4['first_name'];
                                    echo " ";
                                    echo $row4['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date"><?php echo $row4['branch_site'] ?></div>
                        </div>
                    </li>
                </a>
                <?php } ?>
            </ul>

        </div>

    <?php } } ?>

    </div>
</div>
<?php
}
?>