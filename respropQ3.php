<?php
    session_start();
    $natperson = $_POST["t"];
    $userid =$_SESSION["userid"] ;
?>
<<html>

    <head>
         
        <form  action ="respropQ4.php" method ="POST"></form>
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
    if(isset($_POST['t'])) {
     
        echo $userid."<br/>"."Your response to whether the property has been bought by a non-natural person was that it was acquired by a "." ".$natperson."<br/><br/>";
            
            
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
                   
                <p><a href="respropvaluemeaning.php"> click for meaning of valuation </a></p>
                   
               
                Over £500k <input type = "radio" name = "fiveC" value = "Yes over"><br/><br/>
               
                Not over £500k <input type = "radio" name = "fiveC" value = "Not over"> 
                   
             <input type="submit" id="submission" name="enter" value="Click here to Submit Your Response"><br><br/>
               
                </form>
            </div>
  

  <p><a href="respropQ2.php"> Back to previous page</a></p>
 <p><a href="resproplogout.php">click for log out page</a></p>
</html>

    
           