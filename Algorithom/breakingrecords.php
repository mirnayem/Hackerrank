<?php

// Complete the breakingRecords function below.
function breakingRecords($scores) {
    $min = $scores[0];
    $max = $scores[0];
    $highest = 0;
    $lowest = 0;
    $len = count($scores);
    for($i = 0; $i < $len; $i++)
    {
        
        if($scores[$i] > $max) 
        {
            $max = $scores[$i];
            $highest++;
        }

        if($scores[$i] < $min)
        {
            $min = $scores[$i];
            $lowest++;
        }
    }

 return [$highest , $lowest];
      

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $scores_temp);

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
