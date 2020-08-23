<?php
//Enter your code here
class Calculator {
    public static function power($n , $p) {
        if($n >=0 && $p >=0)
        {
        $ans = $n**$p;
        return $ans;
        }
        else 
       return $getMessage = "n and p should be non-negative";
    }
}

$myCalculator=new Calculator();
$T=intval(fgets(STDIN));
while($T-->0){
    list($n, $p)  = explode(" ", trim(fgets(STDIN)));
    try{
        $ans=$myCalculator->power($n,$p);
        echo $ans."\n";
    }
    catch(Exception $e){
        echo $e->getMessage()."\n";
    }
}
?>