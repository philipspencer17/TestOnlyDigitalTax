

<html>

    <head>
              <meta name = "viewport" content = "width = device-width" content ="initial-scale=1">
        <form  action ="respropQ3.php" method ="POST"></form>
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script> 
          <link rel="stylesheet" type="text/css" href="webpageCSS.css">
         

        <meta charset = "UTF-8">

       
     </head>
                
    <body>
                
    
         <div id="section">  
            <h1>Digital Tax Aid </h1>
            <h2> Buying Property</h2>
           <h3 id="squid">Diagnosing the SDLT, ATED and CGT Implications</h3><br/><br/> <br/><br/>   
    
             </div>
          
    </body>

</html>


<?php
    
    if(isset($_POST['userid'])) {
        $userid = $_POST['userid'];
        $_SESSION = $userid;
        $Residential = $_POST['Residential'];
         
        echo $userid."<br/><br/>"."Your response to whether the property was residential was"." ".$Residential."<br/><br/>";
 
            
    include_once 'taxdatabase.php';
    

         $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)

or	die('Could not connect: ');
    $sql = "INSERT INTO useranswers (userid,residential) VALUES ('$userid','$Residential')";

    
    $result =mysqli_query($conn,$sql);
 
           mysqli_close($conn);

}
            
        

          
        if ($Residential == "No")
        
        {
            
        include ("respropAnswerA.php");
    
            exit();
       
        }
        else
        {
            echo "Please now answer the question below<br/><br/>";
        }
         
?>       
     
<html>
        
        <script type="text/javascript">
        
    
        if ($Residential == "Yes")
            {
                #alt;
            }
        else
            {
                echo "";
            }
    
    </script>
        
             
    <div id = "alt">
               <form  action ="respropQ3.php" method ="POST" name = "submit"> 
           <fieldset class="form-group">     
         <input type = "text" class = "identry" name = "userid" required value = '<?php echo $userid ?>'><br><br>
                   <div id="nptip"><li><b>Was the property acquired by a Natural Person? </b></li><br><br></div>
                   
               <p><a href="respropnatpersmeaning.php"> click for meaning of Natural Person </a></p>
                 
              Natural person: <input id="radio1" type = "radio" name = "t" required value = "natural person"><br/> 
                
              
                  Non-Natural person <input id="radio2" type = "radio" name = "t" required value = "non-natural person"> 
                   </fieldset>
            <input type="submit" id="subbutton" name="enter" value="Click to Submit"><br><br/>
                </form>
            </div>
    
<html>
  <p> Use back button above to return to previous page</a></p>
  <p><a href="resproplogout.php">click for log out page</a></p>
</html>  
    
      
         