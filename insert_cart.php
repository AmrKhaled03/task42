<?php
include('./config.php');

if (isset($_POST['verify'])) {
    $ID=$_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];

    $insert = "INSERT INTO cart (name,price) VALUES('$NAME','$PRICE')";
    if (mysqli_query($conn, $insert)) {
        echo '<script>alert("ADDED SUCCESSFULLY !");</script>';
        // Redirect to the index page after handling the form submission
        header("Location: shop.php");
    } else {
        echo '<script>alert("Error in database query: ' . mysqli_error($conn) . '");</script>';
    }


    exit(); // Ensure to exit after the header redirection

}
