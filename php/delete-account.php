<?php

include "database.php";

$employee_id = $_POST['employee_id'];

$del = mysqli_query($config,"DELETE FROM employee_info WHERE employee_id = '$employee_id'");

if($del)
{
    mysqli_close($config);
    header("location: ../admin/main/nar-accounts.php?delete-success");
    exit; 
}
else
{
    header("location: ../admin/main/nar-accounts.php?delete-failed");
}
?>