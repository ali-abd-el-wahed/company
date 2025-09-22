<?php
require_once 'connection.php';
$email = $_GET['email'];

$query2 = "DELETE FROM contact WHERE email='$email'";
$result2 = mysqli_query($con, $query2);

header("location:viewcontact.php");
?>
