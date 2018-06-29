<html>
    <head>
        <title>TTS Tester</title>
      
    <script>
    
        
    function  getSpeech()  {
        
            var framehtml= "<iframe src = "\"https://texttospeech.googleapis.com/v1beta1/voices?languageCode=en-GB&fields=voices&key=resprop-a5dba8a906c3";
            <HTMLAudioElement>
            framehtml+=escape(document.getElementById("mytext").value);
            framehtml+="\"</iframe>";
        
            document.getElementById("myframe").innerHTML=framehtml;
        
    }
        
        
        
        </script>     
        
    </head>
    
    <body>
    
    <textarea id="mytext">
        
    
        
    </textarea>
      <button id +"mybutton" onclick= "getSpeech();">Click me for sound</button>
        
<div id="myframe"></div>
    </body>
</html>
    