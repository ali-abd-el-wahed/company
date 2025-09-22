<?php
require_once 'connection.php';

if(isset($_GET['season']) && ($_GET['season']!="")
        && isset($_GET['type']) && ($_GET['type']!="")
)
{
  $season=$_GET['season'];  
  $type=$_GET['type'];

    $query = "UPDATE `shirts` SET `season`='$season', `type`='$type' WHERE `season`='$season'";

$result = mysqli_query($con, $query);

if ($result) {
    header('Location: viewshirt.php');
    exit();
} else {
    header("Location: editshirt.php?oppenent=" . urlencode($season));
    exit();
}
}
?>