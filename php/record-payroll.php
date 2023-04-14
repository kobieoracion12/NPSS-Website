<?php

include_once "database.php";

if(isset($_POST['record'])) {

    $eid = $_POST['employee_id'];
    $basic = $_POST['basic'];
    $saladj = $_POST['saladj'];
    $taxref = $_POST['taxref'];
    $regot = $_POST['regot'];
    $ndreg = $_POST['ndreg'];
    $spclot = $_POST['spclot'];
    $spcl8ot = $_POST['spcl8ot'];
    $ndot = $_POST['ndot'];
    $nd8ot = $_POST['nd8ot'];
    $lhot = $_POST['lhot'];
    $lt8ot = $_POST['lt8ot'];
    $ndlhot = $_POST['ndlhot'];
    $ndlh8ot = $_POST['ndlh8ot'];
    $allowance = $_POST['allowance'];
    $gross = $_POST['gross'];
    $tard = $_POST['tard'];
    $lwop = $_POST['lwop'];
    $absent = $_POST['absent'];
    $ssscon = $_POST['ssscon'];
    $phcon = $_POST['phcon'];
    $hdmfcon = $_POST['hdmfcon'];
    $sssloan = $_POST['sssloan'];
    $hdmfloan = $_POST['hdmfloan'];
    $advances = $_POST['advances'];
    $whtax = $_POST['whtax'];
    $deduct = $_POST['deduct'];
    $take = $_POST['take'];

    $insert = mysqli_query($config, "INSERT INTO payroll (employee_id, basic_pay, salary_adj, tax_refund, reg_ot1, nd_ot1, spcl_ot1, spcl_ot2, nd_ot2, nd_ot3, lh_ot1, lh_ot2, lh_ot3, lh_ot4, allowance, gross_pay, tardiness, lwop, absences, sss_contri, ph_contri, hdmf_contri, sss_loan, hdmf_loan, advances, wh_tax, total_deduc, take_home) VALUES ('$eid', '$basic', '$saladj', '$taxref','$regot','$ndreg','$spclot','$spcl8ot','$ndot','$nd8ot','$lhot','$lt8ot','$ndlhot','$ndlh8ot','$allowance','$gross','$tard','$lwop','$absent','$ssscon','$phcon','$hdmfcon','$sssloan','$hmdfloan','$advances','$whtax','$deduct','$take')");

    if($insert) {
        header("Location: ../admin/main/nar-payroll.php?sort=active");
    }
    else {
        header("Location: ../admin/main/nar-payroll.php?sort=active");
    }
}

?>