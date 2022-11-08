<?php
//connect to the user account class
include("../classes/product_class.php");

function newbrand($brand)
{
    $newbrand= new Brand();
    $brand = $newbrand->addbrand($brand);
    return($brand);
}
function newdisplay(){
    $display = new Brand();
    $displaybrand =$display->display();
    return($displaybrand);
}

function newupdate($id,$brand){
    $update= new Brand();
    $updatebrand = $update->updatebrand($id,$brand);
    return($updatebrand);
}

//for category section
function newcategory($cat_name)
{
    $newcat= new Brand();
    $cat = $newcat->addcategory($cat_name);
    return($cat);
}
//select category
function displaycategory(){
    $display = new Brand();
    $displaycat =$display->selectcategory();
    return($displaycat);
}
//update/edit category
function newupdatecategory($id,$cat_name){
    $update= new Brand();
    $updatecat = $update->updatecategory($id,$cat_name);
    return($updatecat);
}
//save product controller
// function save_product_ctr($cat,$brand,$title,$price,$descr,$image,$keyword){
//     $item_object= new Brand();
//     return $item_object->add_product($cat, $brand,$title,$price,$descr,$image,$keyword);

// }
//update/edit product
// function new_product_ctr($product_id, $new_product_cat,$new_product_brand,$new_product_title,$new_product_price,$new_product_desc,$new_product_image,$new_product_keywords){
//     $display_product = new Brand();
//     return $display_product->updateproduct($product_id, $new_product_cat,$new_product_brand,$new_product_title,$new_product_price,$new_product_desc,$new_product_image,$new_product_keywords);
// }
function save_product_ctr($cat,$brand,$title,$price,$descr,$image,$keyword){
    $item_object= new Brand();
    return $item_object->add_product($cat, $brand,$title,$price,$descr,$image,$keyword);
}
//
function selectoneproduct_ctr($product_id)
{
    $oneproduct = new Brand();
    return $oneproduct->selectoneproduct($product_id);
}
function selectallproducts_ctr(){
    $oneproduct = new Brand();
    return $oneproduct->selectallproducts();
}
function searchproducts_ctr($name){
    $oneproduct = new Brand();
    return $oneproduct->searchproducts($name);
}
//function to update product
function update_product_ctr($product_id, $new_product_cat,$new_product_brand,$new_product_title,$new_product_price,$new_product_desc,$new_product_image,$new_product_keywords){
    $new_product = new Brand();
    return $new_product->updateproduct($product_id, $new_product_cat,$new_product_brand,$new_product_title,$new_product_price,$new_product_desc,$new_product_image,$new_product_keywords);
}
//get all brands class
function get_brand_ctr(){
    $new_brand = new Brand();
    return $new_brand->get_brands_class();
}

//get categories
function get_categories_ctr(){
    $new_cat = new Brand();
    return $new_cat->get_categories_class();
} 
?>