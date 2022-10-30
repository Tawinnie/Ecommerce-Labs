
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

    function display($id,$brand){
        $select= "SELECT * FROM FROM `brands`";
        return $this->db_query($select);
    }
      
}


?>