

<?php
session_start();
require("../functions/cart_function.php");
include ("../controllers/product_controller.php");
$allproducts = selectallproducts_ctr();
$ip_address= get_ip_address();

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
    <br></br>
<a href="add_product.php">Add Products</a>
<br></br>

<form action="product_search_result.php">
    <input type="text" name="psearch" placeholder="Search by name">
    <input type="submit" value="Search" name="submit">   
</form>

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
       // include ("../controllers/product_controller.php");
        // include ("../fun/product_function.php");

//        $data = selectallproducts_ctr();
        foreach($allproducts as $key => $value) {
            echo '
                <tr>
                    <td>'. $value["product_title"] .'</td>
                    <td>'. $value["product_price"] .'</td>
                    <td>'. $value["product_image"] .'</td>
                    <td><a href="single_product.php?pid='. $value["product_id"] .'">View</a></td>
                 
                            </a>
                    </td>
                    <td>
                <form class="form-inline" method="POST" action="../actions/add_to_cart.php">
                  <input class="form-control mr-sm-2" type="hidden" value="'.$ip_address.'" name="ip">
                  <input class="form-control mr-sm-2" type="hidden" value="'. $_SESSION["customer_id"].'" name="customer_id">
                  <input class="form-control mr-sm-2" type="hidden" name="product_id" value =" '.$value["product_id"].'">
                  <input class="form-control mr-sm-2" name="quantity" type="number" placeholder="Quantity" aria-label="Quantity">
                  <input type="submit" name="add_to_cart" value="Add to Cart">
                </form>
              </td>
                <be>

                
              </tr>  
                </tr>';
        }
                ?>

  </tbody>
</table>
<br><br>
<a href="cart.php">View Your Cart</a>
</body>
</html>