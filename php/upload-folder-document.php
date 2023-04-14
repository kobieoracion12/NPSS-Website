<?php

include_once "database.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$folder_no = $_POST['folder_no'];
	$access = $_POST['access'];
    $display = $_POST['display_name'];
    $filename = $_FILES['myfile']['name'];
    $destination = '../uploads/documents/' . $filename;
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf','docx','doc','pptx' ,'ppt' ,'pptm' ,'xlsx' ,'cvs'])) {
        echo "File format is not supported";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {

	    $insert = mysqli_query($config, "INSERT INTO folder_docu_archive (file_name, display_name, display_type, folder_docu_no) VALUES ('$filename','$display', '$extension', '$folder_no')");
	    if($insert) {

	    	$id = mysqli_insert_id($config);
	    	move_uploaded_file($file, $destination);
	    	foreach ($access as $key) {
	    		$query= mysqli_query($config, "INSERT INTO file_access (folder_docu_no, position_no) VALUES ('$id', '".$key."')");
	    	}
			    if ($query) {
			    	header("Location: ../admin/main/nar-folder.php?folder=$folder_no&success");
			    }
	    }
	    else {
	        header("Location: ../admin/main/nar-folder.php?folder=$folder_no&archive-failed");
	    }
	}

    
}

?>