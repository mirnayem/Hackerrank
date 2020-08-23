<?php

// Complete the countingValleys function below.
function countingValleys($n, $s) {

  $sum = 0;
  $count = 0;
  for($i = 0; $i < $n; $i++){
    if($s[$i]=='U'){
      if(++$sum==0)
        $count++;
    }
    else $sum--;
  }
  return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = countingValleys($n, $s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
