<?php
/*
$maxnumber = 332;
$mynumber = 99;
for ($i=0; $i<$maxnumber; $i++){
    if ($i>$mynumber){
        echo "$i: The number is greater than $mynumber <br>";
    }else{
        echo "$i: The number is less than $mynumber <br>";
    }
}
*/

$maxnumbers = range(  0,332);
$mynumber =   99;
foreach (  $maxnumbers as   $maxnumber){
    if ($maxnumber>$mynumber){
        echo "   $maxnumber: The number is greater than $mynumber <br>";
    }else{
        echo " $maxnumber: The number is less than $mynumber <br>";
    }
}