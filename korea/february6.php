<?php
//Create a PHP file
//Create a new array and call it cars
//Add your favorite cars to the array
//display them in the browsers by seperating each car with ;

$cars = ['audi','alfa romeo','bmw','mercedes','volvo','toyota','honda','nissan','huyndai'];
$cars2 = ['nexia','chevy captiva','gm traverse','cobalt','jiguli'];
$prices = [1.24, 1.45, 0.65, 1.87];

$students = ['Jasurbek','Azamatjon','Abror','Javohir','Bahodir','Mirzokhid','Shavkat','Sarvar','Sardor','Jon'];

$persons = [
    [
        'name' => 'Jon',
        'country' => 'USA'
    ],
    [
        'name' => 'Zarina',
        'country' => 'Uzbekistan'
    ],
    [
        'name' => 'Temur',
        'country' => 'Russia'
    ],
];

//$result = array_reverse($cars);
//$result = array_flip($cars);
//$result = array_sum($prices);
//$result = array_merge($cars, $cars2);
//$result = array_slice($cars,1); //kesish degani
//$result = array_chunk($cars,2);
//$tavvakal= array_rand($students);
//$result = $tavvakal.") ".$students[$tavvakal];
 //$result = array_search('huyndai',$cars);
//$result = $cars[2];

//$result = array_column($persons,"country");
$result = array_
sort($result);


echo "<pre>";
print_r($result);
echo "</pre>";