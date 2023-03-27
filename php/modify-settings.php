<?php

include_once "database.php";

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

?>