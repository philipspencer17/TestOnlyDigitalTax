  <html>

    <head>
         
    
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script> 
        <style type="text/css">   
          #submission
       {
           
           width:210px;
           height:40px;
           color:darkgreen;
           background-color: lightgray
           
           
   
              }
              </style>

        <meta charset = "UTF-8">

        
     </head>
      
      <body>
                
      <link rel="stylesheet" type="text/css" href="webpageCSS.css">
         <div id="section">  
            <h1 style = "color: blue; font-size:200%">Digital Tax Aid </h1>
            <h2> Buying Property</h2>
           <h3 id="squid">Diagnosing The SDLT, ATED and CGT Implications</h3><br/><br/> <br/><br/>   
             
    
    
             </div>

        
                
    </body>


</html>

<?php
    
     session_start();
   
       $userid = $_SESSION ["userid"];   
 $QB = $_POST['QB'];
   
 //      $userid = $_POST ["userid"];
   

        if(isset($_POST['QB'])) {

        
         
        echo "Your response to whether or not the property is in a qualifying business us was "." ".$QB."<br/><br/>";
     
            
         include_once 'taxdatabase.php';
    
    $db = mysqli_connect('localhost', 'root', "root", 'Taxdata')

or	die('Could not connect: ');
            
    $sql = "SELECT max(Diagnosticref)
		FROM useranswers
        WHERE userid = '$userid'
        GROUP BY userid";

            $result=mysqli_query($db,$sql);

    if ($result){

   $row = mysqli_fetch_array($result);
            
    $sql2 = "UPDATE useranswers SET  qualifyinguse = '$QB'  WHERE Diagnosticref = $row[0] ";

        
    }
    $result2 =mysqli_query($conn,$sql2);
            
    mysqli_close($db);
            
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
  <p><a href="respropQ4.php"> Back to previous page</a></p><br/><br/>;
    
    <p><a href="respropsignup.php">click for log out page</a></p>
 
</html>

     

  