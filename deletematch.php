<?php
require_once 'connection.php';

// Get the opponent's name from the GET parameter
$opponent = $_GET['oppenent'];

// Escape the opponent's name to prevent SQL injection
$escapedOpponent = mysqli_real_escape_string($con, $opponent);


$query = "DELETE FROM `matches` WHERE oppenent = '$escapedOpponent'";

$result = mysqli_query($con, $query);

if ($result) {
    // Successful deletion
    header("Location: viewmatch.php");
    exit(); // Important to exit after redirection
} else {
    // Error handling
    echo "Error: " . mysqli_error($con);
}

// Close the connection
mysqli_close($con);
?>
