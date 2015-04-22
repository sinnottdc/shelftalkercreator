<?php
include("connect_db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //Get username & password from the form
    $email =  mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password = sha1($password);
    
    
    $sql = "SELECT * FROM users WHERE email = '$email' and pass = '$password'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count=  mysqli_num_rows($result);
    
    $result_username = $row['first_name'];
    
  
    
  
    
    //If result mathces username & password table row must be 1
    if ($count==1)
    {
  
        $_SESSION['login_user'] = $result_username;
        
        header("location: welcome.php");
        
    }
    else
    {
        $error="Your login name or password is invalid.";
    }
    
}
?>
<form action="" method="post">
    <label>Email: </label>
    <input type="text" name="email"/><br />
    <label>Password: </label>
    <input type="password" name="password"/><br/>
    <input type="submit" value="Submit"/><br>
</form>

    
