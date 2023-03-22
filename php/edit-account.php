<?php

include "database.php";

if (isset($_POST['update'])) {
  $id             = mysqli_real_escape_string($config,$_POST['update_id']);
  $f_name          = mysqli_real_escape_string($config,$_POST['f_name']);
  $l_name          = mysqli_real_escape_string($config,$_POST['l_name']);
  $username          = mysqli_real_escape_string($config,$_POST['username']);

    $query1= "UPDATE acc_info SET f_name='$f_name', l_name='$l_name', username='$username' WHERE id='$id'";

    $query_run1 = mysqli_query($config, $query1);

    if ($query_run1) {
      header("Location: ../admin/accounts.php?updatesuccess&options=members");
    }
    else{
      header("Location: ../admin/accounts.php?updateinvalid&options=members");
   }
}
?>