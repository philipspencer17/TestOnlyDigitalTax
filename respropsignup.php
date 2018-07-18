<?php
    session_start();
  //  include_once  'respropheader.php';
   

   
 ?>   
<html>

     
    <head>
        
    <title>Diagnose Your Tax Position on Property Purchases</title><br/><br/>
    <title>Registration and Login </title>
        <link rel="stylesheet" type="text/css" href="respropregandlogin.css"></link>
      <script type="text/javascript" src="jquery-3.3.1.min.js"></script>     
    
     
    
    </head>
   
        
        
        
   
       
    
    
    <body>
                
     
        
         <div id="section">  
            <h1 style = "color: blue; font-size:200%">Digital Tax Aid </h1><br/><br/>
            <h2> Buying Property</h2><br/><br/>
           <h3 id="squid">Diagnosing the SDLT, ATED and CGT Implications</h3><br/><br/>   
             
    
    
             </div>

      <div id="wrappererrormessage">
        <div id="errorMessage1"></div>
        
 
   
    
    <section class="main-container1">
         <h2>Sign Up</h2>
        <div class="main-wrapper1">
           
            
            <form class="signup1form" action ="tempsuccess.php" method="post">
               
              <ul>  <input type="text" name="userid" required placeholder="User ID"></ul> 
              <ul>  <input type="text" name="fname" required placeholder="FirstName"></ul>
             <ul>  <input type="text" name="lname" required placeholder="LastName"></ul> 
              <ul> <input type="text" name="email" required id="email" placeholder="email"></ul> 
               <ul><input type="password" name="password" required id ="password" placeholder="Password - 7 characters"></ul> 
                <ul><input  type="password" name="passwordconfirm" required id = "passwordconfirm" placeholder="Confirm Password"></ul> 
                
             
                <button   type="submit" name="submit" id="signupbutton">Sign Up</button>
                    
            </form>
        
        
        </div>
   
    
    
    </section>
         </body>
        
<p><a href="respropwebpage.php"> Back to main web page</a></p>
</html>

    <?php
    include_once  'respropfooter.php';
    ?>
