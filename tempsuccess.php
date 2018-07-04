<?php

if (isset($_POST["submi"])) {
    
    include_once 'taxdatabase.php';
   $userid = $_POST ["userid"];
    $fname = $_POST ["fname"];
     $lname =  $_POST ["lname"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];
    
    $db = mysqli_connect('localhost', 'root', 'root', 'Taxdata')

or	die('Could not connect: ');
    $sql = "INSERT INTO users (userid,fname,lname, email, password) VALUES ('$userid','$fname', '$lname', '$email', '$password')";

    
    $result =mysqli_query($conn,$sql);
//        $result =mysqli_query($conn,"SELECT count(*) FROM users");

  //   echo "Well done. You are successfully registered".$fname." ".$lname;
//     header("Location: ../respropsignup.php?signup=success");
 //   exit(); 
}
?>
<html>
     <body>
                
      <link rel="stylesheet" type="text/css" href="webpageCSS.css">
         <div id="section">  
            <h1 style = "color: blue; font-size:200%">Digital Tax Aid </h1>
            <h2> Buying Property</h2>
           <h3 id="squid">Diagnosing The SDLT, ATED and CGT Implications</h3><br/><br/> <br/><br/>   
             
    
    
             </div>

        
                
    </body>
    $userid
    <h2>LogIn for Dignostic Check Questions</h2>
            <form class="proceed" action ="resproplogin.php" method="post">
                
                
             
                <button type="submit" name="submit">click to login</button>
            </form>
        

</html>