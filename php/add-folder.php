<?php

include_once "database.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $path = "../../assets/icon/folder_icon.png";

    $file_name = pathinfo($path, PATHINFO_BASENAME);
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $name = $_POST['folder-name'];
    
    $insert = mysqli_query($config, "INSERT INTO docu_archive (display_name, display_icon, display_type) VALUES ('$name', '$file_name', '$ext')");

    if($insert) {
        header("Location: ../admin/main/nar-documents.php?success");
    }
    else {
        header("Location: ../admin/main/nar-documents.php?failed");
    }
}

?>