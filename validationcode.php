 
 
                
  
   
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
        
        
    }
            }


Password change....
            
        /Applications/MAMP/Library/bin/mysqladmin -u root -p password <NEWPASSWORD>
    
    
    
