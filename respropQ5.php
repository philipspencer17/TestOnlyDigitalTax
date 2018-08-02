<?php
    
 //    session_start();
   if(isset($_POST['userid'])) {
       $userid = $_POST ["userid"];   
 $QB = $_POST['QB'];
   }
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

        if(isset($_POST['QB'])) {

        
         
        echo $userid."<br/><br/>"."Your response to whether or not the property is in a qualifying business us was "." ".$QB."<br/><br/>";
     
            
         include_once 'taxdatabase.php';
    
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)

or	die('Could not connect: ');
            
    $sql = "SELECT max(Diagnosticref)
		FROM useranswers
        WHERE userid = '$userid'
        GROUP BY userid";

            $result=mysqli_query($conn,$sql);

    if ($result){

   $row = mysqli_fetch_array($result);
            
    $sql2 = "UPDATE useranswers SET  qualifyinguse = '$QB'  WHERE Diagnosticref = $row[0] ";

        
    }
    $result2 =mysqli_query($conn,$sql2);
            
    mysqli_close($conn);
            
        }

              
            
        

          
        if ($QB == "Yes")
        
        {
            
        include ("respropAnswerD.php");
   
            exit();

        }
        else
        {
            include ("respropAnswerE.php");
             exit();
        }
         
          
          
?>       
        
<html>

    
    <p><a href="resproplogout.php">click for log out page</a></p>
 
</html>

     

  