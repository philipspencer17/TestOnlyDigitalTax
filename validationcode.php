 
 
                
  
   
   ==================================================
<?php

if (isset($_POST['submit'])) {
    
    include_once 'taxdatabase.includes.php';
    $fname = mysqli_real_escape_string($conn, $_POST ['fname']);
     $lname = mysqli_real_escape_string($conn, $_POST ['lname']);
    $email = mysqli_real_escape_string($conn, $_POST ['email']);
    $password = mysqli_real_escape_string($conn, $_POST ['password']);
    $mysqli_query = "INSERT INTO users (fname,lname, email, password) VALUES ('$fname', '$lname', '$email', '$hashedpassword')";
    $result =mysqli_query($conn,$sql);
     header("Location: ../respropsignup.php?signup=success");
    exit();                                        
        
}
       

    // error handlers
    // check for empty fields
    
    if (empty($fname)  || empty($lname) ||empty($email) || empty($password) )
     {
    header("Location: ../respropsignup.php?signup=completeallboxes");
    exit();                                        
      } else {
      
       // check if input characters are valid 
    if(!preg_match("/^[a-zA-Z]*$/",$fname) || !preg_match("/^[a-zA-Z]*$/",$lname))
{
      header("Location: ../respropsignup.php?signup=invalid");
    exit();                                        
        
    } else {
    //check of e mail is valid
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
         header("Location: ../respropsignup.php?signup=invalidemail");
    exit();     
            
        } else {
        
        
        
        header("Location: ../respropsignup.php?signup=success");
        
        
    ========ALl VALIDATION CODE REMOVED BELOW Thurs 28 June;    
        
        
    
    // error handlers
    // check for empty fields
    
   // if (empty($fname)  || empty($lname) ||empty($email) || empty($password) )
    
   
   //  {
//    header("Location: ../respropsignup.php?signup=completeallboxes");
  //  exit();                                        
//      } else
  //  {
      
       // check if input characters are valid 
    if(!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname))
{
      header("Location: ../respropsignup.php?signup=invalidentry");
    exit();                                        
        
    } else 
    {
    //check of e mail is valid
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
         header("Location: ../respropsignup.php?signup=invalidemail");
    exit();     
            
        } else
        {
        
        
        
        header("Location: ../respropsignup.php?signup=success");
   
    
     
    // Hashing the password
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    // Insert the user into the database
    
    
    
    
             
// to check if eg username already in use: $sql = "SELECT * FROM users WHERE username = '$username'";
// next line would be: $result = mysqli_query($conn,$sql);
// For initial check on registration......
// $resultCheck =mysqli_num_rows($result);
// if ($resultCheck>0){ - copy error message above here}
// For subsequent check on log in.....
// /$resultCheck =mysqli_num_rows($result);
// if ($resultCheck<1) {
             header("Location: ../respropsignup.php?login=error");
             exit();
        }
            else
            {
                
    if ($row = mysqli_fetch_assoc($result)) {
        
        //check dehashed password
        $hashedpasswordcheck = password_verify($password, $row['password']);
        if(hashedpasswordcheck== false)
        {
             header("Location: ../respropsignup.php?login=error");
             exit();
        }
        elseif(hashedpasswordcheck== true) {
            // log in user here
            $_SESSION['userid'] =$row['userid'];
            $_SESSION['fname'] =$row['fname'];
            $_SESSION['lname'] =$row['lname'];
            $_SESSION['email'] =$row['email'];
        }
    }
            }

        
        ----------------- from respropheader (to get logout button)
            
                    
            <?php
                if(isset($_SESSION['userid']))  
           
           ?>
                {
                    
                   <form action="resproplogout.php" method="post">
            
                  <button type="submit" name="submit">logout</button>  
                    
                   </form> 
                   
                }
            
            else
                    
                {
                <form action="resproplogin.php" method="post">
               <input type="text" name="username" placehplder="username">login  
                
                 </form>; 
            }
        
           
        
        
        

Password change....
            
        /Applications/MAMP/Library/bin/mysqladmin -u root -p password <NEWPASSWORD>
    
    
    
--------------------from respropQ2
            
            <html>

    <head>
         
        <form  action ="respropQ3.php" method ="POST"></form>
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script> 
        <style type="text/css">   
          #submission
       {
           
           width:210px;
           height:40px;
           color:darkgreen;
           background-color: lightgray
           
           
   
              }
              </style>

        <meta charset = "UTF-8">

        <title>ResPropTestForm</title>


        

          
          
        <h1>Property Questionnaire</h1>
       
     </head>

</html>

<?php
    


        if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['Residential'])) {

        $fname = $_POST['fname'];
         $lname = $_POST['lname'];
            $Residential = $_POST['Residential'];
         
        echo $fname." ".$lname."<br/><br/> "."Your response to whether the property was residential was"." ".$Residential."<br/><br/>";
            
        }

          
        if ($Residential == "No")
        
        {
            
        include ("respropAnswerA.php");
        }
        else
        {
            echo "Please now answer the question below<br/><br/>";
        }
         
          }
          
?>       
        

<html>
        
        <script type="text/javascript">
        
    
        if ($Residential == "Yes")
            {
                #alt;
            }
        else
            {
                echo "";
            }
    
    </script>
        
             
    <div id = "alt">
               <form  action ="respropQ3.php" method ="POST" name = "submit">    
            <li><b>Non-Natural Person?</b></li><br><br>
                 
              Natural person: <input type = "radio" name = "t" value = "np"> 
                
              
                  Non-Natural person <input type = "radio" name = "t" value = "nnp"> 
            <input type="submit" id="submission" name="enter" value="Click here to Submit Your Response"><br><br/>
                </form>
            </div>
    
</html>
        
          
<?php

?>
