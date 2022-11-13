<?php
//connect to the user account class
include("../classes/customer_class.php");

//sanitize data

function getnewcustomer($fullname,$email,$contact,$country,$city,$password,$user_role)
{
    $newcustomer= new Customer();
    $newcus = $newcustomer->getcustomersdata($fullname,$email,$contact,$country,$city,$password,$user_role);
    return $newcus;

}
    
function verifyemail($fullname,$email,$contact,$country,$city,$password)
{
    $verify = new Customer();
    $verifymail= $verify->Uniquemail($fullname,$email,$contact,$country,$city,$password);
    return $verifymail;
}
//function for login
function newlogin($email,$password)
{ 
    $newlog =new Customer();
    $login = $newlog->logcustomer($email,$password);
    return($login);
}

//This is Mr Sampah's code
//save product controller

// function save_product_ctr($categories,$brand,$title,$price){
//     $item_object= new general_class();
//     return $item_object->get_categories_class();

// }
//get all brands class
// function get_brand_ctr(){
//     $new_brand = new general_class();
//     return $new_brand->get_brands_class();
// }

// //get categories
// function get_categories_ctr(){
//     $new_cat = new general_class();
//     return $new_cat->get_brands_class();
// } 
?>
