<?php
session_start();
include_once 'taxdatabase.php';

   
$userid = $_SESSION ["userid"];  


?>
<html>

    <head>
         
      <meta name = "viewport" content = "width = device-width" content ="initial-scale=1">
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="webpageCSS.css">
        
        <meta charset = "UTF-8">

        
     </head>
      
      <body>
                
    
         <div id="section">  
            <h1 style = "color: blue; font-size:200%">Digital Tax Aid </h1>
            <h2> Buying Property</h2>
           <h3 id="squid">Diagnosing the SDLT, ATED and CGT Implications</h3><br/><br/> <br/><br/>   
            </div>
  </body>

</html>





<?php
$db = mysqli_connect('localhost', 'root', 'root', 'taxdata')

or	die('Could not connect: ');



$sql = "SELECT users.fname, users.lname, useranswers.Diagnosticref FROM users, useranswers WHERE users.userid = '$userid' && users.userid = useranswers.userid HAVING max(Diagnosticref)";
        		
if ($result=mysqli_query($db,$sql))
    
{
    
   $row = mysqli_fetch_array($result);
    echo $row[0]." ".$row[1]."<br/><br/>";
    echo "Thank you for completing the diagnostic check<br/><br/>";
    echo "Your reference number for this attempt was ".$row [2]."<br/><br/>";
 //   echo "The date and time when you completed your answers was"." ".$row[7]."<br/><br/>";
//    echo "In this attempt, you answered the questions as follows<br/><br/>";
  //  echo "Whether the property acquired was residential?....".$row[2]."<br/><br/>";
//    echo"Whether the property was acquired by a 'non-natural person'....".$row[3];
//    echo "<br/><br/>";
  //  echo"Whether the property's value was over £500,000....".$row[4];
//    echo "<br/><br/>";
//    echo"Whether the property was acquired for a qualifying business purpose....".$row[5];
    echo "<br/><br/>";
   
}
    else
        
    {
        
        echo "problem";
    }


mysqli_close($db);




 

?>
<html>
<p><a href="resproplogout.php">click for log out page</a></p>
</html> 