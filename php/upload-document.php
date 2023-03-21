<?php

include_once "database.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $display = $_POST['display_name'];

    $insert = mysqli_query($config, "INSERT INTO docu_archive (display_name) VALUES ('$display')");

    if($insert) {
        header("Location: ../admin/main/nar-documents.php?success");
    }
    else {
        header("Location: ../admin/main/nar-documents.php?archive-failed");
    }
}

?>