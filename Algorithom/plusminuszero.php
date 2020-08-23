<?php
$stdin = fopen("php://stdin", "r");
fscanf($stdin,"%d",$n);
$arr_temp = fgets($stdin);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);


 $cp=0;
 $cn=0;
 $cz=0;
 $total = count($arr);
 
  for($i=0;$i< $total; $i++)
  {
      if($arr[$i]>0) $cp++;
      elseif ($arr[$i]<0) $cn++;
      else $cz++;

      
  }
$x=$cp/$total;
$y=$cn/$total;
$z=$cz/$total;

echo number_format(strval($x), 5 )."\n";

echo number_format(strval($y), 5 )."\n";

echo number_format(strval($z), 5 )."\n";

