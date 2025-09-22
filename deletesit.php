<?php
require_once 'connection.php';

// Get the opponent's name from the GET parameter
$class = $_GET['class'];

// Escape the opponent's name to prevent SQL injection
$escapedClass = mysqli_real_escape_string($con, $class);


$query = "DELETE FROM `sit` WHERE class = '$escapedClass'";

$result = mysqli_query($con, $query);

if ($result) {
    // Successful deletion
    header("Location: viewsit.php");
    exit(); // Important to exit after redirection
} else {
    // Error handling
    echo "Error: " . mysqli_error($con);
}

// Close the connection
mysqli_close($con);
?>
