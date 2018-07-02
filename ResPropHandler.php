
    
       
    
 
    
    
        <?php
       

        
    
        if(isset($_POST['fname']) && isset($_POST['sname']) && isset($_POST['Residential']) && isset($_POST['fiveC'])) {
        
        
        $fname = $_POST['fname'];
         $sname = $_POST['sname'];
            $Residential = $_POST['Residential'];
            $fiveC = $_POST['fiveC'];
        
            
            
        echo $fname." ".$sname."<br/><br/> "."Your response to whether the property was residential was"." ".$Residential."<br/><br/>". "Your response to whether the value was over £500,000 was that it was"." ".$fiveC."<br/><br/>";
            
        if ($Residential == "No")
        
        {
            
        include ("respropAnswerA.php");
        }
        }

       
        
        
        ?>
    
    