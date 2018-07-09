<php?
  

      
?>


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
            
            
              #qbtip {
                  
          position:relative;
        visibility: visible;
            
            
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
    $fiveC = $_POST['fiveC'];
       $userid = $_SESSION ["userid"];   
   

        if(isset($_POST['fiveC'])) {

        
         
        echo  "Your response to whether or not the property value is greater than £500,000 is that it is "." "."$fiveC"."<br/><br/>";
       
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
            
    $sql2 = "UPDATE useranswers SET  valueover£500k = '$fiveC'  WHERE Diagnosticref = $row[0] ";

    }
    $result2 =mysqli_query($conn,$sql2);
            
    mysqli_close($db);
            
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
            
                 
          <div id="qbtip"><li><b>Was the property acquired for qualifying business use? </b></li><br><br></div>
                   
                <button type="button" id = "qualifyingbustip">Hover here for explanation re qalifying business</button>
               
               
                Yes <input type = "radio" name = "QB" required value = "Yes"><br/><br/>
               
                No <input type = "radio" name = "QB" required value = "No"> 
                   
            <input type="submit" id="submission" name="enter" value="Click here to Submit Your Response"><br><br/>
               
                </form>
            </div>
    
    
    <script type="text/javascript">
   
       $('#qualifyingbustip').mouseover(function(){
           
            $('#qualifyingbustip').html('The property can satisfy the qualifying business condition when it has been acquired for certain purposes such as property rental, commercial development or use as trading premises. Further specific advice may be necessary to determine whether a particular property situation meets this criteria.<br/><br/><br/>');
           
                                      });
        
        $('#qualifyingbustip').mouseleave(function(){
           
            $('#qualifyingbustip').fadeOut(5000).html("refresh page to see again the meaning of qualifying business");
                                      });
        
        
        
 
</script>
    
    
    

  <p><a href="respropQ3.php"> Back to previous page</a></p>
    <p><a href="respropsignup.php">click for log out page</a></p>
</html>
   