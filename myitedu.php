<?php
$age = "25";

//Check to see if a variable exists or defined in the memory.

if (!isset($age)){
    //exit ("The \$age exists or defined");
}

//Check if the variable is an integer or not

//Option 1

if (gettype($age) != 'integer'){
    //exit ("The \$age is not an integer");
}
//echo "\$age is an integer";

//Option 2
if (!is_int($age)){
    //exit ("The \$age is not an integer");
}
//echo "\$age is an integer";

//Option 3 but it only validates the value to make sure it is a number
if (is_numeric($age)){
    echo "\$age is a number";
}
