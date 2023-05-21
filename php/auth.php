<?php
include_once('database.php');
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = mysqli_real_escape_string($config,$_POST["email"]);
    $password = mysqli_real_escape_string($config,$_POST["password"]);

    $sql = "SELECT * FROM account_info WHERE reg_email = '$email' AND reg_password = '$password'";
    $result = mysqli_query($config, $sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);

    $uid = $row['employee_id'];
    
    $_SESSION['uid'] = $uid;

    if($count == 1) {

        $userdata = mysqli_query($config, "SELECT * FROM account_info,employee_info WHERE (account_info.employee_id = employee_info.employee_id) AND (employee_info.employee_id = '$uid')");

            while($rows = mysqli_fetch_array($userdata)) {
              $_SESSION['name'] = $rows['first_name']. " " .$rows['last_name'];
              $_SESSION['first_name'] = $rows['first_name'];
              $_SESSION['last_name'] = $rows['last_name'];
              $_SESSION['email'] = $rows['email'];
              $_SESSION['acc_priv'] = $rows['acc_priv'];
              $_SESSION["loggedin"] = true;
              $_SESSION['employee_id'] = $rows['employee_id'];
           }

        $query = mysqli_query($config, "SELECT acc_priv FROM account_info WHERE employee_id = '$uid'");

        while($rows = mysqli_fetch_array($query)) {
            $priv = $rows['acc_priv'];

            if ($priv == "Admin") {
                header("Location: ../admin/main/nar-dashboard.php?loginsuccess");
            }
            else if ($priv == "Administration") {
                header("Location: ../administration/main/admin-dashboard.php?loginsuccess");
            }
            else if ($priv == "Finance") {
                header("Location: ../finance/main/finance-dashboard.php?loginsuccess");
            }
            else if ($priv == "Purchasing") {
                header("Location: ../purchasing/main/purchase-dashboard.php?loginsuccess");
            }
            else {
                header("Location: ../index.php?invalid");
            }
            
            mysqli_close($config);
        }

    }
    else {
       header("Location: ../index.php?logininvalid");
    }
}

?>