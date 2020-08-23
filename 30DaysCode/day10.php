<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);
$bin = (decbin($n));
$binArr = str_split($bin);
$count = 0;
$i = 0;
$highCount = 0;

foreach($binArr as $value)
{
   if($binArr[$i] == 1){
    $count ++;
    $i++;
    } else {
       if($count > $highCount){
         $highCount = $count;
         }
        $i++;
        $count=0;
    }
    if($count > $highCount){
       $highCount = $count;
         }
}

 echo $highCount."\n";



fclose($stdin);