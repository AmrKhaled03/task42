<?php

include('config.php');

if (isset($_POST['upload'])) {
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "./imgs/" . $image_name;

    // Insert the product information into the database
    $insert = "INSERT INTO product (name, price, image) VALUES ('$NAME', '$PRICE', '$image_up')";

    if (mysqli_query($conn, $insert)) {
        // Move the uploaded file to the desired location
        if (move_uploaded_file($image_location, $image_up)) {
            echo '<script>alert("Upload Successful!");</script>';
        } else {
            echo '<script>alert("Error in moving the uploaded file.");</script>';
        }
    } else {
        echo '<script>alert("Error in database query: ' . mysqli_error($conn) . '");</script>';
    }

    // Redirect to the index page after handling the form submission
    header("Location: index.php");
    exit(); // Ensure to exit after the header redirection
}
