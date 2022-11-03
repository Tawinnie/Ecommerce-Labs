
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
    
    
}



?>