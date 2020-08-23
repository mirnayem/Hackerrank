<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));


    sort($arr);
    $min = 0;
    $max = 0;
    $len = count($arr)-1;
   
   for($i= 0 ; $i<= $len; $i++)
   {   
       if($i >= 1 ) $max = $max + $arr[$i];
       if($i < $len) $min= $min + $arr[$i];
       
   }

   
 

  echo $min.' '.$max;
  
fclose($stdin);