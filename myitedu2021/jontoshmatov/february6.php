<?php
$text = file_get_contents("client_file");
//String
//Integer
//Boolean
//NULL
//Array
//Float or Double or Real Numbers
//Object
//Resources
//strtolower();
//strtoupper();
//strlen
//str_replace
//str_ireplace
//str_split
//addcslashes
//chop or rtrim
//ltrim and rtrim
//chunk_split
//explode
//lcfirst and ucfirst  make the first char either lower or upper case
//str_pad
//str_repeat
//substr
//strpos
//str_word_count
$result = str_replace("jackass","jack***", $text);
$result = str_replace("phackyou","phack***",$result);
echo "<pre>";
print_r($result);
echo "</pre>";

