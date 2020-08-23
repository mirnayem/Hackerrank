<?php

// // Complete the aVeryBigSum function below.
function aVeryBigSum($ar) {
    // $sol = array_sum($ar);
    // return $sol;
    $sum = 0;
    foreach($ar as $a)
    {
        $sum += $a; 
    }
    return $sum;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar);
fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);