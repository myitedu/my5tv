<?php
$number = 2;
$number2 = 4;

$c = $number <=> $number2;


if ($number<=$number2){
    echo "-1";
}elseif($number===$number2){
    echo "0";
}elseif($number>$number2){
    echo "1";
}

