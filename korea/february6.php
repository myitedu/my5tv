<?php
//Create a PHP file
//Create a new array and call it cars
//Add your favorite cars to the array
//display them in the browsers by seperating each car with ;

$cars = ['audi','alfa romeo','bmw','mercedes','volvo','toyota','honda','nissan','huyndai'];
$cars2 = ['nexia','chevy captiva','gm traverse','cobalt','jiguli'];
$prices = [1.24, 1.45, 0.65, 1.87];

$students = ['Jasurbek','Azamatjon','Abror','Javohir','Bahodir','Mirzokhid','Shavkat','Sarvar','Sardor','Jon'];

//$result = array_reverse($cars);
//$result = array_flip($cars);
//$result = array_sum($prices);
//$result = array_merge($cars, $cars2);
//$result = array_slice($cars,1); //kesish degani
//$result = array_chunk($cars,2);
$tavvakal= array_rand($students);
$result = $tavvakal.") ".$students[$tavvakal];

if ($tavvakal == 4){
    echo "<hr>WOHOOO, Bahopdir yutdi!<hr>";
}

if ($tavvakal == 0){
    echo "<hr>WOHOOO, Jasurbek yutdi!<hr>";
}


if ($tavvakal == 2){
    echo "<hr>WOHOOO, Abror yutdi!<hr>";
}


echo "<pre>";
print_r($result);
echo "</pre>";