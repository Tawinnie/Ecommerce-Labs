
<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adding Brands</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
	<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Product Management</h2>            
				<form action="add_product.php" method="POST">

					<div class="form-outline form-white mb-4">
                   <button class="btn btn-outline-light btn-lg px-5" name="save_product" type="submit">Add Product</button>


						<!--<input type="text" name="brand_name" id="typeEmailX" placeholder="Name of Brand" class="form-control form-control-lg" /> -->
						<!-- <label class="form-label" for="typeEmailX">Brand</label> -->
					</div>
          <!-- <div class="d-flex justify-content-center">
                   <a href="add_brand.php" >update brands here</a>
              </div> -->


                  <!-- editi brand button-->
                 <!--<div class="form-outline form-white mb-4">

                    <button class="btn btn-outline-light btn-lg px-5" name="edit_brand" type="submit">Edit Brand</button>
					</div>-->


				<!--	<div class="d-flex justify-content-center text-center mt-4 pt-1">
						<a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
						<a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
						<a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
					</div>-->
				</form>
       </div>
       <!-- <table class="table table-dark">
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
      //<?php
        //include ("../controllers/product_controller.php");
        // include ("../functions/general_function.php");

        // $data = selectallproducts_ctr();
        // foreach($data as $key => $value) {
        //     echo '<tr>
        //             <td>
        //                 '. $value["product_cat"] .'</td>
        //                 <td>    '. $value["product_brand"].'   </td>     
        //                 <td>'. $value["product_title"].'        </td>
        //                 <td>'. $value["product_price"].'    </td>
        //                 <td>'. $value["product_desc"].' </td>
        //                 <td>'. $value["product_image"].' </td>
        //                 <td>'. $value["product_keywords"].'   </td>  
        //             <td>
        //             <a href="product_edit.php?id='.$value["product_id"].'">Edit</a>
        //             </td>
        //         </tr>';
        //}
      ?>
    </thead>
    <tbody>
   
    </tbody>
  </table> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</head>
</html>

