<?php

// Complete the divisibleSumPairs function below.
function divisibleSumPairs($n, $k, $ar) {
 
    $count = 0;
    for ($i = 0; $i <= $n; $i++) {
     for ($j = $i + 1; $j < $n; $j++) {
        $count += ($ar[$i]+ $ar[$j]) % $k == 0;
     }
  
  }
     return $count;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = divisibleSumPairs($n, $k, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
