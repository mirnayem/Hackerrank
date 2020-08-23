<!-- Operators --> 

<?php


// Complete the solve function below.
function solve($meal_cost, $tip_percent, $tax_percent) {

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%lf\n", $meal_cost);

fscanf($stdin, "%d\n", $tip_percent);

fscanf($stdin, "%d\n", $tax_percent);

solve($meal_cost, $tip_percent, $tax_percent);
$tip = $meal_cost*$tip_percent/100;
$tax = $meal_cost*$tax_percent/100;
$meal_cost = $meal_cost + $tip + $tax;
echo round($meal_cost);
fclose($stdin);
