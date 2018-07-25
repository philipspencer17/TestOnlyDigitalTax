<?php
//session_start(); 
include_once 'taxdatabase.php';
//$userid = $_SESSION["userid"];


?>
<html>
    
     <head>
         
        <form  action ="respropQ3.php" method ="POST"></form>
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script> 
          <link rel="stylesheet" type="text/css" href="webpageCSS.css">
         

        <meta charset = "UTF-8">

       
     </head>

<body>
    
   
<div class= "answersection">
    
    <p>In this case:<br/><br/>

        i) Commercial rates of Stamp Duty Land Tax('SDLT') apply in England and Northern Ireland. The current rates and bands are as follows; <br/><br/><table>
<thead>  
<tr>
    <th>£</th>
    <td><td> <td><td><td><td> <td><td>
    <th>£</th>
     <td><td> <td><td><td><td> <td><td>
    </td>
    <th>%</th>
    <th></th>

</tr>
</thead>
    
     <tr>
    <td>0
     <td><td> <td><td><td><td> <td><td>
    <td>150,000
     <td><td> <td><td><td><td> <td><td>
    <td>0</td>
</tr>      
      <tr>
    <td>150,001
     <td><td> <td><td><td><td> <td><td>
    <td>250,000
      <td><td> <td><td><td><td> <td><td>
    <td>2</td>
</tr> 
        <tr>
    <td>over 250,000
     <td><td> <td><td><td><td> <td><td> <td><td> <td><td><td><td> <td><td><td></td>
    <td>5</td>
</tr>   
    </table>   
    <br/><br/>
    
      <p><a href="respropcalcform_sdlt_A.php"> Click for a calculation of SDLT due</a></p><br/><br/>
    
    
   Note that in Scotland, Land and Building Transaction Tax ('LBTT') will instead apply and in Wales, Land Transaction Tax. Separate specific advice should be taken where a Scottish or Welsh property is involved. <br/><br/>
    
    ii) The Annual Tax on Enveloped Dwellings ('ATED'') will not be relevant in this situation.<br/><br/>
    
    iii) Capital Gains Tax [“CGT”]can arise on any profit on the sale of the property. This also applies to non-UK resident individuals and non-UK resident companies.  <br/><br/>

   Individuals and companies may, however, find that any profit may be treated as income if the property was bought with a  view to sale at a profit. In that situation, the profit can be taxed at the normal marginal income tax rate (for individuals) or 20% for non-resident companies and corporation tax for UK resident companies.<br/><br/> 

    </div>
     
  </body> 
    



  <p><a href="respropQ1.php"> Back to previous page</a></p>
    <p><a href="respropsummary.php"> Click to exit and logout</a></p><br/><br/>
 
    
   
</html>