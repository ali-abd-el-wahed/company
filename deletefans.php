<?php
require_once 'connection.php';
$fanId=$_GET['fanId'];

$query2="DELETE FROM fan where fanId=$fanId";
$result2= mysqli_query($con, $query2);

header("location:viewfans.php");

?>
