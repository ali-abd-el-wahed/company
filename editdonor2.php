<?php
require_once 'connection.php';
if(isset($_GET['name']) && ($_GET['name']!="")
        && isset($_GET['email']) && ($_GET['email']!="")
        && isset($_GET['phone']) && ($_GET['phone']!="")
        && isset($_GET['amount']) && ($_GET['amount']!="")
        &&  isset($_GET['cc']) && ($_GET['cc']!=""))
{
  $name=$_GET['name'];  
  $email=$_GET['email'];
    $phone=$_GET['phone'];
    $amount=$_GET['amount'];
    $cc=$_GET['cc'];
    
    $query = "UPDATE `donars` SET `name`='$name', `email`='$email', `phone_number`='$phone', `amount`='$amount', `cardNB`='$cc' ";
    $result = mysqli_query($con, $query);
    if ($result)
    {
        header('location:viewdonor.php');
    }
    else
    {
        header("location:editdonor.php?email=$email");
    }
}
?>
