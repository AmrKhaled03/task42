<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css links -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>UPDATE PRODUCT</title>
</head>

<body>
    <!-- start update section -->
     <?php
     include('./config.php');
   // Check if 'id' parameter is provided in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']); // Sanitize the 'id' parameter

    // Construct the UPDATE query
    $update = "SELECT * FROM product WHERE id = $id";
    $req=mysqli_query($conn,$update);
    $data=mysqli_fetch_array($req);


}
     
     ?>
    <section class="update py-5 px-3">
        <div class="container p-3">
            <h1>
               UPDATE PRODUCT
            </h1>
            <img src="./imgs/update.jpeg" alt="logo" loading="lazy" class="img-fluid">
            <form action="up.php" method="post" enctype="multipart/form-data">
            <div class="input-field">

<input type="text" name="id" value='<?php echo $data['id'] ?>'>
</div>
                <div class="input-field">

                    <input type="text" name="name" value='<?php echo $data['name'] ?>'>
                </div>
                <div class="input-field">

                    <input type="text" name="price" value='<?php echo $data['price'] ?>'>
                </div>
                <div class="buttons d-flex my-3 w-100 justify-content-center">
                    <div class="file-up mx-2">
                        <label for="file">UPDATE IMAGE</label>
                        <input type="file" name="image" id="file" class="file" required>
                    </div>

                    <button type="submit" name="update" id="upload">UPDATE PRODUCT</button>
                </div>

                <a href="products.php" class="p-3 text-center">SHOW ALL PRODUCTS</a>
            </form>
        </div>
    </section>

    <!-- end main section -->
    <!-- script links -->
    <script src="./js/bootstrap.bundle.min.js"></script>

</body>

</html>