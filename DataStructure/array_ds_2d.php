<?php



$stdin = fopen("php://stdin", "r");

$arr = array();

for ($i = 0; $i < 6; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$rows = count($arr);
$columns = count($arr[0]);
$max_hourglass_sum = -63;

for($i=0;$i< $rows-2; $i++)
{
    for($j=0;$j<$columns-2; $j++)
    {
        $hourglass_sum = $arr[$i][$j]+ $arr[$i][$j+1]+ $arr[$i][$j+2]+ $arr[$i+1][$j+1]+         $arr[$i+2][$j]+ $arr[$i+2][$j+1]+ $arr[$i+2][$j+2]; 

        $max_hourglass_sum = max($max_hourglass_sum , $hourglass_sum);
    }

}

 echo $max_hourglass_sum;

fclose($stdin);
