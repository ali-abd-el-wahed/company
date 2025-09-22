<?php
require_once 'connection.php';

if (
    isset($_GET['name'], $_GET['email'], $_GET['phone'], $_GET['player'], $_GET['kit'], $_GET['quantity'], $_GET['cc'], $_GET['total']) &&
    $_GET['name'] !== '' && $_GET['email'] !== '' && $_GET['phone'] !== '' && $_GET['player'] !== '' &&
    $_GET['kit'] !== '' && $_GET['quantity'] !== '' && $_GET['cc'] !== '' && $_GET['total'] !== ''
) {
    $name = mysqli_real_escape_string($con, $_GET['name']);
    $email = mysqli_real_escape_string($con, $_GET['email']);
    $phone = mysqli_real_escape_string($con, $_GET['phone']);
    $player = mysqli_real_escape_string($con, $_GET['player']);
    $kit = mysqli_real_escape_string($con, $_GET['kit']);
    $quantity = mysqli_real_escape_string($con, $_GET['quantity']);
    $cc = mysqli_real_escape_string($con, $_GET['cc']);
    $total = mysqli_real_escape_string($con, $_GET['total']);

    $query = "UPDATE `costumer1` SET `name`='$name', `phone_number`='$phone', `player`='$player',   `jersey`='$kit',   `quantity`='$quantity',   `cnumber`='$cc', `total_price`='$total' WHERE `email`='$email'";

    $result = mysqli_query($con, $query);

    if ($result) {
        header('Location: viewcostumer1.php');
        exit();
    } else {
        header("Location: editcostumer1.php?email=" . urlencode($email));
        exit();
    }
}
?>
