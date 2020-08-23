<?php



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);
$arr = [];

$count = 0;
for ($N_itr = 0; $N_itr < $N; $N_itr++) {
    fscanf($stdin, "%[^\n]", $firstNameEmailID_temp);
    $firstNameEmailID = explode(' ', $firstNameEmailID_temp);

    $firstName = $firstNameEmailID[0];

    $emailID = $firstNameEmailID[1];


    $email = explode('@', $emailID);

    if($email[1] == 'gmail.com'){
        $arr[$count] = $firstName;
        $count++;
    }
}

sort($arr);
for($i=0; $i< count($arr); $i++){
    echo $arr[$i]."\n";
}
fclose($stdin);
