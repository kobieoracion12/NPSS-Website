<?php
session_start();
include_once "database.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $logo = $_FILES['company_logo']['name'];

    $name = $_POST['company_name'];
    $desc = $_POST['company_desc'];
    $branch = $_POST['branch_site'];
    $person = $_POST['contact_person'];
    $number = $_POST['contact_no'];
    
    $folder = "../uploads/logo/".$logo;

    $insert = mysqli_query($config, "INSERT INTO company_profile (company_name, company_desc, branch_site, contact_person, contact_no, company_logo) VALUES ('$name', '$desc', '$branch', '$person', '$number', '$logo')");

    if($insert) {
        if ($_SESSION['acc_priv'] == 'Admin') {
            move_uploaded_file($_FILES['company_logo']['tmp_name'], "$folder");
            header("Location: ../admin/main/nar-clients.php?success");
        }
        elseif ($_SESSION['acc_priv'] == 'Purchasing') {
           move_uploaded_file($_FILES['company_logo']['tmp_name'], "$folder");
            header("Location: ../purchasing/main/purchase-clients.php?success");
        }
    }
    else {
        if ($_SESSION['acc_priv'] == 'Admin') {
            header("Location: ../admin/main/nar-clients.php?failed");
        }
        elseif ($_SESSION['acc_priv'] == 'Purchasing') {
           header("Location: ../purchasing/main/purchase-clients.php?failed");
        }
    }
}

?>