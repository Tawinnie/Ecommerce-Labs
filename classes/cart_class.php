<?php

//class
require('../settings/db_class.php');


class Cart extends db_connection{
    //add into cart
    function add_to_cart_class($product_id,$ip_address,$customer_id,$quantity){
        $sql= "INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) 
        VALUES ('$product_id','$ip_address','$customer_id','$quantity')";
        return $this->db_query($sql);

    }

    //diplay cart items
    function display_cart_items_class(){
        $sql= "SELECT * FROM `cart` ORDER BY p_id ASC";
        return $this->db_fetch_all($sql);
    }
    //remove items form cart
    function remove_from_cart_class($product_id){
        $sql ="DELETE FROM `cart` WHERE p_id = `$product_id`";
        return $this->db_query($sql);
        
    }
    //update cart
    function update_cart(){
        $sql = "UPDATE `cart` SET `p_id`='[value-1]',`ip_add`='[value-2]',`c_id`='[value-3]',`qty`='[value-4]' WHERE 1";
    }
}
?>