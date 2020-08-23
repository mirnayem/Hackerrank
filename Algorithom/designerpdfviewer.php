<?php

// Complete the designerPdfViewer function below.
function designerPdfViewer($h, $word) {
    $max=0;
    $len = strlen($word);
    for($i = 0; $i < $len; $i++)
    {
            if($max < $h[ord($word[$i])-97])
            $max = $h[ord($word[$i])-97] ;
        
    }
    
    return $max* $len;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $h_temp);

$h = array_map('intval', preg_split('/ /', $h_temp, -1, PREG_SPLIT_NO_EMPTY));

$word = '';
fscanf($stdin, "%[^\n]", $word);

$result = designerPdfViewer($h, $word);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
