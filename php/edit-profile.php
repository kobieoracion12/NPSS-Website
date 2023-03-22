<?php

include_once "database.php";

if(isset($_POST['edit-profile'])) {

    $pic = $_FILES['image']['name'];

    $id = $_POST['employee_id'];
    $first = $_POST['first_name'];
    $middle = $_POST['middle_name'];
    $last = $_POST['last_name'];
    $suffix = $_POST['given_suffix'];
    $contact = $_POST['contact_no'];
    $address = $_POST['given_address'];
    $bday = $_POST['birth_date'];
    $email = $_POST['email_add'];
    $position = $_POST['position'];
    $status = $_POST['emp_stat'];
    $branch = $_POST['branch_site'];
    $desc = $_POST['description'];
    
    $folder = "../uploads/profile/".$pic;

    if(empty($pic)) {
        $update = mysqli_query($config, "UPDATE employee_info SET first_name = '$first', middle_name = '$middle', last_name = '$last', given_suffix = '$suffix', contact_no = '$contact', given_address = '$address', birth_date = '$bday', email_add = '$email', position = '$position', emp_stat = '$status', branch_site = '$branch', job_desc = '$desc' WHERE employee_id = '$id'");

        if($update) {
            header("Location: ../admin/main/nar-profile.php?edit-success");
        }
        else {
            header("Location: ../admin/main/nar-profile.php?edit-failed");
        }
    }

    else {
        $update = mysqli_query($config, "UPDATE employee_info SET first_name = '$first', middle_name = '$middle', last_name = '$last', given_suffix = '$suffix', contact_no = '$contact', given_address = '$address', birth_date = '$bday', email_add = '$email', position = '$position', emp_stat = '$status', branch_site = '$branch', job_desc = '$desc', profile_pic = '$pic' WHERE employee_id = '$id'");

        if($update) {
            move_uploaded_file($_FILES['image']['tmp_name'], "$folder");
            header("Location: ../admin/main/nar-profile.php?edit-success");
        }
        else {
            header("Location: ../admin/main/nar-profile.php?edit-failed");
        }
    }

    

}

?>