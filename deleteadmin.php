<?php
require_once 'connection.php';
$email = $_GET['email'];

$query2 = "DELETE FROM admin WHERE email='$email'";
$result2 = mysqli_query($con, $query2);

header("location:viewadmin.php");
?>
