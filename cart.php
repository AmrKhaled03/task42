<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS links -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css"> <!-- Ensure this path is correct -->

    <title>CART</title>
</head>
<body>
    <?php
    include('./config.php');
    $get = "SELECT * FROM cart";
    $q = mysqli_query($conn, $get);
    ?>

 <section class="cart my-5 p-3">
    <div class="container">
     <h1 class="text-center m-5">
        YOUR CART  
     </h1>

        <table border="2" class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">PRICE</th>
            <th scope="col">ACTION</th>
        </tr>
    </thead>
    <tbody>
    <?php
            while ($data = mysqli_fetch_array($q)) {
               echo '

               <tr>
                   <td scope="row">'.$data['id'].'</td>
                   <td scope="row">'.$data['name'].'</td>
                   <td scope="row">'.$data['price'].'</td>
                   <td scope="row">
                       <a href="./delete_cart.php?id='.$data['id'].'" class="btn btn-danger">DELETE</a>
                   </td>
               </tr>
               
               ';
            }
            ?>
    </tbody>
</table>
<a href="./shop.php" class="text-decoration-none text-dark m-5">RETURN TO PRODUCTS</a>
    </div>
 </section>

    <!-- script links -->
    <script src="./js/bootstrap.bundle.min.js"></script>

</body>
</html>
