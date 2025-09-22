<?php
require_once 'connection.php';
if (isset($_GET['email']) && ($_GET['email'] != "")
    && isset($_GET['pass']) && ($_GET['pass'] != "")
)
{
    $email = mysqli_real_escape_string($con, $_GET['email']);
    $pass = mysqli_real_escape_string($con, $_GET['pass']);

    $query = "UPDATE `admin` SET `email`='$email', `pass`='$pass'";
    $result = mysqli_query($con, $query);
    if ($result)
    {
        header('location:viewadmin.php');
    }
    else
    {
        header("location:editadmin.php?email=$email");
    }
}
?>
