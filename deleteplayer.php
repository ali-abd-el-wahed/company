<?php
require_once 'connection.php';

// Get the opponent's name from the GET parameter
$number = $_GET['number'];

// Escape the opponent's name to prevent SQL injection
$escapedNumber = mysqli_real_escape_string($con, $number);


$query = "DELETE FROM `players` WHERE number = '$escapedNumber'";

$result = mysqli_query($con, $query);

if ($result) {
    // Successful deletion
    header("Location: viewplayer.php");
    exit(); // Important to exit after redirection
} else {
    // Error handling
    echo "Error: " . mysqli_error($con);
}

// Close the connection
mysqli_close($con);
?>
