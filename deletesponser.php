<?php
require_once 'connection.php';

// Get the opponent's name from the GET parameter
$brand_name = $_GET['brand_name'];

// Escape the opponent's name to prevent SQL injection
$escapedBrand = mysqli_real_escape_string($con, $brand_name);


$query = "DELETE FROM `sponsers` WHERE brand_name = '$escapedBrand'";

$result = mysqli_query($con, $query);

if ($result) {
    // Successful deletion
    header("Location: viewsponser.php");
    exit(); // Important to exit after redirection
} else {
    // Error handling
    echo "Error: " . mysqli_error($con);
}

// Close the connection
mysqli_close($con);
?>
