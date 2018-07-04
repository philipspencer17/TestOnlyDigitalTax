<?php
   
    include_once  'respropheader.php';
    if(isset($_POST['userid']))
{
$_SESSION['userid'] = userid;
    
}
 ?>   
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Home</h2>
        <?php
            echo $_SESSION['userid'];
          if (isset($_SESSION['userid'])) {
                echo "You are logged in";
                            
               header("Location: http://localhost:8888///respropQ1.php
               ");
          }
            
        ?>
        
        </div>
    
    
    
    
    </section>
    <?php
    include_once  'respropfooter.php';
    ?>
   