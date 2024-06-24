<?php
include('config.php');
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']); // Sanitize the 'id' parameter
    $val = mysqli_query($conn, "SELECT * FROM product WHERE id=$id");
    $data = mysqli_fetch_array($val);
} else {
    // No 'id' parameter provided in the URL
    echo "No id parameter provided";
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css links -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>VALIDATE PRODUCT</title>
</head>

<body>

<section  class="update py-5 px-3">
        <div class="container p-3">
            <h1 class="my-5 text-center w-100">
                DO YOU WANT TO BUY THIS PRODUCT
            </h1>
            <form action="./insert_cart.php" method="POST">
                <div class="input-field">
                    <input type="text" name="id" value='<?php echo $data['id']; ?>' readonly>
                </div>
                <div class="input-field">
                    <input type="text" name="name" value='<?php echo $data['name']; ?>' readonly>
                </div>
                <div class="input-field">
                    <input type="text" name="price" value='<?php echo $data['price']; ?>' readonly>
                </div>
                <button type="submit" name="verify" class="btn btn-success w-100">VERIFY</button>
            <a href="./shop.php">RETURN TO PRODUCTS</a>    
            </form>
        </div>
        
    </section>
    
    <!-- Script links -->
    <script src="./js/bootstrap.bundle.min.js"></script>

</body>

</html>