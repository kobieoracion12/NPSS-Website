<?php

include_once "database.php";

// Add Employement Status
if (isset($_POST['add-stat'])) {

    $name = $_POST['emp-stat'];
    
    $insert = mysqli_query($config, "INSERT INTO emp_status (emp_stat) VALUES ('$name')");

    if($insert) {
        header("Location: ../admin/main/nar-settings.php?success");
    }
    else {
        header("Location: ../admin/main/nar-settings.php?failed");
    }
}

// Add Position
if (isset($_POST['add-post'])) {

    $name = $_POST['post-name'];
    $desc = $_POST['job-desc'];
    
    $insert = mysqli_query($config, "INSERT INTO position (position_name, job_desc) VALUES ('$name', '$desc')");

    if($insert) {
        header("Location: ../admin/main/nar-settings.php?success");
    }
    else {
        header("Location: ../admin/main/nar-settings.php?failed");
    }
}

// Edit Employement Status
if (isset($_POST['edit-post'])) {

    $eid = $_POST['id-stat'];
    $name = $_POST['edit-name'];
    
    $update = mysqli_query($config, "UPDATE emp_status SET emp_stat = '$name' WHERE stat_no = '$eid'");

    if($update) {
        header("Location: ../admin/main/nar-settings.php?success");
    }
    else {
        header("Location: ../admin/main/nar-settings.php?failed");
    }
}

// Edit Position
if (isset($_POST['edit-post'])) {

    $eid = $_POST['id-stat'];
    $name = $_POST['edit-name'];
    $desc = $_POST['edit-desc'];
    
    $update = mysqli_query($config, "UPDATE position SET position_name = '$name', job_desc = '$desc' WHERE position_no = '$eid'");

    if($update) {
        header("Location: ../admin/main/nar-settings.php?success");
    }
    else {
        header("Location: ../admin/main/nar-settings.php?failed");
    }
}

// Delete Employement Status
if (isset($_POST['delete-stat'])) {

    $eid = $_POST['del-stat'];
    
    $delete = mysqli_query($config, "DELETE FROM emp_status WHERE stat_no = '$eid'");

    if($delete) {
        header("Location: ../admin/main/nar-settings.php?success");
    }
    else {
        header("Location: ../admin/main/nar-settings.php?failed");
    }
}


// Delete Position
if (isset($_POST['delete-post'])) {

    $eid = $_POST['del-post'];
    
    $delete = mysqli_query($config, "DELETE FROM position WHERE position_no = '$eid'");

    if($delete) {
        header("Location: ../admin/main/nar-settings.php?success");
    }
    else {
        header("Location: ../admin/main/nar-settings.php?failed");
    }
}
?>