<?php

include_once "database.php";

if(isset($_POST['register_user'])) {

    $year = date("Y");
    $founded = 1986;

    $select = mysqli_query($config, "SELECT employee_id FROM employee_info");
    while ($row = mysqli_fetch_array($select)) {
        $last_id = $row['employee_id'];
    }
    
    $id = $last_id + 1;
    $first = $_POST['first_name'];
    $middle = $_POST['middle_name'];
    $last = $_POST['last_name'];
    $suffix = $_POST['given_suffix'];
    $contact = $_POST['contact_no'];
    $address = $_POST['given_address'];
    $bday = $_POST['birth_date'];
    $email = $_POST['email_add'];
    $position = $_POST['position'];
    $branch = $_POST['branch_site'];
    $desc = $_POST['description'];
    //$profile = $_POST['profile_pic'];
    //$cv = $_POST['uploaded_cv'];

    // Record Employee Information to the employee_id table
    $sql = mysqli_query($config, "INSERT INTO employee_info (employee_id, first_name, middle_name, last_name, given_suffix, contact_no, given_address, birth_date, email_add, position, branch_site, job_desc) VALUES ('$id', '$first', '$middle', '$last', '$suffix', '$contact', '$address', '$bday', '$email', '$position', '$branch', '$desc')");
    
    if($sql) {
        $select = mysqli_query($config, "SELECT employee_id FROM employee_info");
        while ($row = mysqli_fetch_array($select)) {
            $last_id = $row['employee_id'];
        }

        $password = rand(1000,9999);

        $create = mysqli_query($config, "INSERT INTO account_info (employee_id, reg_email, reg_password) VALUES ('$last_id', '$email', '$password')");

        if($create) {
            header("Location: ../admin/main/nar-accounts.php?success");
        }
        else {
            header("Location: ../admin/main/nar-accounts.php?failed");
        }
    }
    else {
        header("Location: ../admin/main/nar-accounts.php?failed");
    }
}

?>