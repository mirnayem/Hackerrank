<?php

// Complete the viralAdvertising function below.
function viralAdvertising($n) {
    
    $client = 5;
        $like = 0;
        
        for($i = 0; $i < $n; $i++){
            $client = floor($client/2);
            $like += $client;
            $client *= 3;
        }

        return $like;
    
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$result = viralAdvertising($n);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
