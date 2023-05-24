<?php
if (isset($_POST['search'])) {
     $search = $_POST['search'];
    if(isset($_GET['sort'])) { ?>
        <div>
            <?php
                if($_GET['sort'] == "unread") {
                    $sql = mysqli_query($config, "SELECT * FROM application WHERE status = 'unread' AND (job_interest LIKE '%$search%' OR first_name LIKE '%$search%' OR middle_name LIKE '%$search%' OR last_name LIKE '%$search%')");
                    while($data = mysqli_fetch_array($sql)) {
            ?>

            <!-- Active -->
            <ul class="message-list">
                <a href="" class="setbtn" data-bs-toggle="modal" data-id='<?php echo $data['application_id'] ?>'>
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <?php echo $data['application_id'] ?>
                            <p class="title">
                                <?php echo $data['job_interest'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            
                            <div class="subject">
                                <?php 
                                    echo $data['last_name'];
                                    echo ", ";
                                    echo $data['first_name'];
                                    echo " ";
                                    echo $data['middle_name'];
                                ?>
                            </div>
                            <div class="date">
                                <?php echo $data['site'] ?>
                            </div>
                        </div>
                    </li>
                </a>
            </ul>
                <?php } ?>
            <?php }
             elseif($_GET['sort'] == "all") { 
                    $sql3 = mysqli_query($config, "SELECT * FROM application WHERE (job_interest LIKE '%$search%' OR first_name LIKE '%$search%' OR middle_name LIKE '%$search%' OR last_name LIKE '%$search%')");
                    while($data3 = mysqli_fetch_array($sql3)) {
            ?>

            <!-- Director -->
            <ul class="message-list">
                <a href="" class="setbtn" data-bs-toggle="modal" data-id='<?php echo $data3['application_id'] ?>'>
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <?php 
                            if ($data3['status'] == 'unread') { ?>
                                <p class="text-bold fw-bold">
                                   <?php echo $data3['application_id'] ?> 
                                </p>
                            <?php
                            }
                            elseif ($data3['status'] == 'important') { ?>
                                <p class="text-success fw-bold">
                                   <?php echo $data3['application_id'] ?> 
                                </p>
                            <?php
                            }
                            elseif ($data3['status'] == 'denied') { ?>
                                <p class="text-danger fw-bold">
                                   <?php echo $data3['application_id'] ?> 
                                </p>
                            <?php
                            }
                            elseif ($data3['status'] == 'read') { ?>
                                <p class="text-secondary fw-bold">
                                   <?php echo $data3['application_id'] ?> 
                                </p>
                            <?php
                            }
                            ?>
                            <p class="title">
                                <?php echo $data3['job_interest'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $data3['last_name'];
                                    echo ", ";
                                    echo $data3['first_name'];
                                    echo " ";
                                    echo $data3['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date">
                                <?php echo $data3['site'] ?>
                            </div>
                        </div>
                    </li>
                </a>     
            </ul>
                <?php } ?>
            <?php }
                elseif($_GET['sort'] == "important") { 
                    $sql3 = mysqli_query($config, "SELECT * FROM application WHERE status = 'important' AND (job_interest LIKE '%$search%' OR first_name LIKE '%$search%' OR middle_name LIKE '%$search%' OR last_name LIKE '%$search%')");
                    while($data2 = mysqli_fetch_array($sql3)) {
            ?>

            <!-- Household -->
            <ul class="message-list">
                <a href="" class="setbtn" data-bs-toggle="modal" data-id='<?php echo $data2['application_id'] ?>'>
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <p class="text-success fw-bold">
                                   <?php echo $data2['application_id'] ?> 
                                </p>
                            <p class="title">
                                <?php echo $data2['job_interest'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $data2['last_name'];
                                    echo ", ";
                                    echo $data2['first_name'];
                                    echo " ";
                                    echo $data2['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date">
                                <?php echo $data2['site'] ?>
                            </div>
                        </div>
                    </li>
                </a>
            </ul>
                <?php } ?>
            <?php }
            elseif($_GET['sort'] == "denied") { 
                    $sql3 = mysqli_query($config, "SELECT * FROM application WHERE status = 'denied' AND (job_interest LIKE '%$search%' OR first_name LIKE '%$search%' OR middle_name LIKE '%$search%' OR last_name LIKE '%$search%')");
                    while($data2 = mysqli_fetch_array($sql3)) {
            ?>

            <!-- Household -->
            <ul class="message-list">
                <a href="" class="setbtn" data-bs-toggle="modal" data-id='<?php echo $data2['application_id'] ?>'>
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <p class="text-danger fw-bold">
                               <?php echo $data2['application_id'] ?> 
                            </p>
                            <p class="title">
                                <?php echo $data2['job_interest'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $data2['last_name'];
                                    echo ", ";
                                    echo $data2['first_name'];
                                    echo " ";
                                    echo $data2['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date">
                                <?php echo $data2['site'] ?>
                            </div>
                        </div>
                    </li>
                </a>
            </ul>
                <?php } ?>
            <?php } ?> 
        </div>
    <?php } ?>
<?php } 
else {
    if(isset($_GET['sort'])) { ?>
        <div>
            <?php
                if($_GET['sort'] == "unread") {
                    $sql = mysqli_query($config, "SELECT * FROM application WHERE status = 'unread'");
                    while($data = mysqli_fetch_array($sql)) {
            ?>

            <!-- Active -->
            <ul class="message-list">
                <a href="" class="setbtn" data-bs-toggle="modal" data-id='<?php echo $data['application_id'] ?>'>
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <?php echo $data['application_id'] ?>
                            <p class="title">
                                <?php echo $data['job_interest'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            
                            <div class="subject">
                                <?php 
                                    echo $data['last_name'];
                                    echo ", ";
                                    echo $data['first_name'];
                                    echo " ";
                                    echo $data['middle_name'];
                                ?>
                            </div>
                            <div class="date">
                                <?php echo $data['site'] ?>
                            </div>
                        </div>
                    </li>
                </a>
            </ul>
                <?php } ?>
            <?php }
             elseif($_GET['sort'] == "all") { 
                    $sql3 = mysqli_query($config, "SELECT * FROM application");
                    while($data3 = mysqli_fetch_array($sql3)) {
            ?>

            <!-- Director -->
            <ul class="message-list">
                <a href="" class="setbtn" data-bs-toggle="modal" data-id='<?php echo $data3['application_id'] ?>'>
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <?php 
                            if ($data3['status'] == 'unread') { ?>
                                <p class="text-bold fw-bold">
                                   <?php echo $data3['application_id'] ?> 
                                </p>
                            <?php
                            }
                            elseif ($data3['status'] == 'important') { ?>
                                <p class="text-success fw-bold">
                                   <?php echo $data3['application_id'] ?> 
                                </p>
                            <?php
                            }
                            elseif ($data3['status'] == 'denied') { ?>
                                <p class="text-danger fw-bold">
                                   <?php echo $data3['application_id'] ?> 
                                </p>
                            <?php
                            }
                            elseif ($data3['status'] == 'read') { ?>
                                <p class="text-secondary fw-bold">
                                   <?php echo $data3['application_id'] ?> 
                                </p>
                            <?php
                            }
                            ?>
                            <p class="title">
                                <?php echo $data3['job_interest'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $data3['last_name'];
                                    echo ", ";
                                    echo $data3['first_name'];
                                    echo " ";
                                    echo $data3['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date">
                                <?php echo $data3['site'] ?>
                            </div>
                        </div>
                    </li>
                </a>     
            </ul>
                <?php } ?>
            <?php }
                elseif($_GET['sort'] == "important") { 
                    $sql3 = mysqli_query($config, "SELECT * FROM application WHERE status = 'important'");
                    while($data2 = mysqli_fetch_array($sql3)) {
            ?>

            <!-- Household -->
            <ul class="message-list">
                <a href="" class="setbtn" data-bs-toggle="modal" data-id='<?php echo $data2['application_id'] ?>'>
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <p class="text-success fw-bold">
                                   <?php echo $data2['application_id'] ?> 
                                </p>
                            <p class="title">
                                <?php echo $data2['job_interest'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $data2['last_name'];
                                    echo ", ";
                                    echo $data2['first_name'];
                                    echo " ";
                                    echo $data2['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date">
                                <?php echo $data2['site'] ?>
                            </div>
                        </div>
                    </li>
                </a>
            </ul>
                <?php } ?>
            <?php }
            elseif($_GET['sort'] == "denied") { 
                    $sql3 = mysqli_query($config, "SELECT * FROM application WHERE status = 'denied'");
                    while($data2 = mysqli_fetch_array($sql3)) {
            ?>

            <!-- Household -->
            <ul class="message-list">
                <a href="" class="setbtn" data-bs-toggle="modal" data-id='<?php echo $data2['application_id'] ?>'>
                    <li>
                        <div class="mail-col mail-col-1"><span class="dot"></span>
                            <p class="text-danger fw-bold">
                               <?php echo $data2['application_id'] ?> 
                            </p>
                            <p class="title">
                                <?php echo $data2['job_interest'] ?>
                            </p>
                        </div>

                        <div class="mail-col mail-col-2">
                            <div class="subject">
                                <?php 
                                    echo $data2['last_name'];
                                    echo ", ";
                                    echo $data2['first_name'];
                                    echo " ";
                                    echo $data2['middle_name'];
                                ?>
                            </div>
                            
                            <div class="date">
                                <?php echo $data2['site'] ?>
                            </div>
                        </div>
                    </li>
                </a>
            </ul>
                <?php } ?>
            <?php } ?> 
        </div>
    <?php } } ?>
