<?php
require_once 'connection.php';

// Get the opponent's name from the GET parameter
$season = $_GET['season'];

// Escape the opponent's name to prevent SQL injection
$escapedSeason = mysqli_real_escape_string($con, $season);


$query = "DELETE FROM `shirts` WHERE season = '$escapedSeason'";

$result = mysqli_query($con, $query);

if ($result) {
    // Successful deletion
    header("Location: viewshirt.php");
    exit(); // Important to exit after redirection
} else {
    // Error handling
    echo "Error: " . mysqli_error($con);
}

// Close the connection
mysqli_close($con);
?>
