<?php 
//when a customer clicks the register button
include("../controllers/general_controller.php");

if (isset ($_POST['save_brand'])) {
    $brand = $_POST['brand_name'];
   
 $result = newbrand($brand);
 if ($result) 
 {
   session_start();
    $select= newdisplay($id,$brand);
     echo " Brand added successfully";
    //echo "Registration successful!";
    header("Location: ../Admin/add_brand.php");
 }
 else{    
   echo "Registration Unsuccessful!";
 }
}
//calling the controller

?>
