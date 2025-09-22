<?php
require_once 'connection.php';
if(isset($_GET['name']) && ($_GET['name']!="")
        && isset($_GET['email']) && ($_GET['email']!="")
        && isset($_GET['subject']) && ($_GET['subject']!="")
        &&  isset($_GET['message']) && ($_GET['message']!=""))
{
    $name=$_GET['name'];
    $email=$_GET['email'];
    $subject=$_GET['subject'];
    $message=$_GET['message'];
    
    $query="INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
    //echo $query;
    $result= mysqli_query($con, $query);
    
    If(!$result)
    {
        die("error in insert command");
    }
    else {
    header("location:index.php");
    }}
?>