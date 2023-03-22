<?php

include_once "database.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$access = $_POST['access'];
    $display = $_POST['display_name'];
    $filename = $_FILES['myfile']['name'];
    $destination = '../uploads/documents/' . $filename;
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf','docx','doc','pptx' ,'ppt' ,'pptm' ,'xls' ,'cvs'])) {
        echo "File format is not supported";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
	    $insert = mysqli_query($config, "INSERT INTO docu_archive (file_name, display_name, display_type) VALUES ('$filename','$display', '$extension')");
	    if($insert) {

	    	$id = mysqli_insert_id($config);
	    	move_uploaded_file($file, $destination);
	    	foreach ($access as $key) {
	    		$query= mysqli_query($config, "INSERT INTO file_access (docu_no, position_no) VALUES ('$id', '".$key."')");
	    	}
			    if ($query) {
			    	header("Location: ../admin/main/nar-documents.php?success");
			    }
	    }
	    else {
	        header("Location: ../admin/main/nar-documents.php?archive-failed");
	    }
	}

    
}

?>