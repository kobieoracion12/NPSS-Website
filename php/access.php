<?php
include_once('database.php');
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
  header("location: ../../index.php");
  exit;
}
if (!isset($_SESSION["acc_priv"]) || $_SESSION["acc_priv"] != 'Admin') {
  header("location: ../../index.php?notvalid");
  exit;
}
?>