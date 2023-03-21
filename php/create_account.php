<?php

include_once "database.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $year = date("Y");
    $founded = 1986;

    $select = mysqli_query($config, "SELECT employee_id FROM employee_info");
    while ($row = mysqli_fetch_array($select)) {
        $last_id = $row['employee_id'];
    }
    
    $id = $last_id + 1;
    $filename = $_FILES['myfile']['name'];
    $pic = $_FILES['image']['name'];
    $first = $_POST['first_name'];
    $middle = $_POST['middle_name'];
    $last = $_POST['last_name'];
    $suffix = $_POST['given_suffix'];
    $contact = $_POST['contact_no'];
    $address = $_POST['given_address'];
    $bday = $_POST['birth_date'];
    $email = $_POST['email_add'];
    $position = $_POST['position'];
    $status = $_POST['status'];
    $branch = $_POST['branch_site'];
    $desc = $_POST['description'];
    $folder = "../uploads/profile/".$pic;
    $destination = '../uploads/resume/' . $filename;
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    //$profile = $_POST['profile_pic'];
    //$cv = $_POST['uploaded_cv'];

    // Record Employee Information to the employee_id table
    if (!in_array($extension, ['pdf'])) {
        echo "You file extension must be .pdf";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        $view = mysqli_query($config, "SELECT * FROM account_info WHERE reg_email = '$email'");
        if (mysqli_num_rows($view) == 0) {
            $sql = mysqli_query($config, "INSERT INTO employee_info (employee_id, first_name, middle_name, last_name, given_suffix, contact_no, given_address, birth_date, email_add, position, emp_stat, branch_site, job_desc, profile_pic, uploaded_cv) VALUES ('$id', '$first', '$middle', '$last', '$suffix', '$contact', '$address', '$bday', '$email', '$position', '$status', '$branch', '$desc', '$pic', '$filename')");
        
            if($sql) {
                move_uploaded_file($_FILES['image']['tmp_name'], "$folder");
                move_uploaded_file($file, $destination);
                $select = mysqli_query($config, "SELECT employee_id FROM employee_info");
                while ($row = mysqli_fetch_array($select)) {
                    $last_id = $row['employee_id'];
                }

                $password = rand(1000,9999);

                $create = mysqli_query($config, "INSERT INTO account_info (employee_id, reg_email, reg_password, acc_priv) VALUES ('$last_id', '$email', '$password', '$position')");

                if($create) {
                    header("Location: ../admin/main/nar-accounts.php?success");
                }
                else {
                    header("Location: ../admin/main/nar-accounts.php?failed");
                }
            }
            else {
                //header("Location: ../admin/main/nar-accounts.php?failed");
                echo ("Error description: " . $config -> error);
            }
        }
        else {
            header("Location: ../admin/main/nar-accounts.php?emailexists");
        }
    }
}

?>