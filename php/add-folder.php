<?php

include_once "database.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $path = "../../assets/icon/folder_icon.png";

    $file_name = pathinfo($path, PATHINFO_BASENAME);
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $name = $_POST['folder-name'];
    $access = $_POST['access'];
    
    $insert = mysqli_query($config, "INSERT INTO docu_archive (display_name, display_icon, display_type) VALUES ('$name', '$file_name', '$ext')");

    if($insert) {
        $id = mysqli_insert_id($config);
        foreach ($access as $key) {
            $query= mysqli_query($config, "INSERT INTO file_access (docu_no, position_no) VALUES ('$id', '".$key."')");
        }
        if ($query) {
            header("Location: ../admin/main/nar-documents.php?success");
        }
    }
    else {
        header("Location: ../admin/main/nar-documents.php?failed");
    }
}

?>