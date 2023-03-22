<?php

include "database.php";

if (isset($_POST['register_user'])) {
  $employee_id          = $_POST['employee_id'];
  $first_name          = mysqli_real_escape_string($config,$_POST['first_name']);
  $last_name          = mysqli_real_escape_string($config,$_POST['last_name']);
  $middle_name          = mysqli_real_escape_string($config,$_POST['middle_name']);
  $last_name          = mysqli_real_escape_string($config,$_POST['last_name']);
  $given_suffix          = mysqli_real_escape_string($config,$_POST['given_suffix']);
  $given_address          = mysqli_real_escape_string($config,$_POST['given_address']);
  $contact_no          = mysqli_real_escape_string($config,$_POST['contact_no']);
  $birth_date          = $_POST['birth_date'];
  $position          = mysqli_real_escape_string($config,$_POST['position']);
  $email_add          = mysqli_real_escape_string($config,$_POST['email_add']);
  $branch_site          = mysqli_real_escape_string($config,$_POST['branch_site']);
  $job_desc             = mysqli_real_escape_string($config,$_POST['job_desc']);

  $uploaded_cv         = $_FILES['uploaded_cv']['name'];
  $destination = '../uploads/resume/' . $uploaded_cv;
  $extension = pathinfo($uploaded_cv, PATHINFO_EXTENSION);
  $file = $_FILES['uploaded_cv']['tmp_name'];
  $size = $_FILES['uploaded_cv']['size'];

  $profile_pic         = $_FILES['profile_pic']['name'];
  $folder = "../uploads/profile/".$profile_pic;

  if (!in_array($extension, ['pdf']) && !empty($uploaded_cv)) {
        echo "You file extension must be .pdf";
    } elseif ($_FILES['uploaded_cv']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {

    if (!empty($profile_pic) && !empty($uploaded_cv)) {
        $query1= "UPDATE employee_info SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', given_suffix='$given_suffix', given_address='$given_address', contact_no='$contact_no', birth_date='$birth_date', position='$position', email_add='$email_add', branch_site='$branch_site', job_desc='$job_desc', profile_pic='$profile_pic', uploaded_cv='$uploaded_cv' WHERE employee_id='$employee_id'";

        $query_run1 = mysqli_query($config, $query1);

        if ($query_run1) {
          move_uploaded_file($_FILES['profile_pic']['tmp_name'], "$folder");
          move_uploaded_file($file, $destination);
          header("Location: ../admin/main/nar-accounts.php?updatesuccess");
        }
        else{
          // header("Location: ../admin/main/nar-accounts.php?updateinvalid");
          echo ("Error description: " . $config -> error);
       }
    }
    elseif (empty($profile_pic) && empty($uploaded_cv)) {
      $query1= "UPDATE employee_info SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', given_suffix='$given_suffix', given_address='$given_address', contact_no='$contact_no', birth_date='$birth_date', position='$position', email_add='$email_add', branch_site='$branch_site', job_desc='$job_desc' WHERE employee_id='$employee_id'";

        $query_run1 = mysqli_query($config, $query1);

        if ($query_run1) {
          header("Location: ../admin/main/nar-accounts.php?updatesuccess");
        }
        else{
          // header("Location: ../admin/main/nar-accounts.php?updateinvalid");
          echo ("Error description: " . $config -> error);
       }
    }
    elseif (empty($profile_pic) && !empty($uploaded_cv)) {
      $query1= "UPDATE employee_info SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', given_suffix='$given_suffix', given_address='$given_address', contact_no='$contact_no', birth_date='$birth_date', position='$position', email_add='$email_add', branch_site='$branch_site', job_desc='$job_desc', uploaded_cv='$uploaded_cv' WHERE employee_id='$employee_id'";

        $query_run1 = mysqli_query($config, $query1);

        if ($query_run1) {
          move_uploaded_file($file, $destination);
          header("Location: ../admin/main/nar-accounts.php?updatesuccess");
        }
        else{
          // header("Location: ../admin/main/nar-accounts.php?updateinvalid");
          echo ("Error description: " . $config -> error);
       }
    }
    elseif (empty($uploaded_cv) && !empty($profile_pic)) {
      $query1= "UPDATE employee_info SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', given_suffix='$given_suffix', given_address='$given_address', contact_no='$contact_no', birth_date='$birth_date', position='$position', email_add='$email_add', branch_site='$branch_site', job_desc='$job_desc', profile_pic='$profile_pic' WHERE employee_id='$employee_id'";

        $query_run1 = mysqli_query($config, $query1);

        if ($query_run1) {
          move_uploaded_file($_FILES['profile_pic']['tmp_name'], "$folder");
          header("Location: ../admin/main/nar-accounts.php?updatesuccess");
        }
        else{
          // header("Location: ../admin/main/nar-accounts.php?updateinvalid");
          echo ("Error description: " . $config -> error);
       }
    }
  }

    
}
?>