<?php

include_once "database.php";

if(isset($_POST['update'])) {

    $quotation = $_FILES['quotation_file']['name'];
    $quotation_no = $_POST['quotation'];
    $display_name = $_POST['display_name'];
    
    $folder = "../uploads/quotations/".$quotation;
    $extension = pathinfo($quotation, PATHINFO_EXTENSION);
    
    $folder = "../uploads/quotations/".$quotation;
    if(empty($quotation)) {
        $update = mysqli_query($config, "UPDATE quotation SET display_name = '$display_name' WHERE quotation_no = '$quotation_no'");

        if($update) {
            move_uploaded_file($_FILES['quotation']['tmp_name'], "$folder");
            header("Location: ../admin/main/nar-quotations.php?update-success");
        }
        else {
            header("Location: ../admin/main/nar-quotations.php?update-failed");
        }
    }
    else {
        if (!in_array($extension, ['xls','xlsb','xlsm','xlsx'])) {
            echo "Your file must be an excel file!";
        }
        else {
            $update = mysqli_query($config, "UPDATE quotation SET display_name = '$display_name', quotation_file = '$quotation' WHERE quotation_no = '$quotation_no'");

            if($update) {
                move_uploaded_file($_FILES['quotation']['tmp_name'], "$folder");
                header("Location: ../admin/main/nar-quotations.php?update-success");
            }
            else {
                header("Location: ../admin/main/nar-quotations.php?update-failed");
            }
        }
    }
}

?>