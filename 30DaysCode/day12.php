<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}
class Student extends person {
    private $testScores;
  
   
    public function __construct($firstName,$lastName,$id,$scores){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->id = $id;
        $this->testScores = $scores;
        }
    // Write your constructor here
   

        public function calculate(){

       $average = array_sum($this->testScores) / count($this->testScores);

        if($average<40){
            return "T";
        } else if($average<55){
            return "D";
        }else if($average<70){
            return "P";
        }else if($average<80){
            return "A";
        }else if($average<90){
            return "E";
        }else if($average<=100){
            return "O";
        }
    }
}


$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");