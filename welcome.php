<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <h1>Hi <?php echo("{$_SESSION['login_user']}");?>You are logged in.</h1>
    </body>
</html>
