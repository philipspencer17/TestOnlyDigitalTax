  <html>

    <head>
         
        <form  action ="respropQ5.php" method ="POST"></form>
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
    
    $fiveC = $_POST['fiveC'];
   

        if(isset($_POST['fiveC'])) {

        
         
        echo  "Your response to whether or not the property value is greater than £500,000 is that it is "." "."$fiveC"."<br/><br/>";
            
        }

          
        if ($fiveC == "Not over")
        
        {
            
        include ("respropAnswerC.php");
            
            
  
        //new code 30 June
            exit();
        // end of new code 30 June
        }
        else
        {
            echo "Please now answer the final question below<br/><br/>";
        }
         
          
          
?>       
        

<html>
        
        <script type="text/javascript">
        
    
        if ($fiveC == "Yes over")
            {
                #alt;
            }
        else
            {
                echo "";
            }
    
    </script>
        
             
    <div id = "alt">
               <form  action ="respropQ5.php" method ="POST" name = "submit">    
            <li><b>Is the property in a qualifying business use?</b></li><br><br>
                 
          
               
               
                Yes <input type = "radio" name = "QB" required value = "Yes"><br/><br/>
               
                No <input type = "radio" name = "QB" required value = "No"> 
                   
            <input type="submit" id="submission" name="enter" value="Click here to Submit Your Response"><br><br/>
               
                </form>
            </div>
    
</html>
        
          
<?php

?>

   