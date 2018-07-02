<?php
session_start();

if (isset($_POST['submit'])){
    
   include_once 'taxdatabase.php';
   $userid = $_POST ["userid"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];  
//    
//   $_SESSION['userid'] =$row['userid'];
//            $_SESSION['fname'] =$row['fname'];
//            $_SESSION['lname'] =$row['lname'];
//            $_SESSION['email'] =$row['email'];
    
    
        
   $_SESSION['userid'] = $userid;
    header("Location: http://localhost:8888///respropregisterlogin.php?login=success");
    exit();
}


?>