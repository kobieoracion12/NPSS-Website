<?php
session_start();
include "database.php";

$company_no = $_POST['company_no'];

$del = mysqli_query($config,"DELETE FROM company_profile WHERE company_no = '$company_no'");

if($del)
{
	if ($_SESSION['acc_priv'] == 'Admin') {
		mysqli_close($config);
	    header("location: ../admin/main/nar-clients.php");
	    exit; 
	}
	elseif ($_SESSION['acc_priv'] == 'Purchasing') {
		mysqli_close($config);
	    header("location: ../purchasing/main/purchase-clients.php");
	    exit; 
	}
}
else
{
    echo "Error deleting record";
}
?>