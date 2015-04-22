<?php
    $page_title = 'Register';
    include('includes/header.html');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        require ('connect_db.php');
        $errors = array();
    }
    //Set first name
    if (empty($_POST['first_name']))
    {
        $errors[] = 'Enter your first name';
    }
    else
    { 
        $fn = mysqli_real_escape_string($db, trim($_POST['first_name']));
    }
    
    //Set last name
    if (empty($_POST['last_name']))
    {
        $errors[] = 'Enter your last name.';    
    }
    else
    {
        $ln = mysqli_real_escape_string($db, trim($_POST['last_name']));        
    }
    
    //Set email
   
     
    if(empty($_POST['email']))
    {
        $errors[] = 'Enter your email address.'; 
    } 
    
    elseif (!$email_val = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors[] = 'Email address is not in the correct format.'; 
    }
    
    else
    {
        $e = mysqli_real_escape_string($db, trim($_POST['email']));
        
    }
    
   
    //Set password & confirm pass
    if(!empty($_POST['pass1']))
    {
        if($_POST['pass1'] != $_POST['pass2'])
        {
            $errors[] = 'Passwords do not match.';
        }
        else 
        {
            $p = mysqli_real_escape_string($db, trim($_POST['pass1']));
        }
    }
    else 
    {
        $errors[] = 'Enter your password.';
    }
        
    //Create error message if email in use
    if(empty($errors))
    {
        $q = "SELECT user_id FROM users WHERE email = '$e'";
        $r = mysqli_query($db, $q);
    
        if (mysqli_num_rows($r) !=0)
        {
            $errors[] = 'Email address already exists.<a href="login.php">Login</a>';
        }
    
    }
    
    if(empty($errors))
    {
        $q = "INSERT INTO users
            (first_name, last_name, email, pass, reg_date)
            VALUES('$fn', '$ln', '$e', SHA1('$p'), NOW())";
        $r = mysqli_query($db, $q);
           ?>
<?php
    if($r)
    {
        echo'<h1>Registered!</h1>
            <p>You are now registered.</p>
            <p><a href="login.php">Login</a></p>';
    }
    mysqli_close($db);
    include('includes/footer.html');
    exit();
    }
    else
    {
        echo'<h1>Error!</h1>
            <p = id="err_msg">The following error(s) occurred: <br>';
        foreach ($errors as $msg)
        {
            echo" - $msg<br>";
        }
        echo 'Please try again.</p>';
       
    }     
    
    
?>

<h1>Register</h1>
<form action="register_user.php" method="POST">
    <p>
        First Name: <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name'];?>"></p><p>
                  
        Last Name: <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name'];?>"></p><p>
        
        Email Address: <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'];?>"></p><p>
        
        password: <input type="text" name="pass1" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1'];?>"></p><p>
        
        Confirm password: <input type="text" name="pass2" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2'];?>"></p><p>
        
        <input type="submit" value="Register"></p>
</form>

   <?php
    include('includes/footer.html');
?>   
