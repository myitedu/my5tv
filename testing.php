<?php
$input = '2021-05-20';
$pattern = "#([0-9]{4}-[0-9]{2}-[0-9]{2})#";
$result = preg_match($pattern, $input, $date);

echo "<pre>";
print_r($date[0]);