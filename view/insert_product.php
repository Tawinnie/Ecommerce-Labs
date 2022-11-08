<!-- <?php 
//form to insert product into database
?>
<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
   // <?php


    //function for category
  //step one create awareness
    //require('../controllers/general_controller.php');
    //require('../function/general_function.php');

?>
    
    <form action="../actions/save_product.pph">
        <label for="pcat">Category:</label><br>
              <select name="pcat" id="mycat">
                <?php 
                //call function to dynamically display  categories on dropdown
              //get_all_cat_function();
              ?>
                  <option value="volvo">Fruits</option>
                  <option value="saab">Clothes</option>
                  <option value="mercedes">Electronis</option>
                  <option value="audi">Kitchenette</option> -->
              <!-- </select> -->
<!-- 
        <input type="text" id="pcat" name="product_cat"><br>
        <label for="pbrand">Brand:</label><br>
            <select name="pbrand" id="cars"> -->
                <!-- <option value="apple">Apple</option> -->
                <?php 
                  //call a function to dynamically display the brands on dropdown
                  
                  //get_all_brands_function();
                ?>
                <!-- <option value="google">Google</option>
                <option value="samsung">Samsung</option>
                <option value="acer">Acer</option> -->
            <!-- </select>
        <input type="text" id="ptitle" name="product_brand">
        <label for="ptitle">Title:</label><br>
        <input type="text" id="ptitle" name="product_title><br>
        <label for="lname">Price:</label><br>
        <input type="text" id=pprice name="price">
        <input type="submit" id="submitting" name="submit" value="Save Product">

  </form> --> -->
