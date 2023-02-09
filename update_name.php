<?php
$con= mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_errno($con));
session_start();
$first_name=$_GET['first_name'];
$user_id=$_SESSION['id'];
$update_name_query="update  users set first_name='$first_name' where id='$user_id'";
$update_name_result= mysqli_query($con, $update_name_query) or die(mysqli_errno($con));
echo 'Name Updated';
?>
