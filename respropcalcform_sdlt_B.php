<head>
    <title>Diagnose Your Tax Position on Property Purchases</title><br/><br/>
    <title>Registration and Login </title>
    <link rel="stylesheet" type="text/css" href="respropregandlogin.css">
    
    
    
    </head>
    
    <body>
                
      <link rel="stylesheet" type="text/css" href="webpageCSS.css">
         <div id="section">  
            <h1 style = "color: blue; font-size:200%">Digital Tax Aid </h1><br/><br/>
            <h2> Buying Property</h2><br/><br/>
           <h3 id="squid">Diagnosing The SDLT, ATED and CGT Implications</h3><br/><br/>   
             
    
    
             </div>

        
                
    </body><head> 
    <style text="text/css">
    a {
    text-decoration: none;
}
.box{
   margin-left: 30px;
}
body{
    
    
    background-color:lightcyan;
            padding: 20px;
    
}

header nav{
   
    width:100%;
    height:60px;
    background-color: white;
}

header nav ul{
   
    float: left;
    
}
header nav ul li{
   
    float: left;
    list-style: none;
    
}

header nav ul li a{
    font-family:arial;
    font-size: 16px;
    color: #111;
    line-height: 63px;
    
}
header .nav-login{
    float:right;
    
}
header .nav-login form{
    float:left;
    padding-top: 15px;
    
}
header .nav-login form input{
    float:left;
    width: 140px;
    height:30px;
    padding:0px 10px;
    margin-right: 10px;
    border: none;
    background-color: lightgray;
     font-family:arial;
    font-size: 14px;
    color: #111;
    line-height: 30px;
    
    
}
header .nav-login form button{
    float:left;
    width: 60px;
    height:30px;
    margin-right: 10px;
    border: none;
    background-color: lightgray;
     font-family:arial;
    font-size: 14px;
    color: #111;
   cursor: pointer;
    
    
}
header .nav-login form button:hover{
   
    background-color: lightgray;
    
}
header .nav-login a {
    display:block;
    width:60px;
    height: 60px;
    border: none;
    float:left;
    background-color: white;
    font-family:arial;
    font-size: 16px;
    color: #111;
    line-height: 63px;
    cursor: pointer;
}
.main-container1{
    padding-top: 40px;
    
}
.main-container1 h2{
    
    font-family:arial;
    font-size: 40px;
    color: #111;
    line-height: 50px;
    text-align: center;
    float: right;
}
/* code for respropsignup.php file */
.signup1form {
    width: 300px;
    margin: o auto;
    padding-top: 30px;
    
}
.signup1form input {
    width: 90%;
    height:40px;
    padding:0px 5%;
    margin-bottom: 4px;
    border: none;
    background-color: white;
     font-family:arial;
    font-size: 16px;
    color: #111;
    line-height: 40px;
    position: relative;
    float: left;
    
}

.signup1form button:hover {
    background-color:#111;
     
    
}
.main_wrapper1 {
   float: left;
     
    
}
        .button{
            
    position: relative;
    
            
            
        }
        
        
        
        
        
     </style>
        </head>
    
    <section class="main-container1">
        <div class="main-wrapper1">
            <h2>Calculate Your SDLT LIbility</h2>
            
            <form class="signup1form" action ="respropcalc_sdlt_B.php" method="post">
               
              <ul>  <input type="text" name="userid" required placeholder="User ID"></ul> 
              <ul>  <input type="text" name="price" required placeholder="Enter purchase price"></ul>
             
             
                <button  class="button" type="submit" name="submit">click for calculation</button>
                    
            </form>
        
            
            
            
            
            
            
        
        </div>
    
    
    
    
    </section>

<p><a href="respropsignup.php">click for log out page</a></p>
 <p><a href="respropAnswerB.php"> Back to previous page</a></p>
    <p><a href="respropsummary.php"> Click to see summary of responses</a></p><br/><br/>;
</html>
    <?php
    include_once  'respropfooter.php';
    ?>
   