<?php

//For Loop
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

//While  Loop