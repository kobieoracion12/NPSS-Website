<?php

include_once "database.php";

if(isset($_POST['edit-docu'])) {

    $no = $_POST['docu_no'];
    $name = $_POST['display_name'];
    $access = $_POST['access'];
    
    $update = mysqli_query($config, "UPDATE docu_archive SET display_name = '$name' WHERE docu_no = '$no'");

    if($update) {
    	$del = mysqli_query($config,"DELETE FROM file_access WHERE docu_no = '$no'");
    	if($del) {
			foreach ($access as $key) {
	    		$query= mysqli_query($config, "INSERT INTO file_access (docu_no, position_no) VALUES ('$no', '".$key."')");
	    	}
		    if ($query) {
		    	header("Location: ../admin/main/nar-documents.php?edit-success");
		    }
		}
    }
    else {
        header("Location: ../admin/main/nar-documents.php?edit-failed");
    }


    
}

?>