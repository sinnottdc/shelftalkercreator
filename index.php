<?php
$page_title = "Login";
include('header.php');
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
        exit;
    }
    
    if($email==""||$password==""){
        set_err_msg("You must enter a username & password");
        header("location: index.php");
        exit;
    }
    else
    {
        set_err_msg("Your login name or password is invalid.");
        header("location: index.php");
        exit;
    }
    
}
?>

        <header class="jumbotron hero-spacer">
            <h1 id="loginheader">Shelf Talker Creator</h1>
        
       
        </header>

<form action="index.php" method="post" id="login-form">
  <div class="form-group">
      <?php      
      if (isset($_SESSION['err_msg'])){
        print_error_msg($_SESSION['err_msg']); 
      }?>
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'];?>">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" name="password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
</form>
</div>
