<?php

// Complete the bonAppetit function below.
function bonAppetit($bill, $k, $b) {
   $total = array_sum($bill);
   $omit = $bill[$k]; 
   $shared = $total - $omit;
   $b_actual = $shared/2;
   
   if($b_actual != $b)
   {   
       $refund = $b - $b_actual ;
       print $refund;
   }
   else print "Bon Appetit";

}

$nk = explode(' ', rtrim(fgets(STDIN)));

$n = intval($nk[0]);

$k = intval($nk[1]);

$bill_temp = rtrim(fgets(STDIN));

$bill = array_map('intval', preg_split('/ /', $bill_temp, -1, PREG_SPLIT_NO_EMPTY));

$b = intval(trim(fgets(STDIN)));

bonAppetit($bill, $k, $b);
