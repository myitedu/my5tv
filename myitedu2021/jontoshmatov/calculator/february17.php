<?php
$text = file_get_contents("lorem.txt");
$newtext = str_replace('Lorem','TOSHMATOV', $text);
$newtext2 = wordwrap($newtext,100,"<hr>");
file_put_contents('lorem2.txt', $newtext2);
echo "Good";
