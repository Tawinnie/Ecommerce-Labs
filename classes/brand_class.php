
<?php

//class
require('../settings/db_class.php');

class Brand extends db_connection
{
      function addbrand($brand)
      {
        $addbrand = "INSERT INTO `brands`( `brand_name`) VALUES ('$brand')";
        return $this->db_query($addbrand);
      }

    function display(){
        $select= "SELECT * FROM FROM `brands`";
        return $this->db_fetch_all($select);
    }
    
    function updatebrand($id,$brand){
      $update = "UPDATE `brands` SET `brand_name`='$brand' WHERE brand_id=$id";
      return $this->db_query($update);
    }
}


?>