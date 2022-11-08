
<?php

//class
require('../settings/db_class.php');

class Brand extends db_connection
{
  //function to add new brand
      function addbrand($brand)
      {
        $addbrand = "INSERT INTO `brands`( `brand_name`) VALUES ('$brand')";
        return $this->db_query($addbrand);
      }
//function to display brands
    function display(){
        $select= "SELECT * FROM `brands`";
        return $this->db_fetch_all($select);
    }
    //function to update brand 
    function updatebrand($id,$brand){
      $update = "UPDATE `brands` SET `brand_name`='$brand' WHERE brand_id='$id'";
      return $this->db_query($update);
    }
   //CATEGORIES QUERIES
    //category classes 
    //function to add category 
    function addcategory($cat_name)
      {
        $addcategory= "INSERT INTO `categories`( `cat_name`) VALUES ('$cat_name')";
        return $this->db_query($addcategory);
      }
      //function to to select categories for display

      function selectcategory()
      {
        $selectcat= "SELECT * FROM `categories`";
        return $this->db_fetch_all($selectcat);
      }
      // to update/edit categories
      function updatecategory($id,$cat_name){
        $catupdate= "UPDATE `categories` SET `cat_name`='$cat_name' WHERE cat_id='$id'";
        return $this->db_query($catupdate);
      }
    
      //PRODUCT QUERIES 
    // insert product into the database

          function add_product($cat, $brand,$title,$price,$descr,$image,$keyword)
          {
            $sql = "INSERT INTO `products`(`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) 
                     VALUES ('$cat','$brand','$title','$price','$descr','$image','$keyword')";
                    return $this->db_query($sql);
          }

          function selectoneproduct($product_id)
          {
            $display= "SELECT * FROM `products` WHERE `product_id` = '$product_id'"; 
            return $this->db_fetch_one($display);
          }
          //slecting products to display them
          function selectallproducts()
          {
            $display= "SELECT * FROM `products`";
            return $this->db_fetch_all($display);
          }
            //function to search products
          function searchproducts($name)
          {
            $display= "SELECT * FROM `products` WHERE product_title LIKE '%$name%'";
            return $this->db_fetch_all($display);
          }

          //update product by product id
            function updateproduct($product_id, $new_product_cat,$new_product_brand,$new_product_title,$new_product_price,$new_product_desc,$new_product_image,$new_product_keywords)
            {
              $productupdate = "UPDATE `products` SET `product_cat`='$new_product_cat',
              `product_brand`='$new_product_brand',`product_title`='$new_product_title',`product_price`='$new_product_price',
              `product_desc`='$new_product_desc',`product_image`='$new_product_image',`product_keywords`='$new_product_keywords' 
              WHERE `product_id`= '$product_id'"; 
                return $this->db_query($productupdate);
            }

          //get all categories
          function get_categories_class(){
            $sql= "SELECT * FROM `categories`";
            return $this->db_fetch_all($sql);
          }
        
          //get all brands
          function get_brands_class(){
            $sql= "SELECT * FROM `brands`";
            return $this->db_fetch_all($sql);
          }
        //the code we did with Sampah 
          //--SELECT--//

        //get all categories
          // function get_categories_class(){
          //   $sql= "SELECT * FROM 'categories'";
          //   return $this->db_fetch_all($sql);
          // }

          // //get all brands
          // function get_brands_class(){
          //   $sql= "SELECT * FROM 'brands'";
          //   return $this->db_fetch_all($sql);
          // }


}



?>