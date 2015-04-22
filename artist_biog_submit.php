<?php 
$page_title="Enter Artist Biog";
include( 'header.php');

   //Start session
    if(!isset($_SESSION)) 
    { 
        session_start(); 
   
    } 
?>
<!-- Jumbotron Header -->
<header class="jumbotron hero-spacer">
    <h1>Submit Artist Biog</h1>
    <p>Enter & submit an artist biog to the database. The biog must be 400 characters or less. Use the "Wiki clean" button if cutting & pasting from Wikipedia to remove any unwanted notation.
    <?php 
    
    

   
    //If any error messages then display
    if (isset($_SESSION['err_msg']))
    {
        print_error_msg($_SESSION['err_msg']);
    }
    else if (isset($_SESSION['msg']))
    {
        print_success_msg($_SESSION['msg']);
    }
  
   
?></p>
    <div class="input-group">
        <form method="post" action="insertartistbiog.php">
            <p>Artist Name</p>
            <input type="text" name="artistName" maxlength="30" class="form-control custom-control" </input>
            </br>
            </br>
            </br>
            <p>Artist Biog</p>
            <textarea id="textarea" class="form-control custom-control" rows="4" maxlength="400" style="resize:none" name="artistBiog"></textarea>


    </div>
    </br>

    <p>
        <input type="submit" class="btn btn-primary btn-large" value="Submit" />
        <input type="button" class="btn btn-primary btn-large" onclick="wikiclean()" value="Wiki clean" />
    </p>
    </form>
</header>

<!-- /.container -->
<?php include( 'footer.php'); ?>

 </html>