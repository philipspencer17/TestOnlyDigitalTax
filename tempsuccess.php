<?php

if (isset($_POST["submit"])) {
    include_once 'taxdatabase.php';
   $userid = $_POST ["userid"];
    $fname = $_POST ["fname"];
     $lname =  $_POST ["lname"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];
    $passwordconfirm = $_POST["passwordconfirm"];
}
if($password !== $passwordconfirm)  {
 
header ("Location:resproppasswordmismatch.php");
exit();
}
    else
        
    if (strlen($password) !== 7 )
    {
header ("Location:resproppasswordwronglength.php");   
exit();   
    }
  else      
    {
    // hashing password - new code 16 July
    
$hashedpassword = password_hash($password, PASSWORD_BCRYPT);
   
      
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)

or	die('Could not connect: ');      
      
// code incl sql injection attack prevention       
    
      $sql = "SELECT userid
		    FROM users
		    WHERE  userid = ? ";
      $stmt = $conn -> prepare ($sql);
      $stmt -> bind_param("s", $userid); 
       $stmt ->execute();
      $stmt -> store_result();

     if($stmt ->num_rows>0)
        {
             header("Location: ../respropuserexists.php");
             exit();
        }
 
}
   
    
      
      // new code 14 Aug
      
      
      

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)

or	die('Could not connect: ');      

    $sql = "INSERT INTO users (userid,fname,lname, email, password) VALUES ('$userid','$fname', '$lname', '$email', '$hashedpassword')";

    $result =mysqli_query($conn,$sql);

?>
<html>
    <head>
     <meta name = "viewport" content = "width = device-width" content ="initial-scale=1"> 
    <link rel="stylesheet" type="text/css" href="webpageCSS.css">
    </head>
     <body>
      
                
      
         <div id="section">  
            <h1 style = "color: blue; font-size:200%">Digital Tax Aid </h1>
            <h2> Buying Property</h2>
           <h3 id="squid">Diagnosing the SDLT, ATED and CGT Implications</h3><br/><br/> <br/><br/>   
             
    
    
             </div>
         <div class="linktolog">
             <p>You have signed up. Click below to login.</p><br/><br/>
            <h3>Login for Dignostic Check Questions</h3>
            <form class="proceed" action ="respropheader.php" method="post">
                <button type="submit" name="submit">click to login</button>
            </form>
          </div>      
    </body>
    

        

</html>