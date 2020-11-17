<?php
$first_name = $_POST['first_name']??null;
$first_name = strtolower($first_name);

if ($first_name == 'jon'){
    echo "You can come inside";
}elseif ($first_name == 'bakhtyor'){
    echo "You can come inside";
}elseif ($first_name == 'jessica'){
    echo "You can come inside";
}else{
    echo "I am sorry, I do not know you";
}

echo "<hr>";
$first_name = ucfirst($first_name);
echo "Your name is $first_name";


