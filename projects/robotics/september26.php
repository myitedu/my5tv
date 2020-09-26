<?php
$first_name = "Jon";
$age = 'Hello15';

$age = (int) $age;



echo gettype($age).": ".$age;
echo "<hr>";
//Option 1
echo __LINE__.": ";
if (gettype($age) == 'integer') {
    echo "The variable \$age is an integer";
} else {
    echo "The var \$age IS NOT AN INTEGER";
}
echo "<hr>";
echo "<hr>";
//Option 2
echo __LINE__.": ";
$is_number = (gettype($age) == 'integer');
if ($is_number) {
    echo "The variable \$age is an integer";
} else {
    echo "The var \$age IS NOT AN INTEGER";
}
echo "<hr>";
echo "<hr>";
//Option 3
echo __LINE__.": ";
if (is_int($age)){
    echo "The variable \$age is an integer";
}else{
    echo "The var \$age IS NOT AN INTEGER";
}
echo "<hr>";
echo "<hr>";
//Option 4
echo __LINE__.": ";

if (is_int($age)){
    echo "The variable \$age is a number";
}else{
    echo "The var \$age IS NOT AN INTEGER";
}


