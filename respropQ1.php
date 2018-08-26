 <?php
ob_start();
  include_once 'taxdatabase.php';
            $_SESSION["userid"] = $_POST["userid"];
            $userid = $_SESSION["userid"];
            $_SESSION["password"] = $_POST["password"];
            $password = $_SESSION["password"];
      
if (strlen($password) !== 7 )
    {
header("Location:resproppasswordwronglength.php");   
exit();   
    }

// new code 8 AUg

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)

or	die('Could not connect: ');      
//
// code incl sql injection attack prevention       
    
      $sql = "SELECT password
		    FROM users
		    WHERE  userid = ? ";
      $stmt = $conn -> prepare ($sql);
      $stmt -> bind_param("s", $userid); 
       $stmt ->execute();
      $result = $stmt -> get_result();

if ($row = $result -> fetch_assoc()) {
              //check dehashed password
        $hashedpasswordcheck = password_verify($password, $row['password']);
       if($hashedpasswordcheck == false)
       {
        header("Location: ../resproppasswordincorrect.php");
           exit();
      }
 
}
 

?>

<html>

    <head>
         
          <head>
           <meta name = "viewport" content = "width = device-width" content ="initial-scale=1"> 
        <form  action ="respropQ2.php" method ="POST"></form>
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script> 
          <link rel="stylesheet" type="text/css" href="webpageCSS.css">
         

        <meta charset = "UTF-8">

       

              

        <title>ResPropTestForm</title>


          </head>



      <body>  

          
          <div container id=contain>
  
       <div id="section"> 
           
            <h1>Digital Tax Aid </h1>
            <h2> Buying Property</h2>
           <h3>Diagnosing the SDLT, ATED and CGT Implications</h3><br/><br/> <br/><br/>   
          
             </div>
        
           <form   action ="respropQ2.php" method ="POST" name = "submit">
               
               <fieldset class="form-group">
          User ID: <input type = "text" class = "identry" name = "userid" required value = '<?php echo $userid ?>'><br><br>
        
        
               
           
               <div><li><b>Is the property residential? </b></li><br><br></div>
              
            <p><a href="respropmeaning.php"> click for meaning of Residential </a></p>      
                 
 Residential?<input id ="radio1" type = "radio" name = "Residential" required value = "Yes"><br/> 


Non-Residential?<input id = "radio2" type = "radio" name = "Residential" required value = "No"> <br><br/>
 
            </fieldset>
                 
            <input type="submit" id="subbutton" name="enter" value="Click to Submit"><br><br/>
            
          </form>
           
     
 
          </div>
          
           <p><a href="respropwebpage.php"> Back to web page</a></p>
              <p><a href="resproplogout.php">click for log out page</a></p>
          
     </body>
    
    
        </html>


