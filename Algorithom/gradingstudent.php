<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
      
      
for ($i=0;$i < sizeof($grades); $i++){
    if($grades[$i] >= 38){
        if($grades[$i] % 5 == 3){
            $grades[$i] += 2;
        }
        else if($grades[$i] % 5 == 4){
            $grades[$i] += 1;
        }
    }
}
      
    return $grades;  
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);