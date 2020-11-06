<?php
$text = "Toshmatov";
//Repeat the string n times
//echo str_repeat($text."<hr>", 10);
//String shuffle
//echo str_shuffle($text);
//count words in string
//echo str_word_count($text);
//Split the string
//$result = str_split($text, 2);
//echo "<pre>";
//print_r($result);
//Strip HTML tags in PHP text
/*
$html = "<div class='apple'>Apple</div> ";
$html .= "<div class='orange'>Orange</div> ";
$html .= "<div class='banana'>Banana</div> ";

echo strip_tags($html);
?>
<style>
    .apple{
        background-color: darkred;
        color: white;
    }
    .orange{
        background-color: #a77e2a;
        color: white;
    }
    .banana{
        background-color: #bca5a5;
        color: white;
    }
</style>
*/
//Make strings upper case
//Make strings lower case
//echo strtoupper($text);
//Make first char upper case
//Make first char lower case
echo lcfirst($text);