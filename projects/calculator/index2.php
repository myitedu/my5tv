<?php
$number1 = $_GET['number1']??5;
$operator = $_GET['operator']??'+';
$number2 = $_GET['number2']??5;

$result = eval("return ".$number1." $operator ".$number2."  ;");


echo $result;