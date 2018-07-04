

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
    $_SESSION['userid'] = 'userid';
    $natperson = $_POST["t"];
       $userid = 'userid' ;
  

        if(isset($_POST['t'])) {

        
         
        echo "Your response to whether the property has been bought by a non-natural person was that it was acquired by a "." ".$natperson."<br/><br/>";
            
            
        include_once 'taxdatabase.php';
    
    $db = mysqli_connect('localhost', 'root', "root", 'Taxdata')

or	die('Could not connect: ');
    $sql = "UPDATE useranswers SET  natperson = $natperson  WHERE userid = userid' ";

    
    $result =mysqli_query($conn,$sql);
            
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
                 
             <li> <b>Value over £500,000? </b></li><br><br>
               
               
                Over £500k <input type = "radio" name = "fiveC" value = "Yes over"><br/><br/>
               
                Not over £500k <input type = "radio" name = "fiveC" value = "Not over"> 
                   
             <input type="submit" id="submission" name="enter" value="Click here to Submit Your Response"><br><br/>
               
                </form>
            </div>
    


  <p><a href="respropQ2.php"> Back to previous page</a></p>
</html>

<?php
        $_SESSION['userid']  = $userid;
        echo '<a href="respropQ2.php'.SID.'"></a>';
    ?>
      
           