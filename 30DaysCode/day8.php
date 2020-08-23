<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$n = intval(trim(fgets(STDIN)));
$phoneBook = [];
for ($i=0; $i<$n; $i++){
    $lines = trim(fgets(STDIN));
    $arr = explode(" ", $lines);
    $phoneBook[$arr[0]] = $arr[1] ;
}
$query=trim(fgets(STDIN));
do{
if(array_key_exists($query,$phoneBook)){
    echo $query."=".$phoneBook[$query]."\n";
}
else{
    echo "Not found\n";
}
}while($query=trim(fgets(STDIN)));




?>
