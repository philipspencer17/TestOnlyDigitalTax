<?php

if (isset($_POST['submit'])) {
    
    include_once 'taxdatabase.php';
   $userid = $_POST ["userid"];
    $fname = $_POST ["fname"];
     $lname =  $_POST ["lname"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];
    
    $db = mysqli_connect('localhost', 'root', "root", 'Taxdata')

or	die('Could not connect: ');
    $sql = "INSERT INTO users (userid,fname,lname, email, password) VALUES ('$userid','$fname', '$lname', '$email', '$password')";

    
    $result =mysqli_query($conn,$sql);
//        $result =mysqli_query($conn,"SELECT count(*) FROM users");

     echo "Well done. You are successfully registered".$fname." ".$lname;
//     header("Location: ../respropsignup.php?signup=success");
    exit();                                        
        
}
