<?php

    include_once  'respropheader.php';

include_once 'taxdatabase.php';

 

$db = mysqli_connect('localhost', 'root', 'root', 'taxdata')

or	die('Could not connect: ');



$sql = "SELECT users.password FROM users WHERE userid = 'Meryl1'";
        		
if ($result=mysqli_query($db,$sql))
    
{
    
   $row = mysqli_fetch_array($result);
 
echo $row[0];
} 