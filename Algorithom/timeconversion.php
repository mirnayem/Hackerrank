<?php

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s) {
    $flag = substr($s, -2, 2);
    $hour = substr($s, 0, 2);
    $extended = substr($s, 2, -2);

    if ($flag == 'PM' &&  $hour < 12) {
        return  $hour + 12 . $extended;
    } else if ($flag == 'AM' &&  $hour == 12) {
        return '00' . $extended;
    } else {
        return $hour . $extended;
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);