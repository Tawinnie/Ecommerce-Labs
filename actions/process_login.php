<?php
include("../controllers/general_controller.php");
session_start();
//for login
if(isset($_POST['submit2']))
{
    $email=$_POST['mail'];
    $password=$_POST['pass'];

    //encrypt password to matchthe one stored in the database
   $hash = base64_encode($password);
   $logresult= newlogin($email, $hash);
   
    if ($logresult["customer_pass"]==$hash){
        //go to manage products if not proceed to homepage
        $_SESSION["customer_id"] = $logresult["customer_id"];
        if ($logresult["user_role"] == 1)
            $_SESSION["verifyrole"] = 1;
        else
            $_SESSION["verifyrole"] = 0;
        
        header("Location: ../view/all_products.php");
       // echo "Logged in  successful!";
    }
    else
    { 
        echo "Failed to Log you in";
    }

}

//defining user role upon login to direct which page a user would go to

  
?>