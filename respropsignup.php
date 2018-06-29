<?php
    
    include_once  'respropheader.php';
 ?>   
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Sign Up</h2>
            <form class="signupform" action ="tempsuccess.php" method="post">
                 <input type="text" name="userid" required placeholder="User ID">
                <input type="text" name="fname" required placeholder="FirstName">
                <input type="text" name="lname" required placeholder="LastName">
                <input type="text" name="email" required placeholder="email">
                <input type="password" name="password" required placeholder="Password">
                
             
                <button type="submit" name="submit">Sign Up</button>
            </form>
        
        
        </div>
    
    
    
    
    </section>
    <?php
    include_once  'respropfooter.php';
    ?>
   