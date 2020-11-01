<?php
$arr = [1, 1, 2, 1, 5, 4, 7];
$el = 70;


$jon = (array_search($el, $arr)===false)?false:true;

var_dump($jon);