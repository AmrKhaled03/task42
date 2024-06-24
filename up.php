<?php

include('config.php');

if (isset($_POST['update'])) {
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "./imgs/" . $image_name;
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = mysqli_real_escape_string($conn, $_POST['id']); // Sanitize the 'id' parameter

     // Insert the product information into the database
    $update = "UPDATE product SET name='$NAME',price='$PRICE' ,image='$image_up' WHERE id= '$id'";

    if (mysqli_query($conn, $update)) {
        // Move the uploaded file to the desired location
        if (move_uploaded_file($image_location, $image_up)) {
            echo '<script>alert("Update Successful!");</script>';
        } else {
            echo '<script>alert("Error in moving the updated file.");</script>';
        }
    } else {
        echo '<script>alert("Error in database query: ' . mysqli_error($conn) . '");</script>';
    }

    // Redirect to the index page after handling the form submission
    header("Location: ./products.php");
    exit(); // Ensure to exit after the header redirection   

    }
    
}
