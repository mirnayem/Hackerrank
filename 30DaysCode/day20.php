<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
// Write Your Code Here
// $a = [9,3,5,2,6];
$n = count($a);

function swap(&$a, &$b){
    list($a, $b) = [$b, $a];
}

$totalSwaps=0;

for ($i = 0; $i < $n; $i++) {
    // Track number of elements swapped during a single array traversal
    $numberOfSwaps = 0;
    
    for ($j = 0; $j < $n -1; $j++) {
        // Swap adjacent elements if they are in decreasing order
        if ($a[$j] > $a[$j + 1]) {
            swap($a[$j], $a[$j + 1]);
            $numberOfSwaps++;
           $totalSwaps++;
        }
         
        
    }
   

    // If no elements were swapped during a traversal, array is sorted
    if ($numberOfSwaps == 0) {
        break;
    }
    
 
    
}
    print "Array is sorted in $totalSwaps swaps.\n";
    print "First Element: $a[0]\n";
    $last = $n - 1;
    print "Last Element: $a[$last]";



?>
