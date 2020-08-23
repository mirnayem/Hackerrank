<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$S);

class Printer {
    public static function printInt(int $value) {
        echo $value;
    }
}

try {
    sscanf($S, "%d", $out);
    Printer::printInt($out);
} catch (TypeError $e) {
    echo "Bad String";
}
?>