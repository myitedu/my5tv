<?php
$car = "Audi";
const HP = 250;
$engine = "V12";
$yurish = drive('Alfa Romeo', 'V8');
echo $yurish;
const COLOR="Purple";


function drive($car='Nexia', $engine){



    if (HP > 400){
        return "This is a sports car with $engine";
    }else{
        return "This is a regular car $engine";
    }
    return "$car is driving.";
}

echo "<hr>".COLOR."<hr>";