<html>
<head>
    <title>Diagnose Your Tax Position on Property Purchases</title><br/><br/>
    <title>Registration and Login </title>
    <link rel="stylesheet" type="text/css" href="respropregandlogin.css">
    
    
    
    </head>
    
    <body>
         <meta name = "viewport" content = "width = device-width" content ="initial-scale=1">         
      <link rel="stylesheet" type="text/css" href="webpageCSS.css">
         <div id="section">  
            <h1 style = "color: blue; font-size:200%">Digital Tax Aid </h1><br/><br/>
            <h2> Buying Property</h2><br/><br/>
           <h3 id="squid">Diagnosing The SDLT, ATED and CGT Implications</h3><br/><br/>   
             
    
    
             </div>

        
                
    </body>



</html> 

<?php
 include_once 'taxdatabase.php';
if (isset($_POST["submit"])){
   
   $userid = $_POST ["userid"];
    $price = $_POST ["price"];
  
   

     $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)

or	die('Could not connect: ');      

    $sql = "SELECT *
		FROM residentialpropertysdlt
		WHERE  $price >firstvalue  && $price < (secondvalue + 1)  ";

		
if ($result = mysqli_query($conn,$sql))
    
{
    
   $row = mysqli_fetch_array($result);
    
 if ( (($price) >-1) && ($price)<1000000001)
        
     {    
    
    $excess =  $price - $row[1];
    $marginaltax = ($excess*$row[3])/100;
    $sdlt  = $marginaltax + $row[4];
    $marginaltaxsurcharge = ($excess*$row[5])/100;
    $sdltsurcharge  = $marginaltaxsurcharge + $row[6];
    
    echo " Your tax liability is... "."£".$sdlt;
    echo "<br/><br/>";
    echo "  BUT NOTE! if this property is a second home (or has been bought as a buy to let), you will be liable to a 3% surchage, so your SDLT liability will rise to..."."£".$sdltsurcharge;
     echo "<br/><br/>"; 
    
  
 }
     
    else
        
    {
        
        header ("Location:respropsdlt_A_calcproblem.php");   
exit(); 
    
    }
        

}
    else
    {
    
    echo "INVALID INPUT - YOU MAY HAVE PUT IN COMMAS OR £ SIGNS. TRY AGAIN WITHOUT THESE.<br/><br/><br/>";
    }
}

mysqli_close($conn);


?>
<html>
<p><a href="resproplogout.php">click for log out page</a></p>
 <br/>

<br/>    

   
</html> 



