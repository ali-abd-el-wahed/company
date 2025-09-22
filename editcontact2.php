<?php
require_once 'connection.php';

if (
    isset($_GET['name']) && $_GET['name'] != "" &&
    isset($_GET['email']) && $_GET['email'] != "" &&
    isset($_GET['subject']) && $_GET['subject'] != "" &&
    isset($_GET['message']) && $_GET['message'] != ""
) {
    $name =   $_GET['name'];
    $email =   $_GET['email'];
    $subject = $_GET['subject'];
    $message = $_GET['message'];

    $query = "UPDATE `contact` SET `name`='$name', `subject`='$subject', `message`='$message' WHERE `email`='$email'";
    $result = mysqli_query($con, $query);

    if ($result) {
        header('location:viewcontact.php');
    
    } else {
        header("location:editcontact.php?email=$email");
        
    }
}
?>
