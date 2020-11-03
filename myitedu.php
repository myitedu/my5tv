<<<<<<< HEAD
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
<div>
    ksjdhfsdhfsfs
    dfs
    df
    sd
    f
</div>
</body>
</html>
=======
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
>>>>>>> dd8690d95a59c87b72c5cca79ed0981633e092af
