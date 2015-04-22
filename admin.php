<?php
session_start();
$page_title="Admin";
include('header.php');
?>

        <!-- Jumbotron Header -->
         
        <header class="jumbotron hero-spacer">
            
           
            <h1 style="text-align: center;">Admin Area</h1>
         
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img id="artist_biog_pic" src="" alt="registerUser"/>
                    <div class="caption">
                        <h3> Register </br> User</h3>
                        
                        <p>
                            <a href="#" class="btn btn-primary">Go!</a> <!--<a href="#" class="btn btn-default">More Info</a>-->
                            
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="" alt="moderateReviews"/>
                    <div class="caption">
                        <h3>Moderate reviews</h3>
                        
                        <p>
                            <a href="#" class="btn btn-primary">Go!</a> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="" alt="messages"/>
                    <div class="caption">
                        <h3>Messages</h3>
                        
                        <p>
                            <a href="#" class="btn btn-primary">Go!</a> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <hr>


<?php
include('footer.php');
?>
