<php?
  

      
?>


<html>

    <head>
         
        <form  action ="respropQ5.php" method ="POST"></form>
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
    session_start();
    $fiveC = $_POST['fiveC'];
       $userid = $_SESSION ["userid"];   
   

        if(isset($_POST['fiveC'])) {

        
         
        echo  $userid."<br/>"."Your response to whether or not the property value is greater than £500,000 is that it is "." "."$fiveC"."<br/><br/>";
       
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
                   
               <p><a href="respropqualbusinessmeaning.php"> click for meaning of qualifying business </a></p>
               
               
                Yes <input type = "radio" name = "QB" required value = "Yes"><br/><br/>
               
                No <input type = "radio" name = "QB" required value = "No"> 
                   
            <input type="submit" id="submission" name="enter" value="Click here to Submit Your Response"><br><br/>
               
                </form>
            </div>
    
  <p><a href="respropQ3.php"> Back to previous page</a></p>
    <p><a href="resproplogout.php">click for log out page</a></p>
</html>
   