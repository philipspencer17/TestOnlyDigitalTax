<?php
    include_once  'respropheader.php';
   
 ?>  
<html>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Home</h2>
 <?php
            echo $_SESSION["userid"];
          if (isset($_SESSION["userid"])) {
                echo "You are logged in";
                            
               header("Location:respropQ1.php
               ");
          }
            
 ?>
        
        </div>
    
    </section>
</html>
 <?php
    include_once  'respropfooter.php';
    ?>