



<html>

    <head>
         
        <form  action ="respropQ4.php" method ="POST"></form>
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script> 
        <style type="text/css">   
          #submission
       {
           
           width:210px;
           height:40px;
           color:darkgreen;
           background-color: lightgray
           
           
   
              }
            
            
               #nptip {
                  
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
    $natperson = $_POST["t"];
    $userid =$_SESSION['userid'] ;
   
    if(isset($_POST['t'])) {
     
        echo "Your response to whether the property has been bought by a non-natural person was that it was acquired by a "." ".$natperson."<br/><br/>";
            
            
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
            
    $sql2 = "UPDATE useranswers SET  natperson = '$natperson'  WHERE Diagnosticref = $row[0] ";

    }
    $result2 =mysqli_query($conn,$sql2);
            
    mysqli_close($db);
            
        }

          
        if ($natperson == "natural person")
        
        {
            
        include ("respropAnswerB.php");
            
            
  
        //new code 30 June
            exit();
        // end of new code 30 June
        }
        else
        {
            echo "Please now answer the question below<br/><br/>";
        }
         
          
          
?>       
        

<html>
        
        <script type="text/javascript">
        
    
        if ($natpers == "non-natural person")
            {
                #alt;
            }
        else
            {
                echo "";
            }
    
    </script>
        
             
    <div id = "alt">
               <form  action ="respropQ4.php" method ="POST" name = "submit">  
                   
                
                 
           
                 <div id="valtip"><li><b>Was the property value over £500,000? </b></li><br><br></div>
                   
                <button type="button" id = "valuationtip">Hover here for explanation re value</button>
                   
               
                Over £500k <input type = "radio" name = "fiveC" value = "Yes over"><br/><br/>
               
                Not over £500k <input type = "radio" name = "fiveC" value = "Not over"> 
                   
             <input type="submit" id="submission" name="enter" value="Click here to Submit Your Response"><br><br/>
               
                </form>
            </div>
    
    <script type="text/javascript">
   
       $('#valuationtip').mouseover(function(){
           
            $('#valuationtip').html('The valuation threshold relates to the value of the property at 1 April 2017 or, if the property was bought later, at the time of acquisition. Property values are reassessed every five years, so there will be a general revaluation on 1 April 2022 (i.e. 5 years after 1 April 2017) and subsequent 5 yearly anniversaries.<br/><br/><br/>');
           
                                      });
        
        $('#valuationtip').mouseleave(function(){
           
            $('#valuationtip').fadeOut(5000).html("refresh page to see again the explanation re valuation");
                                      });
        
        
        
 
</script>
    


  <p><a href="respropQ2.php"> Back to previous page</a></p>
<p><a href="respropsignup.php">click for log out page</a></p>
</html>

    
           