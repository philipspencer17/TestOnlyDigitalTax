<?php
session_start();

if (isset($_POST['submit'])){
    
   include_once 'taxdatabase.php';
   $userid = $_POST ['userid'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];  

    
    
        
   $_SESSION['userid'] = $userid;
    header("Location: http://localhost:8888///respropregisterlogin.php?login=success");
    exit();
}


?>
<html>

<input type="text" name ="userid" placeholder="userid">
            
    echo '<form action="respropQ1.php" method="post">
            <input type="password" name ="password" placeholder="password">
            <button type="submit" name="submit">Login</button>
            </form>'



</html>