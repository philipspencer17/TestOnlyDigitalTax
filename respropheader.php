<?php
session_start();
$_SESSION['views'] =1;
$_SESSION['userid'] = $_POST['userid'];
?>


<html>
    <head>
    <title>Diagnose Your Tax Position on Property Purchases</title><br/><br/>
    <title>Registration and Login </title>
    <link rel="stylesheet" type="text/css" href="respropregandlogin.css">
    
    
    
    </head>
    
    <header>
        
        <nav>
        
        <div class = "main-wrapper">
            <ul>
            <li><a href="respropregisterlogin.php" class="box">Home</a></li>
            
            </ul>
        <div class="nav-login">
            
            <?php
                if(isset($_SESSION['userid']))  {
                  echo    ' <form action="resproplogout.php" method="post">
                  <button type="submit" name="submit">logout</button>  
                    
                   </form>; 
                }else
                    
                {
                    echo    ' <form action="resproplogin.php" method="post">
                  <input type="text" name="username" placehplder="username">login</button>  
                    
                   </form>; 
                    
                }
            
            
            ?>
         
            
            
            
            
            
            <form action="resproplogin.php" method="post">
            
            <input class="box" type="text" name ="userid" placeholder="userid">
            
            <input class = "secondbox" type="password" name ="password" placeholder="password">
            <button type="submit" name="submit">Login</button>
            </form>
            <a href="respropsignup.php" class= "box">Sign up</a>
            
            </div>
            
        </div>
        
        </nav>
    
    
    </header>