<?php
session_start();
include_once("database.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$emp_id = $_POST["emp_id"];
	$quot_no = $_POST["quot_no"];
	$comment = mysqli_real_escape_string($config,$_POST["content_comment"]);

	$sql = mysqli_query($config,"INSERT INTO quotation_comment (quotation_no, employee_id, comment) VALUES ('$quot_no', '$emp_id', '$comment')");
}
?>
