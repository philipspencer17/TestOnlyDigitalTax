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
              </style>

        <meta charset = "UTF-8">

        <title>ResPropTestForm</title>


        

          
          
        <h1>Property Questionnaire</h1>
       
     </head>

</html>

<?php
    


        if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['Residential'])) {

        $fname = $_POST['fname'];
         $lname = $_POST['lname'];
            $Residential = $_POST['Residential'];
         
        echo $fname." ".$lname."<br/><br/> "."Your response to whether the property was residential was"." ".$Residential."<br/><br/>";
          
          
        if ($Residential == "No")
        
        {
            
        include ("respropAnswerA.php");
        }
        else
        {
            echo "Please now answer the question below<br/><br/>";
        }
         
          }
          
?>       
        

<html>
        
        <script type="text/javascript">
        
    
        if ($Residential == "Yes")
            {
                #alt;
            }
        elso
            {
                echo "";
            }
    
    </script>
        
             
    <div id = "alt">
               <form  action ="respropQ3.php" method ="POST" name = "submit">    
            <li><b>Non-Natural Person?</b></li><br><br>
                 
              Natural person: <input type = "radio" name = "t" value = "np"> 
                
              
                  Non-Natural person <input type = "radio" name = "t" value = "nnp"> 
            <input type="submit" id="submission" name="enter" value="Click here to Submit Your Response"><br><br/>
                </form>
            </div>
    
</html>
        
          
<?php

?>

       