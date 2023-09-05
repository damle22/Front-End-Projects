    <?php
    session_start();

    if (isset($_POST['logout'])) {

        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
            unset($_SESSION['username']);
            unset($_SESSION['password']);
 
        echo '<script>alert("You are now logging out!")</script>';

        session_destroy();
        
        
    }    
     else
    
     echo '<script>alert("You cannot logout since there is no user connected.")</script>';
  


    }

    ?>
    