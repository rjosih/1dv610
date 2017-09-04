<?php
$sourceFile = file_get_contents("source.php") or die ("failed");
$sourceToString = htmlspecialchars($sourceFile);$longestCode = 0;
$lengthOfCode = 0;
for($i = 0; $i < strlen($sourceToString); $i++){    
  $lengthOfCode += 1;    
  if($sourceToString[$i] == "\n"){        
    if($longestCode < $lengthOfCode){            
      $longestCode = $lengthOfCode;        
    }        
    $lengthOfCode = 0;    
  }
}
echo "<html>
<body>    
$sourceToString    
$longestCode
</body>
</html>";
