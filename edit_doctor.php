<?php
include 'connection.php';
session_start();
$id=$_GET['edit_id'];
mysqli_query($conn,"update doctor_reg set approve='1' where doctor_id='$id'");
header("location:approve_doctor.php");
?>