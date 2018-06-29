      <html>

    <head>
         
          <form  action ="ResPropHandler.php" method ="POST">
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


          </head>



      <body>  

         
          

        <h1>Property Questionnaire</h1>

 
          

        
          
           <form  action ="ResPropHandler.php" method ="POST" name = "submit">
          First Name: <input type = "text" name = "fname"><br><br>
          Second Name: <input type = "text" name = "sname"><br><br>
         
               
               
               <input type="submit" id="submission" name="enter" value="Click here to Submit Your Responses"><br><br/>

<li><b>Is the property residential? </b></li><br><br>
                   
             Residential?<input type = "radio" name = "Residential" value = "Yes"> 


                   Non-Residential?<input type = "radio" name = "Residential" value = "No"> <br><br/>
               
               
               <li> <b>Value over £500,000? </b></li><br><br>
               
               
                Over £500k <input type = "radio" name = "fiveC" value = "yes over">
              
               
                Not over £500k <input type = "radio" name = "fiveC" value = "Not over"> 
             
               
               
               
               
                

              

    
        </body>
    </html>
 


   
     
       

