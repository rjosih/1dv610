<?php

//kollar hur många rader det är

function SumOfLines(){

$file = "source.php";
$lineCount = 0;
$handle = fopen($file, "r");
  while(!feof($handle))
  {
    $line = fgets($handle);
    $lineCount++;
  }
fclose($handle);
echo "<p> $lineCount; </p>";
  
}
echo "Antal rader "; SumOfLines();

//försöker få ut längsta raden, atm får ut längsta ordet

$string = "Hej jag heter Tobias";
$words = explode(' ', $string);
$longestWordLength = 0;
$longestWord = '';

foreach ($words as $word) {
  if(strlen($word) > $longestWordLength);
  {
    $longestWordLength = strlen($word);
    $longestWord = $word;
  }
}
echo "<p>$longestWord</p>";