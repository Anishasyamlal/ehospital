<?php
include 'connection.php';
session_start();
$id=$_GET['edit_id'];
mysqli_query($conn,"update request_tb set status='1' where doctor_id='$id'");
header("location:approve_leave.php");
?>