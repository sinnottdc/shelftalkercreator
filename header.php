<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $page_title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <?php
               if($page_title !== "Login"){
                   
               echo' <a class="navbar-brand" href="welcome.php"><span class="glyphicon glyphicon-home"></span></a>
            </div>
            

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li class="dropdown" id="menu1">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
               Admin Login
                <b class="caret"></b>
             </a>
             <div class="dropdown-menu">
               <form style="margin: 0px" accept-charset="UTF-8" action="admin_login" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=" /></div>
                 <fieldset class="textbox" style="padding:10px">
                   <input style="margin-top: 8px" type="text" placeholder="Username" name="adminName"/>
                   <input style="margin-top: 8px" type="password" placeholder="Passsword" name="adminPassword"/>
                   <input class="btn-primary" name="commit" type="submit" value="Log In" />
                 </fieldset>
               </form>
             </div>
           </li>
                  
                </ul>
                <ul  id="logoutbutton" class="nav navbar-nav">
                    <li>
                        <form method="POST" action="logout.php">
                            <input id="logout" type="submit" value="Logout" class="btn btn-primary"></input>
                        </form>
                    </li>
                   
                </ul>
                 
                 <div id="welcomeUser">
                        <h4>bri898m</h4>
                    </div>
                       
                      </div> -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->';
     } ?>
</nav>'
                   

              
    <!-- Page Content -->
    <div class="container">
<?php
require_once('functions.php');
?>