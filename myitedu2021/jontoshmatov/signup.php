<?php
/*
$inputs = $_POST ?? null;
$validated = false;
$email = $inputs['email'] ?? null;
$age = $inputs['age'] ?? null;
*/

$cars = ['Audi','BMW','GMC','Honda','Mercedes','Toyota'];


//tiger, lion, elephant, zebra, volves
//eat, hunt, play, sleep

foreach ($cars as $car){
    echo drive_car($car)."<hr>";

}


function drive_car($car){
    echo park_car($car);
    return "$car is driving.";
}


function stop_car($car){
    return "$car is breaking | ";
}

function park_car($car){
    echo backup_car($car);
    return "$car is parking | ";
}

function backup_car($car){
    echo stop_car($car);
    return "$car is backing up | ";
}



