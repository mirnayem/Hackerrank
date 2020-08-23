<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$ar = array_map('intval', $arr);

$sum = 0;
foreach ($ar as $val) {
  $sum = $sum + $val;
}
echo $sum;