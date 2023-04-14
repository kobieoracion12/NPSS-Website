<?php

include "database.php";

if(isset($_POST['del_one'])) {
	$docu_no = $_POST['docu_no'];

	$del = mysqli_query($config,"DELETE FROM docu_archive WHERE docu_no = '$docu_no'");

	if($del)
	{
	    mysqli_close($config);
	    header("location: ../admin/main/nar-documents.php");
	    exit; 
	}
	else
	{
	    echo "Error deleting record";
	}
}

elseif(isset($_POST['del_two'])) {
	$docu_id = $_POST['docu_id'];
	$folder_no = $_POST['folder_no'];

	$del1 = mysqli_query($config,"DELETE FROM folder_docu_archive WHERE docu_id = '$docu_id'");

	if($del1)
	{
	    mysqli_close($config);
	    header("location: ../admin/main/nar-folder.php?folder=$folder_no");
	    exit; 
	}
	else
	{
	    echo "Error deleting record";
	}
}
?>