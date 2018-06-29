<?php
    
    session_start();
    include_once  'respropheader.php';
    $_SESSION['message'] = '';
    $mysqli =new mysqli('localhost', 'root', 'root','Taxdata');
    
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
       
         $_SESSION['message'] = "upload failed";
    }
        else
        {
        
     if ($_POST['password'] != $_POST['confirmpassword']) { 
         $fname = $mysqli ->real_escape_string($_POST['fname']);
        $lname = $mysqli ->real_escape_string($_POST['lname']);
        $email = $mysqli ->real_escape_string($_POST['email']);
           $password = $mysqli ->real_escape_string($_POST[""]);
  //      $password = md5($_POST['password']);
         
    
    
        header("Location: respropsignupNew.php");
         $_SESSION['message'] = "Passwords do not match!";
     }
     else
     {
    
        $sql = "INSERT INTO users (fname,lname, email, password)"."VALUES ('$fname', '$lname', '$email', '$password')";
     }
         if ($mysqli->query($sql) === true) {
             $_SESSION['message'] = "Registration successful! $fname $lname added to database!";
             header("Location: tempsuccess.php");
         }
         else
         {
             header("Location: respropsignupNew.php");
             $_SESSION['message'] = "Registration NOT successful! $fname $lname could not be added to database!";
         }
     }
     
    
 ?>   
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Sign Up</h2>
            <form class="signupform" action ="tempsuccess.php" method="post">
            
                <input type="text" name="fname" required placeholder="FirstName">
                <input type="text" name="lname" required placeholder="LastName">
                <input type="text" name="email" required placeholder="email">
                <input type="password" name="password" required placeholder="Password">
                <input type="password" name="confirmpassword" required placeholder="Confirm Password">
                
             
                <button type="submit" name="submit" value = "register">Sign Up</button>
            </form>
        
        
        </div>
    
    
    
    
    </section>
    <?php
    include_once  'respropfooter.php';
    ?>