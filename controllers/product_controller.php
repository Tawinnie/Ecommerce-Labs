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
function displaycategory(){
    $display = new Brand();
    $displaycat =$display->selectcategory();
    return($displaycat);
}

function newupdatecategory($id,$cat_name){
    $update= new Brand();
    $updatecat = $update->updatecategory($id,$cat_name);
    return($updatecat);
}
?>