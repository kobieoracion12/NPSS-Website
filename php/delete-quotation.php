<?php

include "database.php";

$quotation_no = $_POST['quotation_no'];

$del = mysqli_query($config,"DELETE FROM quotation WHERE quotation_no = '$quotation_no'");

if($del)
{
    mysqli_close($config);
    header("location: ../admin/main/nar-quotations.php");
    exit; 
}
else
{
    echo "Error deleting record";
}
?>