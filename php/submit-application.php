<?php

include_once "database.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $resume_cv = $_FILES['resume_cv']['name'];

    $interest = $_POST['interest'];
    $site = $_POST['site'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $suffix = $_POST['suffix'];
    $birth_date = $_POST['birth_date'];
    $gender = $_POST['gender'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $mobile_no = $_POST['mobile_no'];
    $email_address = $_POST['email_address'];
    $extension = pathinfo($resume_cv, PATHINFO_EXTENSION);
    
    $folder = "../uploads/resume/".$resume_cv;
    if (!in_array($extension, ['pdf'])) {
        echo "You file extension must be .pdf";
    }
    else {
        $insert = mysqli_query($config, "INSERT INTO application (job_interest, site, last_name, first_name, middle_name, suffix, birth_date, gender, province, city, mobile_no, email_address, resume_cv) VALUES ('$interest', '$site', '$last_name', '$first_name', '$middle_name', '$suffix', '$birth_date', '$gender', '$province', '$city', '$mobile_no', '$email_address', '$resume_cv')");
        if($insert) {
            move_uploaded_file($_FILES['resume_cv']['tmp_name'], "$folder");
            header("Location: ../visitor/home/data_privacy.php?success");
        }
        else {
            header("Location: ../visitor/home/data_privacy.php?failed");
        }
    }
}

?>