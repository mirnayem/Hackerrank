<!-- Conditional Statements -->$_COOKIE

<?php



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);
if($N%2==1)
{
echo 'Weird';
}elseif($N%2==0 && $N>=2 && $N <=5)
{
    echo 'Not Weird';
}elseif($N%2==0 && $N >=6 && $N <= 20)
{
    echo 'Weird';
}elseif($N%2==0 && $N > 20)
{
    echo 'Not Weird';
}
fclose($stdin);