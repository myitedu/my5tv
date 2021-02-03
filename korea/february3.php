<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//Data Type
/*
 * Interger - to'liq sonlar -1000000 to 1000000
 * String - series of mixed characters Letters, numbers, charachters
 * Boolean - TRUE or FALSE
 * ARRAYS - series of information can be named with one variable
 * NULL - NULL qiymatli data type
 * Float - Double - real numbers - 10.5, $5.25 3.1433333
 * Object - Class, Interface, Abstract Class, method, private, protected, public, static..
 * Resources - Database connection, file connection, cache, session ulanadigan aloqalar etc.
 */
$name = "It is a long established fact that a reader will be distracted by the readable content of a page when 
looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of 
letters,";
//$name = strtolower($name); // lower and upper case
//$name = str_replace("@","#",$name,$total);//Find and replace
//$name = str_ireplace("jon", "***", $name, $total);
//$name = str_pad($name,"4","*");
//$name = str_shuffle($name);
//$name = strip_tags($name);
//$name = str_word_count($name,1,'#');
//$name = addcslashes($name,"/");
//$name = chop($name,"#");
//$name = trim($name,"#");
//$name = chunk_split($name,4);
//$name = count_chars($name);
//$name = str_replace(" ","", $name);
//$name = explode(",",$name);
//$name = lcfirst($name);
//$name = ucfirst($name);
//$name = str_split($name,10);
//$name = ucwords($name);
$name = wordwrap($name,50,"<br>");
echo "<pre>";
print_r($name);
echo "</pre>";
?>
</body>
</html>

