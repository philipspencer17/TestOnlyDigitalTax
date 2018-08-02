<?php
session_start();

?>
<html>
     <head>
     <meta name = "viewport" content = "width = device-width" content ="initial-scale=1"> 
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

    </body>
 <div ><a class = "squareone" href="respropwebpage.php"> Back to web page</a>
    </div>
    
    <header>
        
        <nav>
        
        <div class = "main-loginwrapper">
            <ul>
            <li><a href="respropwebpage.php" class="box">Home Page</a></li>
            
            </ul>
        <div class="nav-login">
         
           
<?php
            
             echo '<form class="loginbox" action="respropQ1.php" method="post">
            
            <input class="firstbox" type="text" name ="userid" required placeholder="User ID">
            
            <input class = "secondbox" type="password" name ="password" required placeholder="Password">
            <button class = "thirdbox" type="submit" name="submit">Login</button>
            </form>';
          
        ?>
       
    