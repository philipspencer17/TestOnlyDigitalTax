<?php
session_start();
include_once 'taxdatabase.php';
   
$userid = $_SESSION ["userid"];  

$db = mysqli_connect('localhost', 'root', 'root', 'taxdata')

or	die('Could not connect: ');


$sql = "SELECT *
		FROM useranswers
		WHERE userid = '$userid' 
        ORDER BY Diagnosticref";
		
if ($result=mysqli_query($db,$sql))
    
{
    
   $row = mysqli_fetch_array($result);
    echo $row[1]."<br/><br/>";
    echo "Thank you for completing the diagnostic check<br/><br/>";
    echo "Your reference number for this attempt was ".$row [0]."<br/><br/>";
    echo "The date and time when you completed your answers was"." ".$row[6]."<br/><br/>";
    echo "In this attempt, you answered the questions as follows<br/><br/>";
    echo "Whether the property acquired was residential?....".$row[2]."<br/><br/>";
    echo"Whether the property was acquired by a 'non-natural person'....".$row[3];
    echo "<br/><br/>";
    echo"Whether the property's value was over £500,000....".$row[4];
    echo "<br/><br/>";
    echo"Whether the property was acquired for a qualifying business purpose....".$row[5];
    echo "<br/><br/>";
   
}
    else
        
    {
        
        echo "problem";
    }


mysqli_close($db);



?>
 