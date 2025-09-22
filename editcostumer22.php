<?php
require_once 'connection.php';

if(isset($_GET['name']) && ($_GET['name']!="")
        && isset($_GET['email']) && ($_GET['email']!="")
        && isset($_GET['phone']) && ($_GET['phone']!="")
        && isset($_GET['kit']) && ($_GET['kit']!="")
        && isset($_GET['number']) && ($_GET['number']!="")
        && isset($_GET['kitName']) && ($_GET['kitName']!="")
        && isset($_GET['quantity']) && ($_GET['quantity']!="")
        && isset($_GET['cc']) && ($_GET['cc']!="")
        && isset($_GET['total']) && ($_GET['total']!=""))
{
  $name=$_GET['name'];  
  $email=$_GET['email'];
    $phone=$_GET['phone'];
    $kit=$_GET['kit'];  
    $number=$_GET['number'];
    $kitName=$_GET['kitName'];
    $quantity=$_GET['quantity'];
    $cc=$_GET['cc'];
    $total=$_GET['total'];

    $query = "UPDATE `costumer2` SET 
              `name`='$name',
              `email`='$email',
              `phone`='$phone',
              `jersey`='$kit',
              `number`='$number',
              `kit_name`='$kitName',
              `quantity`='$quantity',
              `cnumber`='$cc',
              `total_price`='$total' 
              WHERE `email`='$email'";


$result = mysqli_query($con, $query);

if ($result) {
    header('Location: viewcostumer2.php');
    exit();
} else {
    header("Location: editcostumer2.php?email=" . urlencode($email));
    exit();
}
}
?>