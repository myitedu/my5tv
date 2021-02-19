<?php
$texts = file('ipsum.txt');

foreach ($texts as $text){

    $found = strpos($text, 'Lorem');
    if ($found!==false){
        echo "FOUND: $text";
        echo "<hr>";
    }



}