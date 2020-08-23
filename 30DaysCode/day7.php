<!-- Arrays --> 

<?php
// Complete the reverseArray function below.


function reverseArray($arr) {
   $len = count($arr)-1;
   for($i=0; $i <= $len/2; $i++)
   {
       $tmp = $arr[$i];
       $arr[$i] = $arr[$len-$i];
       $arr[$len-$i] = $tmp;
   }
   return $arr;

}



$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $arr_count);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$res = reverseArray($arr);

fwrite($fptr, implode(" ", $res) . "\n");

fclose($stdin);
fclose($fptr);