<?php
require_once 'connection.php';

if(isset($_GET['numb']) && ($_GET['numb']!="")
        && isset($_GET['name']) && ($_GET['name']!="")
        && isset($_GET['last']) && ($_GET['last']!="")
        && isset($_GET['pos']) && ($_GET['pos']!=""))
{
  $numb=$_GET['numb'];  
  $name=$_GET['name'];
    $last=$_GET['last'];
    $pos=$_GET['pos'];  

    $query = "UPDATE `players` SET `number`='$numb', `name`='$name', `last_name`='$last', `position`='$pos' WHERE `number`='$numb'";

$result = mysqli_query($con, $query);

if ($result) {
    header('Location: viewplayer.php');
    exit();
} else {
    header("Location: editplayer.php?number=" . urlencode($numb));
    exit();
}
}
?>