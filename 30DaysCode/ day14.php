<?php
    class Difference{
    private $elements=array();
    public $maximumDifference;

// Write your code here
    function __construct($elements)
    {
        $this->elements = $elements;
    }
   
    function ComputeDifference()
    {
       
     sort($this->elements);
     $max = $this->elements[count($this->elements)-1];
     $min = $this->elements[0];
     $this->maximumDifference= $max - $min ;

    }
} //End of Difference class  
     

$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);
?>