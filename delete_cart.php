<?php
include('config.php');

// Check if 'id' parameter is provided in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']); // Sanitize the 'id' parameter

    // Construct the DELETE query
    $query = "DELETE FROM cart WHERE id = $id";

    // Execute the DELETE query
    if (mysqli_query($conn, $query)) {
        // Redirect to index.php after successful deletion
        header("Location:./shop.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // No 'id' parameter provided in the URL
    echo "No id parameter provided";
}

mysqli_close($conn);
