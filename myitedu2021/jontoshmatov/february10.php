<?php
//For Loop
/*
for($i=1; $i<=100; $i++){
    if (find_even_numbers($i)){
        echo "Even:  $i <hr>";
    }else{
        echo "$i <hr>";
    }
}

function find_even_numbers($number){
    return ($number % 2 === 0); //Boolean TRUE or FALSE;
}
*/
//While  Loop
/*
$i = 1;
while ($i < 100){
    if (find_even_numbers($i)){
        echo "Even:  $i <hr>";
    }else{
        echo "$i <hr>";
    }
    $i++;
}
function find_even_numbers($number){
    return ($number % 2 === 0); //Boolean TRUE or FALSE;
}
*/
//Do While Loop
/*
$i = 200;

do {
    if (find_even_numbers($i)){
        echo "Even:  $i <hr>";
    }else{
        echo "$i <hr>";
    }
   $i++;
}while ($i<100);

function find_even_numbers($number){
    return ($number % 2 === 0); //Boolean TRUE or FALSE;
}
*/

$numbers = range(1,100);
/*
foreach ($numbers as $num=>$i){
    if (find_even_numbers($i)){
        echo "Even:  $i <hr>";
    }else{
        echo "$i <hr>";
    }
}*/

for ($i=1; $i<=count($numbers); $i++){


    if ($i>50){
        continue;
        echo "Shart 1: $i <hr>";

    }else{
        echo "$i<hr>";
    }

}


