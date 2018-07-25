<?php
session_start();
if (isset($_POST['submit']) && isset($_POST['userid'])){   
   include_once 'taxdatabase.php';
   $userid = $_POST ['userid'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];  
   $_SESSION['userid'] = $userid;
   $_SESSION['password'] = $password;
    header("Location:respropregisterlogin.php?login=success");
}