<?php

// Complete the angryProfessor function below.
function angryProfessor($k, $a) {

     $len = count($a);
     $present = 0;
     for($i=0 ; $i < $len ; $i++)
     {
         if($a[$i] <= 0)
         $present++;
     }
     if($present >= $k)
     {
         return "NO";
     }
     else return "YES";
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $nk_temp);
    $nk = explode(' ', $nk_temp);

    $n = intval($nk[0]);

    $k = intval($nk[1]);

    fscanf($stdin, "%[^\n]", $a_temp);

    $a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = angryProfessor($k, $a);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
