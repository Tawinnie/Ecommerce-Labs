<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Product Category</th>
        <th scope="col">Product Brand</th>
        <th scope="col">Product Title</th>
        <th scope="col">Product Price</th>
        <th scope="col">Product Description</th>
        <th scope="col">Product Image</th>
        <th scope="col">Product Keywords</th>
        <th scope="col">Product Edit</th>
      </tr>
      <?php
        //include ("../controllers/product_controller.php");
        include ("../functions/general_function.php");

        $data = selectallproducts_ctr();
        foreach($data as $key => $value) {
            echo '<tr>
                    <td>
                        '. $value["product_cat"] .'</td>
                        <td>    '. $value["product_brand"].'   </td>     
                        <td>'. $value["product_title"].'        </td>
                        <td>'. $value["product_price"].'    </td>
                        <td>'. $value["product_desc"].' </td>
                        <td>'. $value["product_image"].' </td>
                        <td>'. $value["product_keywords"].'   </td>  
                    <td>
                    <a href="product_edit.php?id='.$value["product_id"].'">Edit</a>
                    </td>
                </tr>';
        }
      ?>
    </thead>
    <tbody>
   
    </tbody>
  </table>
</body>
</html>