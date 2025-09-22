<?php
require_once 'connection.php';

if(isset($_GET['brand_name']) && ($_GET['brand_name']!="")
        && isset($_GET['phone']) && ($_GET['phone']!="")
        && isset($_GET['web']) && ($_GET['web']!="")

        )
{
  $brand_name=$_GET['brand_name'];  
  $phone=$_GET['phone'];
  $web=$_GET['web'];
    

    $query = "UPDATE `sponsers` SET `brand_name`='$brand_name',`phone`='$phone',`website`='$web' WHERE `brand_name`='$brand_name'";

$result = mysqli_query($con, $query);

if ($result) {
    header('Location: viewsponser.php');
    exit();
} else {
    header("Location: editsponser1.php?brand_name=" . urlencode($brand));
    exit();
}
}
?>