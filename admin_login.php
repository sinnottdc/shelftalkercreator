<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //Get username & password from the form
    $adminName =  mysqli_real_escape_string($db, $_POST['adminName']);
    $adminPassword = mysqli_real_escape_string($db, $_POST['adminPassword']);
    $adminPassword = sha1($adminPassword);
    
    
    $sql = "SELECT * FROM users WHERE email = '$email' and pass = '$password' and admin === true";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count=  mysqli_num_rows($result);
      
    /*
    //If result mathces username & password table row must be 1
    if ($count==1)
    {
  
        header("location: admin.php");
        exit;
    }
    
    if($adminName==""||$adminPassword==""){
        set_err_msg("You must enter a username & password");
        header("location: welcome.php");
        exit;
    }
    else
    {
        set_err_msg("Your login name or password is invalid.");
        header("location: welcome.php");
        exit;
    }
    */
}
?>