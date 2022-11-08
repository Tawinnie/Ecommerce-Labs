<?php
    include ("../controllers/product_controller.php");
    $products = searchproducts_ctr($_GET["psearch"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-hover">
  <thead>
    <tr>
        <th scope="col">Product Name</th>
        <th scope="col">Prodcut Price</th>
        <th scope="col">Product Image</th>
        <th scope="col">View</th>
        <th scope="col">Add to Cart</th>
    </tr>
  </thead>
  <tbody>
  <?php
        foreach($products as $key => $value) {
            echo '
                <tr>
                    <td>'. $value["product_title"] .'</td>
                    <td>'. $value["product_price"] .'</td>
                    <td>'. $value["product_image"] .'</td>
                    <td><a href="single_product.php?pid='. $value["product_id"] .'">View</a></td>
                    <td><button>Buy</button></td>
                </tr>';
        }
                ?>
                
  </tbody>
</table>
</body>
</html>