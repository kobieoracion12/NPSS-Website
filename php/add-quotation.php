<?php
include_once "database.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $quotation = $_FILES['quotation']['name'];

    $company_no = $_POST['company_no'];
    $display_name = $_POST['display_name'];
    $extension = pathinfo($quotation, PATHINFO_EXTENSION);
    
    $folder = "../uploads/quotations/".$quotation;
    if (!in_array($extension, ['xls','xlsb','xlsm','xlsx'])) {
        echo "Your file must be an excel file!";
    }
    else {

        $insert = mysqli_query($config, "INSERT INTO quotation (company_no, display_name, quotation_file) VALUES ('$company_no', '$display_name', '$quotation')");

        if($insert) {
            move_uploaded_file($_FILES['quotation']['tmp_name'], "$folder");
            header("Location: ../admin/main/nar-quotations.php?success");
        }
        else {
            header("Location: ../admin/main/nar-quotations.php?failed");
        }
    }
}

?>