<?php
//källkodsfilen
$sourceFile = file_get_contents("source.php") or die ("failed");

//ger karaktärer istället för bokstäver (inga space inkluderade)

$sourceToString = htmlspecialchars($sourceFile);

$longestCode = 0;
$lengthOfCode = 0;

//loopar igenom koden
for($i = 0; $i < strlen($sourceToString); $i++){    

  //längden på koden
  $lengthOfCode += 1;    
  //gör en radbrytning
  if($sourceToString[$i] == "\n"){    
    
    //för att få ut alla karaktärer i källkoden
    if($longestCode < $lengthOfCode){            
      $longestCode = $lengthOfCode;        
    }      
    //längden börjar på noll  
    $lengthOfCode = 0;    
  }
}
echo "<html>
<body>    
//alla bokstäver 
$longestCode
$sourceToString
</body>
</html>";
