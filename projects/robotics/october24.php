<?php
$text = 'John';
$text2 = 'oJnh';

$oxshash_sozlar = similar_text($text2, $text);

echo "<pre>";

var_dump($oxshash_sozlar);

