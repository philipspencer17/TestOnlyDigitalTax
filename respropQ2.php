

<html>

    <head>
         
        <form  action ="respropQ3.php" method ="POST"></form>
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
    

        

        if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['Residential'])) {
       $userid = $_POST['userid'];
        $_SESSION = $userid;
        $fname = $_POST['fname'];
         $lname = $_POST['lname'];
            $Residential = $_POST['Residential'];
         
        echo $fname." ".$lname."<br/><br/> "."Your response to whether the property was residential was"." ".$Residential."<br/><br/>";
 
            
    include_once 'taxdatabase.php';
    
    $db = mysqli_connect('localhost', 'root', "root", 'Taxdata')

or	die('Could not connect: ');
    $sql = "INSERT INTO useranswers (userid,residential) VALUES ('$userid','$Residential')";

    
    $result =mysqli_query($conn,$sql);
    mysqli_close($db);
//        $result =mysqli_query($conn,"SELECT count(*) FROM useranswers");

  //   echo "Well done. You are successfully registered".$fname." ".$lname;
//     header("Location: ../respropsignup.php?signup=success");
 //   exit(); 
}
            
        

          
        if ($Residential == "No")
        
        {
            
        include ("respropAnswerA.php");
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
            
                   
            
                   
                     <div id="nptip"><li><b>Was the property acquired by a Natural Person? </b></li><br><br></div>
                   
                <button type="button" id = "natpersontip">Hover here for meaning of 'Natural Person'</button>
                 
              Natural person: <input id="natpers" type = "radio" name = "t" required value = "natural person"> 
                
              
                  Non-Natural person <input id="natpers" type = "radio" name = "t" required value = "non-natural person"> 
            <input type="submit" id="submission" name="enter" value="Click here to Submit Your Response"><br><br/>
                </form>
            </div>
    
    <script type="text/javascript">
   
       $('#natpersontip').mouseover(function(){
           
            $('#natpersontip').html('The expression Natural Person excludes any of the following;  a company, or a partnership where one or more members is a company, or a collective investment scheme eg a unit trust.<br/><br/><br/>');
           
                                      });
        
        $('#natpersontip').mouseleave(function(){
           
            $('#natpersontip').fadeOut(5000).html("refresh page to see meaning of non-natural person again");
                                      });
        
        
        
 
</script>
    
    
<html>
  <p><a href="respropQ1.php"> Back to previous page</a></p>
  <p><a href="respropsignup.php">click for log out page</a></p>
</html>  
    
      
         