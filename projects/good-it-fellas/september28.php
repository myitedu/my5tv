<?php
$text = "Jon Toshmatov";
$result = str_getcsv($text," ");
echo "<pre>";
var_dump($result);