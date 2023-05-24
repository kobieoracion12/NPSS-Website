<?php
session_start();
include_once "database.php";

if(isset($_POST['edit-client'])) {

    $logo = $_FILES['company_logo']['name'];

    $id = $_POST['company_id'];
    $name = $_POST['company_name'];
    $desc = $_POST['company_desc'];
    $branch = $_POST['branch_site'];
    $person = $_POST['contact_person'];
    $number = $_POST['contact_no'];
    
    $folder = "../uploads/logo/".$logo;

    if(empty($logo)) {
        $update = mysqli_query($config, "UPDATE company_profile SET company_name = '$name', company_desc = '$desc', branch_site = '$branch', contact_person = '$person', contact_no = '$number' WHERE company_no = '$id'");

        if($update) {
            if ($_SESSION['acc_priv'] == 'Admin') {
                header("Location: ../admin/main/nar-clients.php?edit-success");
            }
            elseif ($_SESSION['acc_priv'] == 'Purchasing') {
                header("Location: ../purchasing/main/purchase-clients.php?edit-success");
            }
        }
        else {
            if ($_SESSION['acc_priv'] == 'Admin') {
                header("Location: ../admin/main/nar-clients.php?edit-failed");
            }
            elseif ($_SESSION['acc_priv'] == 'Purchasing') {
                header("Location: ../purchasing/main/purchase-clients.php?edit-failed");
            }
        }
    }
    else {
        $update = mysqli_query($config, "UPDATE company_profile SET company_name = '$name', company_desc = '$desc', branch_site = '$branch', contact_person = '$person', contact_no = '$number', company_logo = '$logo' WHERE company_no = '$id'");

        if($update) {
            if ($_SESSION['acc_priv'] == 'Admin') {
                move_uploaded_file($_FILES['company_logo']['tmp_name'], "$folder");
                header("Location: ../admin/main/nar-clients.php?edit-success");
            }
            elseif ($_SESSION['acc_priv'] == 'Purchasing') {
                move_uploaded_file($_FILES['company_logo']['tmp_name'], "$folder");
                header("Location: ../purchasing/main/purchase-clients.php?edit-success");
            }
        }
        else {
            if ($_SESSION['acc_priv'] == 'Admin') {
                header("Location: ../admin/main/nar-clients.php?edit-failed");
            }
            elseif ($_SESSION['acc_priv'] == 'Purchasing') {
                header("Location: ../purchasing/main/purchase-clients.php?edit-failed");
            }
        }
    }
}

?>