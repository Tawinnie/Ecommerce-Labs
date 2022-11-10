<?php

include ('../controllers/product_controller.php');
// check if button is clicked
//editing brand
if (isset($_POST["add_to_cart"])){
    $id=$_POST["product_id"];
    $quantity= $_POST["product"];
    $ip_address= $_POST["ip_address"];
    $customer_id = $_POST["customer_id"];

    //checking for duplicare before adding to cart

  $result =newupdate($id,$new_brand);
  if($result)
  {
    session_start();
        $_SESSION["upadte_brand"] = true;
    header("Location: ../Admin/brands.php");
  }else {
    echo "Failed";
  }

}