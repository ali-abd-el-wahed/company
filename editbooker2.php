<?php
require_once 'connection.php';
if (isset($_GET['email']) && ($_GET['email'] != "")
    && isset($_GET['match']) && ($_GET['match'] != "")
    && isset($_GET['sit']) && ($_GET['sit'] != "")
    && isset($_GET['cc']) && ($_GET['cc'] != ""))
{
    $email = mysqli_real_escape_string($con, $_GET['email']);
    $match = mysqli_real_escape_string($con, $_GET['match']);
    $sit = mysqli_real_escape_string($con, $_GET['sit']);
    $cc = mysqli_real_escape_string($con, $_GET['cc']);

    $query = "UPDATE `bookers` SET `match_stadium_date`='$match', `sit_cost`='$sit', `cc`='$cc' WHERE `email`='$email'";
    $result = mysqli_query($con, $query);
    if ($result)
    {
        header('location:viewbooker.php');
    }
    else
    {
        header("location:editbooker.php?email=$email");
    }
}
?>
