<?php

include_once "database.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $eid = $_POST['employee_id'];
    $pno = $_POST['payroll_no'];
    

    $insert = mysqli_query($config, "UPDATE payroll SET basic_pay = '$basic_pay' WHERE employee_id = '$eid' AND payroll_no = '$pno'");

    if($insert) {
        header("Location: ../admin/main/nar-payroll.php?success");
    }
    else {
        header("Location: ../admin/main/nar-payroll.php?failed");
    }
}

?>