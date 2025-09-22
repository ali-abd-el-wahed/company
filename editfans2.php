<?php
require_once 'connection.php';
if(isset($_GET['fanId']) && ($_GET['fanId']!="")
        && isset($_GET['name']) && ($_GET['name']!="")
        && isset($_GET['email']) && ($_GET['email']!="")
        &&  isset($_GET['pass']) && ($_GET['pass']!="")
        &&  isset($_GET['dob']) && ($_GET['dob']!=""))
{
    $fanId=$_GET['fanId'];
    $name=$_GET['name'];
    $email=$_GET['email'];
    $pass=$_GET['pass'];
    $dob=$_GET['dob'];
    
    $query="UPDATE `fan` SET `fanId`='$fanId',`name`='$name',`email`='$email',`pass`='$pass',`Dob`='$dob' WHERE fanId = $fanId ";
    $result= mysqli_query($con, $query);
    if($result)
    {
        header("location:viewfans.php");
    }
    else
    {
        header("location:editfans.php?ssn=$ssn");
    }

}