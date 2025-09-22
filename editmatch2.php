<?php
require_once 'connection.php';

if(isset($_GET['opp']) && ($_GET['opp']!="")
        && isset($_GET['stad']) && ($_GET['stad']!="")
        && isset($_GET['date']) && ($_GET['date']!="")
        && isset($_GET['comp']) && ($_GET['comp']!=""))
{
    $opp=$_GET['opp'];  
  $stad=$_GET['stad'];
    $date=$_GET['date'];
    $comp=$_GET['comp'];  
    
    $query = "UPDATE `matches` SET `oppenent`='$opp', `stadium`='$stad', `date`='$date', `competition`='$comp' WHERE `oppenent`='$opp'";

$result = mysqli_query($con, $query);

if ($result) {
    header('Location: viewmatch.php');
    exit();
} else {
    header("Location: editmatch.php?oppenent=" . urlencode($opp));
    exit();
}
}
?>