<?php



$FirstName = $_POST ["firstName"];
$LastName = $_POST ["lastName"];
$Email = $_POST ["email"];
$Address = $_POST ["address"];
$Password = $_POST ["password"];



$db = mysqli_connect('localhost', 'root', 'root', 'dbtwo')

or	die('Could not connect: ');
	

$sql = "INSERT INTO Sellers (firstName, lastName, email, address, password) 
VALUES('$firstName','$lastName', '$email', '$address', '$password')";


if ($db -> query ($sql) === TRUE )
{
echo "New Record Successfully Created" ;
} else {
 echo "error: " .$sql. "<br> " . $db -> error;
 }
 $db -> close ();
 
 ?>