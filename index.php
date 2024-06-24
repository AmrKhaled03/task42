<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css links -->

    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>ONLINE SHOPPING</title>
</head>

<body>

    <!-- start main section -->
    <section class="main py-5 px-3">
        <div class="container p-3">
            <h1>
                ONLINE SHOPPING
            </h1>
            <img src="./imgs/A marketplace for handmade, vintage, and unique items, often crafted by independent artisans and sel.jpg" alt="logo" loading="lazy" class="img-fluid">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <div class="input-field">

                    <input type="text" name="name" placeholder="Enter Product Name :">
                </div>
                <div class="input-field">

                    <input type="text" name="price" placeholder="Enter Product Price :">
                </div>
                <div class="buttons d-flex my-3 w-100 justify-content-center">
                    <div class="file-up mx-2">
                        <label for="file">Upload Image</label>
                        <input type="file" name="image" id="file" class="file" required>
                    </div>

                    <button type="submit" name="upload" id="upload">ADD PRODUCT</button>
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