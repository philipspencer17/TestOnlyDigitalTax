<html>
<head>
    <title>Diagnose Your Tax Position on Property Purchases</title><br/><br/>
    <title>Registration and Login </title>
    <link rel="stylesheet" type="text/css" href="respropregandlogin.css">
    
    
    
    </head>
    
    <body>
                
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
if (isset($_POST["submit"])) {
   
   $userid = $_POST ["userid"];
    $price = $_POST ["price"];
  
   
}
    $db = mysqli_connect('localhost', 'root', 'root', 'Taxdata')

or	die('Could not connect: ');      

    $sql = "SELECT *
		FROM residentialpropertysdlt_highrate
		WHERE  $price >firstvalue  && $price < (secondvalue + 1)  ";
    

		
if ($result = mysqli_query($db,$sql))
    
{
    
   $row = mysqli_fetch_array($result);
    
   
  $excess =  $price - $row[1];
    $marginaltaxsurcharge = ($excess*$row[3])/100;
    $sdlt  = $marginaltaxsurcharge + $row[4];
     
    echo " The SDLT liability is..."."£".$sdlt ;
    echo "<br/><br/>";
    echo "  This includes the 3% surcharge on amounts up to £500000 and a rate of 15% thereafter";
     echo "<br/><br/>";
    
}
mysqli_close($db);



?>
<html>
<p><a href="respropsignup.php">click for log out page</a></p>
 <br/>
 <p><a href="respropcalcform_sdlt_E.php"> Back to previous page</a></p>
<br/>    
    <p><a href="respropsummary.php"> Click to see summary of responses</a></p><br/><br/>
   
   
</html> 
