<?php
   
    include_once  'respropheader.php';
     //$userid = $_POST ["userid"];
 ?>   
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Home</h2>
        <?php
            
          if (isset($_SESSION['views'])) {
   
              $_SESSION['views'] = $_SESSION['views'] +1;
             echo "Pageviews=" . $_SESSION['views']."<br/>" ;
                $_SESSION['views'] = $_SESSION['views'] +1;
       //       $_SESSION['views'] = $userid;
        
            echo "You are logged in";
            
     //       <form class="gotoquestions" action ="respropQ1.php" method="post">
                
       //         <input type="submit" name="gotoquestions"">
                
             
                
    //        </form>
        
        
        
              
              
              
          }
            else
            {
            
            exit();
          //  $_SESSION['views'] = $_SESSION['views'];
              
          //   echo "Pageviews=" . $_SESSION['views'] ;
                
            }
            
        ?>
        
        </div>
    
    
    
    
    </section>
    <?php
    include_once  'respropfooter.php';
    ?>
   