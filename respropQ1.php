

<html>

    <head>
         
          <form  action ="respropQ2.php" method ="POST">
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script> 
        <style type="text/css"> 
           
          #submission
       {
           
           width:300px;
           height:40px;
           color:darkgreen;
           background-color: lightgray
           
           
   
              }
             #restip {
                  
          position:relative;
        visibility: visible;
            
                   }
            #rtip{
                
            visibility: visible
            }
            
            #contain
            {
                
                margin-left: 20px;
                
                
            }
              </style>

        <meta charset = "UTF-8">

        <title>ResPropTestForm</title>


          </head>



      <body>  

          
          <div container id=contain>
  <link rel="stylesheet" type="text/css" href="webpageCSS.css">
       <div id="section"> 
           
            <h1 style = "color: blue; font-size:200%">Digital Tax Aid </h1>
            <h2> Buying Property</h2>
           <h3 id="squid">Diagnosing The SDLT, ATED and CGT Implications</h3><br/><br/> <br/><br/>   
             
    
    
             </div>

 
          <div id="#error"></div>

        
          
           <form  action ="respropQ2.php" method ="POST" name = "submit">
        User ID: <input type = "text" id = "id" name = "userid" required><br><br>
          First Name: <input type = "text" id ="fname" name = "fname" required  value="<?php if(isset($_POST['name'])){echo htmlentities* $_POST['name'];}?>"><br><br>
          Second Name: <input type = "text" id = "lname" name = "lname" required><br><br>
         
               

               <div id="restip"><li><b>Is the property residential? </b></li><br><br></div>
               
        
               <button type="button" id = "residencetip">Hover here for meaning of 'residential'</button>
              
                   
 Residential?<input id ="Residential" type = "radio" name = "Residential"  value = "Yes"> 


Non-Residential?<input id = "Residential" type = "radio" name = "Residential" required value = "No"> <br><br/>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  
            <div>
                <script type="text/javascript" src="jquery-3.3.1.min.js">
   //$( "#submission" ).click(function( event ) {
   if ($("#fname").val() =="") {
       
    echo "Complete first name";
//  event.preventDefault();
    //alert("fill in box");
}
//})
      </script>
                    </div>         
               
    <div id = "submit">  
            <input type="submit" id="submission" name="enter" value="Click here to Submit Your Response"><br><br/>
            </div>               
                   
            
           
          </form>
              
              
            
    <script type="text/javascript">
   
       $('#residencetip').mouseover(function(){
           
            $('#residencetip').html('Residential property means..a) A building that is used or suitable for use as a dwelling or adapted for such use; or b) land forming part of a garden or grounds of such building, or c) land that subsists for the benefit of such a building. Note that there are variations in the definition of residential property for each of the SDLT, ATED and new CGT rules. Further advice should be taken in any area of doubt in relation to specific properties and in certain uses such as student accommodation and care homes. There is also an extended meaning of residential property for recent CGT rules for non-residents to include land that has at any time in the relevant period consisted of or included a dwelling.');
           
                                      });
        
        $('#residencetip').mouseleave(function(){
           
            $('#residencetip').fadeOut(5000).html("refresh page to see explanation of Residential again");
                                      });
        
        
        
 
</script>
    
      
  <p><a href="respropwebpage.php"> Back to web page</a></p>
    
              
              
        </body>
        </html>
        
     
      
         