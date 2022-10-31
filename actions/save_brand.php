<?php 
//when the admin clicks the  button, to add brand
include("../controllers/general_controller.php");

if (isset ($_POST['save_brand'])) 
{
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

//editing brand
if (isset($_POST["edit_brand"])){
  $new_brand= $_POST["new_brand"];
  $id=$_POST["brand_id"];

  $result =newupdate($id,$brand);
  if($result)
  {
    header("Location: ../Admin/brand.php");
  }else {
    echo "Failed";
  }

}
?>
