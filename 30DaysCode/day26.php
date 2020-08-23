<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, "%d %d %d", $da, $ma, $ya);
fscanf($_fp, "%d %d %d", $de, $me, $ye);

$a = mktime(0, 0, 0, $ma, $da, $ya);
$e = mktime(0, 0, 0, $me, $de, $ye);

if($a > $e){
    if($ya == $ye && $ma == $me){
        echo 15 * ($da - $de);
        return;
    }

    if($ya == $ye){
        echo 500 * ($ma - $me);
        return;
    }

    echo 10000;
    return;
}

echo 0;

?>