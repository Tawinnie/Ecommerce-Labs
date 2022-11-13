<?php 
session_start();
require("../functions/cart_function.php");
require("../controllers/cart_controller.php");
$allproducts =  view_your_cart_ctrl($_SESSION["customer_id"]);
$ip_address= get_ip_address();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>

<!-- <nav class="navbar navbar-light bg-light justify-content-between">
      <button type="button" onclick="window.location.href='all_products.php'" class="btn btn-warning">CONTINUE SHOPPING</button><br>
      <button type="button" onclick="window.location.href='../index.php'" class="btn btn-success">PROCEED TO PAYMENT</button>
      <button type="button" onclick="window.location.href='payment.php' "class="btn btn-success">SUB TOTAL </button><br> 
      <header id="header" class="fixed-top d-flex align-items-center header-transparent">
          <div class="container d-flex align-items-center">
              </header>
        </nav> -->

<h1>Cart Items</h1>

<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total Amount</th>
            <th scope="col">Update Quantity</th>
            <th scope="col">Remove from Cart</th>
          </tr>
        </thead>
        <tbody>
<?php

      foreach($allproducts as $key => $value)
      {
            echo '
        <tr>
            <td>' .$value["product_title"] . '</td>
            <td>' .$value["product_price"] . '</td>
            <td>' .$value["qty"] . '</td>
            <td>'. $value["qty"] * $value["product_price"] .' </td>

          <td>
              <form class="form-inline" method="POST" action="../actions/manage_quantity_cart.php">
                  <input class="form-control mr-sm-2" type="hidden" value="'.$ip_address.'" name="ip">
                  <input class="form-control mr-sm-2" type="hidden" value="'. $_SESSION["customer_id"].'" name="customer_id">
                  <input class="form-control mr-sm-2" type="hidden" name="product_id" value =" '.$value["product_id"].'">
                  <input class="form-control mr-sm-2" name="quantity" type="number" placeholder="Quantity" aria-label="Quantity">
                  <input type="submit" name="manage_cart" value="Update Quantity">
              </form>
          </td>
            
          <td>
              <form class="form-inline" method="POST" action="../actions/remove_from_cart.php">
                  <input class="form-control mr-sm-2" type="hidden" value="'. $_SESSION["customer_id"].'" name="customer_id">
                  <input class="form-control mr-sm-2" type="hidden" name="product_id" value =" '.$value["product_id"].'" >
                  <input type="submit" name="remove" value="Remove">
              </form>
          </td>

         <br>

        </tr> ';
          }
          ?>
          
</body>
</html>