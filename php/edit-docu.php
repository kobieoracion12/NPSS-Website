<?php

include_once "database.php";

if(isset($_POST['edit-docu'])) {

    $no = $_POST['docu_no'];
    $name = $_POST['display_name'];
    
    $update = mysqli_query($config, "UPDATE docu_archive SET display_name = '$name' WHERE docu_no = '$no'");

    if($update) {
        header("Location: ../admin/main/nar-documents.php?edit-success");
    }
    else {
        header("Location: ../admin/main/nar-documents.php?edit-failed");
    }


    
}

?>