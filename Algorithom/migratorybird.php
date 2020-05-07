<?php

// Complete the migratoryBirds function below.
function migratoryBirds($arr) {
   $typearr = [];


foreach($arr as $value) {


if(!array_key_exists($value, $typearr)) {


$counts = array_count_values($arr);


$typearr[$value] = $counts[$value]; 


}


}


$maxarr = array_keys($typearr,max($typearr));


asort($maxarr);


$value = reset($maxarr);


return $value;


}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$arr_count = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
