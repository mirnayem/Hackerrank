<!-- Let's Review --> 

<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, "%d\n", $n);

for($j = 0; $j < $n ; $j++)
{
 fscanf($_fp, "%s\n", $S);

$even='';
$odd ='';
for($i = 0; $i < strlen($S); $i++)
{
   if ($i%2==0) $even .=$S[$i];
   else $odd .=$S[$i];
}
 echo $even." ".$odd."\n";
}
