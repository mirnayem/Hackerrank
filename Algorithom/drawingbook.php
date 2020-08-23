<?php

/*
 * Complete the pageCount function below.
 */
function pageCount($n, $p) {
    /*
     * Write your code here.
     */
    $page1 = floor($p/2);
    if($n%2==0){
        $n++;
    }
    
    $page2 = floor(($n - $p) / 2);
    return $page1 < $page2 ? $page1 : $page2;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%d\n", $p);

$result = pageCount($n, $p);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
