        <?php
        require ('connect_db.php');
        require_once('functions.php');
        session_start();
        
        $artistName=$_POST['artistName'];
        $artistBiog=$_POST['artistBiog'];
        
             
         
        if (!$artistName || !$artistBiog) {
            
            set_err_msg("</br></br>You must enter an Artist & Biog. Please try again.");
            
            header("location: artist_biog_submit.php");
            exit;
        }
              
           
        $artistName = trim(mysqli_real_escape_string($db, $artistName));
        $artistBiog = trim(mysqli_real_escape_string($db, $artistBiog));
        
        $artistName = ucwords($artistName);
        $artistBiog = ucfirst($artistBiog);
        
        if (mysqli_connect_errno()) {
            set_err_msg("</br></br>Error: Could not connect to database. Please try again later.");
            exit;
        }
        
        $query = "INSERT INTO artistbiog (artistname, artistbiog) values
                ('".$artistName."', '".$artistBiog."')";
        
        $result = $db->query($query);
        
     
        
        if ($result) {
            
            set_msg("</br></br>". $artistName ." inserted into database");
            $db->close();
            header("location: artist_biog_submit.php");
            exit;
        } else {
            require 'artist_biog_submit.php';
            set_err_msg("</br>An error has occured. Please try again.");
            header("location: artist_biog_submit.php");
        }
        
        $db->close();
        ?>
