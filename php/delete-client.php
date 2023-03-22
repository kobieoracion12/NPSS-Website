<?php

include "database.php";

$company_no = $_POST['company_no'];

$del = mysqli_query($config,"DELETE FROM company_profile WHERE company_no = '$company_no'");

if($del)
{
    mysqli_close($config);
    header("location: ../admin/main/nar-clients.php");
    exit; 
}
else
{
    echo "Error deleting record";
}
?>