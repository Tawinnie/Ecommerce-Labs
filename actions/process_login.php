<?php
include("../controllers/general_controller.php");

//for login
if(isset($_POST['submit2']))
{
    $email=$_POST['mail'];
    $password=$_POST['pass'];

    //encrypt password to matchthe one stored in the database
    $hash = base64_encode($password);

   $logresult= newlogin($email, $hash);
   
    if(!empty($logresult))
    {
        echo "Logged in  successful!";
    }
    else
    { 
        echo "Failed to Log you in";
    }
    header("Location: ../index.php");
}
  
?>