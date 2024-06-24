<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS links -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>PRODUCTS</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">

           
              <a href="./cart.php" class="btn btn-warning text-white ms-auto">MY CART</a>        

                         
                </div>

   

    </nav>
    <section class="products my-5 p-3">
        <div class="container">
            <div class="row p-5 d-flex justify-content-center">
                <div class="col-12 text-center">
                  <h1>
                  ALL AVAILABLE PRODUCTS
                  </h1>
               
                </div>
            </div>
            <div class="row">
                <?php
                include('./config.php');

                $query = 'SELECT * FROM product'; // Assuming your table name is 'product'
                $req = mysqli_query($conn, $query);

                if (!$req) {
                    die('Error executing query: ' . mysqli_error($conn));
                }

                while ($row = mysqli_fetch_array($req)) {
                    echo '
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="product">
                            <img src="' . $row['image'] . '" alt="img" class="img-fluid" loading="lazy">
                            <h3>' . $row['name'] . '</h3>
                            <span>' . $row['price'] . '</span>
                            <div class="btns">

                             
                               <a href="./val.php?id=' . $row['id'] . '" class="text-white btn btn-success">ADD TO CART</a>

                              
                            </div>
                        </div>
                    </div>';
                }

                mysqli_close($conn);
                ?>
            </div>
        </div>
    </section>

    <!-- Script links -->
    <script src="./js/bootstrap.bundle.min.js"></script>

</body>

</html>