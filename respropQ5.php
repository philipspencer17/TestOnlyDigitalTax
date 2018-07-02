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
    
    $QB = $_POST['QB'];
   

        if(isset($_POST['QB'])) {

        
         
        echo "Your response to whether or not the property is in a qualifying business us was "." ".$QB."<br/><br/>";
            
        }

          
        if ($QB == "Yes")
        
        {
            
        include ("respropAnswerD.php");
   
            exit();

        }
        else
        {
            include ("respropAnswerD.php<br/><br/><br/><br/><br/><br/>
            ===========================================================
            ");
             exit();
        }
         
          
          
?>       
        

<html>
        
        

  