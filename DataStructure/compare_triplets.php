<?php

// Complete the compareTriplets function below.
function compareTriplets($a, $b) {
    $alice = 0;
    $bob = 0;
    $len = count($a);
    for($i=0;$i < $len; $i++)
    {
        if($a[$i] > $b[$i]) $alice++;
        if($a[$i] < $b[$i]) $bob++;

    }
    return [$alice, $bob];

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);

