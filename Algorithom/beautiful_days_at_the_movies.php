<?php

// Complete the beautifulDays function below.
function beautifulDays($i, $j, $k) {
    $b_day = 0;
 foreach(range($i , $j) as $number){
     $reverse_number = strrev($number);
     $absolute = abs($number-$reverse_number);
     $devisor = $absolute/$k;
     
     if(is_int($devisor)){
         $b_day ++;      
     }
   
 }
 return $b_day;
 
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $ijk_temp);
$ijk = explode(' ', $ijk_temp);

$i = intval($ijk[0]);

$j = intval($ijk[1]);

$k = intval($ijk[2]);

$result = beautifulDays($i, $j, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
