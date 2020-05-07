<?php
$year = 2020;

if( (0 == $year % 4) && (0 != $year % 100) || (0 == $year % 400) )  

echo  "12.09.$year";

else echo "13.09.$year";


?>