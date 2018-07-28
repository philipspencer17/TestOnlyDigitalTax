

<?php

//session_start();

?>


<html>
    
    
    <head>
    <title>Diagnose Your Tax Position on Property Purchases</title><br/><br/>
    <title>Registration and Login </title>
    <link rel="stylesheet" type="text/css" href="respropregandlogin.css">
    
    
    
    </head>
    
    <body>
                
      <link rel="stylesheet" type="text/css" href="webpageCSS.css">
         <div id="section">  
            <h1 style = "color: blue; font-size:200%">Digital Tax Aid </h1><br/><br/>
            <h2> Buying Property</h2><br/><br/>
           <h3 id="squid">Diagnosing the SDLT, ATED and CGT Implications</h3><br/><br/>   
             
    
    
             </div>

        
                
    </body>
 <div ><a class = "squareone" href="respropwebpage.php"> Back to web page</a>
    </div>
    
    <header>
        
        <nav>
        
        <div class = "main-wrapper">
            <ul>
            <li><a href="respropwebpage.php" class="box">To Home Page</a></li>
            
            </ul>
        <div class="nav-login">
         
           
<?php
            
          if(isset($_SESSION['userid'])) 
              
          {
              
//          echo '<form action="resproplogout.php" method="POST">
//            <button type="submit" name="submit">logout </button>
//            </form>';
          session_unset();
              echo "you are logged out";
              
          
}
else
   { 
             echo '<form action="resproplogin.php" method="post">
            
            <input class="box" type="text" name ="userid" required placeholder="User ID">
            
            <input class = "secondbox" type="password" name ="password" required placeholder="Password">
            <button type="submit" name="submit">Login</button>
            </form>
            <a href="respropsignup.php" class= "box">Sign up</a>';
          
          }
           
            
 ?>
            
