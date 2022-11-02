<?php
//connect to the user account class
include("../classes/brand_class.php");

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
?>