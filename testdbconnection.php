<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('connect_db.php');
        if (mysqli_ping($dbc))
        {
            echo 'MySQL Server' .mysqli_get_server_info($dbc) .'on' .mysqli_get_host_info($dbc);
        }
        ?>
    </body>
</html>
