<?php

if (isset($_POST["submit"])) {
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
}
?>
<html>
    <link rel="stylesheet" type="text/css" href="webpageCSS.css">
   
     <body>
      
                
      
         <div id="section">  
            <h1 style = "color: blue; font-size:200%">Digital Tax Aid </h1>
            <h2> Buying Property</h2>
           <h3 id="squid">Diagnosing the SDLT, ATED and CGT Implications</h3><br/><br/> <br/><br/>   
             
    
    
             </div>
         <div class="linktolog">
             <p>You have signed up. Click below to login.</p><br/><br/>
            <h3>Login for Dignostic Check Questions</h3>
            <form class="proceed" action ="resproplogin.php" method="post">
                
                
             
                <button type="submit" name="submit">click to login</button>
            </form>
          </div>      
    </body>
    

        

</html>