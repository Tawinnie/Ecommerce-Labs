<?php
     include ("../functions/general_function.php");
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
<form action="../actions/edit_product.php" method="POST">
                        <div>
                                <label for="product_cat">Category:</label><br>
                                        <select name="new_product_cat" id="mycat">
                                             <?php
                                                //call function to dynamically display  categories on dropdown
                                            get_all_cat_function()
                                            ?>
                                        </select>
                    
                                </div>

                                <div>
                                  <label for="pbrand">Brand:</label><br>
                                        <select name="new_product_brand" id="brand">
                                        <?php
                                            //call a function to dynamically display the brands on dropdown
                                            get_all_brands_function()
                                        ?>
                                        </select>
                                    
                                </div>
                        <div>
                            <input type="text" name="new_product_title" placeholder="Add the new product title">
                          </div>

                          <div>
                            <input type="text" name="new_product_price" placeholder="Enter the new product price">
                            </div>

                            <div><input type="text" name="new_product_descr" placeholder="Add new product description" >
                            </div>
                            
                           <div>
                              <input type="text" name="new_product_image" placeholder="Write the image name" >
                           </div> 
                           <div> 
                              <input type="text" name="new_product_keywords" placeholder="Add the product keyword">
                           </div> 
                            <input type="hidden" name="product_id" value="<?php echo $_GET["id"] ?>" required>

                            <div> 
                              <input type="submit" name="update_product" value="update_product">
                            </div>
                        </form>
</body>
</html>