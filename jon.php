<?php
function string_int($txt) {
    return (int) $txt;
}

$result = string_int(false);


echo "<pre>";
var_dump($result);

echo "<hr>";

echo gettype($result);