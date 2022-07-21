<?php
include 'connection.php';
session_start();
$id=$_GET['dlt_id'];
mysqli_query($conn,"delete from medicine_tb where medicine_id='$id'");
header("location:admin_index.php");
?>