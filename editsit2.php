<?php
require_once 'connection.php';

if(isset($_GET['class']) && ($_GET['class']!="")
        && isset($_GET['cost']) && ($_GET['cost']!="")
      )
{
  $class=$_GET['class'];  
  $cost=$_GET['cost'];
    

    $query = "UPDATE `sit` SET `class`='$class',`cost`='$cost' WHERE `class`='$class'";

$result = mysqli_query($con, $query);

if ($result) {
    header('Location: viewsit.php');
    exit();
} else {
    header("Location: editsit1.php?class=" . urlencode($class));
    exit();
}
}
?>