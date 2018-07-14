 <?php
session_start();   
   if (isset($_SESSION["userid"]) )
       {
               $userid = $_SESSION["userid"];
              
               
       }
 else
 {
     
     echo "post failed";
 }

?>

<html>

    <head>
         
          <head>
         
        <form  action ="respropQ2.php" method ="POST"></form>
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script> 
          <link rel="stylesheet" type="text/css" href="webpageCSS.css">
         

        <meta charset = "UTF-8">

       

              

        <title>ResPropTestForm</title>


          </head>



      <body>  

          
          <div container id=contain>
  
       <div id="section"> 
           
            <h1>Digital Tax Aid </h1>
            <h2> Buying Property</h2>
           <h3>Diagnosing the SDLT, ATED and CGT Implications</h3><br/><br/> <br/><br/>   
          
             </div>

           <form   action ="respropQ2.php" method ="POST" name = "submit">
          User ID: <input type = "text" class = "identry" name = "userid" required value = '<?php echo $userid ?>'><br><br>
               

               <div><li><b>Is the property residential? </b></li><br><br></div>
              
            <p><a href="respropmeaning.php"> click for meaning of Residential </a></p>      
                 
 Residential?<input id ="Residential" type = "radio" name = "Residential"  value = "Yes"> 


Non-Residential?<input id = "Residential" type = "radio" name = "Residential" required value = "No"> <br><br/>
 
  
                 
            <input type="submit" id="submission" name="enter" value="Click here to Submit Your Response"><br><br/>
           
          </form>
           
     
 
          </div>
          
           <p><a href="respropwebpage.php"> Back to web page</a></p>
              <p><a href="resproplogout.php">click for log out page</a></p>
          
     </body>
    
    
        </html>


