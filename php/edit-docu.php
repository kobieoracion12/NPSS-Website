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

elseif(isset($_POST['edit-doc'])) {

    $id = $_POST['docu_id'];
    $name = $_POST['display_name'];
    $access = $_POST['access'];
    $folder_no = $_POST['folder_no'];
    
    $update = mysqli_query($config, "UPDATE folder_docu_archive SET display_name = '$name' WHERE docu_id = '$id'");

    if($update) {
        $del = mysqli_query($config,"DELETE FROM file_access WHERE folder_docu_no = '$id'");
        if($del) {
            foreach ($access as $key) {
                $query= mysqli_query($config, "INSERT INTO file_access (folder_docu_no, position_no) VALUES ('$id', '".$key."')");
            }
            if ($query) {
                header("Location: ../admin/main/nar-folder.php?ompany=$id");
            }
        }
    }
    else {
        header("Location: ../admin/main/nar-folder.php?company=$id");
    }
}


elseif(isset($_POST['edit-doc2'])) {

    $id = $_POST['docu_id'];
    $name = $_POST['display_name'];
    
    $update = mysqli_query($config, "UPDATE docu_archive SET display_name = '$name' WHERE docu_id = '$id'");

    if($update) {
        header("Location: ../admin/main/nar-folder.php?folder=$folder_no&edit-success");
    }
    else {
        header("Location: ../admin/main/nar-folder.php?folder=$folder_no&edit-failed");
    }
}

?>